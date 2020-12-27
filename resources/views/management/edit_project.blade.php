@extends('layouts.navigation')
@section('title', 'Project Add')

@section('style')
<link href="{{asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-select/bootstrap-select.min.css')}}">
<link href="plugins/bootstrap-range-Slider/bootstrap-slider.css" rel="stylesheet" type="text/css">


@endsection

@section('content')
<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form class="section general-info" action="{{ route('all_project.update', $project->Project_ID)}}" method="POST">
                        @method('PUT')
                        {{ csrf_field() }} 
                        <div class="info">
                            <h6 class="text-center">General Information</h6>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Customer Name</label>
                                                            <select name="Customer_ID"  class="form-control mb-4 selectpicker" data-size="5" data-live-search="true" data-style="btn btn-outline-primary">
                                                                <option value="{{$customered->Customer_ID}}">{{$customered->Customer_ID}}. {{$customered->Customer_Name}}</option>
                                                                <option value="0">0. TaskGo Corp</option>
                                                                @foreach ($customer as $value)
                                                                <option value="{{$value->Customer_ID}}">{{$value->Customer_ID}}. {{$value->Customer_Name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Status Project</label>
                                                            <select name="Status_ID"  class="form-control mb-4 selectpicker" data-style="btn btn-outline-warning">
                                                                <option value="1">On Hold</option>
                                                                <option value="2">In Progress</option>
                                                                <option value="3">Complete</option>
                                                                <option value="4">Canceled</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="address">Project Name</label>
                                                            <input type="text" class="form-control mb-4" placeholder="Project Name" name="Project_Name" value="{{$project->Project_Name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Start Date</label>
                                                            <input name="Start_Date" id="basicFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" value="{{$project->Start_Date}}" placeholder="{{$project->Start_Date}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">End Date</label>
                                                            <input name="End_Date" id="dateTimeFlatpickr" class="form-control flatpickr flatpickr-input" type="text" placeholder="{{$project->End_Date}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="address">Budget</label>
                                                            <input name="Budget" class="form-control" type="number" placeholder="$1.000.000" value="{{$project->Budget}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="aboutBio">Description</label>
                                                            <textarea class="form-control" id="aboutBio" placeholder="About Project" rows="10" name="Des_Project">{{$project->Des_Project}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-settings-footer">
                            <div class="as-footer-container">
                                <button id="multiple-reset" class="btn btn-warning">Reset All</button>
                                <div class="blockui-growl-message">
                                    <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                                </div>
                                <button id="multiple-messages" type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script src="{{asset('assets/js/users/account-settings.js')}}"></script>
<script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script>
    var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'), {
    dateFormat: "Y-m-d",
    });
</script>
@endsection
