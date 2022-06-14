@extends('layouts/admin')

@section('content')
<form method="post" action="{{ route('category.postEdit') }}">
	@csrf
	<div class="form-group">
		<label>Name: </label>
		<input required type="text" name="name" class="form-control" value="{{ $name }}">
		<input required type="text" name="id" value="{{ $id }}" style="display: none;">
	</div>
	<div class="form-group">
		<p>
			<a href="{{ route('category.index') }}">Back list page</a>
		</p>
		<button class="btn btn-warning">Update</button>
	</div>
</form>
@stop