@extends('layouts.app')

@section('title', 'Edit Company')

@section('content')
<h1>Edit Company</h1>
<form action="/companies/{{ $company->id }}" method="post" novalidate>

    @csrf
    @method('patch')

    @include('public.companies.partials.form')

    <button type="submit" class="btn btn-primary">Update Company</button>
</form>
@endsection
