<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userNotFound() {
      return view('userNotFound');
    }

    public function category($code) {
      echo $code;
    }

    public function viewForm() {
      return view('form');
    }

    public function submit() {
      return view('accept');
    }


}
