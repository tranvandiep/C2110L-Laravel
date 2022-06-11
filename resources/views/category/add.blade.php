@extends('layouts/master')

@section('content')
<form method="post" action="{{ route('category.postAdd') }}">
	@csrf
	<div class="form-group">
		<label>Category Name: </label>
		<input required type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<p>
			<a href="{{ route('category.index') }}">Back list page</a>
		</p>
		<button class="btn btn-success">Add</button>
	</div>
</form>
@stop