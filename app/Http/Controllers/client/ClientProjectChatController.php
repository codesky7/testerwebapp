<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\ProjectChat;
use Illuminate\Http\Request;

class ClientProjectChatController extends Controller
{
    public function sendMessage(Request $request, $projectId)
    {
  $request->validate([
    'message' => 'string',
    'project_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
  ]);

$ProjectChatData = [
    'project_id' => $projectId,
    'user_id' => auth()->id(),
    'message' => $request->message,
];

if($request->hasFile('screenshot'))
{
    $file = $request->file('screenshot')->store('images/project', 'public');
    $ProjectChatData['screenshot']= $file;
}

ProjectChat::create($ProjectChatData);


// $userId = auth()->id();

// $userCredit = TesterEarnings::firstOrNew(['tester_id' => $userId]);
// $userCredit->earning += 10;
// $userCredit->save();


return redirect()->back()->with('success', 'Message sent!');
    }
}