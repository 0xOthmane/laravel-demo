<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(Request $request, string $name){
        // Post::create(
        //     ['title'=> 'Title',
        //     'slug'=> 'article',
        //     'content'=> 'Content',
        //     ]
        // );
        // dd(Post::all());
        // dd(Post::all()->first());
        // Post::where('column', 'condition')->get()
        // ->order;
        $posts = Post::all();
        $post = $posts->first();
        $post->title = 'Another title';
        $post->slug = 'slug';
        $post->save();
        $post->delete();
        $posts = Post::query()->with('categroy')->get(); // Pour éviter les multiples requêtes
        return view('hello', [
            'name'=> $name, 
            'posts'=> $posts
        ]);
    }

    public function doHello(ContactRequest $request) {
        dd($request->validated());
    }
}
