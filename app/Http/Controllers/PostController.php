<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view("posts.index",compact('posts'));
    }

    public function create() {
        return view("posts.create");
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('post.index')->with('message','Post is created successfully.');
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }
    
    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->update();

        return redirect()->route('post.index')->with('message','Post is updated successfully.');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index')->with('message','Post is deleted successfully.');
    }
}
