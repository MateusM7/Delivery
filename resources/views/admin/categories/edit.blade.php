
@extends('layouts.app')

@section('content')
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="panel-default">

				<div class="panel-heading">Editando a Categoria {{$category->name}}</div>
					@if($errors->any())
				    <ul class="alert">
				    	@foreach($errors->all() as $erro)
				    	     <li class="alert">{{$erro}}</li>
				    	@endforeach
				    </ul>
				    @endif
				<form enctype="multipart/form-data" action="{{ route('admin.categories.update',$category->id) }}" method="POST">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="id_nome">Nome</label>
								<input type="text" class="form-control"  name="name" value="{{$category->name}}" >
							</div>
							<input class="btn btn-primary" type="submit" value="Salvar Categoria" >

						</div>		

					</div>  


				</form>
				
			</div></br>
		</div>
	</nav>
</div>

@stop



