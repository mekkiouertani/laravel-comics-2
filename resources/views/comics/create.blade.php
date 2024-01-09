@extends('layouts.appshow')

@section('title', 'Aggiungi un nuovo prodotto')

@section('content')
    <main>
        <div class="bg-black text-white py-5">
            <div class="container">
                <a class="btn btn-success mb-5" href="{{ route('comics.index') }}">
                    Back
                </a>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <input class="form-control my-2   @error('title') is-invalid @enderror" type="text" id="title"
                        name="title" placeholder="Title">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <input class="form-control my-2" type="text" id="description" name="description"
                        placeholder="Description">
                    <input class="form-control my-2" type="text" id="thumb" name="thumb" placeholder="Image">
                    <input class="form-control my-2" type="text" id="price" name="price" placeholder="Price">
                    <input class="form-control my-2" type="text" id="sale_date" name="sale_date" placeholder="Sale Date">
                    <input class="form-control my-2" type="text" id="type" name="type" placeholder="Type">
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
            </div>
        </div>
    </main>
@endsection
