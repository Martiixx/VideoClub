@extends('layouts.master')
@section('content')
			<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            A�adir pel�cula
         </div>
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el m�todo POST --}}
            <form action="{{ url('/catalog/create') }}" method="post" style="display:inline">
            {{csrf_field()}}

            {{-- TODO: Protecci�n contra CSRF:ok --}}

            <div class="form-group">
               <label for="title">Titulo:</label>
               <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
            	<label for="year">A�o: </label>
            	<input type="text" name="year" id="year" >
               {{-- TODO: Completa el input para el a�o:ok --}}
            </div>

            <div class="form-group">
            	<label for="director">Director: </label>
            	<input type="text" name="director" id="director" >
               {{-- TODO: Completa el input para el director:ok --}}
            </div>

            <div class="form-group">
            	<label for="poster">Poster(link): </label>
            	<input type="text" name="poster" id="poster" >
               {{-- TODO: Completa el input para el poster:ok --}}
            </div>

            <div class="form-group">
               <label for="synopsis">Resumen</label>
               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   A�adir pelicula
               </button>
            </div>

            {{-- TODO: Cerrar formulario:OK --}}
			</form>
         </div>
      </div>
   </div>
</div>
			
@stop
