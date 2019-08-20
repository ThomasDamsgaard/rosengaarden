<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Purifier;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstPost = Blog::latest('created_at')->first();

        $trailingPosts = Blog::orderBy('created_at', 'desc')->paginate()->slice(1, 4);

        // dd($firstPost);

        return view('blog.index', compact('firstPost', 'trailingPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Blog;

        Blog::create([
          'title' => request('title'),
          'subtitle' => request('subtitle'),
          'body' => request('body')
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $slug)
    {
        return view('blog.show', compact('slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blog::find($id);

        return view('blog.edit', compact('post', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required',
          'subtitle' => 'required',
          'body' => 'required'
        ]);

        $post = Blog::find($id);
        $post->title = $request->get('title');
        $post->subtitle = $request->get('subtitle');
        $post->body = $request->get('body');

        $post->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::find($id);
        $post->delete();

        return redirect('/home');
    }
}
