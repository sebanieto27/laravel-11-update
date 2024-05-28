@csrf
<div class="col-md-6">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" name="title" class="form-control" id="" value="{{ old('title', $category->title) }}">
</div>
<div class="col-md-6">
    <label for="Slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" id="" value="{{ old('slug', $category->slug) }}">
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">enviar</button>
</div>
