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
            <h1>{{isset($skill_detail)? 'Edit':'Add'}} Skills </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
			  @if(isset($skill_detail))
              <li class="breadcrumb-item"><a href="{{route('admin.skills')}}">Add Skills</a></li>
				@endif
              <li class="breadcrumb-item active">{{isset($skill_detail)? 'Edit':''}} Skills </li>
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
		 @if(isset($skill_detail))
			 <form class="action-form" role="form" http-type="post" method="post" data-url="{{ route('admin.update_skills',['id' => $skill_detail->id]) }}" >
		 @else
		 <form id="quickForm" class="action-form" role="form" http-type="post" method="post" data-url="{{ route('admin.add_skills') }}" >
		 @endif
		
		
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{isset($skill_detail)? 'Edit':'Add'}} Skill</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="inputDescription">Skill Title</label>
                <textarea id="inputDescription" class="form-control"  name="skill_name" rows="4">{{ (isset($skill_detail) && $skill_detail->skill_name)? $skill_detail->skill_name:''}}</textarea>
              </div>
              
              <div class="form-group">
                <label for="inputStatus">Category</label>
                <select class="form-control custom-select" name="category">
                 <option value="0" >IT</option>
                </select>
              </div>
				@if(isset($skill_detail))
				<div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select" name="status">
                
                  <option value="0" {{(isset($skill_detail) && $skill_detail->status == 0)?'selected':''}}>Active</option>
                  <option value="1" {{(isset($skill_detail) && $skill_detail->status == 1)?'selected':''}}>Block</option>
                  
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
          <button type="submit" value="" class="btn btn-success float-right">{{isset($skill_detail)? 'Update':'Submit'}}</button>
        </div>
      </div>
		  </form>
        </div>
		
	
        <div class="col-md-8">
					 
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Skills List</h3>
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
                   <th>skill Title</th>                  
                  <th>Category</th>
                  <th>Status</th>
                  <th>Action</th> 
                  
                </tr>
                </thead>
                <tbody>
				@foreach($Skills as $Skill)
               <tr>
                 
                  <td>{{ $Skill->skill_name }}
                  </td>
                  <td>IT</td>
                  <td>
				    @if($Skill->status == 0)
						<button class="btn btn-success">Active</button>
					@else
						<button class="btn btn-danger">Block</button>
					@endif
				  
				  </td>
                  <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{route('admin.edit_skill',['id'=>$Skill->id])}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{route('admin.delete_skill',['id'=>$Skill->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
