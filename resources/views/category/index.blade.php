@extends('layouts/master')

@section('content')
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
@stop