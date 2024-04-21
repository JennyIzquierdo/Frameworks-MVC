<?php

namespace App\Http\Controllers;

//use App\Http\Request\CreatePostRequest;
use App\Http\Requests\CreatePostRequest;
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
        //return "Hello Frameworks Group";
        $posts = Post::all();
        return view ('posts.index', compact('posts'));
        //return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        //$category = new Category();
        return view('posts.create', compact('categories'));
        //return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\http\Request $request
     * @param \Illuminate\http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        
        //return redirect()->route('posts.index')->with('success','Category updated successfully');;
       
        //Post::create($request -> all());
        //return back()->with('status', 'Publicación creada con exito');

        Post::create($request -> all());
        return redirect()->route('posts.index')->with('success', 'Publicación creada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
