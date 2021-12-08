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
                        <li class="breadcrumb-item active">Users Transactions</li>
                    </ul>
                </div>
            </div>
            <div class="col-auto text-right">
                <a class="btn btn-white filter-btn mr-3" href="javascript:void(0);" id="filter_search"> <i class="feather-filter"></i>
                </a>
            </div>
        </div>
    </div>

    <form action="#" method="post" id="filter_inputs">
        <input type="hidden" name="csrf_token_name" value="4a0efd10c152f3f6117fec6b1be8e87e" />
        <div class="card filter-card">
            <div class="card-body pb-0">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label>Bill Date</label>
                            <input class="form-control" type="text" name="from">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control" type="text" name="from">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label>Type</label>
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
                                    <th>Bill Date</th>
                                    <th>User Name</th>
                                    <th>Charges</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>11 Dec 2020</td>
                                    <td>Henry Daniels</td>
                                    <td>$ 318</td>
                                    <td>18%</td>
                                    <td>$ 330</td>
                                    <td><span class="badge bg-warning-light">Credit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5 Dec 2020</td>
                                    <td>Doris Wilder</td>
                                    <td>$ 256</td>
                                    <td>18%</td>
                                    <td>$ 267</td>
                                    <td><span class="badge bg-info-light">Debit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6 Jan 2020</td>
                                    <td>Gavin Joyce</td>
                                    <td>$ 134</td>
                                    <td>18%</td>
                                    <td>$ 156</td>
                                    <td><span class="badge bg-info-light">Debit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19 Dec 2019</td>
                                    <td>Yuri Berry</td>
                                    <td>$ 145</td>
                                    <td>18%</td>
                                    <td>$ 160</td>
                                    <td><span class="badge bg-warning-light">Credit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15 Dec 2019</td>
                                    <td>Henry Daniels</td>
                                    <td>$ 213</td>
                                    <td>18%</td>
                                    <td>$ 246</td>
                                    <td><span class="badge bg-warning-light">Credit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11 Dec 2019</td>
                                    <td>Henry Daniels</td>
                                    <td>$ 310</td>
                                    <td>18%</td>
                                    <td>$ 370</td>
                                    <td><span class="badge bg-info-light">Debit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5 Dec 2019</td>
                                    <td>Doris Wilder</td>
                                    <td>$ 56</td>
                                    <td>18%</td>
                                    <td>$ 115</td>
                                    <td><span class="badge bg-info-light">Debit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6 Jan 2020</td>
                                    <td>Gavin Joyce</td>
                                    <td>$ 43</td>
                                    <td>18%</td>
                                    <td>$ 145</td>
                                    <td><span class="badge bg-info-light">Debit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19 Dec 2019</td>
                                    <td>Yuri Berry</td>
                                    <td>$ 89</td>
                                    <td>18%</td>
                                    <td>$ 213</td>
                                    <td><span class="badge bg-warning-light">Credit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15 Dec 2019</td>
                                    <td>Henry Daniels</td>
                                    <td>$ 12</td>
                                    <td>18%</td>
                                    <td>$ 18</td>
                                    <td><span class="badge bg-info-light">Debit</span></td>
                                    <td class="text-right d-flex">
                                        <a href="" class="btn btn-sm btn-white text-success mr-2 d-flex align-items-center"><i class="fas fa-eye mr-1"></i> View</a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 d-flex align-items-center"><i class="far fa-trash-alt mr-1"></i>Delete</a>
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