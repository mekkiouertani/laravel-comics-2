@extends('layouts.appshow')
@section('title', 'Info Comic')

@section('content')
    <section id="show">
        <div class="bg-primary  position-relative ">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="position-absolute w-25 ">
            {{--  <div class="position-absolute end-0 ">
                {{ $comic['series'] }}
            </div> --}}
        </div>
        <main class="container mt-4">
            <div class="bg-success d-flex justify-content-between align-items-center p-2 text-white fs-2">
                <span>U.S. Price: {{ $comic['price'] }}</span>
                <span>{{ $comic['type'] }}</span>
            </div>
            <h2 class="">{{ $comic['title'] }}</h2>
            <p>{{ $comic['description'] }}</p>
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning mb-2">Modifica</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="cancel-button btn btn-danger">Cancella</button>
            </form>
        </main>
    </section>
    @include('partials.modal_delete')
@endsection
