@extends('public.layout')

@section('title','Trabajos')

@section('content')
    <h1>Lista de Trabajos</h1>

    <div class="row">
      @forelse($trabajos as $trabajo)
        <div class="card mr-4" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$trabajo->job_name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$trabajo->creator}}</h6>
              <p class="card-text">{{$trabajo->description}}</p>
              <a href="/books/{{$trabajo->slug}}" class="btn btn-primary btn-sm">Más Info</a>
              <a href="/books/{{$trabajo->slug}}/edit" class="btn btn-warning btn-sm">Editar</a>
              <form action="/books/{{$trabajo->slug}}" method="post">
                @csrf
                @method('delete')
              <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
              </form>
            </div>
        </div>
      @empty
        <li>No Hay Trabajos Disponibles</li>
      @endforelse
    </div>
@endsection
