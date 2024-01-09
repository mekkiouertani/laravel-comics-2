@extends('layouts.appshow')

@section('title', 'Modifica il prodotto')

@section('content')
    <main>
        <div class="bg-black text-white py-5">
            <div class="container">
                <a class="btn btn-success mb-5" href="{{ route('comics.index') }}">
                    Back
                </a>
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input class="form-control my-2" type="text" id="title" name="title" placeholder="Title"
                        value="{{ old('title', $comic->title) }}">
                    <input class="form-control my-2" type="text" id="description" name="description"
                        placeholder="Description" value="{{ 'description', old($comic->description) }}">
                    <input class="form-control my-2" type="text" id="thumb" name="thumb" placeholder="Image"
                        value="{{ 'thumb', old($comic->thumb) }}">
                    <input class="form-control my-2" type="text" id="price" name="price" placeholder="Price"
                        value="{{ 'price', old($comic->price) }}">
                    <input class="form-control my-2" type="text" id="type" name="type" placeholder="Type"
                        value="{{ 'type', old($comic->type) }}">
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
            </div>
        </div>
    </main>
@endsection
