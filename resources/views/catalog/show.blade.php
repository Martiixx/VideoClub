@extends('layouts.master')
@section('content')
<div class="row">
	
	<div class="col-sm-4">
		
		<img src="{{$pelicula->poster}}" style="height:300px"/>
		<h4	style="min-height:45px;margin:5px 0	10px 0">
					
		{{-- TODO: Imagen de	la película --}}
		
	</div>
	
	<div class="col-sm-8">
    	<header>
        <h2>{{$pelicula->title}}</h2>
     	</header>		
		{{$pelicula->year}}
		
        <section class="main_review">
            <p>{{$pelicula->director}}</p>
         </section>
         @if($pelicula->rented==true)
         	<section>
            	<p>Estado: Pelicula Actualmente Alquilada</p>
         	</section>
		 @else
    		 <section>
                	<p>Estado: Pelicula Actualmente Disponible para Alquilar</p>
             </section>
		 @endif
		 <section>
            <p>{{$pelicula->synopsis}}</p>
        </section>
        @if($pelicula->rented==true)
        <form action="{{action('CatalogController@putReturn',$pelicula->id)}}" method="post" style="display:inline">
        {{method_field('PUT')}}
        {{ csrf_field()}}
        <button type="submit" class="btn btn-danger" style="display:inline" >Devolver Pelicula</button>
        </form>
        @else
        <form action="{{action('CatalogController@putRent',$pelicula->id)}}" method="post" style="display:inline">
        {{method_field('PUT')}}
        {{ csrf_field()}}
        <button type="submit" class="btn btn-danger" style="display:inline" >Arrendar Pelicula</button>
        </form>
        @endif
        <form action="{{action('CatalogController@getEdit',$pelicula->id)}}" method="get" style="display:inline">
        
        {{ csrf_field()}}
        <button type="submit" class="btn btn-danger" style="display:inline" >Editar Pelicula</button>
        </form>
        <form action="{{action('CatalogController@getIndex')}}" method="get" style="display:inline">
        
        {{ csrf_field()}}
        <button type="submit" class="btn btn-danger" style="display:inline" >Volver a Peliculas</button>
        </form>
        <form action="{{url('/catalog/delete/'.$pelicula->id)}}" method="post" style="display:inline">
        {{method_field('DELETE')}}
        {{ csrf_field()}}
        <button type="submit" class="btn btn-danger" style="display:inline" >Eliminar Pelicula</button>
        </form>
		
		
		
		
	</div>
</div>
			
@stop

