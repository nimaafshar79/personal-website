<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return view("home");
    }

    public function contact(Request $request)
    {
        $contact_ways = [
            [
                "name" => "telegram",
                "id" => "@nimaafshar79",
                "link" => "http://telegram.me/nimaafshar79",
                "image" => "telegram.png"
            ],
            [
                "name" => "github",
                "id" => "@nimaafshar79",
                "link" => "https://github.com/nimaafshar79",
                "image" => "github.png"
            ],
            [
                "name" => "outlook",
                "id" => "nimaafshar79@outlook.com",
                "link" => "http://www.outlook.com",
                "image" => "outlook.png"
            ],
            [
                "name" => "gmail",
                "id" => "nimaafshar79@gmail.com",
                "link" => "http://www.gmail.com",
                "image" => "gmail.png"
            ],
            [
                "name" => "google+",
                "id" => "nimaafshar79",
                "link" => "http://plus.google.com/nimaafshar79",
                "image" => "plus.png"
            ],

        ];
        return view("contact", compact('contact_ways'));
    }

    public function information(Request $request)
    {
        return view("info");
    }

}
