<?php


namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   


    public function index()
    {
        // $data = Post::all();
        $data = Post::orderBy('id','desc')->get();
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        Post::create($validated);
        return redirect('/post');

        // $post = new Post();
        // $post->name = $request->name;
        // $post->description = $request->description;

        // Post::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category_id' => $request->category
        // ]);
        // $post->save();

        // ✅ view() မသုံးဘဲ redirect ပြန်ပါ

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // dd($post->categories->id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)

    {
         $categories = Category::all();
        return view('edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $validated = $request->validated();
        $post->Update($validated);
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post');
    }
}
