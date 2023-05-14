<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestController;
use App\Models\Tube;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/form", [TestController::class,"showLoginForm"]);
// Route::get("/form", [TestController::class,"showLoginForm"]);
// Route::post("/register", [TestController::class,"veiwData"]);

// Route for displaying the login form
Route::get('/test', [TestController::class, 'showLoginForm']);

// Route for handling the login form submission
Route::post('/test', [TestController::class, 'submitLoginForm']);

// Route for displaying the signup form
Route::get('/test', [TestController::class, 'showSignupForm']);

// Route for handling the signup form submission
Route::post('/test', [TestController::class, 'submitSignupForm'])->name('test.store');

// Route for viewing the table where the data is stored
Route::get('viewdata',[TestController::class, 'viewthedata']);

// Route where the id will be called for that id to be deleted using url method
Route::delete('annihilate/{id}',[TestController::class,'annihilate'])->name('annihilate.user');

// Route where the id will be called for that id to be deleted using url method
// Route::get('annotate/{id}',[TestController::class,'annotate'])->name('annotate.user');

// Route to go to the url where we have to update the user info
// Route::post('update/{id}',[TestController::class,'update'])->name('update.user');
// Route::match(['get', 'post'], 'update/{id}', [TestController::class, 'annotate'])->name('update.user');
