@extends('admin.templates.base')

@section('mainPage')

    <h1>Edit {{$comic->title}}</h1>

    <form action="{{ route('comics.update', ['comic' => $comic])}}" method="post">
        @method('PUT')
        @csrf

        @if($errors->any())
            <div class="alert alert-danger mt-2">
                @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                @endforeach
            </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title)}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description', $comic->description)}}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series)}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old('type', $comic->type)}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
