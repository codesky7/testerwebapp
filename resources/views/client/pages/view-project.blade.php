@extends('client.layouts.app')
@section('title', 'View Project')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/photoswipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/photoswipe/default-skin/default-skin.css') }}">
    <style>

    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="company-profile">
                            <img src="https://workload.dexignlab.com/codeigniter/demo/public/assets/images/back1.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row border-bottom pb-5">
                                <div class="col-xl-8 col-lg-9">
                                    <div>
                                        <h4 class="fs-32 font-w700">{{$projectdetails->project_name}}</h4>
                                        <span class="mb-2 d-block">Created by {{$projectdetails->fname}} on {{$projectdetails->start_date}}</span>
                                        <div class="workload-button">
                                            {{-- <a href="javascript:void(0);" class="btn btn-light btn-rounded">Private</a>
                                            <a href="javascript:void(0);" class="btn btn-light btn-rounded"><i class="far fa-envelope scale5 me-3 text-primary"></i>45 Comments</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-3 info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mamber d-flex flex-wrap team-avatar align-items-center mt-3">
                                                @if ($projectdetails->users->isNotEmpty())
                                                <h5 class="mr-2">clients <i class="fa-solid fa-arrow-right"></i> </h5>
                                                @foreach ($projectdetails->users as $staff)
                                                <a href="" class="d-block mr-1 mb-1"><img src="{{ asset('storage/' . $staff->profile_pic) }}" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ $staff->fname . ' ' . $staff->lname }}"></a>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mamber d-flex flex-wrap team-avatar align-items-center mt-3">
                                                @if ($projectdetails->clients->isNotEmpty())
                                                <h5 class="mr-2">Clients <i class="fa-solid fa-arrow-right"></i> </h5>
                                                @foreach ($projectdetails->clients as $staff)
                                                <a href="" class="d-block mr-1 mb-1"><img src="{{ asset('storage/' . $staff->profile_pic) }}" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ $staff->fname . ' ' . $staff->lname }}"></a>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-xl-3 mt-4 col-sm-6 ">
                                    <div class="d-flex project-date">
                                        <span><i class="far fa-clock scale5 text-primary mt-2 me-3"></i></span>
                                        <div>
                                            <h4 class="fs-18 font-w500 text-black">Project Create</h4>
                                            <span>{{$projectdetails->start_date}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-4 col-sm-6 ">
                                    <div class="d-flex project-date">
                                        <span><i class="far fa-clock scale5 text-primary mt-2 me-3"></i></span>
                                        <div>
                                            <h4 class="fs-18 font-w500 text-black">Deadline</h4>
                                            <span>{{$projectdetails->deadline}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 mt-4 col-sm-12">
                                    <div class="mb-3">
                                        <span class="fs-18 font-w500">Total Progress 60%</span>
                                    </div>
                                    <div class="progress default-progress1">
                                        <div class="progress-bar progress-animated" style="width: 40%; height:14px;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-description">
                                <span class="fs-18 font-w500 mb-3 d-block">PROJECT DESCRIPTION</span>
                                <p class="fs-18 font-w500">
                                    {!! $projectdetails->project_summary !!}
                                </p>
                            </div>
                            <div class="msg-button">
                                <button class="btn btns-primary text-white" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-paper-plane mr-2 text-white fs-18 rounded"></i>Submit Screenshot</button>
                            </div>
                            

                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Submit Screenshots</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <span>You have to submit screenshots in the test app everyday note: You have to submit difrent random screenshot of the app</span>
            <hr>
            <form action="{{ route('client.send-message', $projectdetails->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                          <!-- col-4 -->
          <div class="col-lg-5">
            <div class="form-group">
               <label class="form-control-label active">Upload the screenshot: <span class="tx-danger">*</span></label>
               <input class="form-control" type="file" name="screenshot" value="" placeholder="Upload the screenshot">
            </div>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Send a message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End model  --}}

  @foreach ($projectChats as $message)
  <div class="user-comment row border-bottom pb-3 align-items-center mt-4">
      <div class="col-lg-9">
          <div class="d-flex">
              <img src="{{ asset('storage/' . $message->user->profile_pic) }}" alt="" class="avatar">
              <div class="ms-3 ml-2">
                  <h4 class="fs-18 font-w600">
                    @if ($message->user->user_type == 0)
                    {{ $message->user->fname . ' ' . $message->lname }} <small>(Client)</small>
                    @endif
                    @if ($message->user->user_type == 1)
                    {{ $message->user->fname . ' ' . $message->lname }} <small>(Admin)</small>
                    @endif
                    @if ($message->user->user_type == 2)
                    {{ $message->user->fname . ' ' . $message->lname }} <small>(Tester)</small>
                    @endif
                
                </h4>
                  <span class="fs-16">{{ $message->message }} </span>
                  @if ($message->screenshot)
                      <div class="mt-2">
                          <a href="{{ asset('storage/' . $message->screenshot) }}" data-lightbox="screenshot-{{ $message->id }}" data-title="Screenshot by {{ $message->user->fname }}">
                              <img src="{{ asset('storage/' . $message->screenshot) }}" alt="" class="img-thumbnail" style="max-width: 200px;">
                          </a>
                      </div>
                  @endif
              </div>
              <span class="small text-muted">{{ $message->created_at->diffForHumans() }}</span>
          </div>
      </div>
      <div class="col-lg-3 d-flex justify-content-end">
      </div>
  </div>
@endforeach



<!-- Pagination -->
<div class="pagination justify-content-center">
    <ul class="pagination">
        <!-- Previous Page Link -->
        <li class="page-item {{ $projectChats->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $projectChats->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <!-- Pagination Elements -->
        @for ($i = 1; $i <= $projectChats->lastPage(); $i++)
            <li class="page-item {{ ($projectChats->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $projectChats->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        <!-- Next Page Link -->
        <li class="page-item {{ $projectChats->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $projectChats->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</div>



                     
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
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
