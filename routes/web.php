<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('login', ['as' => 'login', 'uses' => function () {
    return view('login');
}]);

Route::post('login', function () {
    if
    (
        Request::get('email') == null &&
        Request::get('password') == null
    )
    {
        return response()->json(null, 400);
    }

    
    $attemp = Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')]);
    
    return redirect('/weather');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/weather', function () {
        return view('weather');
    });
});