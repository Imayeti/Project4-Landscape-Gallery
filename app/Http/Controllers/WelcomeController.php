<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {

      $landscapes = new \App\landscape;
      $landscapes = $landscapes->all();

      return view('welcome', compact('landscapes'));
  }
}
