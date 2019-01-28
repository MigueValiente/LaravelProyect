@extends('public.layout')

@section('title','Añadir Nuevo Trabajo')

@section('content')
  <form action="/jobs" method="post">

    @csrf

    @include('public.jobs.partials.form')

    <button type="submit" class="btn btn-primary" >Guardar Trabajo</button>

  </form>
@endsection
