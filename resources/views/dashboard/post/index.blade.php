@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row g-3 m-5">
            <div class="text-center">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Listado de post</h1>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Encuentra
                    aquí
                    todas los post. Crealos, editalos y eliminalos como gustes </p>
            </div>
            <div class=" text-center ">
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <a type="button" href="{{ route('post.create') }}"
                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                        Crear Post
                    </a>
                    <a type="button" href="{{ route('category.index') }}"
                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        Categorías
                    </a>
                    <button type="button"
                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        Messages
                    </button>
                </div>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Título</th>
                            <th scope="col" class="px-6 py-3">Posted</th>
                            <th scope="col" class="px-6 py-3">Categoría</th>
                            <th scope="col" class="px-6 py-3">Imágenes</th>
                            <th scope="col" class="px-6 py-3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4">{{ $post->id }}</td>
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">{{ $post->posted }}</td>
                                <td class="px-6 py-4">{{ $post->category->title }}</td>
                                <td class="px-6 py-4">Image2.png</td>
                                <td class="px-6 py-4">
                                    <div class="inline-flex" role="group">
                                        <a type="button" href="{{ route('post.show', $post->id) }}"
                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 ">Ver</button>
                                            <a type="button" href="{{ route('post.edit', $post->id) }}"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 ">Editar</a>
                                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 ">Eliminar</button>
                                            </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $posts->links() }}

        </div>
    </div>
@endsection
