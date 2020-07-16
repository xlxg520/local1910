<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
    {
        public function  register()
        {
            return view("home.register");
        }


        public function registerdo(Request $request)
        {
            $data = $request->all();
            dd($data);
        }

    }
