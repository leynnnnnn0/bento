<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/upvote', function(){
   request()->validate([
      'post_id' => ['required']
   ]);
   // If user_id is already existing on the table, remove it
    $result = Vote::where('user_id', Auth::user()->id)
        ->where('post_id', request('post_id'))
        ->delete();
  if($result) return redirect('/');

   Vote::create([
       'user_id' => Auth::user()->id,
       'post_id' => request('post_id'),
   ]);

   return redirect('/');
})->middleware('auth');

// Index
Route::get('/', function () {
    $posts = Post::with('user', 'comments', 'votes')->latest()->get();
    return view('home', ['posts' => $posts]);
});

// Store
Route::post('/post', function (){
    $attribute = request()->validate([
        'body' => 'required',
    ]);
    Auth::user()->posts()->create($attribute);

    return redirect('/');
})->middleware('auth');


// Store
Route::post('/comment', function (){
    request()->validate([
        'body' => 'required',
        'post_id' => 'required',
    ]);

    Comment::create([
        'post_id' => request('post_id'),
        'user_id' => Auth::user()->id,
        'body' => request('body'),
    ]);
    return redirect('/');
})->middleware('auth');


Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy']);
