
@extends('principal')
@section('contenido')


<div class="container-fluid">
    <div class="title">
        <h1>Lista de usuarios</h1>
    </div>

<!-- Button trigger modal -->



<button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Añadir usuario
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="añadirUsuario" method="post">
 @csrf
          <div class="row">
            <div class="col">

                    <label for="" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres" placeholder="Nombre de pila">
            </div>

            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" name="materno" placeholder="Apellido materno">
            </div>
          </div>


          <div class="row">

            <div class="col">
                <label for="" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" name="paterno" placeholder="Apellido paterno">
            </div>


            <div class="col">
                <label for="" class="form-label">Numero control bibliotecario</label>
                    <input type="text" class="form-control" name="num_control" placeholder="Clave unica bibliotecaria">
            </div>
          </div>

          <div class="row">
            <div class="col">
                <label for="" class="form-label">Domicilio</label>
                    <input type="text" class="form-control" name="domicilio" placeholder="Domicilio">
            </div>
            <div class="col">
                <label for="" class="form-label">Numero telefono</label>
                    <input type="text" class="form-control" name="numero_telefono" placeholder="981234567">
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
            <th scope="col">Numero control</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>



          </tr>
        </thead>
        <tbody>
          <tr>
    @foreach ($usuarios as $item)

    <td>{{$item->id}}</td>
    <td>{{$item->nombre}}</td>
    <td>{{$item->num_control}}</td>
    <td>{{$item->num_telefono}}</td>
    <td>


        <form action="{{route('usuarios.delete',$item->id)}}" method="POST">

@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Eliminar</button>
</td>
 </form>
<td>


        <a href="{{route('usuarios.edit',$item->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
    </td>
    </tr>

 @endforeach
        </tbody>
      </table>


</div>

</div>






  @endsection
