<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function FirstApi(){
        return ["name"=>'GP',"email"=>'GP@gmial.com'];
    }
}
