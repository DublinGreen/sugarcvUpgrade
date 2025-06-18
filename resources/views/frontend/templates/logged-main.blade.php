@extends('frontend.application.master')

@section('template-css')
@endsection

@section('template-custom-js')
@endsection

@section('layout-content')

	@if(Sentinel::check())
		@include('frontend.application.includes.topbar')
	@else
		@include('frontend.application.includes.topbar')
	@endif
	
	@yield('content')
	
	@if(Sentinel::check())
		@include('frontend.application.includes.footer')
		<!-- here included chat code for footer 26oct21 -->
		@if (env('APP_RECORD'))
		   @include('frontend.userRecord.record')
		@endif
	@else
		@include('frontend.application.includes.footer')
	@endif

@endsection

