@extends('dashboard.master')

@section('content')
    <div class="container">
        <h2>Crear post</h2>
        <div class="row g-3 m-5">
            @include('dashboard.fragment._errors-form')
        </div>

        <form class="row g-3 m-5" method="POST" action="{{ route('post.edit') }}">
            @csrf
            <div class="col-md-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" name="title" class="form-control" id="" value="{{ $post->title }}">
            </div>
            <div class="col-md-6">
                <label for="Slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="" value="{{ $post->slug }}">
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="content" class="form-label">Texto</label>
                    <textarea class="form-control" id="" rows="3" name="content">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <label for="category_id" class="form-label">Categoría</label>
                <select id="category_id" class="form-select" name="category_id">
                    <selected {{ $post->category_id->title }}>
                        @foreach ($categories as $id => $title)
                            <option value="{{ $id }}">{{ $title }}</option>
                        @endforeach
                    </option>
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
                    <textarea class="form-control" id="" rows="1" name="description">{{ $post->description }}</textarea>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
    </div>
    </div>
@endsection
