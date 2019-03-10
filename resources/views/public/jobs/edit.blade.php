@extends('layouts.app')

@section('title','Editar Trabajo')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/jobs">Jobs</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>
<h1>Edit Job</h1>
  <form action="/jobs/{{$job->id}}" method="post" novalidate>

    @csrf

    @method('patch')
    @include('public.jobs.partials.form')

    <button type="submit" class="btn btn-primary" >Guardar Cambios</button>

  </form>
@endsection
