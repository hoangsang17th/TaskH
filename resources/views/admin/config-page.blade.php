@extends('layouts.navigation')

@section('title', 'Config Page')

@section('style')
<link href="{{asset('assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
<div class="layout-top-spacing mt-md-2 mt-5 pt-2">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area animated-underline-content pt-0">
            
            <ul class="nav nav-tabs  mb-3 pt-0" id="animateLine" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                        Notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="config-tab" data-toggle="tab" href="#config" role="tab" aria-controls="config" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        Config</a>
                </li>
            </ul>
        <form  action="{{ route('config-page.update', 0)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Notification 1</label>
                                        <input type="text" class="form-control mb-4" placeholder="Notification 1" name="config_1" value="{{ $config_1->Content }}" maxlength="40">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Notification 2</label>
                                        <input type="text" class="form-control mb-4" placeholder="Notification 2" name="config_2" value="{{ $config_2->Content }}" maxlength="40">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="config-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Footer Left</label>
                                        <input type="text" class="form-control mb-4" placeholder="Footer Left" name="config_3" value="{{ $config_3->Content }}" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Footer Right</label>
                                        <input type="text" class="form-control mb-4" placeholder="Footer Right" name="config_4" value="{{ $config_4->Content }}" maxlength="40">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-lg-2 col-md-4 col-sm-6">
                    <input type="submit" value="Update" class="mt-3 btn btn-outline-primary w-100">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@endsection