@auth
@can('touch', $job)

<a href="/jobs/{{ $job->id }}/edit" class="btn btn-warning float-right" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a>

<form action="/jobs/{{ $job->id }}" method="post" class="float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt"></i></button>
</form>
@endcan
@endauth