@extends('layouts.app')
@section('content')
    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" name="title">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" value='{{old('description')}}' id="description" name="description">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" value='{{old('price')}}' id="price" name="price">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" value='{{old('sale_date')}}' id="sale_date" name="sale_date">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" value='{{old('type')}}' id="type" name="type">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class="btn btn-primary">Invia</button>
    </form>
    {{-- @foreach ($data as $item)
    <div class="mb-3">
        <label for="{{$item}}" class="form-label">{{$item}}</label>
        <input type="text" class="form-control @error('{{$item}}') is-invalid @enderror" value="{{ old($item) }}" id="{{$item}}" name="{{$item}}">
        @error('{{$item}}')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    @endforeach --}}
@endsection