<div class="page-sidebar">
   <div class="logo">
   <a class="logo-img" href="{{route('client.dashboard')}}">		
      <img class="desktop-logo" src="/assets/images/logo.png" alt="">
      <img class="small-logo" src="/assets/images/small-logo.png" alt="">
      </a>			
      <a id="sidebar-toggle-button-close"><i class="wd-20" data-feather="x"></i> </a>
   </div>
   <!--================================-->
   <!-- Sidebar Menu Start -->
   <!--================================-->
   <div class="page-sidebar-inner">
      <div class="page-sidebar-menu">
         <ul class="accordion-menu">
            <li class="mg-l-20-force mg-t-25-force menu-navigation">Navigation</li>
            <li class="open active">
               <a href=""><i data-feather="home"></i>
               <span>Dashboard</span><i class="accordion-icon fa fa-angle-left"></i></a>
               <ul class="sub-menu" style="display: block;">
                  <!-- Active Page -->
        
                  <li><a href="index4.html">Helpdesk</a></li>
                  <li><a href="{{route('client.projects')}}">Project</a></li>
               </ul>
            </li>


            <li>
               <a href=""><i data-feather="mail"></i>
               <span>Projects</span><i class="accordion-icon fa fa-angle-left"></i></a>
               <ul class="sub-menu">
                  <li><a href="{{route('client.projects')}}">View Project</a></li>
                  
                 
               </ul>
            </li>

           

       




            <li class="mg-l-20-force mg-t-25-force menu-others">Others</li>
            <li>
               <a href="../documentation/documentation.html"><i data-feather="life-buoy"></i>
               <span>Documentation</span></a>
            </li>
            <li>
               <a href="../documentation/changelog.html"><i data-feather="coffee"></i>
               <span>Changelog</span></a>
            </li>
         </ul>
      </div>
   </div>
   <!--/ Sidebar Menu End -->
   <!--================================-->
   <!-- Sidebar Footer Start -->
   <!--================================-->
   <div class="sidebar-footer">									
      <a class="pull-left" href="{{route('client.profile')}}" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
      <i data-feather="user" class="wd-16"></i></a>									
      <a class="pull-left " href="mailbox.html" data-toggle="tooltip" data-placement="top" data-original-title="Mailbox">
      <i data-feather="mail" class="wd-16"></i></a>
      <a class="pull-left" href="aut-unlock.html" data-toggle="tooltip" data-placement="top" data-original-title="Lockscreen">
      <i data-feather="lock" class="wd-16"></i></a>
      <a class="pull-left" href="{{route('adminlogout')}}" data-toggle="tooltip" data-placement="top" data-original-title="Sing Out">
      <i data-feather="log-out" class="wd-16"></i></a>
   </div>
   <!--/ Sidebar Footer End -->
</div>