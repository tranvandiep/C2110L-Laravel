@extends('layouts/master')

@section('content')
<a href="{{ route('product.create') }}"><button class='btn btn-success mb-3'>Add New Product</button></a>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Category Name</th>
			<th>Updated At</th>
			<th style="width: 60px"></th>
			<th style="width: 60px"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($productList as $item)
			<tr>
				<td>{{ ++$index }}</td>
				<td>{{ $item->title }}</td>
				<td>{{ number_format($item->price, 0) }} VND</td>
				<td>{{ $item->category_name }}</td>
				<td>{{ $item->updated_at }}</td>
				<td style="width: 60px">
					<a href="{{ route('product.edit', $item->id) }}"><button class="btn btn-warning">Edit</button></a>
				</td>
				<td style="width: 60px">
					<a href="{{ route('product.show', $item->id) }}"><button class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
{!! $productList->links() !!}
<a href="{{ route('home') }}">Back Home</a>
@stop