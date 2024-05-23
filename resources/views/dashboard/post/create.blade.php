@extends('dashboard.master')

@section('content')
    <div class="container">
        <h2>Crear post</h2>
        <div class="row g-3 m-5">
            @include('dashboard.fragment._errors-form')
        </div>

        <form class="row g-3 m-5" method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="col-md-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" name="title" class="form-control" id="">
            </div>
            <div class="col-md-6">
                <label for="Slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="">
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="content" class="form-label">Texto</label>
                    <textarea class="form-control" id="" rows="3" name="content"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <label for="category" class="form-label">Categoría</label>
                <select id="category" class="form-select" name="category_id">
                    <option selected>Selecciona una categoría</option>
                    @foreach ($categories as $title => $id)
                        <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="category" class="form-label">Postearlo?</label>
                <select id="category" class="form-select" name="posted">
                    <option value="not">No</option>
                    <option value="yes">Si</option>
                </select>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="content" class="form-label">Descripción</label>
                    <textarea class="form-control" id="" rows="1" name="description"></textarea>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
    </div>
    </div>
@endsection
