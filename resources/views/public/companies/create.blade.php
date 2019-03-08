@extends('layouts.app')

@section('title', 'New Company')

@section('content')
<h1>Add New Company</h1>
<form action="/companies" method="post" enctype="multipart/form-data" name="createCompanyForm" id="createCompanyForm" novalidate>


    @csrf

    @include('public.companies.partials.form')

    <button type="submit" class="btn btn-primary" name="saveCompanyButton" id="saveCompanyButton">Save Company</button>
</form>
<div class="companyData" id="companyData"></div>
@endsection
@push('scripts')
    <script src="{{ asset('js/companies/createCompany.js') }}" defer></script>
@endpush
