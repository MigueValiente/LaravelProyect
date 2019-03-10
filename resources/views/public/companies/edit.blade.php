@extends('layouts.app')

@section('title', 'Edit Company')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/companies">Companies</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>
<h1>Edit Company</h1>
<form action="/companies/{{ $company->id }}" method="post" enctype="multipart/form-data"  novalidate>

    @csrf
    @method('patch')

    @include('public.companies.partials.form')

    <button type="submit" class="btn btn-primary">Update Company</button>
</form>
@endsection
@push('scripts')
    <script src="{{ asset('js/companies/editCompany.js') }}" defer></script>
@endpush
