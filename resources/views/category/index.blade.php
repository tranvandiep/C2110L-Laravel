<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Category Page</title>
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
	<a href="{{ route('category.add') }}"><button class='btn btn-success mb-3'>Add New Category</button></a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th style="width: 60px"></th>
				<th style="width: 60px"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($categoryList as $item)
				<tr>
					<td>{{ ++$index }}</td>
					<td>{{ $item->name }}</td>
					<td style="width: 60px">
						<a href="{{ route('category.edit', $item->id) }}"><button class="btn btn-warning">Edit</button></a>
					</td>
					<td style="width: 60px">
						<a href="{{ route('category.delete', $item->id) }}"><button class="btn btn-danger">Delete</button></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categoryList->links() !!}
	<a href="{{ route('home') }}">Back Home</a>
</div>
</body>
</html>