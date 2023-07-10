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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

class User
{
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this -> name = $name;
        $this -> email = $email;
    }
};

Route::get('/contact', function () {

    $contacts = [
        $contact1 = new user('Daniele', 'test@gmail.com'),
        $contact2 = new user('Gianni', 'Gianni@vrgilio.it'),
        $contact3 = new user('Franco', 'Frank@gmail.com')
    ];
    
    return view('contact', compact('contacts'));
})->name('contact');

