<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ConnexionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
    return view('welcome');
});

Route::group(['middleware'=>'App\Http\Middleware\Authenticate'],function () {

//Valider la commande
Route::get('valider-la-commande',[CommandeController::class,'valider'])->name('passer-la-commande');

// Route::get('valider-la-commande',[CommandeController::class,'send_paiement']);



});



//Calculer le nombre de mor du fichier pdf ou word
Route::post('file-count',[CommandeController::class,'count_word_file']);

//View commande
Route::get('relecture-correction',[CommandeController::class,'index']);


//Se connecter
Route::get('verification',[ConnexionController::class,'index'])->name('login');

//S'enregister vue
Route::get('inscription',[ConnexionController::class,'register_user']);
//Valider informations
Route::post('inscription',[ConnexionController::class,'register']);

//Connecte User
Route::post('verification',[ConnexionController::class,'connexion']);

//Connexion via google
Route::get('auth/google', [ConnexionController::class,'edirectToGoogle']);

Route::get('auth/google/callback', [ConnexionController::class,'handleGoogleCallback']);

//Contact 
Route::get('nous-contacter',[PageController::class,'contact_page']);

Route::post('nous-contacter',[PageController::class,'sendmail']);
//A propos de nous 
Route::get('qui-sommes-nous',[PageController::class,'apropos']);
//Notre equipe
Route::get('notre-equipe',[PageController::class,'equipe']);
//Nos partenaires
Route::get('nos-partenaires',[PageController::class,'partenaire']);

Route::get('tarifs',[CommandeController::class,'tarif']);



//services additonnel

Route::view('services-additionnels', 'pages.services');
Route::view('traduction-professionnelle', 'pages.traduction');
Route::view('certification-de-documents', 'pages.certification');
Route::view('assistance-particuliere', 'pages.assistance');
Route::view('comment-ca-marche', 'pages.faq');






