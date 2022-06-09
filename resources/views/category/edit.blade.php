<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Category Page</title>
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
</div>
</body>
</html>