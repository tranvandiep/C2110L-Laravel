<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Category Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
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
</div>
</body>
</html>