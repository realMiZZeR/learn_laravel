<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        /* 
        var_dump() - php
        dump() & dd() - laravel
        */

        $posts = Post::all();

        return view('post.index', compact('posts'));

        // dd($posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string|required',
            'content' => 'string',
            'image' => 'string',
        ]);

        Post::create($data);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete()
    {
        $post = Post::find(2);

        if(is_null($post)) return;

        $post->delete();

        dd('deleted');
    }

    public function restore()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();

        dd('restored');
    }

    public function firstOrCreate()
    {
        $important_post = [
            'title' => 'important title',
        ];

        $post = Post::firstOrCreate($important_post, [
            'title' => $important_post['title'],
            'content' => 'some content',
            'image' => 'image.png',
            'likes' => 1000,
            'is_published' => 1
        ]);

        dump($post);
        dd('first or created');
    }

    public function updateOrCreate()
    {
        $json_post = [
            'title' => 'updated post',
            'content' => 'it is updated post (or created?..)',
            'image' => 'image.png',
            'likes' => 1500,
            'is_published' => 0
        ];

        $post = Post::updateOrCreate([
            'title' => 'updated post'
        ], $json_post);

        dump($post);
        dd('updated or created');
    }
}
