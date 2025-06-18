<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('admin.users.resume.edit', ['id' => $model->id]) }}">View/Edit</a>
    <a class="dropdown-item" data-toggle="modal" data-target="#deletePop">Delete</a>
  </div>
</div>