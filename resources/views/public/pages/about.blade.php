@extends('layouts.app')

@section('title','About')

@section('content')
  <h1>About</h1>

  <div class="row">
    <div class="col" >
      <img src="images/Empresa.jpg"  class="img-fluid" alt="Responsive image">
    </div>
    <div class="embed-responsive embed-responsive-21by9 col-8">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/clXBiR01kUM" allowfullscreen> </iframe>
    </div>
  </div>
@endsection

