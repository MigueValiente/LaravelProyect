@extends('layouts.app')

@section('title','Trabajos')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Jobs</li>
        </ol>
    </nav>
    <h1 class="text-center">Lista de Trabajos</h1>
    <div class="container col-sm-3 col-md-6 col-lg-10 col-xl-12 pl-sm-1 pl-md-1 pl-lg-0 pl-xl-0">
      <div id="buscador" class="buscador mb-sm-1 mb-md-1 mb-lg-2 mb-xl-2">
        <form id="searchForm">
            <input type="text" id="inputBuscador" name="inputBuscador" class="inputBuscador" placeholder="Escribe algo...">
            <button id="botonBusqueda" class="botonBusqueda rounded">BUSCAR</button>
        </form>
      </div>
    </div>

    <div id="mostrarJobs">
         @include ("public.jobs.partials.jobFormat")
    </div>

    <div class="mx-auto col-1">
      <div class="spinner-border invisible" role="status" id="spinnerLoad">
              <span class="sr-only"></span>
      </div>
    </div>
    @include("public.jobs.partials.obtainJobsModal")
    @include("public.jobs.partials.searchModal")
@endsection
@push('estilos')
        <link href="{{ mix('css/jobs/indexJobs.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/jobs/paginacion.js') }}" defer></script>
    <script src="{{ asset('js/jobs/search.js') }}" defer></script>
    <script src="{{ asset('js/jobs/showModalScript.js') }}" defer></script>
@endpush