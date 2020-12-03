@extends('layouts.navigation')
@section('title', 'Account Setting')
@section('style')
    <link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
    <link href="assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form id="general-info" class="section general-info">
                        <div class="info">
                            <h6 class="">General Information</h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                            <div class="upload mt-4 pr-md-4">
                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="assets/img/avatar-1.png" data-max-file-size="2M" />
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Full Name</label>
                                                            <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="Jimmy Turner">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Birth of Day</label>
                                                            <input id="basicFlatpickr" value="2001-09-11" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Profession</label>
                                                            <input type="text" class="form-control mb-4" id="address" placeholder="Address" value="New York" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control mb-4" id="address" placeholder="Address" value="New York" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="text" class="form-control mb-4" id="phone" placeholder="Write your phone number here" value="+1 (530) 555-12121">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control mb-4" id="email" placeholder="Write your email here" value="Jimmy@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="aboutBio">Bio</label>
                                                            <textarea class="form-control" id="aboutBio" placeholder="Tell something interesting about yourself" rows="10">I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print media. I enjoy turning complex problems into simple, beautiful and intuitive designs. My job is to build your website so that it is functional and user-friendly but at the same time attractive. Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring across your message and identity in the most creative way. I created web design for many famous brand companies.</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group social-linkedin mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                                <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="linkedin Username" aria-label="Username" aria-describedby="linkedin" value="jimmy_turner">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group social-fb mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                                <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="Jimmy Turner">
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
                                <button id="multiple-messages" class="btn btn-primary">Save Changes</button>
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
<script src="plugins/dropify/dropify.min.js"></script>
<script src="plugins/blockui/jquery.blockUI.min.js"></script>
<script src="assets/js/users/account-settings.js"></script>
<script src="plugins/flatpickr/flatpickr.js"></script>
<script src="plugins/flatpickr/custom-flatpickr.js"></script>

@endsection