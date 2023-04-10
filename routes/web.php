<?php

use App\Http\Controllers\multiauth;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('about', [\App\Http\Controllers\aboutcontroller::class, ('about')]);


// for booking controller 
Route::get('book', [\App\Http\Controllers\bookcontroller::class, ('book')]);
Route::get('edit-price/{id}', [\App\Http\Controllers\bookingcontroller::class, ('editprice')]);
Route::get('edit-booking/{id}', [\App\Http\Controllers\bookingcontroller::class, ('editbooking')]);
Route::get('delete-booking/{id}', [\App\Http\Controllers\bookingcontroller::class, ('destroybooking')]);
Route::put('update-booking/{id}', [\App\Http\Controllers\bookingcontroller::class, ('updatebooking')]);
Route::get('delete-price/{id}', [\App\Http\Controllers\bookingcontroller::class, ('destroyprice')]);
Route::put('update-price/{id}', [\App\Http\Controllers\bookingcontroller::class, ('updateprice')]);
Route::post('book', [\App\Http\Controllers\bookcontroller::class, ('store')]);


Route::post('updatescores', [\App\Http\Controllers\scorecontroller::class, ('store')]);
Route::post('playerofthemonth', [\App\Http\Controllers\scorecontroller::class, ('storeplayerofthemonth')]);
Route::get('score', [\App\Http\Controllers\scorecontroller::class, ('score')]);
Route::get('viewscore', [\App\Http\Controllers\scorecontroller::class, ('scoreui')]);
Route::get('edit-score/{id}', [\App\Http\Controllers\scorecontroller::class, ('edit')]);
Route::put('update-scores/{id}', [\App\Http\Controllers\scorecontroller::class, ('update')]);
Route::get('delete-score/{id}', [\App\Http\Controllers\scorecontroller::class, ('destroy')]);
// for player of the month 
Route::get('edit-player/{id}', [\App\Http\Controllers\scorecontroller::class, ('editplayer')]);
Route::get('delete-player/{id}', [\App\Http\Controllers\scorecontroller::class, ('destroyplayer')]);
Route::put('update-player/{id}', [\App\Http\Controllers\scorecontroller::class, ('updateplayer')]);

Route::get('logout', [\App\Http\Controllers\logoutcontroller::class, ('logout')]);

// for news 
Route::get('updatenews', [\App\Http\Controllers\newscontroller::class, ('news')]);
Route::get('seenews', [\App\Http\Controllers\newscontroller::class, ('newsui')]);
Route::post('updatenews', [\App\Http\Controllers\newscontroller::class, ('store')]);

Route::get('redirect', 'App\Http\Controllers\multiauthcontroller@redirect');


// for booking userinterface 
Route::get('booknow', [\App\Http\Controllers\bookingcontroller::class, ('booking')]);
Route::post('booknow', [\App\Http\Controllers\bookingcontroller::class, ('store')]);
Route::get('bookingdetails', [\App\Http\Controllers\bookingcontroller::class, ('bookingdetails')]);
Route::post('bookingdetails', [\App\Http\Controllers\bookingcontroller::class, ('storeprice')]);
// for coach user interface 
Route::get('coach', [\App\Http\Controllers\coachcontroller::class, ('coach')]);
Route::post('coach', [\App\Http\Controllers\coachcontroller::class, ('storebookcoach')]);
Route::get('updatecoach', [\App\Http\Controllers\coachcontroller::class, ('coachadmin')]);
Route::post('updatecoach', [\App\Http\Controllers\coachcontroller::class, ('store')]);
// for tournment and tournment details 
Route::get('tournment', [\App\Http\Controllers\tournmentcontroller::class, ('tournment')]);
Route::post('tournment', [\App\Http\Controllers\tournmentcontroller::class, ('storetournmententries')]);
Route::get('updatetournment', [\App\Http\Controllers\tournmentcontroller::class, ('updatetournment')]);
Route::post('/updatedetails', [\App\Http\Controllers\tournmentcontroller::class, ('storetournmentdetails')]);
Route::post('updatetournment', [\App\Http\Controllers\tournmentcontroller::class, ('storetiesheet')]);
