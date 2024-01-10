@extends('layouts.appshow')

@section('title', 'Modifica il prodotto')

@section('content')
    <main>
        <div class="bg-black text-white py-5">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <a class="btn btn-success mb-5" href="{{ route('comics.index') }}">
                    Back
                </a>
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input class="form-control my-2" type="text" id="title" name="title" placeholder="Title"
                        value="{{ old('title', $comic->title) }}">
                    <input class="form-control my-2" type="text" id="description" name="description"
                        placeholder="Description" value="{{ old('description', $comic->description) }}">
                    <input class="form-control my-2" type="text" id="thumb" name="thumb" placeholder="Image"
                        value="{{ old('thumb', $comic->thumb) }}">
                    <input class="form-control my-2" type="text" id="price" name="price" placeholder="Price"
                        value="{{ old('price', $comic->price) }}">
                    <input class="form-control my-2" type="text" id="type" name="type" placeholder="Type"
                        value="{{ old('type', $comic->type) }}">
                    <input class="form-control my-2" type="text" id="series" name="series" placeholder="Series"
                        value="{{ old('series', $comic->series) }}">
                    <input class="form-control my-2" type="text" id="sale_date" name="sale_date" placeholder="Sale Date"
                        value="{{ old('sale_date', $comic->sale_date) }}">
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
            </div>
        </div>
    </main>
@endsection
