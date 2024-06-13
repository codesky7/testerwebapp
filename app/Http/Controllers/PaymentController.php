<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Account;
use Srmklive\PayPal\Services\PayPal as PaypalClient;
class PaymentController extends Controller
{


    // Stripe  
    public function stripeCheckout(Request $request)
    {
        // Save necessary data in the session
        session([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,  // Assuming 'phone' instead of 'testing_url'
            'note' => $request->note,
            'product' => $request->product,  // Assuming product information is passed
            'price' => $request->price  // Assuming price information is passed
        ]);

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $redirectUrl = route('success.checkout') . '?session_id={CHECKOUT_SESSION_ID}';
        
        $response = $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'cancel_url' => route('home'),  // Adding a cancel URL for better UX
            'customer_email' => $request->email,
            'payment_method_types' => ['link', 'card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'USD',
                    'unit_amount' => 100 * session('price'),
                    'product_data' => [
                        'name' => session('product'),
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'allow_promotion_codes' => true,
        ]);

        return redirect($response['url']);
    }

    public function successStripeCheckout(Request $request)
    {
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $response = $stripe->checkout->sessions->retrieve($request->session_id);

        $project = Projects::create([
            'project_name' => session('fname') . ' ' . session('lname') . ' ' . session('product') . ' Project',
            'start_date' => now(),
            'note' => session('note', 'No note provided'),
            'completion_percent' => 0,
            'project_budget' => session('price'),
            'status' => 0,
        ]);
        $useridd =3;
        $client_idd = auth()->id();
        $project->users()->sync($useridd);
        $project->clients()->sync($client_idd);

        // Clear session data after successful creation
        // session()->forget(['fname', 'lname', 'email', 'phone', 'note', 'product', 'price']);

        return redirect()->route('home')->with('success', 'Payment Successful');
    }

    public function cancelStripeCheckout()
    {
        // Handle the cancellation of the checkout process here
        return redirect()->route('home')->with('error', 'Payment Cancelled');
    }

    // paypal 

    // public function paypalCheckout(Request $request)
    // {
    //     $provider = new \Srmklive\PayPal\Services\PayPal;
    //     $provider->setApiCredentials(config('paypal'));
    //     $provider->getAccessToken();
    
    //     $response = $provider->createOrder([
    //         'intent' => 'CAPTURE',
    //         'application_context' => [
    //             'return_url' => route('success.checkout'),
            
    //         ],
    //         'purchase_units' => [
    //             [
    //                 'amount' => [
    //                     'currency_code' => 'USD',
    //                     'value' => $request->price,
    //                 ],
    //                 'description' => $request->product,
    //             ]
    //         ]
    //     ]);
    
    //     if (isset($response['id'])) {
    //         foreach ($response['links'] as $link) {
    //             if ($link['rel'] === 'approve') {
    //                 return redirect()->route('home')->with('success','Payment Success');
    //             }
    //         }
    //     }
    
    //     return redirect()->route('paypal.cancel')->with('error', 'Something went wrong.');
    // }
    
}
