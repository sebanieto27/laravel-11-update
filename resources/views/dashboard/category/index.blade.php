@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row g-3 m-5">
            <div>
                <h1 class="justify-content-center">Categorías</h1>
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('category.create') }}">Crear categoría</a>
                </li>
            </ul>
            <h2>Lista de categorías</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a type="button" href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Ver</a>
                                <a type="button" href="{{ route('category.edit', $category->id) }}"
                                    class="btn btn-warning">Editar</a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>

            {{ $categories->links() }}

        </div>
    </div>
@endsection
