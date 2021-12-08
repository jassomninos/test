<div class="header">
    <div class="header-left">
        <a href="{{route('dashboard')}}" class="logo">
            <img src="{{asset('admin_assets/assets/img/logo.png')}}" alt="Logo">
        </a>
        <a href="{{route('dashboard')}}" class="logo logo-small">
            <img src="{{asset('admin_assets/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fas fa-bars"></i>
    </a>
    <div class="top-nav-search">
        <!-- <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fa fa-search"></i>
            </button>
        </form> -->
    </div>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow flag-nav mr-2">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                <img src="{{asset('admin_assets/assets/img/flags/us-1.png')}}" alt="" width="32" height="32" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('admin_assets/assets/img/flags/us.png')}}" alt="" height="16"> English
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('admin_assets/assets/img/flags/fr.png')}}" alt="" height="16"> French
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('admin_assets/assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('admin_assets/assets/img/flags/de.png')}}" alt="" height="16"> German
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link notifications-item">
                <i class="feather-bell"></i> <span class="badge badge-pill">3</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="" class="dropdown-toggle nav-link chat-header">
                <i class="feather-message-square"></i> <span class="badge badge-pill header-chat">6</span>
            </a>
        </li>
        <li class="nav-item dropdown has-arrow main-drop ml-md-3">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img src="{{asset('admin_assets/assets/img/avatar.jpg')}}" alt="">
                    <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('user-profile')}}"><i class="feather-user"></i> My Profile</a>
                <a class="dropdown-item" href="{{route('admin-logout')}}"><i class="feather-power"></i> Logout</a>
            </div>
        </li>
    </ul>
</div>