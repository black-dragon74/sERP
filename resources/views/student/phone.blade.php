@extends('student.main')

@section('head-scripts')
    {{--Head scripts here--}}
@endsection

@section('title')
    Faculty Details
@endsection

@section('breadcrumbs')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Faculty Details</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Faculty Details</li>
            </ol>
        </div>
    </div>
@endsection

@section('page-content')
    {{-- Selector for category based names --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Select faculty
                    </h4>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">-- Select --</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success waves-effect waves-light">Get details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Here comes the numbers --}}
    <div class="row">
        {{-- Person 1 --}}
        <div class="col-md-6 col-lg-6">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        {{-- Profile Image --}}
                        <a href="#"><img src="{{ asset('images/users/1.jpg') }}" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        {{-- Name and designation --}}
                        <h3 class="box-title m-b-0">Johnathan Doe</h3>
                        <small>Web Designer</small>
                        <address>
                            Hey! I am someone and I do something.
                            <br><br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <i class="mdi mdi-phone m-r-5"></i>123456789
                                </div>
                                <div class="col-lg-8">
                                    <i class="mdi mdi-mail-ru m-r-5"></i>someone@institute.edu
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        {{-- Person 2 --}}
        <div class="col-md-6 col-lg-6">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        {{-- Profile Image --}}
                        <a href="#"><img src="{{ asset('images/users/2.jpg') }}" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        {{-- Name and designation --}}
                        <h3 class="box-title m-b-0">Johnathan Doe</h3>
                        <small>Web Designer</small>
                        <address>
                            Hey! I am someone and I do something.
                            <br><br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <i class="mdi mdi-phone m-r-5"></i>123456789
                                </div>
                                <div class="col-lg-8">
                                    <i class="mdi mdi-mail-ru m-r-5"></i>someone@institute.edu
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        {{-- Person 3 --}}
        <div class="col-md-6 col-lg-6">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        {{-- Profile Image --}}
                        <a href="#"><img src="{{ asset('images/users/3.jpg') }}" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        {{-- Name and designation --}}
                        <h3 class="box-title m-b-0">Johnathan Doe</h3>
                        <small>Web Designer</small>
                        <address>
                            Hey! I am someone and I do something.
                            <br><br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <i class="mdi mdi-phone m-r-5"></i>123456789
                                </div>
                                <div class="col-lg-8">
                                    <i class="mdi mdi-mail-ru m-r-5"></i>someone@institute.edu
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        {{-- Person 4 --}}
        <div class="col-md-6 col-lg-6">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        {{-- Profile Image --}}
                        <a href="#"><img src="{{ asset('images/users/4.jpg') }}" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        {{-- Name and designation --}}
                        <h3 class="box-title m-b-0">Johnathan Doe</h3>
                        <small>Web Designer</small>
                        <address>
                            Hey! I am someone and I do something.
                            <br><br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <i class="mdi mdi-phone m-r-5"></i>123456789
                                </div>
                                <div class="col-lg-8">
                                    <i class="mdi mdi-mail-ru m-r-5"></i>someone@institute.edu
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('bottom-scripts')

@endsection