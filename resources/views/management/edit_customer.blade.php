@extends('layouts.navigation')
@section('title', 'Customer Edit')

@section('style')
<link href="{{asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form class="section general-info" action="{{ route('customer.update', $customer->Customer_ID)}}" method="POST">
                        @method('PUT')
                        {{ csrf_field() }} 
                        <div class="info">
                            <h6 class="text-center">General Information</h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Full Name</label>
                                                            <input type="text" class="form-control mb-4" name="Customer_Name" placeholder="Full Name" value="{{ $customer->Customer_Name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Birth of Day</label>
                                                            <input id="basicFlatpickr" value="{{ $customer->Customer_Birthday}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date.." name="Customer_Birthday">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Phone</label>
                                                            <input type="text" class="form-control mb-4" placeholder="Phone" value="0{{ $customer->Customer_Phone}}" name="Customer_Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control mb-4" placeholder="Address" value="{{ $customer->Customer_Address}}" name="Customer_Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control mb-4" placeholder="Customer_Email" value="{{ $customer->Customer_Email}}" name="Customer_Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="aboutBio">Bio</label>
                                                            <textarea class="form-control" id="aboutBio" placeholder="Tell something interesting about yourself" rows="10" name="Customer_Description">{{ $customer->Customer_Description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="input-group social-fb mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                                <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="{{ $customer->Customer_Facebook }}" name="Customer_Facebook">
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
@endsection
