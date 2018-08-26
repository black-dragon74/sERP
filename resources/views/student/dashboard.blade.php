@extends('student.main')

@section('head-scripts')
    <link href="{{ asset('plugins/calendar/dist/fullcalendar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/media/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title')
    Dashboard
@endsection

@section('breadcrumbs')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
@endsection

@section('page-content')
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info">
                            <i class="ti-wallet"></i>
                        </div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">Holder</h3>
                            <h5 class="text-muted m-b-0">Placeholder</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-danger">
                            <i class="ti-wallet"></i>
                        </div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">Holder</h3>
                            <h5 class="text-muted m-b-0">Placeholder</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-success">
                            <i class="ti-wallet"></i>
                        </div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">Holder</h3>
                            <h5 class="text-muted m-b-0">Placeholder</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-primary">
                            <i class="ti-wallet"></i>
                        </div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">Holder</h3>
                            <h5 class="text-muted m-b-0">Placeholder</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body" style="height: 350px !important; overflow: scroll; padding: 0 !important; margin-bottom: 0;">
                    <div style="position: sticky; top: 0; z-index: 9; padding: 5px; text-align: center; background-color: #fff;">
                        <h4 style="font-size: 20px; padding-top: 5px;">Notices for BCA</h4>
                        <small>Scroll for more</small>
                    </div>
                    <div class="card" style="border-radius: unset !important; padding: 0 !important; margin: 0 !important;">
                        <table class="table table-striped" id="notices-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Notice</th>
                                <th>By</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>This is some great notice!</td>
                                    <td>HOD</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>This is some great notice!</td>
                                    <td>HOD</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>This is some great notice!</td>
                                    <td>HOD</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>This is some great notice!</td>
                                    <td>HOD</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>This is some great notice!</td>
                                    <td>HOD</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>This is some great notice!</td>
                                    <td>HOD</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>This is some great notice!</td>
                                    <td>HOD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Placeholder</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row hidden-xs-only">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Event Calendar
                    </h4>
                    <!-- Start calendar here -->
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')
<script src="{{ asset('plugins/calendar/jquery-ui.min.js') }}"></script>
<script src="{{ asset('plugins/moment/moment.js') }}"></script>
<script src="{{ asset('plugins/calendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('plugins/calendar/dist/cal-init.js') }}"></script>
<script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
@endsection