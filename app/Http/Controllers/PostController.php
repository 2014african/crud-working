<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 
    public function index(Request $request)
    {
        $limit = $request->get('limit');

       if ($limit) {
         $posts = Post::limit($limit)->get(); 
        }
        else {
             $posts = Post::all(); 
             }
        return view('posts.index', ['posts' => $posts]);
    }


    public function create()
    {
       return view('posts.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'bail|required|unique:posts|max:255',
            'content' => 'required'
        ]);


        Post::create($validated);

        return redirect()->route('index')->with('success',  'Post created succesfully!');;
    }


    public function show(Post $post)
{
    return view('posts.show', ['post' => $post]);
}
    
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
         $validated = $request->validate([
           'title' => 'bail|required|unique:posts,title,' . $post->id . '|max:255',
            'content' => 'required'
    ]);
            
        

        // $post->update($validated);
        // return redirect()->route('show')->with('success',  'status updated succesfully!');
    }


  public function statusUpdate(Request $request, Post $post)
{
    $validated = $request->validate([
        'status' => 'required|max:255',
    ]);

    $post->update($validated);

    return redirect()->route('show', $post)->with('success', 'Status updated succesfully!');
}


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('index')->with('success',  'Post deleted succesfully!');
    }    
}