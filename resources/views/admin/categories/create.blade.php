
@extends('layouts.app')

@section('content')
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="panel-default">

				<div class="panel-heading">Nova Vereador</div>
					@if($errors->any())
				    <ul class="alert">
				    	@foreach($errors->all() as $erro)
				    	     <li class="alert">{{$erro}}</li>
				    	@endforeach
				    </ul>
				    @endif
				<form enctype="multipart/form-data" action="{{ route('admin.categories.store') }}" method="POST">
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="id_nome">Nome</label>
								<input type="text" class="form-control"  name="name" placeholder="Nome da Categoria" >
							</div>
							<input class="btn btn-primary" type="submit" value="Salvar" ng-disabled="criarForm.$invalid">

						</div>		

					</div>  


				</form>
				
			</div></br>
		</div>
	</nav>
</div>

@stop



