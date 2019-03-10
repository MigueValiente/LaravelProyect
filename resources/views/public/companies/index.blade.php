@extends('layouts.app')

@section('title', 'Company List')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Companies</li>
    </ol>
</nav>
<h1>Company List</h1>

    <div class="d-flex justify-content-center">
        {{ $companies->links() }}
    </div>

    @forelse($companies as $company)
    <div class="card mb-2" data-companyId="{{$company->id}}">
        <div class="card-header">
            {{ $company->name }}
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-2">
                <img class="img-fluid" src="{{$company->logo}}" alt="Company's logo">
            </div>
            <div class="col-10">
                <h5 class="card-title">Web: {{$company->web}}</h5>
                <h6 class="card-title">Email: {{ $company->email}}</h6>
                <p class="card-title">Address: {{ $company->address}}</p>
                @include('public.companies.partials.buttons')
                <a href="/companies/{{ $company->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
            </div>
        </div>


      </div>
    </div>
    @empty
      <p>No hay Empresas</p>
    @endforelse
    
    <div class="d-flex justify-content-center">
        {{ $companies->links() }}
    </div>

    @include("public.companies.partials.deleteModal")

    @push('scripts')
    {{-- Script para eliminar elementos --}}
    <script src="{{ asset('js/companies/deleteCompany.js') }}" defer></script>

    @endpush
@endsection
