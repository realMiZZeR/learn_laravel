<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        return view('posts', compact('posts'));

        // dd($posts);
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title',
                'post_content' => 'content',
                'image' => 'image.png',
                'likes' => 20,
                'is_published' => 1
            ],
            [
                'title' => 'another title',
                'post_content' => 'another content',
                'image' => 'image.png',
                'likes' => 50,
                'is_published' => 1
            ],
        ];

        foreach($postsArr as $post)
        {
            Post::create($post);
        }

        dd('created');
    }

    public function update()
    {
        $post = Post::find(2);

        $post->update([
            'title' => 'updated another title',
            'content' => 'updated another content',
            'image' => 'image.png',
            'likes' => 35,
            'is_published' => 1
        ]);

        dd('updated');
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
