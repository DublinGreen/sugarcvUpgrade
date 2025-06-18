@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Deals Email')

@push('after-styles')
@endpush

@section('template-custom-js')
@endsection

@section('content')
<div class="container-fluid">
	<div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
		<section class="">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
						<strong>Morning Email Configurations <a href="{{route('admin.emails.preview', ['type' => 'morning'])}}" class="pull-right"><i class="fa fa-eye"></i> Preview</a></strong>
						</div>
						<form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.emails.updateSettings') }}" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group row">
									<label class="col-md-4 col-form-label" for="offer_amount">Subject:</label>
									<div class="col-md-8">
										<input class="form-control" id="morning_subject" type="text" name="morning_subject" value="{{$data['morning_subject']}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label" for="morning_offers">Offer Ids:</label>
									<div class="col-md-8">
										<input class="form-control" id="morning_offers" type="text" name="morning_offers" value="{{$data['morning_offers']}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label" for="offer_period">Banner:</label>
									<div class="col-md-8">
										<input class="form-control1" id="morning_banner" type="file" name="morning_banner">
										<div class="">
											<img src='{{url("/images/banners/{$data["morning_banner"]}")}}' style="max-width:100%;margin-top:20px;">
										</div>
									</div>
									
								</div>
							</div>
							<div class="card-footer">
								<input type="hidden" name="email_type" value="morning">
								<button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
							</div>
						</form>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
						<strong>Evening Email Configurations <a href="{{route('admin.emails.preview', ['type' => 'evening'])}}" class="pull-right"><i class="fa fa-eye"></i> Preview</a></strong>
						</div>
						<form class="form-horizontal action-form" data-parsley-validate="" role="form" http-type="post" data-url="{{ route('admin.emails.updateSettings') }}" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group row">
									<label class="col-md-4 col-form-label" for="evening_subject">Subject:</label>
									<div class="col-md-8">
										<input class="form-control" id="evening_subject" type="text" name="evening_subject" value="{{$data['evening_subject']}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label" for="evening_offers">Offer Ids:</label>
									<div class="col-md-8">
										<input class="form-control" id="evening_offers" type="text" name="evening_offers" value="{{$data['evening_offers']}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label" for="evening_banner">Banner:</label>
									<div class="col-md-8">
										<input class="form-control1" id="evening_banner" type="file" name="evening_banner">
										<div class="">
											<img src='{{url("/images/banners/{$data["evening_banner"]}")}}' style="max-width:100%;margin-top:20px;">
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<input type="hidden" name="email_type" value="evening">
								<button class="btn btn-sm btn-primary" type="submit"><span class="btn-label">Submit</span><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection
