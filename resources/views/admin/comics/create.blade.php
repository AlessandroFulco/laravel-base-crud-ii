@extends('admin.templates.base')

@section('mainPage')

<h1>Insert new Comic</h1>

<form action="{{ route('comics.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
            {{-- validation --}}
            @error('title')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ old('description')}}">
        {{-- validation --}}
        @error('description')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb')}}">
        {{-- validation --}}
        @error('thumb')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ old('price')}}">
        {{-- validation --}}
        @error('price')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ old('series')}}">
        {{-- validation --}}
        @error('series')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale_date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date')}}">
        {{-- validation --}}
        @error('sale_date')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ old('type')}}">
        {{-- validation --}}
        @error('type')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>

@endsection
