@extends('tester.layouts.app')
@section('title', 'Project')

@section('content')
<div class="page-inner">
    <!-- Main Wrapper -->
    <div id="main-wrapper">
       <!--================================-->
       <!-- Breadcrumb Start -->
       <!--================================-->
       <div class="pageheader pd-t-25 pd-b-35">
          <div class="d-flex justify-content-between">
             <div class="clearfix">
                <div class="pd-t-5 pd-b-5">
                   <h1 class="pd-0 mg-0 tx-20 tx-dark">Projects</h1>
                </div>
                <div class="breadcrumb pd-0 mg-0">
                   <a class="breadcrumb-item" href="{{route('admin.dashboard')}}"><i class="icon ion-ios-home-outline"></i> Dashboard</a>
                  
                   <span class="breadcrumb-item active">Projects</span>
                </div>
             </div>
          </div>
       </div>
       <!--/ Breadcrumb End -->
       <!--================================-->
       <!-- Projects Start -->
       <!--================================-->
       <div class="row clearfix">

         @foreach ($allproject as  $project )
            
         

          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">{{ $project->project_name}}</a>
                      <span class="badge badge-outline-success align-text-bottom ml-1">{{$project->status}}</span>
                      <div class="tx-gray-500 small mt-1">10 opened tasks, 5 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-primary" style="width: 53%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>53%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                  {!! Str::limit($project->project_summary, 100)!!}
                </div>
                <div class="card-body pt-0">
                   <div class="row">
                      <div class="col">
                         <div class="tx-gray-500 small">Created</div>
                         <div class="font-weight-bold">{{$project->start_date}}</div>
                      </div>
                      <div class="col">
                         <div class="tx-gray-500 small">Deadline</div>
                         <div class="font-weight-bold">{{$project->deadline}}</div>
                      </div>
                   </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                   <div class="tx-gray-500 small mb-2">Team Member</div>
                   <div class="d-flex flex-wrap team-avatar">
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>

          @endforeach

          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">Backend Development</a>
                      <span class="badge badge-outline-warning align-text-bottom ml-1">Pending</span>
                      <div class="tx-gray-500 small mt-1">20 opened tasks, 14 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-danger" style="width: 83%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>83%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">UI-Kit Development</a>
                      <span class="badge badge-outline-success align-text-bottom ml-1">Active</span>
                      <div class="tx-gray-500 small mt-1">15 opened tasks, 24 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-warning" style="width: 69%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>69%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">Themes Development</a>
                      <span class="badge badge-outline-success align-text-bottom ml-1">Active</span>
                      <div class="tx-gray-500 small mt-1">32 opened tasks, 35 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-teal" style="width: 74%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>74%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">PDS Mouckup Desing</a>
                      <span class="badge badge-outline-success align-text-bottom ml-1">Active</span>
                      <div class="tx-gray-500 small mt-1">14 opened tasks, 14 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-indigo" style="width: 85%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>85%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">Plugins Development</a>
                      <span class="badge badge-outline-warning align-text-bottom ml-1">Pending</span>
                      <div class="tx-gray-500 small mt-1">20 opened tasks, 14 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-success" style="width: 88%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>88%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">SEO Audit Analysis</a>
                      <span class="badge badge-outline-success align-text-bottom ml-1">Active</span>
                      <div class="tx-gray-500 small mt-1">11 opened tasks, 24 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-purple" style="width: 65%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>65%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-xl-4">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">UI-Kit Development</a>
                      <span class="badge badge-outline-success align-text-bottom ml-1">Active</span>
                      <div class="tx-gray-500 small mt-1">15 opened tasks, 24 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-warning" style="width: 69%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>69%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-xl-4 hidden-md hidden-sm">
             <div class="card mg-b-30">
                <div class="card-body d-flex justify-content-between card-header d-flex align-items-center pb-3">
                   <div>
                      <a href="" class="text-body tx-20 tx-semibold">Backend Development</a>
                      <span class="badge badge-outline-warning align-text-bottom ml-1">Pending</span>
                      <div class="tx-gray-500 small mt-1">20 opened tasks, 14 tasks completed</div>
                   </div>
                   <div class="btn-group project-actions">
                      <a class="dropdown" data-toggle="dropdown">
                      <i class="ti-more"></i>
                      </a>
<div class="dropdown-menu dropdown-menu-right">
                                   <a href="" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                   <a href="" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                   <a href="" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                   <a href="" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                   <a href="" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                   <a href="" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                   <a href="" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                               </div>
                   </div>
                </div>
                <div class="progress" style="height: 3px;">
                   <div class="progress-bar bg-danger" style="width: 83%;"></div>
                </div>
                <div class="card-body small pt-2 pb-0">
                   <strong>83%</strong> completed
                </div>
                <div class="card-body pb-3 tx-gray-700">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac malesuada nisl. Maecenas quis ultrices tellus.
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
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/1.png" alt="" class="wd-30 rounded-circle" data-toggle="tooltip" data-placement="top" title="Amanda Warner"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/2.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Nelle Maxwell"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/3.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Kenneth Frazier"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/4.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Mae Gibson"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/5.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Arthur Duncan"></a>
                      <a href="" class="d-block mr-1 mb-1"><img src="/assets/images/users-face/6.png" alt="" class="wd-30 rounded-circle mg-l--10" data-toggle="tooltip" data-placement="top" title="Frazier Kenneth"></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--/ Projects End -->
    </div>
    <!--/ Main Wrapper End -->
 </div>
@endsection