<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createStore(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'title' => ['required','string','min:5'],
            'description' => ['required', 'min:10'],
        ]);

        $post = new Post();
        
        $post->title = $request->input('title');
        $post->description = $request->input('description');

        $post->save();

        return redirect()
            ->route('posts.create')
            ->with('success', 'Post is submitted! Title: ' . $post->title . ' Description: ' . $post->description);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view(Post $post)
    {
        // return view('posts.view',['post' => $post]);
        return view('posts.view',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
      return view('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,post $post)
    {
         $post->update([
            'title'=>$request->title,
            'description'=>$request->description
         ]);
         return redirect()
         ->back()
         ->with('success', 'Post updated! Title: ' . $post->title . ' Description: ' . $post->description);
    }

   
    public function destroy($id)
    {
        $kamu = Post::find($id);
        $kamu->delete();
        return redirect()
            ->route('home');
    }
}
