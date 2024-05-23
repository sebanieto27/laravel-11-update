@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row g-3 m-5">
            <div>
                <h1 class="justify-content-center">Posts</h1>
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('post.create')}}">Crear post</a>
                </li>
            </ul>
            <h2>Lista de posts</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Posted</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->posted }}</td>
                        <td>{{ $post->category->title }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a type="button" href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Ver</a>
                                <a type="button" href="{{ route('post.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                                <a type="button" href="{{ route('post.destroy', $post->id) }}" class="btn btn-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>

            {{ $posts->links() }}

        </div>
    </div>
@endsection
