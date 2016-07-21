
@extends('layouts.app')

@section('content')
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="panel-default">

				<div class="panel-heading" style="background:#b3384e!important; color:#fff;"><strong>Editar Produto :  {{$product->name}}</strong></div>
					@if($errors->any())
				    <ul class="alert">
				    	@foreach($errors->all() as $erro)
				    	     <li class="alert">{{$erro}}</li>
				    	@endforeach
				    </ul>
				    @endif
				<form enctype="multipart/form-data" action="{{ route('admin.products.update',$product->id) }}" method="POST">
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="id_nome">Nome</label>
								<input type="text" class="form-control"  name="name" value="{{$product->name}}"  >
							</div>
							<div class="form-group">
								<label for="id_nome">Descrição</label>
								 <textarea name="description" class="form-control">{{$product->description}}</textarea>
							</div>
							<div class="form-group">
								<label for="id_nome">Preço</label>
								<input type="number" class="form-control"  name="price" value="{{$product->price}}" >
							</div>
							<div class="form-group">
								<label>Categorias</label>
								<select  class="form-control" id="id_tipo" name="category_id"  >
								  <option value= '{{$product->category_id}}' SELECTED>{{$product->category->name}}</option>
									@foreach($categories as $category)
									<option  value='{{$category->id}}'>{{$category->name}}</option>
									@endforeach
								</select>
							</div>
							<input class="btn btn-primary" type="submit" value="Salvar">
					   </div>		

							<div class="col-xs-7">
								<div class="row">
									<div class="col-xs-8">
										<img src="/imagens/products/{{$product->avatar}}" class="img-thumbnail" style="width:230px; height:230px; float:left; borde-radius:50%; margin-right:25px;"> 
										<div class="col-md-8 col-md-offset-1">
											<label>Imagem do Produto</label>
											<input type="file" name="avatar" class="pull-right btn btn-sm btn-success">
										</div>  
									</div>  
								</div>   
							</div>  
						
					</div>  


				</form>
				
			</div></br>
		</div>
	</nav>
</div>

@stop



