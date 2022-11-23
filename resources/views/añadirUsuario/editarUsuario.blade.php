
@extends('principal')
@section('contenido')


<div class="container-fluid">


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Editar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{route('usuarios.update',$id->id)}}" method="post">
 @csrf
 @method('PUT')
 <div class="row">
    <div class="col">

            <label for="" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombres" placeholder="Nombre de pila"  value="{{$id->nombre}}">
    </div>

    <div class="col">
        <label for="exampleInputEmail1" class="form-label">Apellido materno</label>
            <input type="text" class="form-control" name="materno" placeholder="Apellido materno"  value="{{$id->apellido_materno}}">
    </div>
  </div>


  <div class="row">

    <div class="col">
        <label for="" class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" name="paterno" placeholder="Apellido paterno"  value="{{$id->apellido_paterno}}">
    </div>


    <div class="col">
        <label for="" class="form-label">Numero control bibliotecario</label>
            <input type="text" class="form-control" name="num_control" placeholder="Clave unica bibliotecaria" value="{{$id->num_control}}">
    </div>
  </div>

  <div class="row">
    <div class="col">
        <label for="" class="form-label">Domicilio</label>
            <input type="text" class="form-control" name="domicilio" placeholder="Domicilio" value="{{$id->domicilio}}">
    </div>
    <div class="col">
        <label for="" class="form-label">Numero telefono</label>
            <input type="text" class="form-control" name="numero_telefono" placeholder="981234567" value="{{$id->num_telefono}}">
    </div>
  </div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>
    </form>


      </div>
    </div>
  </div>





</div>






  @endsection
