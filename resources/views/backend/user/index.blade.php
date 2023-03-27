@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">users Page</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border border-primary">
                    <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                        <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>All Users
                        </h5>
                        <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                            <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> Create User
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead class="text-center">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>mehejabul</td>
                                        <td>mehejabul</td>
                                        <td>mehejabul</td>
                                        <td>mehejabul</td>
                                        <td>mehejabul</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle text-center"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Manage <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                                                    <li>
                                                        <a class="dropdown-item" href="3">
                                                            <i class="bx bx-show-alt"></i>view</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="3">
                                                            <i class="bx bx-edit-alt"></i>Edite</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item  btn-link delete-modal" href=""
                                                            data-bs-toggle="modal" data-value=""
                                                            data-bs-target="#deleteModal"> <i
                                                                class="dripicons-trash"></i> Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection


        {{--  @section('custom-css')
        <!-- DataTables -->
        <link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
            rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
            rel="stylesheet" type="text/css" />
        @endsection

        @section('custom-script')
        <!-- Required datatable js -->
        <script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js">
        </script>
        <script src="{{ asset('backend') }}/assets/libs/jszip/jszip.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js">
        </script>
        <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
        </script>

        <!-- Datatable init js -->
        <script src="{{ asset('backend') }}/js/pages/datatables.init.js"></script>
        @endsection  --}}
