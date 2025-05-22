<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/', function () {
    // Aquí puedes autenticar al usuario manualmente o redirigir
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard');
    }

    return back()->with('error', 'Credenciales incorrectas');
});
