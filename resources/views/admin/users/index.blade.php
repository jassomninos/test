@extends('admin.layouts.default')
@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <div class="d-flex align-items-center">
                    <h5 class="page-title">Dashboard</h5>
                    <ul class="breadcrumb ml-2">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ul>
                </div>
            </div>
            <div class="col-auto text-right">
                <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search"> <i class="feather-filter"></i>
                </a>
            </div>
        </div>
    </div>

    <form action="#" method="post" id="filter_inputs">
        <input type="hidden" name="csrf_token_name" value="4a0efd10c152f3f6117fec6b1be8e87e" />
        <div class="card filter-card">
            <div class="card-body pb-0">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>User ID</label>
                            <input class="form-control" type="text" name="from">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control" type="text" name="from">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input class="form-control" type="text" name="to">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Email Id</label>
                            <input class="form-control" type="text" name="to">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>EMR125</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-06.jpg')}}" class="rounded-circle m-r-5" alt=""> Terry Baker</a></td>
                                    <td>5578 Dorsey NC, United States</td>
                                    <td>(207) 808 8863</td>
                                    <td>Brandon <a href="" class="__cf_email__" data-cfemail="4211362d2c2702273a232f322e276c212d2f">[email&#160;protected]</a></td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EMR233</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-04.jpg')}}" class="rounded-circle m-r-5" alt=""> Kyle Woodbury</a></td>
                                    <td>223 2H, Hempstead, United States</td>
                                    <td>(376) 150 6975</td>
                                    <td><a href="" class="__cf_email__" data-cfemail="1f6b7a6d6d665f7a677e726f737a317c7072">[email&#160;protected]</a></td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EMR346</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-05.jpg')}}" class="rounded-circle m-r-5" alt=""> Marie Gallardo</a></td>
                                    <td>2321 #APT 207, Vero Beach, United States</td>
                                    <td>(981) 756 6128</td>
                                    <td>Kyle <a href="" class="__cf_email__" data-cfemail="44132b2b202631363d04213c25293428216a272b29">[email&#160;protected]</a></td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EMR244</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-03.jpg')}}" class="rounded-circle m-r-5" alt=""> Maurice Guz</a></td>
                                    <td>2344 Columbia, United States</td>
                                    <td>(634) 09 3833</td>
                                    <td>Marie <a href="" class="__cf_email__" data-cfemail="e8af898484899a8c87a88d90898598848dc68b8785">[email&#160;protected]</a></td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EMR789</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-01.jpg')}}" class="rounded-circle m-r-5" alt=""> Julia Sims</a></td>
                                    <td>4712 Spring Creek Dr, Washington</td>
                                    <td>(407) 554 4146</td>
                                    <td>Joshua <a href="" class="__cf_email__" data-cfemail="89c4e8fcfbe0eaecc9ecf1e8e4f9e5eca7eae6e4">[email&#160;protected]</a></td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EMR562</td>
                                    <td><a href=""><img width="28" height="28" src="{{asset('admin_assets/assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle m-r-5" alt=""> Linda Carp</a></td>
                                    <td>2870 University Street, United States</td>
                                    <td>(680) 432 2662</td>
                                    <td><a href="" class="__cf_email__" data-cfemail="c6acb3aaafa786a3bea7abb6aaa3e8a5a9ab">[email&#160;protected]</a></td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop