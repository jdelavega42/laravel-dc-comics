@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Tipologia</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
      <tr>
          <th scope="row">{{$comic ->id}}</th>
          <td>{{$comic->title}}</td>
          <td>{{$comic->type}}</td>
          <td>
            <a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">
              <i class="fa-solid fa-eye"></i>
            </a>
            <a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">
                <i class="fa-solid fa-trash"></i>
              </button>
            </form>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection