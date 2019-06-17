<?php

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

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/brawlers', 'BrawlerController@getBrawler');

Route::get('/ladder', 'JoueurController@getJoueurs');

Route::get('/ladderFr', 'JoueurController@getJoueursFrancais');

Route::get('/brawler/{id}' , 'BrawlerController@getUnBrawler');

Route::get('/joueur/{id}' , 'JoueurController@getUnJoueur');
