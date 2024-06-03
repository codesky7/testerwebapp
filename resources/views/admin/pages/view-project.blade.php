@extends('admin.layouts.app')
@section('title', 'View Project')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/photoswipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/photoswipe/default-skin/default-skin.css') }}">
    <style>

    </style>
@endsection

@section('content')
    <div class="project-container m-lg-5 justify-content-between ">
        <img src="https://workload.dexignlab.com/codeigniter/demo/public//assets/images/back1.jpg" alt=""
            class="project-banner">
        <div class="project-left">
            <h2>{{ $projectdetails->project_name }}</h2>
            <div class="progress mt-2" style="height:14px;">
                <div class="progress-bar bg-primary" style="width: 53%; "></div>
            </div>
            <div class="card-body small pt-2 pb-0">
                <strong>53%</strong> completed
            </div>
            <br>

            <div class="d-md-flex justify-content-between">
                <div class="">
                    <p>Created by Akash on {{ $projectdetails->start_date }}
                    </p>
                    <div class="workload-button">
                        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded"><i
                                class="fas fa-user-plus scale2 me-3"></i> Invite People</a>
                        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded"> Edit</a>
                    </div>
                </div>


                <div class="col-xl-3 mt-4 col-sm-6 d-lg-flex">
                    <div class="d-flex project-date-container m-2">
                        <span><i class="far fa-clock scale5 text-primary mt-2 me-3 mr-2"></i></span>
                        <div class="project-date">
                            <h4 class="large text-black"> Project Create</h4>
                            <span>{{ $projectdetails->start_date }}</span>
                        </div>
                    </div>

                    <div class="d-flex project-date-container m-2">
                        <span><i class="far fa-clock scale5 text-primary mt-2 me-3 mr-2"></i></span>
                        <div class="project-date">
                            <h4 class="large text-black">
                                Deadline</h4>
                            <span>{{ $projectdetails->deadline }}</span>
                        </div>
                    </div>

                </div>


            </div>

            <div class="project-right">
                <div class="card-body py-3">
                    <div class="tx-gray-500 small mb-2">Team Member</div>
                    <div class="d-flex flex-wrap team-avatar">

                        @foreach ($projectdetails->users as $user)
                            <a href="" class="d-block mr-1 mb-1"><img src="//assets/images/users-face/1.png"
                                    alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top"
                                    title="" data-original-title="{{ $user->fname . ' ' . $user->lname }}"></a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


        <div class="page-inner chat-inner ht-100v pd-0-force">
            <!--================================-->
            <!-- Chat Room Start -->
            <!--================================-->
            <!-- Start of Sidebar -->

            <!-- End of Sidebar -->
            <!-- Start of Chat Body -->
            <div class="chat-body">

                <div class="chat-content-body">
                    <!-- Start of Chat Room -->

                    <div class="chat-section content">
                        @foreach ($projectdetails->project_chats as $message)
                            @if ($message->user_id == Auth::id())
                                <!-- Message sent by the user -->
                                <div class="media mb-3">
                                    <div class="avatar mr-2"><img src="/assets/images/users-face/1.png"
                                            class="rounded-circle" alt=""></div>
                                    <div class="media-body">
                                        <h5 class="mt-0"><a href="#"
                                                class="text-dark">{{ $message->user->fname . ' ' . $message->user->lname }}</a>
                                        </h5>
                                        <p class="mb-0">{{ $message->message }}</p>
                                        @if ($message->screenshot)
                                            <div id="screenshot" class="row" itemscope
                                                itemtype="http://schema.org/ImageGallery">
                                                <figure itemprop="associatedMedia" itemscope
                                                    itemtype="http://schema.org/ImageObject" class="col-sm-3">
                                                    <a href="{{ asset('/storage/' . $message->screenshot) }}"
                                                        itemprop="contentUrl" data-size="1920x1280">
                                                        <img src="{{ asset('/storage/' . $message->screenshot) }}"
                                                            itemprop="thumbnail" alt="Screenshots" class="img-fluid">
                                                    </a>
                                                </figure>
                                            </div>
                                        @endif
                                        <span class="small text-muted">{{ $message->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            @else
                                <!-- Message received from another user -->
                                <div class="media mb-3">
                                    <div class="media-body text-right">
                                        <h5 class="mt-0"><a href="#"
                                                class="text-dark">{{ $message->user->fname . ' ' . $message->user->lname }}</a>
                                        </h5>
                                        <p class="mb-0">{{ $message->message }}</p>
                                        @if ($message->screenshot)
                                            <div id="screenshot" class="row" itemscope
                                                itemtype="http://schema.org/ImageGallery">
                                                <figure itemprop="associatedMedia" itemscope
                                                    itemtype="http://schema.org/ImageObject" class="col-sm-3">
                                                    <a href="{{ asset('/storage/' . $message->screenshot) }}"
                                                        itemprop="contentUrl" data-size="1920x1280">
                                                        <img src="{{ asset('/storage/' . $message->screenshot) }}"
                                                            itemprop="thumbnail" alt="Screenshots" class="img-fluid">
                                                    </a>
                                                </figure>
                                            </div>
                                        @endif
                                        <span class="small text-muted">{{ $message->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div class="avatar ml-2"><img src="/assets/images/users-face/2.png"
                                            class="rounded-circle" alt=""></div>
                                </div>
                            @endif
                        @endforeach
                    </div>



                </div>
                <form action="{{ route('send-message', $projectdetails->id) }}" method="POST"
                    class="chat-content-bottom d-flex" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="chat-footer-icon d-flex">
                        <button class="uploadbtn">
                            <i class="fa-solid fa-upload"></i>Upload Screenshots
                            <input type="file" class="" name="screenshot" />
                        </button>

                    </div>
                    <div class="chat-footer-message d-flex justify-content-between">
                        <input type="text" class="form-control align-self-center bd-0" placeholder="Message"
                            name="message">

                        <button type="submit" href="" data-toggle="tooltip" title=""
                            data-original-title="Send Message" class="send-btn">
                            <i class="wd-20 ht-20" data-feather="send"></i>
                        </button>

                    </div>
                </form>
            </div>
            <!-- End of Chat Body -->
            <!--================================-->
            <!-- Following People Modal Start -->
            <!--================================-->


        </div>


    </div>

@endsection

@section('js')

    <script>
        $(function() {
            'use strict'

            // chat sidebar body scrollbar
            new PerfectScrollbar('.sidebar-body', {
                suppressScrollX: true
            });

            // chat content body scrollbar
            new PerfectScrollbar('.chat-content-body', {
                suppressScrollX: true
            });

        })
    </script>
@endsection
