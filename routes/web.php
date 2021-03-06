<?php

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
    $article = [
        'title' => 'this is article 1',
        'body' => 'this is body of article 1'
    ];
    return view('master',compact('article'));
});
Route::get('/articles',\App\Http\Livewire\Articles\Index::class);
