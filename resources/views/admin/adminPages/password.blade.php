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
                        <li class="breadcrumb-item active">Change Password</li>
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
                        <a href="{{route('user-profile')}}" class="nav-link">
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
                        <a href="{{route('change-password')}}" class="nav-link active">
                            <i class="fas fa-unlock-alt"></i> <span>Change Password</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-xl-9 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Change Password</h5>
                </div>
                <div class="card-body">

                    <form>
                        <div class="row form-group">
                            <label for="current_password" class="col-sm-3 col-form-label input-label">Current Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="current_password" placeholder="Enter current password">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="new_password" class="col-sm-3 col-form-label input-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="new_password" placeholder="Enter new password">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="confirm_password" class="col-sm-3 col-form-label input-label">Confirm new password</label>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm your new password">
                                </div>
                                
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