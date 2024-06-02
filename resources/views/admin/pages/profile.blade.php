@extends('admin.layouts.app')
@section('title', 'Profile')

@section('content')

<div class="page-inner pd-0-force">
    <div class="bg-white mg-b-30">
       <div class="media col-md-10 col-lg-8 col-xl-7 pd-30 mx-auto">
          <img src="/assets//images/users-face/1.png" alt="" class="d-block rounded-circle hidden-xs">
          <div class="media-body ml-0 ml-md-5">
             <h4 class="tx-semibold"><!-- In any Blade view -->
               @if($loggedUser)
                   <p>{{ $loggedUser->fname . " " . $loggedUser->lname }}</p>
               @endif
               </h4>
             <p class="tx-gray-500"> {{ $user_detail->about }} <a href="">Read more</a>
             </p>
             <div class="d-flex mg-b-25">
                <button class="btn btn-default">Message</button>
                <button class="btn btn-primary mg-l-10">Follow</button>
             </div>
             <a href="" class="d-inline-block ">
             <strong>2,574</strong>
             <span >followers</span>
             </a>
             <a href="" class="d-inline-block  ml-3">
             <strong>1,254</strong>
             <span >following</span>
             </a>
          </div>
       </div>
       <hr class="m-0">
    </div>
    <div class="row clearfix mg-x-15-force">
       <div class="col">
          <!-- Info -->
          <div class="card mg-b-30">
             <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="tx-16 tx-semibold mg-b-0">Personal Information</h6>
                <nav class="nav nav-with-icon tx-13" >
                   <a href="" class="nav-link pd-0" data-toggle="modal" data-target="#exampleModalLong"><span data-feather="plus" class="wd-16"></span> Update Info</a>
                   <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
       </div>
      <div class="modal-body">
         <div class="card-body">
            <form action="" method="POST" class="form-layout form-layout-1">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label active">Profile Picture <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="profile_pic"  placeholder="Enter firstname">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label active">Firstname: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                     </div>
                  </div>
                  <!-- col-4 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label active">Lastname: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                     </div>
                  </div>
                  <!-- col-4 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label active">Email address: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                     </div>
                  </div>
                  <!-- col-4 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label active">Mail Address: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                     </div>
                  </div>

                                    <!-- col-4 -->
                                    <div class="col-lg-12">
                                       <div class="form-group mg-b-10-force">
                                          <label class="form-control-label active">Mail Address: <span class="tx-danger">*</span></label>
                                          <div class="clearfix">
                                             <input type="text" class="form-control hasDatepicker" placeholder="Choose date" id="datepicker4">
                                          </div>
                                       </div>
                                    </div>

                  <!-- col-8 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                        <select class="form-control select2 select2-hidden-accessible" data-placeholder="Choose country" tabindex="-1" aria-hidden="true">
                           <option label="Choose country"></option>
                           <option value="USA">United States of America</option>
                           <option value="UK">United Kingdom</option>
                           <option value="China">China</option>
                           <option value="Japan">Japan</option>
                        </select>
                     </div>
                  </div>
                  <!-- col-4 -->
               </div>
               <!-- row -->
               <div class="form-layout-footer">
                  <button class="btn btn-primary">Submit Form</button>
                  <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               </div>
               <!-- form-layout-footer -->
            </form>
         </div>
         
       </div>
      <div class="modal-footer">
         
       </div>
     </div>
   </div>
 </div>
                </nav>
             </div>




             
             <!-- card-header -->
             <div class="card-body">
                <h6 class="my-3">Personal</h6>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">First Name:</div>
                   <div class="col-md-9">{{ $loggedUser->fname }}</div>
                </div>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Last Name:</div>
                   <div class="col-md-9">{{  $loggedUser->lname }}</div>
                </div>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Birthday:</div>
                   <div class="col-md-9">May 3, 1995</div>
                </div>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Country:</div>
                   <div class="col-md-9">
                      <a href="" >{{ $user_detail->country }}</a>
                   </div>
                </div>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Languages:</div>
                   <div class="col-md-9">
                      <a href="" >{{ $user_detail->language }}</a>
                   </div>
                </div>
                <h6 class="my-3">Contacts</h6>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Email:</div>
                   <div class="col-md-9">{{ $loggedUser->email }}</div>
                </div>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Website:</div>
                   <div class="col-md-9">http://yourdomain.com</div>
                </div>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Phone:</div>
                   <div class="col-md-9"> {{ $user_detail->phone }}</div>
                </div>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Address:</div>
                   <div class="col-md-9">  </div>
                </div>
                <h6 class="my-3">Interests</h6>
                <div class="row mb-2">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Favorite music:</div>
                   <div class="col-md-9">
                      <a href="" >Rock</a>,
                      <a href="" >Alternative</a>,
                      <a href="" >Electro</a>,
                      <a href="" >Drum &amp; Bass</a>,
                      <a href="" >Dance</a>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-3 tx-gray-500 tx-semibold">Favorite movies:</div>
                   <div class="col-md-9">
                      <a href="" >The Green Mile</a>,
                      <a href="" >Pulp Fiction</a>,
                      <a href="" >Back to the Future</a>,
                      <a href="" >WALL E</a>,
                      <a href="" >Django Unchained</a>,
                      <a href="" >The Truman Show</a>,
                      <a href="" >Home Alone</a>,
                      <a href="" >Seven Pounds</a>
                   </div>
                </div>
             </div>
             <div class="card-footer text-center p-0">
                <div class="row no-gutters row-bordered row-border-light">
                   <a href="" class="d-flex col flex-column  py-3">
                      <div class="font-weight-bold">24</div>
                      <div class="text-muted small">posts</div>
                   </a>
                   <a href="" class="d-flex col flex-column  py-3 bd-l bd-r">
                      <div class="font-weight-bold">51</div>
                      <div class="text-muted small">videos</div>
                   </a>
                   <a href="" class="d-flex col flex-column  py-3">
                      <div class="font-weight-bold">215</div>
                      <div class="text-muted small">photos</div>
                   </a>
                </div>
             </div>
          </div>
          <!-- / Info -->
          <div class="card mg-b-30">
             <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="tx-16 tx-semibold mg-b-0">Work Experience</h6>
             </div>
             <!-- card-header -->
             <div class="card-body pd-25">
                <div class="media d-block d-flex mg-b-30">
                   <div class="wd-60 ht-60 bg-primary rounded d-flex align-items-center justify-content-center hidden-xs">
                      <span data-feather="briefcase" class="wd-30 ht-30 tx-gray-200"></span>
                   </div>
                   <div class="media-body pd-l-0 pd-sm-l-20">
                      <h5 class="tx-18 mg-b-5">Sr. Professor</h5>
                      <p class="mg-b-3">B. J. Arts College, Ahmedabad, India</p>
                      <span class="d-block tx-13 tx-gray-500">December 2016 - Present</span>
                   </div>
                </div>
                <!-- media -->
                <div class="media d-block d-flex">
                   <div class="wd-60 ht-60 bg-danger rounded d-flex align-items-center justify-content-center hidden-xs">
                      <span data-feather="briefcase" class="wd-30 ht-30 tx-gray-200"></span>
                   </div>
                   <div class="media-body pd-l-0 pd-sm-l-20">
                      <h5 class="tx-18 mg-b-5">Jr. Professor</h5>
                      <p class="mg-b-3"><span class="tx-medium tx-color-01"> B. J. Arts College</span>, Ahmedabad, India</p>
                      <span class="d-block tx-13 tx-gray-500">December 2014 - 2016</span>
                   </div>
                </div>
                <!-- media -->
             </div>
             <div class="card-footer bg-transparent">
                <nav class="nav nav-with-icon tx-13">
                   <a href="" class="nav-link pd-0"><span data-feather="plus" class="wd-16"></span> Add New Experience</a>
                </nav>
             </div>
             <!-- card-footer -->
          </div>
          <div class="card mg-b-30 mg-lg-b-25">
             <div class="card-header">
                <h6 class="tx-16 tx-semibold mg-b-0">Education</h6>
             </div>
             <!-- card-header -->
             <div class="card-body pd-25">
                <div class="media mg-b-30">
                   <div class="wd-60 ht-60 bg-primary rounded d-flex align-items-center justify-content-center hidden-xs">
                      <span data-feather="book-open" class="wd-30 ht-30 tx-gray-200"></span>
                   </div>
                   <div class="media-body pd-l-0 pd-sm-l-20">
                      <h5 class="tx-18 mg-b-5">BSc in Computer Science</h5>
                      <p class="mg-b-3">Gujarat University, Ahmedabad, India.</p>
                      <span class="d-block tx-12 tx-gray-500">2002-2006</span>
                   </div>
                </div>
                <!-- media -->
                <div class="media mg-b-30">
                   <div class="wd-60 ht-60 bg-danger rounded d-flex align-items-center justify-content-center hidden-xs">
                      <span data-feather="book-open" class="wd-30 ht-30 tx-gray-200"></span>
                   </div>
                   <div class="media-body pd-l-0 pd-sm-l-20">
                      <h5 class="tx-18 mg-b-5">MSc in Computer Science</h5>
                      <p class="mg-b-3">Gujarat University, Ahmedabad, India.</p>
                      <span class="d-block tx-12 tx-gray-500">2006-2008</span>
                   </div>
                </div>
                <!-- media -->
                <div class="media">
                   <div class="wd-60 ht-60 bg-success rounded d-flex align-items-center justify-content-center hidden-xs">
                      <span data-feather="award" class="wd-30 ht-30 tx-gray-200"></span>
                   </div>
                   <div class="media-body pd-l-0 pd-sm-l-20">
                      <h5 class="tx-18 tx-semibold mg-b-5">P.H.D in Computer Science</h5>
                      <p class="mg-b-3">Shaurashtra University, Rajkot, India.</p>
                      <span class="d-block tx-12 tx-gray-500">2008-2012</span>
                   </div>
                </div>
                <!-- media -->
             </div>
             <div class="card-footer bg-transparent">
                <nav class="nav nav-with-icon tx-13">
                   <a href="" class="nav-link pd-0"><span data-feather="plus" class="wd-16"></span> Add New Education</a>
                </nav>
             </div>
             <!-- card-footer -->
          </div>
       </div>
       <div class="col-xl-4">
          <!-- Skills -->
          <div class="card mg-b-30">
             <div class="card-header tx-16 tx-semibold">Skills</div>
             <div class="card-body">
                <div class="mb-1">HTML - <small >80%</small></div>
                <div class="progress mb-3" style="height: 4px;">
                   <div class="progress-bar bg-secondary" style="width: 80%;"></div>
                </div>
                <div class="mb-1">CSS - <small >95%</small></div>
                <div class="progress mb-3" style="height: 4px;">
                   <div class="progress-bar bg-success" style="width: 95%;"></div>
                </div>
                <div class="mb-1">Javascript - <small >90%</small></div>
                <div class="progress mb-3" style="height: 4px;">
                   <div class="progress-bar bg-warning" style="width: 90%;"></div>
                </div>
                <div class="mb-1">UI/UX - <small >80%</small></div>
                <div class="progress" style="height: 4px;">
                   <div class="progress-bar bg-danger" style="width: 80%;"></div>
                </div>
             </div>
             <a href="" class="card-footer d-block text-center  small tx-semibold">SHOW ALL SKILLS</a>
          </div>
          <!-- / Skills -->
          <!-- Friends -->
          <div class="card mg-b-30">
             <div class="card-header with-elements d-flex justify-content-between">
                <span class="tx-16 tx-semibold">Friends <small class="tx-gray-500">(591)</small></span>
                <div><a href="" class="text-body small tx-semibold tx-uppercase">Show All</a></div>
             </div>
             <div class="card-body">
                <ul class="list-unstyled media-list">
                   <li class="media align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-online"><img src="/assets//images/users-face/2.png" class="rounded-circle" alt=""><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Roy Recamadas</a></p>
                         <span class="tx-12 tx-gray-500">UI/UX Designer &amp; Developer</span>
                      </div>
                   </li>
                   <li class="media align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-offline"><img src="/assets//images/users-face/3.png" class="rounded-circle" alt=""><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Raymart Serencio</a></p>
                         <span class="tx-12 tx-gray-500">Full-Stack Developer</span>
                      </div>
                   </li>
                   <li class="media align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-primary">R</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Rolando Paloso Jr</a></p>
                         <span class="tx-12 tx-gray-500">Licensed Architect</span>
                      </div>
                   </li>
                   <li class="media align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-teal">R</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Robert Restificar</a></p>
                         <span class="tx-12 tx-gray-500">Business Analyst</span>
                      </div>
                   </li>
                   <li class="media align-items-center">
                      <a href="">
                         <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-gray-600">A</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Archie Cantones</a></p>
                         <span class="tx-12 tx-gray-500">Senior Software Architect</span>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
          <!-- / Friends -->
          <!-- Followers -->
          <div class="card mg-b-30">
             <div class="card-header with-elements d-flex justify-content-between">
                <span class="tx-16 tx-semibold">Followers <small class="tx-gray-500">(124)</small></span>
                <div><a href="" class="text-body small tx-semibold tx-uppercase">Show All</a></div>
             </div>
             <div class="card-body">
                <ul class="list-unstyled">
                   <li class="d-flex align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-gray-600">A</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Archie Cantones</a></p>
                         <span class="tx-12 tx-gray-500">Senior Software Architect</span>
                      </div>
                      <a href="#" class="btn btn-success ml-auto">Following</a>
                   </li>
                   <li class="d-flex align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-primary">H</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Holmes Cherryman</a></p>
                         <span class="tx-12 tx-gray-500">Human resources</span>
                      </div>
                      <a href="#" class="btn btn-success ml-auto">Following</a>
                   </li>
                   <li class="d-flex align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-danger">M</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Malanie Hanvey</a></p>
                         <span class="tx-12 tx-gray-500">Real estate agent</span>
                      </div>
                      <a href="#" class="btn btn-default ml-auto">Follow</a>
                   </li>
                   <li class="d-flex align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-teal">K</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Kenneth Hune</a></p>
                         <span class="tx-12 tx-gray-500">Engineer</span>
                      </div>
                      <a href="#" class="btn btn-success ml-auto">Following</a>
                   </li>
                   <li class="d-flex align-items-center mg-b-15">
                      <a href="">
                         <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-success">V</span><i></i></div>
                      </a>
                      <div class="media-body pd-l-15 lh-2">
                         <p class="tx-medium mg-b-2"><a href="">Valentine Maton</a></p>
                         <span class="tx-12 tx-gray-500">Engineer</span>
                      </div>
                      <a href="#" class="btn btn-success btn-sm ml-auto">Following</a>
                   </li>
                </ul>
             </div>
          </div>
          <!-- / Photos -->
          <!-- Photos -->
          <div class="card mg-b-30">
             <div class="card-header with-elements d-flex justify-content-between">
                <span class="tx-16 tx-semibold">Photos <small class="tx-gray-500">(245)</small></span>
                <div><a href="" class="text-body small tx-semibold tx-uppercase">Show All</a></div>
             </div>
             <div class="card-body">
                <div class="row no-gutters">
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/1.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/2.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/3.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/4.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/5.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/6.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/7.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/8.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                   <div class="col-4">
                      <a href="" class="d-block ht-100"><img src="/assets//images/gallery/9.jpg" class="img-fit-cover" alt=""></a>
                   </div>
                   <!-- col -->
                </div>
             </div>
          </div>
          <!-- / Photos -->
       </div>
    </div>
 </div>
    
@endsection