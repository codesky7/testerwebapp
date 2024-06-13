@extends('client.layouts.app')
@section('title','Plans')
@section('css')
<link rel="stylesheet" href="/frontend/assets/css/custom.css">
@endsection
@section('content')
<div class="pricing6 py-5 bg-light" id="services">
    <div class="container" > 
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3 class="mb-3">OUR PLANS </h3>
          <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
          @if (Session('success'))
          <div class="alert alert-primary" role="alert">
            {{Session('success')}}
          </div>
          @endif
        </div>
      </div>
      <!-- row  -->
      <div class="row mt-4">
        <!-- column  -->
        <div class="col-md-6">
          <div class="card card-shadow border-0 mb-4">
            <div class="card-body p-4">
              <div class="d-flex align-items-center">
                <h5 class="font-weight-medium mb-0">Basic Jumpstart Testing </h5>
              
              </div>
              <div class="row">
                <div class="col-lg-5 text-center">
                  <div class="price-box my-3">
                    <sup>$</sup><span class="text-dark display-5">20</span>
                    <h6 class="font-weight-light">14 Days</h6>
                   @guest

                   <a  class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>20,'product' => 'Basic Jumpstart Testing'])}}">CHOOSE PLAN </a>
                   @endguest
                   @auth
                   <a  class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>20,'product' => 'Basic Jumpstart Testing'])}}">CHOOSE PLAN </a>
                   @endauth
                  </div>
                </div>
                <div class="col-lg-7 align-self-center">
                  <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>10 Testers</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>5 pages tested</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>2 minutes </span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
            <div class="card card-shadow border-0 mb-4">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <h5 class="font-weight-medium mb-0">Standard Jumpstart Testing </h5>
                
                </div>
                <div class="row">
                  <div class="col-lg-5 text-center">
                    <div class="price-box my-3">
                      <sup>$</sup><span class="text-dark display-5">35</span>
                      <h6 class="font-weight-light">14 Days</h6>
                    @guest
                    <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                    @endguest
                    @auth
                    <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                    @endauth
                    </div>
                  </div>
                  <div class="col-lg-7 align-self-center">
                    <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>15 Testers</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>8 pages tested</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>3 minutes </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- column  -->
        <div class="col-md-6">
            <div class="card card-shadow border-0 mb-4">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <h5 class="font-weight-medium mb-0">Deep Dive Testing </h5>
                  <div class="ml-auto"><span class="badge badge-danger font-weight-normal p-2">Popular</span></div>
                </div>
                <div class="row">
                  <div class="col-lg-5 text-center">
                    <div class="price-box my-3">
                      <sup>$</sup><span class="text-dark display-5">50</span>
                      <h6 class="font-weight-light">14 Days</h6>
                     @guest()
                     <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                     @endguest
                     @auth
                     <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>50,'product' => 'Deep Dive Testing'])}}">CHOOSE PLAN </a>
                     @endauth
                    </div>
                  </div>
                  <div class="col-lg-7 align-self-center">
                    <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>20 Testers</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>12 pages tested</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>5 minutes </span></li>
                        
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- column  -->
        <div class="col-md-6">
          <div class="card card-shadow border-0 mb-4">
            <div class="card-body p-4">
              <div class="d-flex align-items-center">
                <h5 class="font-medium m-b-0">Full-Service Launch</h5>
              </div>
              <div class="row">
                <div class="col-lg-5 text-center">
                  <div class="price-box my-3">
                    <sup>$</sup><span class="text-dark display-5">150</span>
                    <h6 class="font-weight-light">YEARLY</h6>
                    @guest
                    <a class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3" href="{{route('registration',['price'=>150,'product' => 'Full-Service Launch'])}}">CHOOSE PLAN </a>
                    @endguest
                    @auth
                    <a class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3" href="{{route('client.checkoutView',['price'=>150,'product' => 'Full-Service Launch'])}}">CHOOSE PLAN </a>
                    @endauth
                  </div>
                </div>
                <div class="col-lg-7 align-self-center">
                  <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>20+ Testers</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Test mobile </span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>12 pages tested</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Every day Screenshot Proof</span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>5 minutes </span></li>
                    <li class="py-2"><i class="icon-check text-info mr-2"></i> <span> Publishing guaranteed</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- column  -->
      </div>
    </div>
  </div>
@endsection