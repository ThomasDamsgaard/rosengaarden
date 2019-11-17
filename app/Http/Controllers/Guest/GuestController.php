<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Carbon\Carbon;

class GuestController extends Controller
{
    public function frontpage()
    {
        $date = Carbon::now();
        $message = '';

        // dd($date->dayOfWeek);
        // switch ($date->dayOfWeek) {
        //   case 0:
        //     $message = 'Telefontid imorgen fra kl 8.00';
        //     break;
        //   case 1:
        //     $message = 'Telefontid kl 8.00 - 18.00';
        //     break;
        //   case 2:
        //     $message = 'Telefontid kl 7.30 - 18.00';
        //     break;
        //   case 3:
        //     $message = 'Telefontid kl 7.30 - 17.30';
        //     break;
        //   case 4:
        //     $message = 'Telefontid kl 8.00 - 18.00';
        //     break;
        //   case 5:
        //     $message = 'Telefontid kl 7.30 - 15.00';
        //     break;
        //   case 6:
        //     $message = 'Telefontid mandag fra kl 8.00';
        //     break;
        // }
        // dd($posts);
        return view('welcome', compact('message'));
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
