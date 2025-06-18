@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')

@endpush

@section('template-custom-js')
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{isset($plan_detail)? 'Edit':'Add'}} Plan </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
			  @if(isset($plan_detail))
              <li class="breadcrumb-item"><a href="{{route('admin.plans')}}">Add Plan</a></li>
				@endif
              <li class="breadcrumb-item active">{{isset($plan_detail)? 'Edit':''}} Plans </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
     
        <div class="col-md-4">
		 <div class="error msg_div"></div>
		 @if(isset($plan_detail))
			 <form id="quickForm" class="action-form" role="form" http-type="post" method="post" data-url="{{ route('admin.update_plans',['id' => $plan_detail->id]) }}" >
		 @else
		 <form id="quickForm" class="action-form" role="form" http-type="post" method="post" data-url="{{ route('admin.add_plans') }}" >
		 @endif
		
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{isset($plan_detail)? 'Edit':'Add'}} Plan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Plan Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ (isset($plan_detail) && $plan_detail->name)? $plan_detail->name:''}}">
				<div id="notmatch"></div>
              </div>
              <div class="form-group">
                <label for="inputDescription">plan Description</label>
                <textarea id="inputDescription" class="form-control"  name="description" rows="4">{{ (isset($plan_detail) && $plan_detail->description)? $plan_detail->description:''}}</textarea>
              </div>
              
               <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget"  name="prices" class="form-control" value="{{ (isset($plan_detail) && $plan_detail->prices)? $plan_detail->prices:''}}">
              </div>
				@if(isset($plan_detail))
				<div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select" name="status">
                
                  <option value="0" {{(isset($plan_detail) && $plan_detail->status == 0)?'selected':''}}>Active</option>
                  <option value="1" {{(isset($plan_detail) && $plan_detail->status == 1)?'selected':''}}>Block</option>
                  
                </select>
              </div>
			  @endif
              <!--div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div--->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
		  <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <button type="submit" value="" class="btn btn-success float-right">{{isset($plan_detail)? 'Update':'Submit'}}</button>
        </div>
      </div>
		  </form>
        </div>
		
	
        <div class="col-md-8">
					 
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Plans List</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
				@if(session()->has('message-success'))
				   <div class="alert alert-success">
					   {{ session()->get('message-success') }}
				   </div>
				   @elseif(session()->has('message-danger'))
				   <div class="alert alert-danger">
					   {{ session()->get('message-danger') }}
				   </div>
				   @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Plan Name</th>
                  <th>Description</th>
                  <th>Prices</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
				@foreach($plans as $plan)
                <tr>
                  <td><a href="{{route('admin.user_per_plan',['id'=>$plan->id])}}">{{ $plan->name }}</a></td>
                  <td>{{ $plan->description }}
                  </td>
                  <td>${{ $plan->prices }}/Month</td>
                  <td>
				    @if($plan->status == 0)
						<button class="btn btn-success">Active</button>
					@else
						<button class="btn btn-danger">Block</button>
					@endif
				  
				  </td>
                  <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{route('admin.edit_plan',['id'=>$plan->id])}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{route('admin.delete_plan',['id'=>$plan->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                </tr>
               @endforeach
                </tbody>
              </table>
			
            </div>           
          </div>         
        </div>
      </div>
      <br><br>
    </section>
    <!-- /.content -->
  </div>
 
@endsection
