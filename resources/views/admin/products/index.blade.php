@extends('layouts.app')

@section('content')
<div class="container">

	<table class="table table-bordered">
		<a class="btn btn-primary" href="{{ route('admin.products.create') }}">Nova Produto</a>
		<thead>
			<tr>    
				<th>Id</th>          		    
				<th>Nome</th>
				<th>Preço</th>
				<th>Categoria</th>
				
			</tr>
		</thead>

		<tbody>
			@foreach($products as $product)
			<tr>

				<td>{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->price}}</td>
				<td>{{$product->category->name}}</td>
				<td><a class="btn btn-success" href="{{ route('admin.products.edit',$product->id) }}">Editar</a></td>
				<td><a class="btn btn-danger" href="{{ route('admin.products.destroy',$product->id) }}">Excluir</a></td>


			</tr>
			@endforeach

		</tbody>


	</table>

     {!! $products->render() !!}
	<div>


		@endsection