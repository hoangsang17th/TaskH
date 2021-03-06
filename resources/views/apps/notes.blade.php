<!-- Extend layout web -->
@extends('layouts.navigation')

<!-- Title page -->
@section('title', 'Notes')

<!-- includes file css of the page -->
@section('style')
<link href="assets/css/apps/notes.css" rel="stylesheet" type="text/css" />
<link href="assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css" />
@endsection

<!-- This is content of the page -->
@section('content')
<div class="row app-notes layout-top-spacing mt-lg-2 mt-5 pt-4" id="cancel-row">
    <div class="col-lg-12">
        <div class="app-hamburger-container center">
            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
        </div>

        <div class="app-container">
            
            <div class="app-note-container">

                <div class="app-note-overlay"></div>
                <?php $cnotes = $cnotes0 + $cnotes1;?>
                <div class="tab-title">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 text-center">
                            <a id="btn-add-notes" class="btn btn-primary" href="javascript:void(0);">Add</a>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12 mt-5">
                            <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link list-actions active" id="all-notes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> All Notes ({{$cnotes}})</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link list-actions" id="note-fav"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Favourites ({{$cnotes1}})</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div id="ct" class="note-container note-grid">
                    @foreach($notes as $vnotes)
                    @if ($vnotes->Rule == 0)
                        <?php $rnote = ""; ?>
                    @else
                        <?php $rnote = "note-fav"; ?>
                    @endif
                    <div class="note-item all-notes {{ $rnote}}">
                        <div class="note-inner-content">
                            <div class="note-content">
                                <p class="note-title" data-noteTitle="{{ $vnotes->Note_Name }}">{{ $vnotes->Note_Name }}</p>
                                <p class="meta-time">{{ $vnotes->Note_Date }}</p>
                                <div class="note-description-content">
                                    <p class="note-description" data-noteDescription="{{ $vnotes->Note_Des }}">{{ $vnotes->Note_Des }}</p>
                                </div>
                            </div>
                            <div class="note-action">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            
        </div>

        <!-- Modal -->
        <div class="modal fade" id="notesMailModal" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        <div class="notes-box">
                            <div class="notes-content">                                                                        
                                <form action="javascript:void(0);" id="notesMailModalTitle">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex note-title">
                                                <input type="text" id="n-title" class="form-control" maxlength="25" placeholder="Title">
                                            </div>
                                            <span class="validation-text"></span>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="d-flex note-description">
                                                <textarea id="n-description" class="form-control" maxlength="60" placeholder="Description" rows="3"></textarea>
                                            </div>
                                            <span class="validation-text"></span>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn-n-save" class="float-left btn">Save</button>
                        <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Discard</button>
                        <button id="btn-n-add" class="btn">Add</button>
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
<script src="assets/js/apps/notes.js"></script>
@endsection