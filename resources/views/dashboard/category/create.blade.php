@extends('dashboard.master')

@section('content')
    <div class="container">
        <h2>Crear categoría</h2>
        <div class="row g-3 m-5">
            @include('dashboard.fragment._errors-form')
        </div>

        <form class="row g-3 m-5" method="POST" action="{{ route('category.store') }}">
            @include('dashboard.category.__form')
        </form>
    </div>
    </div>
@endsection
