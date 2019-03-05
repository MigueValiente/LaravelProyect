@extends('layouts.app')

@section('title', 'New Company')

@section('content')
<h1>Add New Company</h1>
<form action="/companies" method="post" enctype="multipart/form-data" novalidate>


    @csrf

    @include('public.companies.partials.form')

    <button type="submit" class="btn btn-primary">Save Company</button>
</form>
@endsection
