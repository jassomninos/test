@extends('admin.layouts.default')
    @section('content')
        <div class="content container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                    <div class="card detail-box1 details-box">
                        <div class="card-body">
                            <div class="dash-contetnt">
                                <div class="mb-3">
                                    <img src="{{asset('admin_assets/assets/img/icons/accident.svg')}}" alt="" width="26">
                                </div>
                                <h4 class="text-white">Total Users</h4>
                                <h2 class="text-white">245</h2>
                                <div class="growth-indicator">
                                    <span class="text-white"><i class="fas fa-angle-double-up mr-1"></i> (14.25%)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                    <div class="card detail-box2 details-box">
                        <div class="card-body">
                            <div class="dash-contetnt">
                                <div class="mb-3">
                                    <img src="{{asset('admin_assets/assets/img/icons/visits.svg')}}" alt="" width="26">
                                </div>
                                <h4 class="text-white">Active Users</h4>
                                <h2 class="text-white">137</h2>
                                <div class="growth-indicator">
                                    <span class="text-white"><i class="fas fa-angle-double-down mr-1"></i> (4.78%)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                    <div class="card detail-box3 details-box">
                        <div class="card-body">
                            <div class="dash-contetnt">
                                <div class="mb-3">
                                    <img src="{{asset('admin_assets/assets/img/icons/hospital-bed.svg')}}" alt="" width="26">
                                </div>
                                <h4 class="text-white">New User</h4>
                                <h2 class="text-white">24</h2>
                                <div class="growth-indicator">
                                    <span class="text-white"><i class="fas fa-angle-double-up mr-1"></i> (18.32%)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                    <div class="card detail-box4 details-box">
                        <div class="card-body">
                            <div class="dash-contetnt">
                                <div class="mb-3">
                                    <img src="{{asset('admin_assets/assets/img/icons/operating.svg')}}" alt="" width="26">
                                </div>
                                <h4 class="text-white">Inactive User</h4>
                                <h2 class="text-white">05</h2>
                                <div class="growth-indicator">
                                    <span class="text-white"><i class="fas fa-angle-double-down mr-1"></i> (25.14%)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row calender-col">
                <div class="col-xl-8 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Users Profile</h5>
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-white btn-sm dropdown-toggle" role="button" data-toggle="dropdown">
                                        This Week
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                        <a href="javascript:void(0);" class="dropdown-item">This Week</a>
                                        <a href="javascript:void(0);" class="dropdown-item">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                <div class="w-100 d-md-flex align-items-center mb-3 chart-count">
                                    <div class="mr-3 text-center">
                                        <span>Total Users</span>
                                        <p class="h4 text-primary">584</p>
                                    </div>
                                    <div class="mr-3 text-center">
                                        <span>Old Users</span>
                                        <p class="h4 text-success">320</p>
                                    </div>
                                    <div class="mr-3 text-center">
                                        <span>New Users</span>
                                        <p class="h4 text-warning">264</p>
                                    </div>
                                </div>
                            </div>
                            <div id="dsh_chart_ex_column"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Reviews Score</h4>
                        </div>
                        <div class="card-body">
                            <div id="dsh_chart_ex_pie"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header no-border">
                    <h4 class="card-title float-left">Latest Users</h4>
                    <span class="float-right"><a href="">View all</a></span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>APT0001</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-03.jpg')}}" class="rounded-circle m-r-5" alt=""> Maurice Guz</a></td>
                                    <td>39</td>
                                    <td>11 Dec 2020</td>
                                    <td>10:00am-12:00am</td>
                                    <td class="text-success">Approved</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>APT0002</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-07.jpg')}}" class="rounded-circle m-r-5" alt=""> Brandon Stone</a></td>
                                    <td>29</td>
                                    <td>5 Dec 2020</td>
                                    <td>10:00am-12:00am</td>
                                    <td class="text-danger">Canceled</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>APT0003</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-06.jpg')}}" class="rounded-circle m-r-5" alt=""> Terry Baker</a></td>
                                    <td>42</td>
                                    <td>6 Jan 2020</td>
                                    <td>10:00am-12:00am</td>
                                    <td class="text-success">Approved</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>APT0004</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-04.jpg')}}" class="rounded-circle m-r-5" alt=""> Kyle Woodbury</a></td>
                                    <td>23</td>
                                    <td>19 Dec 2020</td>
                                    <td>10:00am-12:00am</td>
                                    <td class="text-success">Approved</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>APT0005</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-05.jpg')}}" class="rounded-circle m-r-5" alt=""> Marie Gallardo</a></td>
                                    <td>55</td>
                                    <td>15 Dec 2020</td>
                                    <td>10:00am-12:00am</td>
                                    <td class="text-success">Approved</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @stop


