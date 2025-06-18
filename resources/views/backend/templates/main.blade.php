@extends('backend.application.master')

@section('template-css')
@endsection

@section('template-custom-js')
@endsection

@section('layout-content')
	@include('backend.application.includes.topbar')
	<div class="app-body">
	@include('backend.application.includes.sidebar')
		<main class="main">
			@include('backend.application.includes.breadcrumb')
			@yield('content')
		</main>
	</div>
	@include('backend.application.includes.footer')

@endsection
