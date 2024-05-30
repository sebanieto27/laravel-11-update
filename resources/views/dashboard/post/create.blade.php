@extends('dashboard.master')

@section('content')

        <h2>Crear post</h2>
        <div class="row g-3 m-5">
            @include('dashboard.fragment._errors-form')
        </div>

        <form class="row g-3 m-5" method="POST" action="{{ route('post.store') }}">
            @include('dashboard.post.__form')
        </form>

@endsection
