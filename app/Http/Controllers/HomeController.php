<?php

namespace Lyrik\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showWelcome(){
      $data['title'] = "Lyric";
      $data['heading'] = "Here we goooo!!!";
      return view("welcome", $data);
    }
}
