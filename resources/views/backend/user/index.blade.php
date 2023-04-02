@extends('layouts.admin')

@section('content')

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
            <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Multipurpose
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary"> Home </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted"> Dashboards </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="card-title text-dark fw-bold fs-3"><i class="fab fa-gg-circle fs-3 text-dark"
                                    aria-hidden="true"></i>ALL User information</h3>
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-md btn-dark text-light fw-bold">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Add User
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                    <thead class="bg-dark">
                                        <tr
                                            class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200 text-light">
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-light table-bordered fw-bold">
                                        <tr>
                                            <td>image</td>
                                            <td>oittizzo Bhuia</td>
                                            <td>01727867146</td>
                                            <td>oittizzo@gmail.com</td>
                                            <td>Chatmohar,pabna</td>
                                            <td>
                                              action


                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

