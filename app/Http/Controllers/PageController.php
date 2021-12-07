<?php

namespace App\Http\Controllers;

use App\Mail\contactmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
      $data = $request;
      //  return $request;

      Mail::to('contact@afrikascribe.com')->send(new contactmail($request));
    }







}
