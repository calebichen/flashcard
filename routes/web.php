<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CardController;

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/cards', function() {
    return view('cards.index');
});

Route::get('/cards/new', function () {
   return view('cards.addCard');
});*/

Route::resource('cards', CardController::class)
    ->only(['index', 'show', 'create', 'store']);

Route::view('home', 'home')->middleware('auth');


/*
 * @ todo: 研究如何在phpstorm中push github，將flashcard專案push，並且側是分支。
 * 和松山教會通話之後，思考要先做哪一個，改外觀？繼續和平的修正？
 * */
