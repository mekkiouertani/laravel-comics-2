@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="bg-primary">
        <main class="container py-2">
            @if (session()->has('message'))
                <div class="alert-alert-success">{{ session('message') }}</div>
            @endif
            <div>
                {{--  <a href="{{ route('comics.create') }}" class="btn btn-primary">Add </a> --}}
                <form action="{{ route('comics.index') }}" method="GET">
                    <select name="search" id="search" class="form-select mb-2">
                        <option value="">Tutti gli elementi</option>
                        <option value="comic book">Comic</option>
                        <option value="graphic novel">Graphic</option>
                        <option value="fumetto">Fumetto</option>
                    </select>
                    <button type="submit" class="btn btn-success">Cerca</button>
                </form>
                {{-- <form action="{{ route('comics.index') }}" method="GET">
                    <input type="text" placeholder="Cerca un fumetto" class="form-control mb-2">
                    <button type="submit" class="btn btn-success">Cerca</button>
                </form> --}}
            </div>
        </main>
    </section>
@endsection
