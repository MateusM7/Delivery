@extends('layouts.app')

@section('content')
<div class="container">

	<table class="table table-bordered">
		<a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Nova Categoria</a>
		<thead>
			<tr>    
				<th>Id</th>          		    
				<th>Nome</th>
				<th>Ações..</th>
				<th>....</th>
				
			</tr>
		</thead>

		<tbody>
			@foreach($categories as $category)
			<tr>

				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
				<td><a class="btn btn-success" href="{{ route('admin.categories.edit',$category->id) }}">Editar</a></td>
				<td><a class="btn btn-danger" href="{{ route('admin.categories.destroy',$category->id) }}">Excluir</a></td>


			</tr>
			@endforeach

		</tbody>


	</table>

     {!! $categories->render() !!}
	<div>


		@endsection