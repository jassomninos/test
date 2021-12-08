@extends('admin.layouts.default')
@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <h5 class="page-title">Dashboard</h5>
                    <ul class="breadcrumb ml-2">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile Setting</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-4">

            <div class="widget settings-menu">
                <ul>
                    <li class="nav-item">
                        <a href="{{route('user-profile')}}" class="nav-link active">
                            <i class="far fa-user"></i> <span>Profile Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user-tax')}}" class="nav-link">
                            <i class="far fa-check-square"></i> <span>Tax Types</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin-notification')}}" class="nav-link">
                            <i class="far fa-bell"></i> <span>Notifications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('change-password')}}" class="nav-link">
                            <i class="fas fa-unlock-alt"></i> <span>Change Password</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-xl-9 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Basic information</h5>
                </div>
                <div class="card-body">

                    <form>
                        <div class="row form-group">
                            <label for="name" class="col-sm-3 col-form-label input-label">Profile</label>
                            <div class="col-sm-9">
                                <div class="d-flex align-items-center">
                                    <label class="avatar avatar-xxl profile-cover-avatar m-0" for="edit_img">
                                        <img id="avatarImg" class="avatar-img" src="{{asset('admin_assets/assets/img/profiles/avatar-02.jpg')}}" alt="Profile Image">
                                        <input type="file" id="edit_img">
                                        <span class="avatar-edit">
                                            <i class="feather-edit-2 avatar-uploader-icon shadow-soft"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="name" class="col-sm-3 col-form-label input-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" value="{{auth()->user()->name}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="email" class="col-sm-3 col-form-label input-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="Email" value="{{auth()->user()->email}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="phone" class="col-sm-3 col-form-label input-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" placeholder="+x(xxx)xxx-xx-xx" value="{{auth()->user()->phone}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="education" class="col-sm-3 col-form-label input-label">Education</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="education" placeholder="Your education" value="{{auth()->user()->education}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="experience" class="col-sm-3 col-form-label input-label">Experience</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="experience" placeholder="Your experience" value="{{auth()->user()->experience}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="addressline1" class="col-sm-3 col-form-label input-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="addressline1" placeholder="Your address" value="">
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop