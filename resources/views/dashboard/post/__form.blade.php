@csrf

<form class="max-w-sm mx-auto">
    <div class="grid grid-cols-12 gap-4">
        
        <div class="col-span-12 md:col-span-6 lg:col-span-6 p-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Título</label>
            <input type="text" name="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                value="{{ old('title', $post->title) }}" required>

        </div>
        <div class="col-span-12 md:col-span-6 lg:col-span-6 p-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
            <input type="text" name="slug" id="" value="{{ old('slug', $post->slug) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                required />
        </div>
        <div class="col-span-12 md:col-span-12 lg:col-span-12 p-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900">Texto</label>
            <textarea rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                name="content">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="col-span-12 md:col-span-4 lg:col-span-4 p-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900">Categoría</label>
            <select id="category_id" name="category_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @foreach ($categories as $title => $id)
                    <option {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }}
                        value="{{ $id }}">
                        {{ $title }}</option>
                @endforeach
            </select>

        </div>
        <div class="col-span-12 md:col-span-4 lg:col-span-4 p-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900">Postearlo?</label>
            <select id="posted" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="posted">
                <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Si</option>
                <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">No</option>
            </select>
        </div>
        <div class="col-span-12 md:col-span-4 lg:col-span-4 p-4">
            @if (isset($task) && $task == 'edit')
                <div class="col-md-4">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900">Nombre imagen:
                        <strong>{{ $post->image }}</strong></label>
                    <div class="text-center">
                        <img src="/uploads/posts/{{ $post->image }}" class="rounded m-4" alt="...">
                        <input type="file" name="image">
                    </div>

                </div>
            @endif
        </div>
        <div class="col-span-12 md:col-span-12 lg:col-span-12 p-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
            <textarea rows="1" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" name="description">{{ old('description', $post->description) }}</textarea>
        </div>
        <div class="col-span-12 md:col-span-12 lg:col-span-12 p-4">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Enviar</button>
        </div>
    </div>
</form>
