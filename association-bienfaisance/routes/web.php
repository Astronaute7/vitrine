
<?php

use App\Http\Controllers\AssociationController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

// Routes publiques 
Route::get('/', [AssociationController::class, 'accueil'])->name('accueil');
Route::get('/services', [AssociationController::class, 'services'])->name('services');
Route::get('/realisations', [AssociationController::class, 'realisations'])->name('realisations');
Route::get('/contact', [AssociationController::class, 'contact'])->name('contact');
Route::post('/contact/send', [AssociationController::class, 'sendContact'])->name('contact.send');
