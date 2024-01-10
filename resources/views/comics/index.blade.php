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
                <section class="d-flex justify-content-between align-items-center  ">
                    <form action="{{ route('comics.index') }}" method="GET">
                        <h2>Seleziona il tipo di fumetto</h2>
                        <select name="search" id="search" class="form-select mb-2 w-50">
                            <option value="">Tutti gli elementi</option>
                            <option value="comic book">Comic</option>
                            <option value="graphic novel">Graphic</option>
                            <option value="fumetto">Fumetto</option>
                        </select>
                        <button type="submit" class="btn btn-success">Cerca</button>
                    </form>
                    <div>
                        <h2>DC SUPERHEROES</h2>
                    </div>
                </section>
                {{-- <form action="{{ route('comics.index') }}" method="GET">
                    <input type="text" placeholder="Cerca un fumetto" class="form-control mb-2">
                    <button type="submit" class="btn btn-success">Cerca</button>
                </form> --}}
            </div>
        </main>
    </section>
@endsection
