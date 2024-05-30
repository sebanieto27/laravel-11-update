<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PatchRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // session()->flush();
        // session(['key' => 'value']);
        $posts = Post::paginate(5);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        Post::create($request->validated());

        return to_route('post.index')->with('status', 'Post creado');

        //----------------------VALIDACION ANTERIOR
        // $request->validate([
        //     'title' => 'required|min:5|max:100',
        //     'slug' => 'required|min:5|max:100',
        //     'content' => 'required|min:7|max:100',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:5|max:100',
        //     'posted' => 'required',
        //     'image' => 'required|min:5|max:100',
        // ]);


        //-----------------------CREACION ANTERIOR
        // Post::create(
        //     [
        //         'title' => $request->title,
        //         'slug' => $request->slug,
        //         'content' => $request->content,
        //         'category_id' => $request->category,
        //         'description' => $request->description,
        //         'posted' => $request->posted,
        //         'image' => $request->image,
        //     ]
        // );

        // dd($post);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // $post = Post::find($post->id);
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatchRequest $request, Post $post)
    {
        // dd($request);
        $data = $request->validated();
        if(isset($data['image'])){
            $data['image'] = $filname = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filname);
        };

        $post->update($data);
        return to_route('post.index')->with('status', 'registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post eliminado');
    }
}
