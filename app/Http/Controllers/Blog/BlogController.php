<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Purifier;
use Carbon\Carbon;
use Wink\WinkPost;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Blog::orderBy('created_at', 'desc')->paginate(4);
        //
        // return view('blog.index', compact('posts'));

        $posts = WinkPost::with('tags')
        ->live()
        ->orderBy('publish_date', 'DESC')
        ->simplePaginate(6);

        // dd($posts);

        return view('blog.index', [
        'posts' => $posts
    ]);
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
        Blog::create([
          'title' => request('title'),
          'author' => request('author'),
          'body' => request('body')
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resourauthor
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = WinkPost::where('slug', $slug)->first();

        return view('blog.show', compact('post'));
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
          'author' => 'required',
          'body' => 'required'
        ]);

        $post = Blog::find($id);
        $post->title = $request->get('title');
        $post->author = $request->get('author');
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
