@extends('dashboard.master')

@section('content')
    <div class="container">
        <h2>Editar categoría</h2>
        <div class="row g-3 m-5">
            @include('dashboard.fragment._errors-form')
        </div>

        <form class="row g-3 m-5" method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.category.__form')
        </form>
    </div>
    </div>
@endsection
