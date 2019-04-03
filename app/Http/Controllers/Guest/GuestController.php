<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class GuestController extends Controller
{
    public function frontpage()
    {
        $posts = Blog::orderBy('created_at', 'desc')->take(3)->get();
        // dd($posts);
        return view('welcome', compact('posts'));
    }

    public function symptoms()
    {
        return view('guest.chiropractor.symptoms_and_treatment');
    }

    public function children()
    {
        return view('guest.chiropractor.children');
    }

    public function physiotherapy()
    {
        return view('guest.physiotherapy');
    }

    public function contact()
    {
        return view('guest.contact.contact_info');
    }

    public function who()
    {
        return view('guest.contact.who_are_we');
    }

    public function links()
    {
        return view('guest.links');
    }
}
