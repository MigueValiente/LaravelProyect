@extends('layouts.app')

@section('title','Contact')

@section('content')
  <h1>Contacto</h1>
  <div class="row">
      <div class="col">
          <div class="map" id="map"></div>
      </div>
      <div class="col">
        <table class="table table-bordered table-hover table-sm">
          <thead class="thead-dark">
          <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Email</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">1</th>
              <td>Miguel Angel</td>
              <td>Valiente</td>
              <td>migue@example.com</td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Jorge</td>
              <td>Barón</td>
              <td>jorge@example.com</td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Fran</td>
              <td>Delgado</td>
              <td>fran@example.com</td>
          </tr>
          </tbody>
      </table>
      </div>
  </div>
@endsection

@push('estilos')
  <link href="{{ mix('css/mapStyle/map.css') }}" rel="stylesheet">
@endpush

@push('scripts')
  <script src="{{ mix('/js/mapScript/map.js') }}" defer ></script>
@endpush
