@extends('layouts.navigation')
@section('title')
{{$project->Project_Name}}
@endsection
@section('style')
<link href="{{ asset('assets/css/components/timeline/custom-timeline.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row layout-top-spacing mt-lg-2 mt-5 pt-3 pt-lg-0">
    <div class="col-xl-4 col-lg-5 col-md-6 col-12 mb-3 mb-sm-0">
        <div class="widget-content widget-content-area br-6">
            <div class="row">
                <div class="col-12">
                    <div class="text-center h4 font-italic font-weight-bolder">
                        {{$project->Project_Name}}
                    </div>
                    <div class="mt-3">
                        {{$project->Des_Project}}
                    </div>
                    <div class="text-center">
                        <div class="mt-3 mb-1 text-dark">
                            Project Status
                        </div>
                        @if ($project->Status_ID == 1)
                            <?php echo "<span class='badge outline-badge-warning w-100'> On Hold </span>";?>                                
                        @elseif($project->Status_ID == 2)
                            <?php echo "<span class='badge outline-badge-primary w-100'> In Progress </span>";?>                                
                        @elseif($project->Status_ID == 3)
                            <?php echo "<span class='badge outline-badge-success w-100'> Complete </span>";?>                                
                        @elseif($project->Status_ID == 4)
                            <?php echo "<span class='badge outline-badge-danger w-100'> Canceled </span>";?>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area br-6 layout-top-spacing">
            <div class="row my-2">
                <div class="col-6">Cost:</div>
                <div class="col-6 text-right">
                    <div class="badge outline-badge-primary">
                        ${{$project->Budget}}
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">Created:</div>
                <div class="col-6 text-right">
                    <div class="badge outline-badge-success">
                        {{$project->Start_Date}}
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">Deadline:</div>
                <div class="col-6 text-right">
                    <div class="badge outline-badge-danger">
                        {{$project->End_Date}}
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area br-6 layout-top-spacing">
            <div class="row my-2">
                <div class="col-12 font-weight-bolder">Leader Team</div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('assets/img/Avatar-1.png') }}" class="rounded-circle w-100">
                </div>
                <div class="col-9 align-middle">
                    <div class="h5 font-weight-bolder">
                        {{$leader->name}}
                    </div>
                    <div class="text-dark pt-0">{{$leader->email}}</div>
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area br-6 layout-top-spacing">
            <div class="row my-2">
                <div class="col-12 font-weight-bolder">About Clients</div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-6">
                    <img src="{{ asset('assets/img/Avatar-3.png') }}" class="rounded-circle w-100">
                </div>
                <div class="col-12 mt-2">
                    <div class="h5 font-weight-bolder">
                        {{$project->customer->Customer_Name}}
                    </div>
                    <div class="text-dark pt-0">{{$project->customer->Customer_Email}}</div>
                </div>
                <div class="col-12 mt-3">
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#profileModel">
                        Profile
                    </button>
                    <div class="modal fade modal-notification" id="profileModel" tabindex="-1" role="dialog" aria-labelledby="profileModelLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" id="profileModelLabel">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-2 text-left font-weight-bolder my-1">Name: </div>
                                        <div class="col-10 text-left my-1">{{$project->customer->Customer_Name}}</div>
                                        <div class="col-2 text-left font-weight-bolder my-1">Phone: </div>
                                        <div class="col-10 text-left my-1">{{$project->customer->Customer_Phone}}</div>
                                        <div class="col-2 text-left font-weight-bolder my-1">Address: </div>
                                        <div class="col-10 text-left my-1">{{$project->customer->Customer_Address}}</div>
                                        <div class="col-2 text-left font-weight-bolder my-1">Birthday: </div>
                                        <div class="col-10 text-left my-1">{{$project->customer->Customer_Birthday}}</div>
                                        <div class="col-2 text-left font-weight-bolder my-1">Email: </div>
                                        <div class="col-10 text-left my-1">{{$project->customer->Customer_Email}}</div>
                                        <div class="col-2 text-left font-weight-bolder my-1">Bio: </div>
                                        <div class="col-10 text-left my-1">{{$project->customer->Customer_Description}}</div>
                                    </div>
                                    @if($project->customer->Customer_Facebook !="")
                                    <div class="row justify-content-center mt-3">
                                        <div class="col-12 text-center">
                                            <a href="{{$project->customer->Customer_Facebook}}">
                                                <div class="btn btn-primary mb-2 btn-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                                    Facebook
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <p class="btn" data-dismiss="modal">Discard</p>
                                    <a href="mailto:{{$project->customer->Customer_Email}}" class="btn btn-primary">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-7 col-md-6 col-12">
        <div class="widget-content widget-content-area br-6">
            <form action="">
            <div class="row">
                <div class="col-12">
                    <label for="projectactivity">Project Activity</label>
                    <textarea name="Tasks" rows="2" class="form-control"></textarea>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-12">
                    <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" id="customFile" name="UploadFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-outline-primary" value="POST" >
                </div>
            </div>
            </form>
        </div>
        <div class="row layout-top-spacing">
            <div id="timelineProfile" class="col-lg-12 layout-spacing">
                 <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="timeline-simple">
                            <p class="timeline-title">History</p>

                            <div class="timeline-list">
                                <p class="meta-update-day">Today</p>
                                
                                <div class="timeline-post-content">
                                    <div class="user-profile">
                                        <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <h4>Laurie Fox</h4>
                                        <p class="meta-time-date">5 sec</p>
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                            <h6 class="">Trending Style</h6>
                                            <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                            <div class="post-contributers">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-post-content post-gallery">
                                    <div class="user-profile">
                                        <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="avatar">
                                    </div>
                                    <div class="">
                                        <h4>Justin Cross</h4>
                                        <p class="meta-time-date">45 min</p>
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                            <h6 class="">Nature Photography</h6>
                                            <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                            <div class="post-gallery-img">
                                                <img src="{{ asset('assets/img/400x300.jpg') }}" alt="timeline">
                                                <img src="{{ asset('assets/img/400x300.jpg') }}" alt="timeline">
                                                <img src="{{ asset('assets/img/400x300.jpg') }}" alt="timeline">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-post-content">
                                    <div class="user-profile">
                                        <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="avatar">
                                    </div>
                                    <div class="">
                                        <h4>Sonia Shaw</h4>
                                        <p class="meta-time-date">2 hr</p>
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                            <h6 class="">Create new Project</h6>
                                            <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                            <div class="post-contributers">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="timeline">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="timeline">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="timeline">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="timeline">
                                                <img src="{{ asset('assets/img/Avatar-1.png') }}" alt="timeline">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection