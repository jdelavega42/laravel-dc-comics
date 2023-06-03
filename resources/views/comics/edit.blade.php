@extends('layouts.app')

@section('content')
@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @method("PUT")
    @csrf
    @foreach ($data as $key=>$item)
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
    </div>
    @endforeach
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{old('description', $comic->description)}}">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">sale_date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-control" id="type" name="type"  value="{{old('type', $comic->type)}}">
    </div>
    <button class="btn btn-primary">Modifica</button>
</form>
@endsection
