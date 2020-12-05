<!-- Extend layout web -->
@extends('layouts.navigation')

<!-- Title page -->
@section('title', 'ToDo List')

<!-- includes file css of the page -->
@section('style')
<link rel="stylesheet" type="text/css" href="plugins/editors/quill/quill.snow.css">
<link href="assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />
@endsection

<!-- This is content of the page -->
@section('content')

<div class="col-xl-12 col-lg-12 col-md-12 mt-lg-0 mt-5 pt-2">
    <div class="mail-box-container">
        <div class="mail-overlay"></div>

        <div class="tab-title">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                    <h5 class="app-title">Todo List</h5>
                </div>

                <div class="todoList-sidebar-scroll">
                    <div class="col-md-12 col-sm-12 col-12 mt-4 pl-0">
                        <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link list-actions active" id="all-list" data-toggle="pill" href="#pills-inbox" role="tab" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> Inbox <span class="todo-badge badge"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link list-actions" id="todo-task-done" data-toggle="pill" href="#pills-sentmail" role="tab" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> Done <span class="todo-badge badge"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <a class="btn" id="addTask" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> New ToDo</a>
            </div>
        </div>

        <div id="todo-inbox" class="accordion todo-inbox">
            <div class="search">
                <input type="text" class="form-control input-search" placeholder="Search Here...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </div>
    
            <div class="todo-box">
                <div id="ct" class="todo-box-scroll">
                    @foreach ($todo as $value)
                        @if ($value->Completion_Date!= "")
                            <?php $task = "todo-task-done"; ?>
                        @else
                            <?php $task = ""; ?>
                        @endif
                        <div class="todo-item {{$task}} all-list">
                            <div class="todo-item-inner">
                                <div class="n-chk text-center">
                                    <label class="new-control new-checkbox checkbox-primary">
                                        <input type="checkbox" class="new-control-input inbox-chkbox">
                                        <span class="new-control-indicator"></span>
                                    </label>
                                </div>

                                <div class="todo-content">
                                    <h5 class="todo-heading" data-todoHeading="{{$value->Mission_ToDo}}">{{$value->Mission_ToDo}}</h5>
                                    <p class="meta-date">{{$value->created_at}}</p>
                                    <p class="todo-text" data-todoHtml="<p>{{$value->Des_ToDo}}.</p>" data-todoText='{"ops":[{"insert":"{{$value->Des_ToDo}}"}]}'>{{$value->Des_ToDo}}</p>
                                </div>
                                <div class="action-dropdown custom-dropdown-icon">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-4">
                                            <a class="edit dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="modal fade" id="todoShowListItem" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                <div class="compose-box">
                                    <div class="compose-content">
                                        <h5 class="task-heading"></h5>
                                        <p class="task-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>                                    
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    <div class="compose-box">
                        <div class="compose-content" id="addTaskModalTitle">
                            <h5 class="">Add ToDo</h5>
                            <form action="{{ route('todo.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex mail-to mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 flaticon-notes"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                            <div class="w-100">
                                                <input type="text" placeholder="Task" class="form-control" name="Mission_ToDo">
                                                <span class="validation-text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mail-subject mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text flaticon-menu-list"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="w-100">
                                        {{-- <div id="taskdescription" class=""></div>
                                        <span class="validation-text"></span> --}}
                                        <textarea name="Des_ToDo" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                    <button class="btn add-tsk" type="submit">Add Task</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection

<!-- Includes file javascript of the page -->
@section('javascript')
<script src="assets/js/ie11fix/fn.fix-padStart.js"></script>
<script src="plugins/editors/quill/quill.js"></script>
<script src="assets/js/apps/todoList.js"></script>
@endsection