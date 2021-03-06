@extends('layouts.navigation')
@section('title')
{{ $user_info->name }}
@endsection
@section('style')
<link href="{{asset('assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row layout-spacing pt-5 pt-lg-0">
    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

        <div class="user-profile layout-spacing">
            <div class="widget-content widget-content-area">
                <div class="d-flex justify-content-between">
                    <h3 class="">Info</h3>
                    @if ($user_info->id == Auth::user()->id)
                    <a href="http://task.com/profile/{{ Auth::user()->id }}/edit" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                    @endif
                </div>
                <div class="text-center user-info">
                    <img src="http://task.com/assets/img/<?php echo $user_info->Avatar; ?>" alt="avatar" width="90px" class="rounded-circle  bs-tooltip" data-original-title="{{$user_info->name}}" data-placement="bottom" >
                <p class="">
                    {{$user_info->name}}
                </p>
                </div>
                <div class="user-info-list">
                    <div class="">
                        <ul class="contacts-block list-unstyled">
                            @if ($user_info->Profession !="")
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                {{$user_info->Profession}}
                            </li>
                            @endif
                            @if ($user_info->Birthday !="")
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                {{$user_info->Birthday}}
                            </li>
                            @endif
                            
                            @if ($user_info->Address !="")
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                {{$user_info->Address}}
                            </li>
                            @endif
                            <li class="contacts-block__item">
                                <a href="mailto: {{$user_info->email}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    {{$user_info->email}}
                                </a>
                            </li>
                            @if ($user_info->Phone !="")
                            <li class="contacts-block__item">
                                <a href="tel: 0{{$user_info->Phone}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    0{{$user_info->Phone}}</a>
                            </li>
                            @endif
                            
                            <li class="contacts-block__item text-center">
                                <ul class="list-inline">
                                    @if ($user_info->Facebook !="")
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <a href="{{$user_info->Facebook}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                                        </div>
                                    </li>
                                    @endif
                                    @if ($user_info->LinkedIn !="")
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <a href="{{$user_info->LinkedIn}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>                              
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
        <blockquote class="blockquote media-object">
            <div class="media">
                <div class="usr-img mr-2">
                    <img alt="avatar" src="{{asset('assets/img/avatar-5.png')}}" class="br-30">
                </div>
                <div class="media-body align-self-center">
                    <p class="d-inline">Accept Challenges If You Want To Experience The Excitement And Taste Of Victory.</p>
                </div>
            </div>
            <small class="text-right"><cite title="Source Title">Hoàng Sang</cite></small>
        </blockquote>
        @if ($user_info->Des!="")
        <div class="bio layout-spacing ">
            <div class="widget-content widget-content-area pb-3">
                <h3 class="">Bio</h3>
                <p>{{$user_info->Des}}</p>
            </div>                                
        </div>
        @endif
        
    </div>
</div>
@endsection
@section('javascript')

@endsection