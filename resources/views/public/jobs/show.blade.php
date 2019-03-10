@extends('layouts.app')

@section('title','Informacion del Trabajo')

@section('content')

  @if(session('message'))
    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>
  @endif

  <h1>Job Name: {{$job->job_name}}</h1>
  <h3>Creator Name: {{$job->creator->name}}</h3>
  <h4>Province: {{$job->province}}</h4>
  <h4>Category: {{$job->category}}</h4>
  <h4>Payment: {{$job->payment}}</h4>
  <h5>Description: {{$job->description}}</h5>
@endsection
