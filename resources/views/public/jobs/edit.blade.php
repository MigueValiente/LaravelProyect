@extends('public.layout')

@section('title','Editar Trabajo')

@section('content')
  <form action="/jobs/{{$job->id}}" method="post">

    @csrf

    @method('patch')
    <div class="form-group">
      <label for="job_name">Nombre del Trabajo</label>
      <input type="text" id="job_name" class="form-control" name="job_name" placeholder="Introduzca el nombre del trabajo" value="{{$job->job_name}}">
    </div>

    <div class="form-group">
      <label for="creator">Creador</label>
      <input type="text" id="creator" class="form-control" name="creator" placeholder="Introduzca el autor" value="{{$book->creator}}">
    </div>

    <div class="form-group">
      <label for="description">Descripcion</label>
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripcion del libro">{{$job->description}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary" >Guardar Cambios</button>

  </form>
@endsection
