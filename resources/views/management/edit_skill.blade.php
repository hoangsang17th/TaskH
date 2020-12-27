@extends('layouts.navigation')
@section('title', 'New Skill')

@section('style')
<link href="{{asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form class="section general-info" action="{{ route('skill.update', $skill->Skill_ID)}}" method="POST">
                        @method('PUT')
                        {{ csrf_field() }} 
                        <div class="info">
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="fullName">Skill Name</label>
                                                            <input type="text" class="form-control mb-4" name="Skill_Name" placeholder="Full Name" value="{{ $skill->Skill_Name }}">
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
@endsection
