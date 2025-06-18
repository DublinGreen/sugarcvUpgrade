<div class="btn-toolbar custom-dropdown" role="toolbar">
  <div class="btn-group">
	<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
	<div class="dropdown-menu">
	  <a class="dropdown-item" data-event="edit" data-url="{{ route('admin.settings.CommissionPayout.get',['id' => $model->id]) }}">Edit</a>
	  <a class="dropdown-item" data-event="delete" data-toggle="modal" data-target="#deleteModal" data-id="{{ $model->id }}">Delete</a>
	</div>
  </div>
</div>
