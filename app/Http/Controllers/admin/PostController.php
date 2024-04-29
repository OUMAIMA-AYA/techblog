<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $posts = Post::with('category')->paginate(3);
        return view('admin.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $post = new Post();
    $post->title = $request->input('title');
    $post->slug = $request->input('slug');
    $post->category_id = $request->input('category_id');
    $post->excerpt = $request->input('excerpt'); 
    $post->body = $request->input('body');
    $post->cover_image = $request->input('cover_image');
    $post->created_at = $request->input('publication_date');
    $post->user_id = Auth::id();
    $post->save();
    if ($request->has('create_and_another')) {
        return redirect()->route('posts.create');
    } else {
        return redirect()->route('posts.index');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return  view('admin.posts.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return  view('admin.posts.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id= $request->input('category_id');
        $post->excerpt = $request->input('excerpt'); 
        $post->body = $request->input('body');
        $post->created_at = $request->input('publication_date');
        $post->save();
        return  redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return view('admin.posts.index');
    }
}
