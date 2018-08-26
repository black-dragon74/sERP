@extends("student.main")

@section("head-scripts")
    {{-- Scripts in head tag --}}
@endsection

@section("title")
    Academic Details
@endsection

@section("breadcrumbs")
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Academic Details</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Academic Details</li>
            </ol>
        </div>
    </div>
@endsection

@section ("page-content")
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block">
                        <h4 class="card-title">Academic Performance</h4>
                        <div class="ml-auto">
                            <select name="" id="" class="custom-select">
                                <option value="">-- Select Exam --</option>
                            </select>
                        </div>
                    </div>
                    <h6 class="card-subtitle">
                        Select exam name from right menu to get results
                    </h6>

                    {{-- Here starts the exam results table --}}
                    <div class="table-responsive text-center">
                        <h4 class="text-center">
                            Results for: <strong>Exam Name</strong>
                        </h4><br>
                        <table class="table stylish-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>Total Marks</th>
                                <th>Obtained Marks</th>
                                <th>Pass / Fail</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>C Programming</td>
                                <td>100</td>
                                <td>97</td>
                                <td><span class="label label-success">Passed</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mathematics</td>
                                <td>100</td>
                                <td>80</td>
                                <td><span class="label label-success">Passed</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>English Literature</td>
                                <td>100</td>
                                <td>97</td>
                                <td><span class="label label-success">Passed</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Digital Electronics</td>
                                <td>100</td>
                                <td>27</td>
                                <td><span class="label label-warning">Re-Exam</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Some Subject</td>
                                <td>100</td>
                                <td>2</td>
                                <td><span class="label label-danger">Failed</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Some Subject</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="label label-info">Cancelled</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("bottom-scripts")
    {{-- Scripts before the closing body tag --}}
@endsection