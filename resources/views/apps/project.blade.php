<!-- Extend layout web -->
@extends('layouts.navigation')

<!-- Title page -->
@section('title', 'Project')

<!-- includes file css of the page -->
@section('style')
    <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <style>
        .card-body .card-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 50px;
            max-width: 400px;
        }
    </style>
@endsection

<!-- This is content of the page -->
@section('content')
<div class="row layout-spacing mt-5 mt-lg-0 justify-content-center">
    
@foreach ($project as $v_project)
    <a href="/projects/{{$v_project->Project_ID}}">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 layout-top-spacing">
            <div class="card component-card_3">
                <div class="card-body">
                    <img src="assets/img/avatar-4.png" class="card-img-top" alt="...">
                    <h5 class="card-user_name mt-3">{{$v_project->project->Project_Name}}</h5>
                    @if ($v_project->project->Start_Date =="")
                        <p class="card-user_occupation">Waiting</p>
                    @endif
                    <p class="card-user_occupation">{{$v_project->project->Start_Date}}</p>
                    <div class="card-star_rating">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <p class="card-text">{{$v_project->project->Des_Project}}</p>
                </div>
            </div>
        </div>
    </a>
@endforeach
<div class="col-12 layout-top-spacing">
    <blockquote class="blockquote media-object">
        <div class="media">
            <div class="usr-img mr-2">
                <img alt="avatar" src="assets/img/avatar-5.png" class="br-30">
            </div>
            <div class="media-body align-self-center">
                <p class="d-inline">You have free time and need more projects, <a href="mailto: phsang49@gmail.com" class="text-primary">contact now</a></p>
            </div>
        </div>
        <small class="text-right"><cite title="Source Title">Hoàng Sang</cite></small>
    </blockquote>
</div>
</div>


@endsection

<!-- Includes file javascript of the page -->
@section('javascript')

@endsection