@extends('public.layout')

@section('title','Trabajos')

@section('content')
    <h1>Lista de Trabajos</h1>

    <div class="d-flex justify-content-center">
        {{ $jobs->links() }}
    </div>

      @forelse($jobs as $job)
        <div class="card mb-2">
          <div class="card-header">
            {{$job->job_name}}
          </div>
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">{{$job->creator}}</h6>
              <p class="card-text">{{str_limit($job->description, 50)}}</p>

              <form action="/jobs/{{$job->id}}" method="post">
                @csrf
                @method('delete')
              <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
              </form>

              <a href="/jobs/{{$job->slug}}" class="btn btn-primary btn-sm float-right mr-2">Más Info</a>
              <a href="/jobs/{{$job->id}}/edit" class="btn btn-warning btn-sm float-right mr-2">Editar</a>

            </div>
        </div>
      @empty
        <li>No Hay Trabajos Disponibles</li>
      @endforelse

      <div class="d-flex justify-content-center">
          {{ $jobs->links() }}
      </div>
@endsection
