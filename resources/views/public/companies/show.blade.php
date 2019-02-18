@extends('layouts.app')

@section('Name', 'Company Info')

@section('content')
    <h2>{{ $company->name }}</h2>
    <h4>{{ $company->web }}</h4>
    <h4>{{ $company->email }}</h4>
    <p>{{ $company->address }}</p>

    @include('public.companies.partials.buttons')
@endsection
