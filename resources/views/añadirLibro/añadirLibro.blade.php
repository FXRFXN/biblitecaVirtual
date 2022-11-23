
@extends('principal')
@section('contenido')


<div class="container-fluid">
    <div class="title">
        <h1>Lista de libros</h1>
    </div>

<!-- Button trigger modal -->



<button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Añadir libro
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="añadirLibro" method="post" enctype="multipart/form-data">
 @csrf
          <div class="row">
            <div class="col">

                    <label for="" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="autor" placeholder="Autor del libro">
            </div>
            <div class="col">
                <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre libro">
            </div>
          </div>


          <div class="row">
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="editorial" placeholder="Editorial libro">
            </div>
            <div class="col">
                <label for="" class="form-label">Lugar publicacion</label>
                    <input type="text" class="form-control" name="lugarPublicacion" placeholder="Lugar publicacion">
            </div>
          </div>

          <div class="row">
            <div class="col">
                <label for="" class="form-label">Año publicacion</label>
                    <input type="text" class="form-control" name="añoPublicacion" placeholder="Año de publicacion">
            </div>
          </div>
          <div class="col">
            <label for="imagen" class="form-label">Imagen Libro</label>
                    <input type="file" class="form-control" name="imagen" >
          </div>

          <div class="col">
            <label for="pdf" class="form-label">PDF</label>
                    <input type="file" class="form-control" name="pdf" >
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


  <div class="container-fluid">

    <table class="table">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Libro</th>
            <th scope="col">Acciones</th>



          </tr>
        </thead>
        <tbody>
          <tr>
    @foreach ($alumnos as $item)
    <td>{{$item->id}}</td>

    <td>{{$item->autor}}</td>

    <td>{{$item->ombre}}</td>
    <td>
        <form action="{{route('libros.delete',$item->id)}}" method="POST">

@csrf
@method('DELETE')



<button type="submit" class="btn btn-danger">Eliminar</button>


</td>
 </form>
<td>


        <a href="{{route('libros.edit',$item->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
    </td>
    </tr>

 @endforeach
        </tbody>
      </table>


</div>

</div>






  @endsection
