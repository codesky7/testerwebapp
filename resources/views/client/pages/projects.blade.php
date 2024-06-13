@extends('client.layouts.app')
@section('title', 'Project')

@section('content')
    <div class="page-inner">
        <!-- Main Wrapper -->
        <div id="main-wrapper">
            <!-- Breadcrumb Start -->
            <div class="pageheader pd-t-25 pd-b-35">
                <div class="d-flex justify-content-between">
                    <div class="clearfix">
                        <div class="pd-t-5 pd-b-5">
                            <h1 class="pd-0 mg-0 tx-20 tx-dark">Projects</h1>
                        </div>
                        <div class="breadcrumb pd-0 mg-0">
                            <a class="breadcrumb-item" href="{{ route('client.dashboard') }}">
                                <i class="icon ion-ios-home-outline"></i> Dashboard
                            </a>
                            <span class="breadcrumb-item active">Projects</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Projects List Start -->
            {{-- <div class="container">
            <div class="list-group">
                @foreach ($allProjects as $project)
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><a href="{{ route('client.project', $project->id) }}">{{ $project->project_name }}</a></h5>
                        <small>{{ $project->start_date }} - {{ $project->deadline }}</small>
                    </div>
                    <p class="mb-1">{{ Str::limit($project->description, 100) }}</p>
                    <small class="text-muted">
                        <span class="badge badge-outline-success">{{ $project->status }}</span>
                        <span class="ml-2">{{ $project->tasks_opened }} opened tasks, {{ $project->tasks_completed }} tasks completed</span>
                    </small>
                    <div class="d-flex justify-content-between align-items-center mt-2 flex-row-reverse">
                        <div class="dropdown">
                            <button class="btn btn-link p-0" type="button" id="dropdownMenuButton{{ $project->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-more"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton{{ $project->id }}" style="z-index: 1050;">
                                <a href="{{ route('client.project', $project->id) }}" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i> View Details</a>
                                <a href="#" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i> Share</a>
                                <a href="#" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i> Download</a>
                                <a href="#" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i> Copy to</a>
                                <a href="#" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i> Move to</a>
                                <a href="#" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i> Rename</a>
                                <a href="#" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i> Delete</a>
                            </div>
                        </div>
                        <div class="team-avatar d-flex overflow-auto overflow-md-scroll">
                            @foreach ($project->users as $user)
                            <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
                                <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> --}}
            <!-- Projects List End -->


            <div class="row clearfix">
                @foreach ($allProjects as $project)
                    <div class="col-xl-4">
                        <div class="card mg-b-30">
                            <div
                                class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                                <div>
                                    <a href="{{ route('client.project', $project->id) }}"
                                        class="text-body tx-20 tx-semibold">{{ $project->project_name }}</a>
                                    <span class="badge badge-outline-success align-text-bottom ml-1">Active</span>
                                    <div class="tx-gray-500 small mt-1">10 opened tasks, 5 tasks completed</div>
                                </div>
                                <div class="btn-group project-actions">
                                    <a class="dropdown" data-toggle="dropdown">
                                        <i class="ti-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('client.project', $project->id) }}" class="dropdown-item"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-info wd-16 mr-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                                <line x1="12" y1="8" x2="12" y2="8"></line>
                                            </svg>View Details</a>

                                          
                                        
                                              
                                    </div>
                                </div>
                            </div>
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-primary" style="width: 53%;"></div>
                            </div>
                            <div class="card-body small pt-2 pb-0">
                                <strong>53%</strong> completed
                            </div>
                            <div class="card-body pb-3 tx-gray-700 tx-12">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl.
                                Maecenas quis ultrices tellus.
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="tx-gray-500 small">Created</div>
                                        <div class="font-weight-bold">02/01/2019</div>
                                    </div>
                                    <div class="col">
                                        <div class="tx-gray-500 small">Deadline</div>
                                        <div class="font-weight-bold">03/12/2019</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="card-body py-3">
                                <div class="tx-gray-500 small mb-2">Team Member</div>
                                <div class="d-flex flex-wrap team-avatar">

                                    @foreach ($project->users as $staff)
                                        <a href="" class="d-block mr-1 mb-1"><img
                                                src="{{ asset('storage/' . $staff->profile_pic) }}" alt=""
                                                class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip"
                                                data-placement="top" title=""
                                                data-original-title="{{ $staff->fname }}"></a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



        </div>
        <!-- Main Wrapper End -->
    </div>
@endsection

@section('js')
    <script>
        @if (Session::has('succcess'))
toastr.success("{{session('succcess')}}")
@endif
        feather.replace();
    </script>

    <style>
        .dropdown-menu {
            z-index: 1050;
        }
    </style>
@endsection
