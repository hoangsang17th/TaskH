@extends('layouts.navigation')
@section('title')
{{$project->Project_Name}}
@endsection
@section('style')
{{-- <link href="{{ asset('assets/css/components/timeline/custom-timeline.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" /> --}}
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_multiple_tables.css')}}">
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
            <div class="row">
                <div class="col-6"><p class="text-primary h5">Total: {{$Count}}</p></div>
                <div class="col-6 text-right">
                    <a href="#Add-Employ"><p class="btn btn-outline-primary">Add Staff</p></a>
                </div>
            </div>
            
            <div class="table-responsive mb-4 mt-4">
                <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th class="text-dark text-right action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slack"><path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path><path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path><path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path><path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path><path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path><path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path><path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path><path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path></svg>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($StaffProject as $value)
                        <tr>
                            <td>{{$value->user->name}}</td>
                            <td>
                                @if ($value->Role_ID == 1)
                                    <?php echo "<span class='badge outline-badge-warning'> Manager </span>";?>                                
                                @elseif($value->Role_ID == 2)
                                    <?php echo "<span class='badge outline-badge-primary'> Leader </span>";?>                                
                                @elseif($value->Role_ID == 3)
                                    <?php echo "<span class='badge outline-badge-success'> Staff </span>";?>                                
                                @elseif($value->Role_ID == 4)
                                    <?php echo "<span class='badge outline-badge-danger'> Error </span>";?>
                                @endif
                                
                            </td>

                            <td class="text-right">
                                <form action="{{ route('all_project.destroy' , $value->id)}}" method="POST">
                                    <input name="_method" type="hidden" value="DELETE">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-outline-danger px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th class="text-dark text-right action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slack"><path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path><path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path><path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path><path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path><path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path><path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path><path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path><path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path></svg>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="widget-content widget-content-area br-6 layout-top-spacing" id="Add-Employ">
            <label for="Add-Employ">Add employees to the project</label>
            <div class="row">
                <div class="col-10">
                    <select class="form-control" name="Add-Employ">
                        <option value="0">0. TaskGo Corp</option>
                        @foreach ($StaffProject as $value)
                            <option value="{{$value->user->name}}">{{$value->user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <p class="btn btn-outline-primary">Add Staff</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
<script>
    $(document).ready(function() {
        $('table.multi-table').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () {
                $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                $('.dataTables_wrapper table').removeClass('table-striped');
            }
        });
    } );
</script>
@endsection