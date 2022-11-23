
@extends('principal')
@section('contenido')


<div class="container-fluid">
    <div class="title">
        <h1>Lista de libros prestados</h1>
    </div>

<!-- Button trigger modal -->



<button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Registrar prestamo
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar prestamo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="añadirPrestamo" method="post">
 @csrf
          <div class="row">
            <div class="col">

                    <label for="" class="form-label">Nombre libro</label>
                    <input type="text" class="form-control" name="nombreLibro" placeholder="Nombre libro">
            </div>
            <div class="col">
                <label for="" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="autor" placeholder="Autor libro">
            </div>
          </div>


          <div class="row">
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad libro">
            </div>
            <div class="col">
                <label for="" class="form-label">Nombre usuario</label>
                    <input type="text" class="form-control" name="nombreUsuario" placeholder="Nombre usuario">
            </div>
          </div>

          <div class="row">
            <div class="col">
                <label for="" class="form-label">Clave bibliotecaria</label>
                    <input type="text" class="form-control" name="claveBiblioteca" placeholder="Clave bibliotecaria">
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
    @foreach ($prestamoLibro as $item)
    <td>{{$item->id}}</td>

    <td>{{$item->nombre_libro}}</td>

    <td>{{$item->nombreUsuario}}</td>
    <td>
        <form action="{{route('prestamos.delete',$item->id)}}" method="POST">

@csrf
@method('DELETE')



<button type="submit" class="btn btn-danger">Eliminar</button>


</td>
 </form>
<td>


        <a href="{{route('prestamos.edit',$item->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
    </td>
    </tr>

 @endforeach
        </tbody>
      </table>


</div>

</div>






  @endsection
