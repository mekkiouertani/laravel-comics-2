@php
    $listnav = config('db.listnav');
@endphp
<div class="bg-primary">
    <div class="container d-flex justify-content-end  text-white">
        Additional DC SITES <i class="fa-solid fa-caret-down mt-1 px-1 "></i>
    </div>

</div>
<section id="head-nav">
    <div class="container d-flex py-3">
        <div class="box-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </div>
        <ul>
            @foreach ($listnav as $item)
                <li class="px-3 list-group-item text-uppercase fw-bold">
                    <a{{ Route::currentRouteName() == 'home' ? 'active' : '' }} href="{{ route('home') }}">
                        {{ $item }}</a>
                </li>
            @endforeach

        </ul>
        {{-- <input type="text" placeholder="Cerca" class="mb-2"> --}}
        <a href="{{ route('comics.create') }}" class="btn btn-primary">aggiungi un titolo</a>
    </div>

</section>
