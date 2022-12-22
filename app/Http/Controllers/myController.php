<?php

namespace App\Http\Controllers;

use Illuminate\Request;
use Symfony\Component\HttpKernel\Attribute\Cache;

class myController extends Controller{

    public function getNavs(Request $request){
        return view('navs', "sono io");
    }
}

?>
