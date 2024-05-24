@csrf
<div class="col-md-6">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" name="title" class="form-control" id="" value="{{ old('title', $post->title) }}">
</div>
<div class="col-md-6">
    <label for="Slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" id="" value="{{ old('slug', $post->slug) }}">
</div>
<div class="col-12">
    <div class="mb-3">
        <label for="content" class="form-label">Texto</label>
        <textarea class="form-control" id="" rows="3" name="content">{{ old('content', $post->content) }}</textarea>
    </div>
</div>
<div class="col-md-4">
    <label for="category_id" class="form-label">Categoría</label>
    <select id="category_id" class="form-select" name="category_id">
        @foreach ($categories as $title => $id)
            <option value="{{ $id }}" {{ $post->category && $post->category->id == $id ? 'selected' : '' }}>
                {{ old('title', $title) }}
            </option>
        @endforeach
        </option>
    </select>
</div>
<div class="col-md-4">
    <label for="posted" class="form-label">Postearlo?</label>
    <select id="posted" class="form-select" name="posted">
        <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Si</option>
        <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">No</option>
    </select>
</div>
@if (isset ($task) && $task == 'edit')
    <div class="col-md-4">
        <label for="" class="form-label">Imagen</label>
        <div class="text-center">
            <img src="..." class="rounded" alt="...">
            <input type="file" value="image">
        </div>

    </div>
@endif
<div class="col-12">
    <div class="mb-3">
        <label for="content" class="form-label">Descripción</label>
        <textarea class="form-control" id="" rows="1" name="description">{{ old('description', $post->description) }}</textarea>
    </div>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">enviar</button>
</div>
