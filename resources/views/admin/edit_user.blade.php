@extends('layouts.navigation')
@section('title')
{{ $user_info->name }} - Edit Account
@endsection
@section('style')
<link href="{{asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form class="section general-info" action="{{ route('accounts.update', $user_info->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="info">
                            <h6 class="text-center">Edit Account</h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="fullName">Name</label>
                                                            <input type="text" class="form-control mb-4" name="name" value="{{$user_info->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Position</label>
                                                            <select name="Position_ID" id="" class="form-control mb-4" value="{{$user_info->Position_ID}}" >
                                                                <option value="3">User</option>
                                                                <option value="2">Administrator</option>
                                                                <option value="1">Manager</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="avatar">Avatar</label>
                                                            <select name="Avatar" class="form-control" value="{{$user_info->Avatar}}">
                                                                <option value="avatar-1.png" class="form-control">Avatar 1</option>
                                                                <option value="avatar-2.png">Avatar 2</option>
                                                                <option value="avatar-3.png">Avatar 3</option>
                                                                <option value="avatar-4.png">Avatar 4</option>
                                                                <option value="avatar-5.png">Avatar 5</option>
                                                            </select>
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
                                <a href="{{ route('accounts.destroy' ,$user_info->id )}}" class="btn btn-danger" onclick="event.preventDefault(); 
document.getElementById('destroyform').submit();">Delete</a>
                                <button id="multiple-messages" type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('accounts.destroy' ,$user_info->id )}}" method="POST" id="destroyform" style="display: none;">
    <input name="_method" type="hidden" value="DELETE">
    {{ csrf_field() }}
</form>
@endsection
@section('javascript')
<script src="{{asset('assets/js/users/account-settings.js')}}"></script>
@endsection