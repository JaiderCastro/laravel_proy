@extends('layouts.template')
@section('content')

<form action="" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Nombre Del Producto</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Precio</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder=" ">
  </div>
  <button type="button" class="btn btn-primary">Crear</button>
</form>
@endsection