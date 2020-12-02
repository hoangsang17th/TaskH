<!-- Extend layout web -->
@extends('layout.app')

<!-- Title page -->
@section('title', 'Task Ngáo')

<!-- includes file css of the page -->
@section('style')

@endsection

<!-- This is content of the page -->
@section('content')

@foreach ($ida as $cc) 
    {{$cc->migration}}<br>
    {{$cc->id}}<br>

@endforeach

@endsection

<!-- Includes file javascript of the page -->
@section('javascript')

@endsection