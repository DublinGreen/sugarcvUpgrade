@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','User List')

@push('after-styles')

@endpush

@section('template-custom-js')
<script>
jQuery(function(){
	jQuery("#plans").change(function(){
		if(jQuery(this).val() == "0")
			return true;
		var url = jQuery('option:selected', this).data('url');
		window.location.href = url;
	});
});
</script>
@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="display: inline-block;">Users List</h1>
			<select id="plans" class="pull-right" style="float: right;padding: 3px 0 3px 0;">
				<option value="0">Filter By Plan </option>
				<option data-url="{{ route('admin.users') }}" {{ !isset($selected) ? 'selected' : '' }}>All Users</option>
				@foreach($plans as $plan)
					<option value="{{ $plan->id }}" {{ isset($selected) && $selected == $plan->id ? 'selected' : '' }} data-url="{{ route('admin.users.plan', ['id' => $plan->id]) }}">{{ $plan->name }}</option>
				@endforeach
			</select>
          </div>
          <div class="col-sm-6">
			
    
		  <input type="text" placeholder="Search.." name="search" id="searchdata" data-url="{{route('admin.stocks.edit')}}">
		  <button type="submit"><i class="fa fa-search"></i></button>
    
  
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Users List</li>
            </ol>
			
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
				@if(session()->has('message-success'))
				   <div class="alert alert-success">
					   {{ session()->get('message-success') }}
				   </div>
				   @elseif(session()->has('message-danger'))
				   <div class="alert alert-danger">
					   {{ session()->get('message-danger') }}
				   </div>
				   @endif
				   
				    <div class="error msg_div"></div>
        <div class="card-body pb-0">
		
          <div class="row d-flex align-items-stretch">
		  <!------------ist------------->		  				
		
		  <div class="search_result">
		  @foreach($users_detail as $user)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch" style="float:left">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$user->first_name}} {{$user->last_name}}  </b></h2>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <p>Address: {{@$user->resume_basic_detail->street}}  {{@$user->resume_basic_detail->city}} {{@$user->resume_basic_detail->state}}</p> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #:+{{$user->phone}}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{url('/asset_new/img/user/user.jpg')}}" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
					@if($user->is_ban == '1')
						<a href="javascript:void(0)" title="Click to Unlock this user." class="btn btn-sm btn-info" onclick="lock_unlock_user({{$user->id}},'0')">
						  <i class="fas fa-lock"></i>
						</a>
					@elseif($user->is_ban == '0')
						<a href="javascript:void(0)" title="Click to Lock this user." class="btn btn-sm btn-info" onclick="lock_unlock_user({{$user->id}},'1')">
						  <i class="fas fa-unlock"></i>
						</a>
					@endif
					<a href="{{route('admin.user-delete',['id' => $user->id])}}" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash"></i> Delete
                    </a>
					@if($user->userPlan->status == '1')
						<a href="javascript:void(0)" onclick="" class="btn btn-sm btn-success">
						  <i class="fas fa-bookmark"></i> Subscribed
						</a>	
					@else
						<a href="javascript:void(0)" onclick="openSubscriptionModal({{$user->id}},'{{$user->first_name}} {{$user->last_name}}')" class="btn btn-sm btn-success">
						  <i class="far fa-bookmark"></i> Subscribe
						</a>
					@endif
                    <a href="{{route('admin.user-profile',['id' => $user->id])}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
			 @endforeach
			 @if($users_detail->isEmpty())
				 <strong>Not Found</strong>
			 @endif
			</div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
             
              {{ $users_detail->links() }}
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
<div id="manual_subscribe_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		{{--<form id="manualSubscribeUserForm" class="action-form" role="form" http-type="post" method="post" data-url="{{ route('admin.manual_subscribe') }}" >--}}
		<form id="manualSubscribeUserForm" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 30px;">&times;</button>
			<h4 class="modal-title">Subscribe User <span id="u_name"></span></h4>
		  </div>
		  <div class="modal-body">
			<div class="subscription_response"></div>
			<div class="form-group">
				<label for="inputName">Select Plan</label>
				<select id="plan" name="plan" class="form-control">
					@foreach($plans as $plan){
						<option value="{{$plan->id}}">{{$plan->name}}</option>
					}
					@endforeach
				</select>
			</div>
			<input type="hidden" id="u_id" name="u_id" value="">
			<input type="hidden" id="redirect" name="redirect" value="{{Request::fullUrl()}}">
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-sm btn-primary">Subscribe</button>
			<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
		  </div>
	  </form>
    </div>

  </div>
</div>
<style>

 ul.pagination li  {
    margin: 1px !important;
    border: solid 1px #4C6376;
    padding: 7px !important;
}
.lead{
	font-size:15px ! important;
}
.card-footer{padding: .75rem 14px;}
</style>


@endsection


@push('after-scripts')
	<script>
		$(document).ready(function(){
			
			$("#manualSubscribeUserForm").submit(function(e){
				e.preventDefault();
				$.ajax({
					type : 'post',
					url  : '{{route("admin.manual_subscribe")}}',
					data : $("#manualSubscribeUserForm").serialize(),
					success: function(response){
						console.log(response);
						if(response.type == 'success'){
							$(".subscription_response").html('<div class="alert alert-success">'+response.message+'</div>');
							setTimeout(function(){ 
								window.location.href = response.redirect;
							}, 1000);
						}else{
							$(".subscription_response").html('<div class="alert alert-danger">'+response.message+'</div>');
						}
					}
				})
			})
		});
		function openSubscriptionModal(id, name){
			$("#u_name").text(' ('+name+')');
			$("#u_id").val(id);
			$("#manual_subscribe_modal").modal('show');
		}
		
		function lock_unlock_user(id,action){
			$.ajax({
				type : 'post',
				url  : '{{route("admin.lock_user")}}',
				data : {id:id,action:action},
				success: function(response){
					if(response.type == 'success'){
						$(".msg_div").html('<div class="alert alert-success">'+response.message+'</div>');
						setTimeout(function(){ 
							window.location.reload();
						}, 1000);
					}else{
						$(".msg_div").html('<div class="alert alert-danger">'+response.message+'</div>');
					}
				}
			})
		}
	</script>
@endpush