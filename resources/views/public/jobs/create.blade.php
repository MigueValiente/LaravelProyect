@extends('layouts.app')

@section('title','Añadir Nuevo Trabajo')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/jobs">Jobs</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>
<h1>Add New Job</h1>
  <form action="/jobs" method="post" novalidate>

    @csrf

    @include('public.jobs.partials.form')

    <button id="saveButton" type="submit" class="btn btn-primary" >Guardar Trabajo</button>

  </form>
@endsection
