@extends('layouts.app')

@section('content')
<ul class="list-group">
    <li class="list-group-item">
        <a href="{{route('comics.index')}}">index</a>
    </li>
    <li class="list-group-item">
        <a href="{{route('comics.create')}}">create</a>
    </li>
</ul>
@endsection