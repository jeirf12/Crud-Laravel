@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Articulo</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('articulo.store') }}"  role="form">
							@csrf
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="number" name="codigo" id="codigo" class="form-control input-sm" placeholder="codigo del articulo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="codigo_barras" id="codigo_barras" class="form-control input-sm" placeholder="codigo barras del articulo">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" placeholder="descripcion del articulo">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="comentario" class="form-control input-sm" placeholder="comentario"></textarea>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="imagen" id="imagen" class="form-control input-sm" placeholder="Imagen">
									</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="number" name="id_tipoarticulo" id="edicion" class="form-control input-sm" placeholder="Id tipo del articulo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="number" name="stock_minimo" id="stock_minimo" class="form-control input-sm" placeholder="Stock Mínimo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="number" name="stock_maximo" id="stock_maximo" class="form-control input-sm" placeholder="Stock Maximo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="number" name="id_ubicacion" id="id_ubicacion" class="form-control input-sm" placeholder="Id ubicación">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group"> 
										<input type="number" name="existencia" id="existencia" class="form-control input-sm" placeholder="Número Existencias">
									</div>
								</div>								
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group"> 
										<input type="number" name="porcentaje_iva" id="porcentaje_iva" class="form-control input-sm" placeholder="Porcentaje del iva">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group"> 
										<input type="number" name="valor_inicial" id="valor_inicial" class="form-control input-sm" placeholder="Valor Inicial">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group"> 
										<input type="number" name="tar_1" id="tar_1" class="form-control input-sm" placeholder="Precio del articulo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group"> 
										<input type="number" name="peso" id="peso" class="form-control input-sm" placeholder="Peso">
									</div>
								</div>
							</div>
							
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('articulo.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection
