@extends('layouts.app')

@section('title', 'Company List')

@section('content')
<h1>Company List</h1>

    <div class="d-flex justify-content-center">
        {{ $companies->links() }}
    </div>

    @forelse($companies as $company)
    <div class="card mb-2">
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
@endsection
