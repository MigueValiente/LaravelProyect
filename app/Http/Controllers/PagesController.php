<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  /**
  *
  */
  public function index(){
      return view('public.pages.index');
  }

  public function contact(){
    return view('public.pages.contact');
  }

  public function about(){
    return view('public.pages.about');
  }

  public function cookies(){
    return view('public.pages.cookies');
  }

  public function login(){
    return view('public.pages.login');
  }

  public function avisoLegal(){
    return view('public.pages.avisoLegal');
  }
}
