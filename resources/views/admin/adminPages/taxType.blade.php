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
                        <li class="breadcrumb-item active">Tax Type</li>
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
                        <a href="{{route('user-tax')}}" class="nav-link active">
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
                <div class="card-header no-border">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Tax Types</h5>
                        </div>
                        <div class="col-auto">
                            <a href="javascript:void(0);" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#add_tax">Add New Tax</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tax Name </th>
                                    <th>Tax Percentage (%) </th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>VAT</td>
                                    <td>14%</td>
                                    <td>
                                        <span class="badge bg-success-light">Active</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" data-toggle="modal" data-target="#edit_tax" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
                                        <a href="#" data-toggle="modal" data-target="#delete_tax" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GST</td>
                                    <td>30%</td>
                                    <td>
                                        <span class="badge bg-danger-light">Inactive</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" data-toggle="modal" data-target="#edit_tax" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
                                        <a href="#" data-toggle="modal" data-target="#delete_tax" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="add_tax" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Tax</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Tax Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Tax Percentage (%) <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Pending</option>
                                <option>Approved</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="edit_tax" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Tax</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Tax Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="VAT" type="text">
                        </div>
                        <div class="form-group">
                            <label>Tax Percentage (%) <span class="text-danger">*</span></label>
                            <input class="form-control" value="14%" type="text">
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="delete_tax" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-icon text-center mb-3">
                        <i class="fas fa-trash-alt text-danger"></i>
                    </div>
                    <div class="modal-text text-center">
                        <h2>Delete Tax</h2>
                        <p>Are you sure want to delete?</p>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>
@stop