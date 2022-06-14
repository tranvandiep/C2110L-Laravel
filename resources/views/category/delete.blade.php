@extends('layouts/admin')

@section('content')
<form method="post" action="{{ route('category.postDelete') }}">
	@csrf
	<div class="form-group">
		<label>Name: {{ $name }}</label>
		<input required type="text" name="id" value="{{ $id }}" style="display: none;">
	</div>
	<div class="form-group">
		<p>
			<a href="{{ route('category.index') }}">Back list page</a>
		</p>
		<button class="btn btn-danger">Continue to delete this category</button>
	</div>
</form>
@stop