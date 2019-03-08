@auth
{{-- <a href="/companies/{{ $company->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a> --}}
<form action="/companies/{{ $company->id }}" method="post" data-companyId="{{$company->id}}" data-accion="delete"  class="mr-2 float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Delete Company</button>
</form>

<a href="/companies/{{ $company->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
@endauth
