@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="container py-2" style="min-height: 200px">
        @if (session()->has('message'))
            <div class="alert-alert-success">{{ session('message') }}</div>
        @endif
        <div>
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add </a>
            <form action="{{ route('comics.index') }}" method="GET">
                <select name="search" id="search">
                    <option value="">Tutti gli elementi</option>
                    <option value="comic_book">Comic</option>
                    <option value="graphic novel">Graphic</option>
                </select>
                <button type="submit" class="btn btn-danger">Cerca</button>
            </form>
        </div>
    </main>
@endsection
