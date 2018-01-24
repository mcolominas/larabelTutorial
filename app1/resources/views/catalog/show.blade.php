@extends('layouts.master')

@section('content')

    <div class="row">

	    <div class="col-sm-4 text-right">

	        <img src="{{$pelicula['poster']}}"/>

	    </div>
	    <div class="col-sm-8">

	        <h2>{{ $pelicula['title'] }}</h2>
	        <span>Año: {{ $pelicula['year'] }}</span>
	        <br>
	        <p>Director: {{ $pelicula['director'] }}</p>
	        <p><b>Resumen:</b> {{ $pelicula['synopsis'] }}</p>

	        @if( $pelicula['rented'])
	        	<p><b>Estado:</b> Película actualmente alquilada</p>
				<button type="button" class="btn btn-danger">Devolver película</button>
	        @else
	        	<p><b>Estado:</b> Película disponible</p>
				<button type="button" class="btn btn-primary">Película disponible</button>
	        @endif

	        <button type="button" class="btn btn-warning">Editar película</button>
	        <button type="button" class="btn btn-default">Volver al listado</button>


	    </div>
	</div>

@stop