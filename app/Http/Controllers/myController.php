<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Attribute\Cache;

class myController extends Controller
{

    public function index()
    {
        $data = array(
            'menu' => [
                "characters",
                "comics",
                "movies",
                "TV",
                "games",
                "videos",
                "news",
            ],
            'shop' => [
                "shop DC",
                "shop DC collectibles"
            ],
            'other' => [
                "terms of use",
                "privacy policy(New)",
                "ad choices",
                "advertising",
                "jobs",
                "subscriptions",
                "talent workshops",
                "CPSC certificates",
                "ratings",
                "shop help",
                "contact us",
            ],
            'dc' => [
                "DC",
                "MAD magazine",
                "DC kids",
                "DC universe",
                "DC power visa",
            ],
        );
        return view('home')->with($data);
    }
}

?>
