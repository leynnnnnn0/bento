<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::with('user', 'comments')->latest()->get();
    return view('home', ['posts' => $posts]);
});

Route::post('/post', function (){
    $attribute = request()->validate([
        'body' => 'required',
    ]);
    Auth::user()->posts()->create($attribute);

    return redirect('/');
})->middleware('auth');


Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);


Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy']);
