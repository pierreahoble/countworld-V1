<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ConnexionController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }


    public function register_user()
    {
        return view('pages.register');
    }


    public function register(REQUEST $request)
    {
        // return $request;
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required|confirmed'
        ],[
            'confirmed'=>'Les mots de passe ne correspondent pas.Verifiez...',
            'email'=>"L'email est invalide"
        ]);
        $user = User::create([
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'telephone'=>request('tel')
        ]);

        return redirect('relecture-correction');
    }


    public function connexion(REQUEST $request)
    {
        // return $request;
       $user = Auth::attempt(['email' => $request['email'], 'password' => $request['password']]);

       if ($user) {
        return redirect()->route('passer-la-commande');
       }else{
           return redirect()->back();
       }
    }


    public function edirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        try {
  
            $user = Socialite::driver('google')->stateless()->user();
   
            $finduser = User::where('google_id', $user->id)->first();
   
            if($finduser){
   
                Auth::login($finduser);
  
                return redirect()->route('passer-la-commande');
   
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password'=>bcrypt($user->id)
                ]);
  
                Auth::login($newUser);
   
                return redirect()->route('passer-la-commande');
            }
  
        } catch (Exception $e) {
            return redirect()->route('login');
        }
    }
    







}
