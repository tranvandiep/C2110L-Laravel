@extends('layouts/admin')

@section('js')
<script type="text/javascript">
	$(function() {
		$('[name=content]').summernote({
	        placeholder: 'Enter content',
	        tabsize: 2,
	        height: 300,
	        toolbar: [
	          ['style', ['style']],
	          ['font', ['bold', 'underline', 'clear']],
	          ['color', ['color']],
	          ['para', ['ul', 'ol', 'paragraph']],
	          ['table', ['table']],
	          ['insert', ['link', 'picture', 'video']],
	          ['view', ['fullscreen', 'codeview', 'help']]
	        ]
	      });
	})
</script>
@stop

@section('content')
<form method="post" action="{{ route('product.store') }}">
	@csrf
	<div class="form-group">
		<label>Title: </label>
		<input required type="text" name="title" class="form-control">
	</div>
	<div class="form-group">
		<label>Price: </label>
		<input required type="number" name="price" class="form-control">
	</div>
	<div class="form-group">
		<label>Num: </label>
		<input required type="number" name="num" class="form-control">
	</div>
	<div class="form-group">
		<label>Category Name: </label>
		<select class="form-control" name="category_id">
			<option value="">-- Select --</option>
			@foreach($categoryList as $item)
				<option value="{{ $item->id }}">{{ $item->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Content: </label>
		<textarea class="form-control" rows="5" name="content"></textarea>
	</div>
	<div class="form-group">
		<p>
			<a href="{{ route('product.index') }}">Back list page</a>
		</p>
		<button class="btn btn-success">Add</button>
	</div>
</form>
@stop