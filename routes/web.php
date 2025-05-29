<?php

use Illuminate\Support\Facades\Route;

Route::view('/', "accueil") -> name('home');

Route::view('/homme', "homme") -> name('homme');

Route::view('/femme', "femme") -> name('femme');

Route::view('/enfant', "enfant") -> name('enfant');

Route::view('/accessoires', "accessoires") -> name('accessoires');

Route::view('/nouveautes', "nouveautes") -> name('nouveautes');

Route::view('/promos', "promos") -> name('promos');

Route::view('/capsule', "capsule") -> name('capsule');

Route::view('/panier', "panier") -> name('panier');

Route::view('/inscription', "inscription") -> name('inscription');

Route::view('/connexion', "connexion") -> name('connexion');

Route::view('/contact', "contact") -> name('contact');
