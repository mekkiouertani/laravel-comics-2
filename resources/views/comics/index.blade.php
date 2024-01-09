@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        @if (session()->has('message'))
            <div class="alert-alert-success">{{ session('message') }}</div>
        @endif
    </main>
@endsection
