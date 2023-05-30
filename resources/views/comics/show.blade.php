@extends('layouts.app')

@section('content')
<div class="card" style="width: 18rem;">
    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <ul class="list-group">
        <li class="list-group-item">{{$comic->price}}</li>
        <li class="list-group-item">{{$comic->type}}</li>
        <li class="list-group-item">{{$comic->sale_date}}</li>
        <li class="list-group-item">{{$comic->description}}</li>
      </ul>
      <a href="{{route('comics.index')}}" class="btn btn-primary">See All</a>
    </div>
  </div>
@endsection