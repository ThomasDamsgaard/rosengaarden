<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function frontpage()
    {
        return view('welcome');
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
        return view('guest.chiropractor.physiotherapy');
    }

    public function contact()
    {
        return view('guest.contact.contact_info');
    }

    public function who()
    {
        return view('guest.contact.who_are_we');
    }

    public function info()
    {
        return view('guest.info.info');
    }

    public function links()
    {
        return view('guest.info.links');
    }

    public function notShowingUp()
    {
        return view('guest.info.not_showing_up');
    }
}
