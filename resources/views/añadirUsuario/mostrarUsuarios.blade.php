
@extends('principal')
@section('contenido')

<div class="titlelibros">
    <h1>Libros</h1>
</div>
<div class="container-fluid d-inline-flex p-4">

@foreach ($vistaLibros as $Libros )




    <div class="card m-2" style="width: 13rem;">
        <img src="img/portada.jpg" class="card-img-top" alt="..." >
        <div class="card-body">
          <p class="card-text"><b>NOMBRE:</b>{{$Libros->nombre}}</p>
            <p>
            <b>AUTOR:</b>{{$Libros->num_control}}
            </p>
           <a href="añadirLibro"><button type="button" class="btn btn-primary">Descargar</button></a>

           <a href=""target="_blank"><button type="button" class="btn btn-success">Ver</button></a>
        </div>
      </div>

      @endforeach

@endsection
