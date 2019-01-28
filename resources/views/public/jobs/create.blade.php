@extends('layouts.app')

@section('title','Añadir Nuevo Trabajo')

@section('content')
  <form action="/jobs" method="post" novalidate>

    @csrf

    @include('public.jobs.partials.form')

    <button type="submit" class="btn btn-primary" >Guardar Trabajo</button>

  </form>
@endsection
