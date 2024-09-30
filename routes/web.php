<?php

use Illuminate\Support\Facades\Route;

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


// Handle GET requests
Route::get('/products', function () {
    return 'Displaying all products';
});

// Handle POST requests (e.g., submitting a form)
Route::post('/products', function () {
    return 'Product created';
});

// Handle PUT requests (e.g., updating a resource)
Route::put('/products/{id}', function ($id) {
    return 'Product '.$id.' updated';
});

// Handle DELETE requests (e.g., deleting a resource)
Route::delete('/products/{id}', function ($id) {
    return 'Product '.$id.' deleted';
});
