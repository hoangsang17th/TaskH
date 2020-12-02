{{-- @extends('layouts.navigation') --}}

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.navigation')

@section('title', 'Home')

@section('style')
<link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
<link href="assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row layout-top-spacing">
    <div class="col-12 layout-spacing">
        <div class="row widget-statistic mt-lg-1 mt-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-12 pt-1">
                <div class="widget widget-one_hybrid widget-followers">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <p class="w-value">31.6K</p>
                        <h5 class="">Projects</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-12 pt-1">
                <div class="widget widget-one_hybrid widget-referral">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        </div>
                        <p class="w-value">1,900</p>
                        <h5 class="">Task</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-12 pt-1">
                <div class="widget widget-one_hybrid widget-engagement">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </div>
                        <p class="w-value">18.2%</p>
                        <h5 class="">ToDo</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-12 pt-1">
                <div class="widget widget-one_hybrid widget-engagement">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </div>
                        <p class="w-value">200</p>
                        <h5 class="">Notes</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">

            <div class="widget-heading">
                <h5 class="">Notifications</h5>
            </div>

            <div class="widget-content">

                <div class="mt-container mx-auto">
                    <div class="timeline-line">
                        
                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Logs</h5>
                                    <span class="">27 Feb, 2020</span>
                                </div>
                                <p><span>Updated</span> Server Logs</p>
                                <div class="tags">
                                    <div class="badge badge-primary">Logs</div>
                                    <div class="badge badge-success">CPanel</div>
                                    <div class="badge badge-warning">Update</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Mail</h5>
                                    <span class="">28 Feb, 2020</span>
                                </div>
                                <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                <div class="tags">
                                    <div class="badge badge-primary">Admin</div>
                                    <div class="badge badge-success">HR</div>
                                    <div class="badge badge-warning">Mail</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Task Completed</h5>
                                    <span class="">01 Mar, 2020</span>
                                </div>
                                <p>Backup <span>Files EOD</span></p>
                                <div class="tags">
                                    <div class="badge badge-primary">Backup</div>
                                    <div class="badge badge-success">EOD</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Collect Docs</h5>
                                    <span class="">10 Mar, 2020</span>
                                </div>
                                <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                <div class="tags">
                                    <div class="badge badge-success">Collect</div>
                                    <div class="badge badge-warning">Docs</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Reboot</h5>
                                    <span class="">06 Apr, 2020</span>
                                </div>
                                <p>Server rebooted successfully</p>
                                <div class="tags">
                                    <div class="badge badge-warning">Reboot</div>
                                    <div class="badge badge-primary">Server</div>
                                </div>
                            </div>
                        </div>                                      
                    </div>                                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">

            <div class="widget-heading">
                <h5 class="">Notifications</h5>
            </div>

            <div class="widget-content">

                <div class="mt-container mx-auto">
                    <div class="timeline-line">
                        
                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Logs</h5>
                                    <span class="">27 Feb, 2020</span>
                                </div>
                                <p><span>Updated</span> Server Logs</p>
                                <div class="tags">
                                    <div class="badge badge-primary">Logs</div>
                                    <div class="badge badge-success">CPanel</div>
                                    <div class="badge badge-warning">Update</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Mail</h5>
                                    <span class="">28 Feb, 2020</span>
                                </div>
                                <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                <div class="tags">
                                    <div class="badge badge-primary">Admin</div>
                                    <div class="badge badge-success">HR</div>
                                    <div class="badge badge-warning">Mail</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Task Completed</h5>
                                    <span class="">01 Mar, 2020</span>
                                </div>
                                <p>Backup <span>Files EOD</span></p>
                                <div class="tags">
                                    <div class="badge badge-primary">Backup</div>
                                    <div class="badge badge-success">EOD</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Collect Docs</h5>
                                    <span class="">10 Mar, 2020</span>
                                </div>
                                <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                <div class="tags">
                                    <div class="badge badge-success">Collect</div>
                                    <div class="badge badge-warning">Docs</div>
                                </div>
                            </div>
                        </div>

                        <div class="item-timeline timeline-new">
                            <div class="t-dot">
                                <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                            </div>
                            <div class="t-content">
                                <div class="t-uppercontent">
                                    <h5>Reboot</h5>
                                    <span class="">06 Apr, 2020</span>
                                </div>
                                <p>Server rebooted successfully</p>
                                <div class="tags">
                                    <div class="badge badge-warning">Reboot</div>
                                    <div class="badge badge-primary">Server</div>
                                </div>
                            </div>
                        </div>                                      
                    </div>                                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-five">
            <div class="widget-content">

                <div class="header">
                    <div class="header-body">
                        <h6>Pending Tasks</h6>
                        <p class="meta-date">Nov 2019</p>
                    </div>
                    <div class="task-action">
                        <div class="dropdown  custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask">
                                <a class="dropdown-item" href="javascript:void(0);">Add</a>
                                <a class="dropdown-item" href="javascript:void(0);">View</a>
                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                <a class="dropdown-item" href="javascript:void(0);">Clear All</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-content">
                    <div class="">                                            
                        <p class="task-left">8</p>
                        <p class="task-completed"><span>12 Done</span></p>
                        <p class="task-hight-priority"><span>3 Task</span> with High priotity</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('javascript')
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_2.js"></script>
@endsection
