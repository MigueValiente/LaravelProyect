@extends('layouts.app')

@section('title','Trabajos')

@section('content')
    <h1>Lista de Trabajos</h1>


    <div id="mostrarJobs">
         @include ("public.jobs.partials.jobFormat")
    </div>

    <div class="mx-auto col-1">
      <div class="spinner-border invisible" role="status" id="spinnerLoad">
              <span class="sr-only"></span>
      </div>
    </div>
    @include("public.jobs.partials.obtainJobsModal")
@endsection
@push('estilos')
        <link href="{{ mix('css/jobs/indexJobs.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    {{-- Script para eliminar elementos --}}
    <script src="{{ asset('js/jobs/paginacion.js') }}" defer></script>
@endpush