@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">User Page</h4>
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
            <div class="col-lg-12">
                <div class="card border border-primary">
                    <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>users</h5>
                        <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                            <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All user
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-6 my-2">
                                        <label for="name">Full Name<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="email">Email,<span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" value="">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="phone">Phone<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="phone" value="">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="role">Role</label>
                                        <select class="form-select" name="role">
                                            <option disabled selected>Select Role</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Subscriber</option>
                                            <option value="3">Staff</option>
                                        </select>
                                        @error('role')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="password">Password<span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation">
                                    </div>
                                    <div class="col-md-12 my-2">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" name="address"></textarea>
                                    </div>
                                    <div class="col-md-2 mt-4 my-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <i class="bx bxs-save font-size-16 align-middle me-2"></i> User Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div>
        <!-- container-fluid -->
    </div>
</div>
@endsection
