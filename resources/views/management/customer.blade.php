<!-- Extend layout web -->
@extends('layouts.navigation')

<!-- Title page -->
@section('title', 'TaskGo IT')

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