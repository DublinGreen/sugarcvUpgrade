@extends('frontend.application.master')

@section('template-css')
@endsection

@section('template-custom-js')
@endsection

@section('layout-content')
	@if(\Sentinel::check())
		@include('frontend.application.includes.topbar')
	@else
		@include('frontend.application.includes.topbar')
	@endif
	
	@yield('content')
	
	@include('frontend.application.includes.footer')

@endsection
