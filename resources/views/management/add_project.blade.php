@extends('layouts.navigation')
@section('title', 'Project Add')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/editors/quill/quill.snow.css')}}">
<link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<form action="">
<div class="row layout-top-spacing mt-lg-2 mt-5 pt-3 pt-lg-0">
    <div class="col-12 mb-3 mb-sm-0">
        <div class="widget-content widget-content-area br-6">
            
            <div class="row">
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Project Name*" required name="Project_Name">
                </div>
                <div class="col-3">
                    <input id="basicFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Start Date" name="StartDate">
                </div>
                <div class="col-3">
                    <input id="basicFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="End Date" name="EndDate">
                </div>
                <div class="col-12">
                    <div class="statbox">
                        <div id="editor-container">
                            <textarea name="Des_Project" class="form-control">TaskGo</textarea>
                        </div>
                    </div>
                </div>
            </div><input type="text" class="form-control">
            <div class="row">
                
            </div>
        
        </div>
    </div>
</div>
</form>

@endsection

@section('javascript')
<script src="{{asset('plugins/editors/quill/quill.js')}}"></script>
<script src="{{asset('plugins/editors/quill/custom-quill.js')}}"></script>
<script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('plugins/flatpickr/custom-flatpickr.js')}}"></script>
@endsection