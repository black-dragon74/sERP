@extends('student.main')

@section('head-scripts')
    {{--We can add scripts for header here--}}
@endsection

@section('title')
    My Profile
@endsection

@section('breadcrumbs')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">My Profile</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">My Profile</li>
            </ol>
        </div>
    </div>
@endsection

@section('page-content')
    {{--Content goes here--}}
    <div class="row">
        {{-- First column, contains user info card --}}
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="{{ asset('images/users/5.jpg') }}" class="img-circle" width="150" />
                        <h4 class="card-title m-t-10">Mr. Someone</h4>
                        <h6 class="card-subtitle">BCA - Semester 1</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-5">
                                <a href="#" class="text-dark" data-toggle="tooltip" data-placement="bottom" title="Registration Number">
                                    <i class="mdi mdi-24px mdi-information d-block"></i>
                                    <font class="font-medium">181015006</font>
                                </a>
                            </div>
                            <div class="col-5">
                                <a href="#" class="text-dark" data-toggle="tooltip" data-placement="bottom" title="Course Credits">
                                    <i class="mdi mdi-24px mdi-coin d-block"></i>
                                    <font class="font-medium">5 Credits</font>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body">
                    <small class="text-muted">Email address </small>
                    <h6>hannagover@gmail.com</h6>
                    <small class="text-muted p-t-30 db">Phone</small>
                    <h6>+91 654 784 547</h6>
                    <small class="text-muted p-t-30 db">Address</small>
                    <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                </div>
            </div>
        </div>

        {{-- Second column, contains user profile --}}
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body p-b-0">
                    <h4 class="card-title">
                        Profile details
                    </h4>
                    <h6 class="card-subtitle">Change your settings here</h6>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    {{-- Main Profile --}}
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">User Info</a>
                    </li>

                    {{-- Profile Email Settings --}}
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Email and Avatar</a>
                    </li>

                    {{-- Password Settings --}}
                    <li class="nav-item">
                        <a href="#password" class="nav-link" data-toggle="tab" role="tab">Change Password</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Info Panel -->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> 
                                    <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">Johnathan Deo</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> 
                                    <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">(123) 456 7890</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> 
                                    <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">johnathan@admin.com</p>
                                </div>
                                <div class="col-md-3 col-xs-6"> 
                                    <strong>Location</strong>
                                    <br>
                                    <p class="text-muted">London</p>
                                </div>
                            </div>
                            <hr>
                            <p class="m-t-30">Will show some details about the user here.</p>
                        </div>
                    </div>

                    <!-- Basic Settings Panel -->
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material">
                                <div class="form-group row">
                                    <label for="" class="form-control-label text-sm-right col-sm-2">Update Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="nick">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-control-label text-sm-right col-sm-2">Update E-mail</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="nick">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-control-label text-sm-right col-sm-2">Avatar</label>
                                    <div class="col-sm-8">
                                        <img src="{{ asset('images/users/3.jpg') }}" alt="" class="serp-profile cursor-pointer" data-toggle="tooltip" data-placement="right" title="Click me to change avatar" onclick="clickFile();">
                                    </div>
                                </div>
                                <div class="form-group row d-none">
                                    <label for="" class="form-control-label text-sm-right col-sm-2">Update Avatar</label>
                                    <div class="col-sm-8">
                                        <input type="file" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <div class="col-sm-2 offset-sm-2">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Password Change Panel -->
                    <div class="tab-pane" id="password" role="tabpanel">
                        <div class="card-body">
                            <form action="" class="form-horizontal form-material">
                                <div class="form-group row">
                                    <label for="" class="form-control-label text-sm-right col-sm-2">Current Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" placeholder="••••••••••">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-control-label text-sm-right col-sm-2">New Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" placeholder="••••••••••">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-control-label text-sm-right col-sm-2">Re-enter Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" placeholder="••••••••••">
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <div class="col-sm-2 offset-sm-2">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')
    {{--Scripts before the end of body tag go here--}}
    <script>
        // Emulates click on the hidden file button
        function clickFile(){
            $("input[type='file']").click();
        }
    </script>
@endsection