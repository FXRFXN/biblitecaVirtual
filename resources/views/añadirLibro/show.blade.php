@extends('principal')
@section('contenido')
<div class="container-fluid">
<div class="row">
    <div class="col">

            <label for="" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor">
    </div>
    <div class="col">
        <label for="" class="form-label">nombre</label>
            <input type="text" class="form-control" name="nombre">
    </div>
  </div>


  <div class="row">
    <div class="col">
        <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" name="editorial">
    </div>
    <div class="col">
        <label for="" class="form-label">Lugar publicacion</label>
            <input type="text" class="form-control" name="lugarPublicacion">
    </div>
  </div>

  <div class="row">
    <div class="col">
        <label for="" class="form-label">Año publicacion</label>
            <input type="text" class="form-control" name="añoPublicacion">
    </div>
  </div>

</div>
</div>
@endsection
