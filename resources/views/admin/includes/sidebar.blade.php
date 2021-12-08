<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> <span>Main</span>
                </li>
                <li class="{{ Route::currentRouteName()=='dashboard'?'active':'' }}"> <a href="{{route('dashboard')}}"><i class="feather-home"></i><span class="shape1"></span><span class="shape2"></span><span>Dashboard</span></a>
                </li>
                <li class="submenu {{ Route::currentRouteName()=='user-list' ||  Route::currentRouteName()=='user-report'  ||  Route::currentRouteName()=='user-transactions' ?'active':''}}">
                        <a href="#" class="{{ Route::currentRouteName()=='user-list' ||  Route::currentRouteName()=='user-report' ||  Route::currentRouteName()=='user-transactions' ?'active':''}}"><i class="feather-user "></i> <span>Users</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('user-list')}}" class="{{ Route::currentRouteName()=='user-list'?'active':'' }}">Users List</a></li>
                        <li><a href="{{route('user-report')}}" class="{{ Route::currentRouteName()=='user-report'?'active':'' }}">User Report</a></li>
                        <li><a href="{{route('user-transactions')}}" class="{{ Route::currentRouteName()=='user-transactions'?'active':'' }}">Transactions</a></li>
                    </ul>
                </li>
                
               
                <li class="submenu">
                        <a href="#" class=""><i class="feather-book"></i> <span>Reports</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="">Users Reports</a></li>
                        <li><a href="">Active User Report</a></li>
                        <li><a href="">Inactive User Report</a></li>
                        <li><a href="">Transactions Report</a></li>
                        <li><a href="">Search Report</a></li>
                    </ul>
                </li>
                
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li class="{{ Route::currentRouteName()=='user-profile' ||  Route::currentRouteName()=='user-tax' ||  Route::currentRouteName()=='change-password' ||  Route::currentRouteName()=='admin-notification'?'active':'' }}">
                    <a href="{{route('user-profile')}}"><i class="feather-user-plus"></i> <span>Profile</span></a>
                </li>
                
            </ul>
        </div>
    </div>
</div>