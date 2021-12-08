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
                        <li class="breadcrumb-item active">Users Reports</li>
                    </ul>
                </div>
            </div>
            <div class="col-auto text-right">
                <a href="" class="btn btn-primary add-button"><i class="feather-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">Users Reports</h4>
                </div>
                <div class="card-body">
                    <div class="documents-card d-flex mb-3">
                        <div class="documennts d-flex">
                            <i class="far fa-file-pdf pdf-icon"></i>
                            <p>Active Users Report</p>
                        </div>
                        <div class="actions d-flex">
                            <a href="#"><i class="far fa-arrow-alt-circle-down"></i></a>
                            <a href="#"><i class="far fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="documents-card d-flex mb-3">
                        <div class="documennts d-flex">
                            <i class="far fa-file-pdf pdf-icon"></i>
                            <p>InActive Users Reports</p>
                        </div>
                        <div class="actions d-flex">
                            <a href="#"><i class="far fa-arrow-alt-circle-down"></i></a>
                            <a href="#"><i class="far fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="documents-card d-flex mb-3">
                        <div class="documennts d-flex">
                            <i class="far fa-file-pdf pdf-icon"></i>
                            <p>Weekly Reports</p>
                        </div>
                        <div class="actions d-flex">
                            <a href="#"><i class="far fa-arrow-alt-circle-down"></i></a>
                            <a href="#"><i class="far fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="documents-card d-flex">
                        <div class="documennts d-flex">
                            <i class="far fa-file-pdf pdf-icon"></i>
                            <p>Yearly Reports</p>
                        </div>
                        <div class="actions d-flex">
                            <a href="#"><i class="far fa-arrow-alt-circle-down"></i></a>
                            <a href="#"><i class="far fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop