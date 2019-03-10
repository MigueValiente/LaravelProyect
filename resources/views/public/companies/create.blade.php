@extends('layouts.app')

@section('title', 'New Company')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/companies">Companies</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>
<h1>Add New Company</h1>
<form action="#" method="post" enctype="multipart/form-data" name="createCompanyForm" id="createCompanyForm" novalidate>


    @csrf

    @include('public.companies.partials.form')

    <button type="submit" class="btn btn-primary" name="saveCompanyButton" id="saveCompanyButton">Save Company</button>
</form>
<div class="companyData" id="companyData"></div>
@endsection
@push('scripts')
    <script src="{{ asset('js/companies/createCompany2.js') }}" defer></script>
@endpush
