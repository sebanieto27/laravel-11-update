<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $post = Post::find(1);

        $post->update(
            [
                'title' => 'Test title 2',
                'slug' => 'Test slug 2',
                'content' => 'Test content 2',
                'category_id' => 1,
                'description' => 'Test title 2',
                'posted' => 'not',
                'image' => 'Test image 2',
            ]
        );

        // $post = Post::create(
        //     [
        //         'title' => 'Test title',
        //         'slug' => 'Test slug',
        //         'content' => 'Test content',
        //         'category_id' => 1,
        //         'description' => 'Test title',
        //         'posted' => 'not',
        //         'image' => 'Test image',
        //     ]
        // );


        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
