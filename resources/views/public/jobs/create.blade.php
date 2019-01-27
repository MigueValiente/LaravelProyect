@extends('public.layout')

@section('title','Añadir Nuevo Trabajo')

@section('content')
  <form action="/books" method="post">

    @csrf

    <div class="form-group">
      <label for="job_name">Nombre del Trabajo</label>
      <input type="text" id="job_name" class="form-control" name="job_name" placeholder="Introduzca el nombre del trabajo">
    </div>

    <div class="form-group">
      <label for="creator">Creador</label>
      <input type="text" id="creator" class="form-control" name="creator" placeholder="Introduzca su nombre">
    </div>

    <div class="form-group">
      <label for="description">Descripcion</label>
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripcion del trabajo"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" >Guardar Trabajo</button>

  </form>
@endsection
