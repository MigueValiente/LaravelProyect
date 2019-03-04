@extends('layouts.app')

@section('title','Contact')

@section('content')
  <h1>Contacto</h1>
  <div class="row">
      <div class="col-4">
          <div class="map" id="map"></div>
      </div>
      <div class="col">

      </div>
  </div>
@endsection

@push('estilos')
  <link href="{{ mix('css/mapStyle/map.css') }}" rel="stylesheet">
@endpush

@push('scripts')
  <script src="{{ mix('/js/mapScript/map.js') }}" defer ></script>
@endpush
