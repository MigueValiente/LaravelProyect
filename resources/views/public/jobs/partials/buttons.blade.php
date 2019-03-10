@auth
@can('touch', $job)

<a href="/jobs/{{ $job->id }}/edit" class="btn btn-warning float-right"><i class="far fa-edit"></i></a>

<form action="/jobs/{{ $job->id }}" method="post" class="float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
</form>
@endcan
@endauth