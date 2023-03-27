 <div class="vertical-menu">
     <div data-simplebar class="h-100">
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li>
                     <a href="index.html">
                         <i data-feather="home"></i>
                         <span data-key="t-dashboard">Dashboard</span>
                     </a>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow">
                         <i data-feather="file-text"></i>
                         <span data-key="t-pages">Pages</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                         <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                     </ul>
                 </li>

                  <li>
                     <a href="javascript: void(0);" class="has-arrow">
                         <i data-feather="user"></i>
                         <span data-key="t-pages">users</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('user.index') }}" data-key="t-starter-page">ALL user</a></li>
                         <li><a href="{{ route('user.create') }}" data-key="t-maintenance">Add users</a></li>
                     </ul>
                 </li>

             </ul>
         </div>
     </div>
 </div>
