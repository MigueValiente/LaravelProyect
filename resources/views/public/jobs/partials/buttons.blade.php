@auth
@can('touch', $job)
{{-- <a href="/jobs/{{ $job->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a> --}}
<form action="/jobs/{{ $job->id }}" method="post" class="mr-2 float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Delete Job</button>
</form>



<a href="/jobs/{{ $job->id }}/edit" class="btn btn-warning btn-sm mr-2     float-right">Edit</a>
@endcan
@endauth