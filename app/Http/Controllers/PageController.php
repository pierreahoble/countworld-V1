<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    public function contact_page()
    {
        return view('pages.contact');
    }

    public function apropos()
    {
      return view('pages.apropos');
    }

    public function equipe()
    {
       return view('pages.equipe');
    }


    public function partenaire()
    {
      return view('pages.partenaire');
    }


    public function sendmail(REQUEST $request)
    {
      return $request;
    }







}
