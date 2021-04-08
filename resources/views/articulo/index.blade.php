@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-18 col-md-offset-0">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="pull-left"><h2>Lista Articulos</h2></div>
            <div class="pull-right">
              <div class="btn-group">
                <a href="{{ route('articulo.create') }}" class="btn btn-info" >Añadir Articulo</a>
              </div>
            </div>
			<table id="mytable" class="table table-bordered table-striped">
               <thead>
				<th>Id Articulo</th>
               	<th>Codigo</th>
               	<th>Codigo Barras</th>
               	<th>Descripcion</th>
               	<th>Comentario</th>
               	<th>Imagen</th>
               	<th>Id Tipo Articulo</th>
               	<th>Stock Mínimo</th>
               	<th>Stock Máximo</th>tne
               	<th>Id Ubicacion</th>
               	<th>Numero Existencias</th>
               	<th>Porcentaje Iva</th>
	           	<th>Valor Inicial</th>
               	<th>Tarifa</th>
               	<th>Peso</th>
               	<th>Editar</th>
               	<th>Eliminar</th>
              </thead>
              <tbody>
              @if( $articulos->count() )  
             	 @foreach( $articulos as $articulo )  
             	 <tr>
					<td>{{ $articulo->id_articulo }}</td>
                 	<td>{{ $articulo->codigo }}</td>
                 	<td>{{ $articulo->codigo_Barras }}</td>
                 	<td>{{ $articulo->descripcion }}</td>
                 	<td>{{ $articulo->comentario }}</td>
                 	<td>{{ $articulo->imagen }}</td>
                 	<td>{{ $articulo->id_tipoarticulo }}</td>
		         	<td>{{ $articulo->stock_minimo }}</td>
                 	<td>{{ $articulo->stock_maximo }}</td>
                 	<td>{{ $articulo->id_ubicacion }}</td>
                 	<td>{{ $articulo->existencia }}</td>
		         	<td>{{ $articulo->porcentaje_iva }}</td>
                 	<td>{{ $articulo->valor_inicial }}</td>
                 	<td>{{ $articulo->tar_1 }}</td>
                 	<td>{{ $articulo->peso  }}</td>
                 	<td><a class="btn btn-primary btn-xs" href="{{action('ArticuloController@edit', $articulo->id_articulo)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                 	<td>
                    	<form action="{{action('ArticuloController@destroy', $articulo->id_articulo)}}" method="POST">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    	<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                 	</td>
            	 </tr> 
            	 @endforeach
               @else
            	 <tr>
                	<td colspan="8">No hay registro !!</td>
            	 </tr>
              @endif
              </tbody>
            </table>
        </div>
        {{ $articulos->links() }}
      </div> 
    </div>
  </section>
@endsection 
