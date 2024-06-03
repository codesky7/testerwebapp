@extends('admin.layouts.app')
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
                        <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">
                            <i class="icon ion-ios-home-outline"></i> Dashboard
                        </a>
                        <span class="breadcrumb-item active">Projects</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Projects List Start -->
        <div class="container">
            <div class="list-group">
                @foreach ($allProjects as $project)
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><a href="{{ route('admin.project', $project->id) }}">{{ $project->project_name }}</a></h5>
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
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $project->id }}">
                                <a href="{{ route('admin.project', $project->id) }}" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i> View Details</a>
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
                            <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
                              <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
                          </a>
                          <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
                           <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
                       </a>
                       <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
                        <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
                    </a>
                    <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
                     <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
                 </a>
                 <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
                  <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
              </a>
              <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
               <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
           </a>
           <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
            <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
        </a>
        <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
         <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
     </a>
     <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
      <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
  </a>
  <a href="#" class="d-block mr-1" data-toggle="tooltip" data-placement="top" title="{{ $user->fname }}">
   <img src="/assets/images/users-face/1.png" alt="{{ $user->name }}" class="wd-30 rounded-circle">
</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Projects List End -->
    </div>
    <!-- Main Wrapper End -->
</div>
@endsection

@section('js')
<script>
   feather.replace();
</script>

@endsection