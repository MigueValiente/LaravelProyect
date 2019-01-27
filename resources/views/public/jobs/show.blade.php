@extends('public.layout')

@section('title','Informacion del Trabajo')

@section('content')
  <h2>{{$job->job_name}}</h2>
  <h4>{{$job->creator}}</h4>
  <h6>{{$job->description}}</h6>
@endsection
