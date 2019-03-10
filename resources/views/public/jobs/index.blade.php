@extends('layouts.app')

@section('title','Trabajos')

@section('content')
    <h1>Lista de Trabajos</h1>

    <div id="buscador" class="buscador mb-2">
      <form id="searchForm">
          <input type="text" id="inputBuscador" name="inputBuscador" class="inputBuscador" placeholder="Escribe algo...">
          <button id="botonBusqueda" class="botonBusqueda">BUSCAR</button>
      </form>
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
@endpush