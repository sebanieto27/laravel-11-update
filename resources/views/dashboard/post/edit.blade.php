@extends('dashboard.master')

@section('content')
    <div class="container">
        <h2>Editar post</h2>
        <div class="row g-3 m-5">
            @include('dashboard.fragment._errors-form')
        </div>

        <form class="row g-3 m-5" method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.post.__form', ['task' =>'edit'])
        </form>
    </div>
    </div>
@endsection
