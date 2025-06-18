@extends('backend.templates.main')

@section('body-classes','home logged-out')

@section('page-title','Home Page')

@push('after-styles')
<link rel="stylesheet" href="{{ url('/lib/rrweb/rrweb-player.min.css') }}" />
@endpush

@push('after-scripts')
<script src="{{ url('/lib/rrweb/rrweb-player.min.js') }}"></script>
<script>
jQuery(".watch").click(function(){
	var id = jQuery(this).data('id');
	jQuery.ajax({
		url:'{{ route("admin.recording.event") }}',
		type:'post',
		data:{id:id},
		success: function(result){
			result = JSON.parse(result);
			new rrwebPlayer({
			  target: document.getElementById('player'),
			  data: { events: result.events }
			})

			replayer.play();
			jQuery("#playerPop").modal('show');
		}
	});
});
</script>
@endpush

@section('content')
<div class="content-wrapper" style="min-height: 225px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User secreen Record</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item active">Recording</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<table class="table">
			<thead>
				<tr>
					<td>User Id</td>
					<td>PageId</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($recordings as $record)
				<tr>
					<td>{{ $record->user_id }}</td>
					<td>{{ $record->page_id }}</td>
					<td><a href="javascript:;" title="Watch" class="watch" data-id="{{  $record->id }}"><i class="fa fa-eye"></i> </a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
      </div>
    </section>
    <!-- /.content -->
  </div>
  
	  <!-- Delete -->
	<div id="playerPop" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-xl">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
		  <div class="modal-body">
			<div id="player"></div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>


@endsection
