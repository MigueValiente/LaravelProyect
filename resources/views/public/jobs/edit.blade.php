@extends('public.layout')

@section('title','Editar Trabajo')

@section('content')
  <form action="/jobs/{{$job->id}}" method="post">

    @csrf

    @method('patch')
    @include('public.jobs.partials.form')

    <button type="submit" class="btn btn-primary" >Guardar Cambios</button>

  </form>
@endsection
