
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

            <form action="{{route('libros.update',$id->id)}}" method="post">
 @csrf
 @method('PUT')
          <div class="row">
            <div class="col">

                    <label for="" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="autor" value="{{$id->autor}}">
            </div>
            <div class="col">
                <label for="" class="form-label">nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$id->ombre}}">
            </div>
          </div>


          <div class="row">
            <div class="col">
                <label for="exampleInputEmail1" class="form-label"></label>
                    <input type="text" class="form-control" name="editorial" value="{{$id->editorial}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Lugar publicacion</label>
                    <input type="text" class="form-control" name="lugarPublicacion" value="{{$id->lugarPublicacion}}">
            </div>
          </div>

          <div class="row">
            <div class="col">
                <label for="" class="form-label">Año publicacion</label>
                    <input type="text" class="form-control" name="añoPublicacion" value="{{$id->añoPublicacion}}">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>


      </div>
    </div>
  </div>





</div>






  @endsection
