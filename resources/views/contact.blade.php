@extends('master')

@section('contect')
    <h1>Contacto</h1>
    <h3>{{ $name . ' ' . $lastname . ' ' . $age }}</h3>
    <p><a href="{{ route('contact2') }}">Contacto 2</a></p>

    @if ($name != 'Seba')
        <p>Tu nombre no es Seba</p>
    @else
        <h2>Bienvenido {{ $name }}</h2>
    @endif

    @foreach ($family as $fname)
        <p>{{ $fname }}</p>
    @endforeach
@endsection
