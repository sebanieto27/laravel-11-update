@extends('master')

@section('contect')
    <h1>Contacto2</h1>
    <h3>{{ $name }} {{ $lastname }} {{ $age }}</h3>
    <p><a href="{{ route('contact') }}">Volver a contacto 1</a></p>
@endsection
