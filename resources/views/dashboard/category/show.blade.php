@extends('dashboard.master')

@section('content')
    <div class="container">
        <h2>{{ $category->title }}</h2>
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $category->slug }}</strong>
                        <h3 class="mb-0">{{ $category->title }}</h3>
                        <a href="{{ route('category.index') }}" class="icon-link gap-1 icon-link-hover stretched-link">
                            Volver a la lista
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
