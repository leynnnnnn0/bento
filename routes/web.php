<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Models\Comment;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function(){
    $user = User::with('posts')->find(Auth::id());
   return view('profile', ['user' => $user]);
})->middleware('auth');

Route::get('/profile/{id}', function($id){
    $user = User::with('posts')->where('username', $id)->first();
    return view('profile', ['user' => $user]);
})->middleware('auth');

Route::post('/downvote', function(){
    request()->validate([
        'post_id' => ['required']
    ]);

    $result = Vote::where('user_id', Auth::user()->id)
        ->where('post_id', request('post_id'))
        ->where('vote', 'downVote')
        ->delete();
    if($result) return redirect('/');

    // If upvote already exist then just update it

    $result = Vote::where('user_id', Auth::user()->id)
        ->where('post_id', request('post_id'))
        ->where('vote', 'upVote')->first();
    if($result)
    {
        Vote::find($result->id)->update(['vote' => 'downVote']);
        return redirect('/');
    }

    Vote::create([
        'user_id' => Auth::user()->id,
        'post_id' => request('post_id'),
        'vote' => 'downVote'
    ]);

    return redirect('/');
})->middleware('auth');

Route::post('/upvote', function(){
   request()->validate([
      'post_id' => ['required']
   ]);

    $result = Vote::where('user_id', Auth::user()->id)
        ->where('post_id', request('post_id'))
        ->where('vote', 'downVote')->first();
    if($result)
    {
        Vote::find($result->id)->update(['vote' => 'upVote']);
        return redirect('/');
    }

//   // If user_id is already existing on the table, remove it
    $result = Vote::where('user_id', Auth::user()->id)
        ->where('post_id', request('post_id'))
        ->where('vote', 'upVote')
        ->delete();
  if($result) return redirect('/');



   Vote::create([
       'user_id' => Auth::user()->id,
       'post_id' => request('post_id'),
       'vote' => 'upVote'
   ]);

   return redirect('/');
})->middleware('auth');

// Post
Route::get('/', [PostController::class, 'index'])->name('home');
Route::post('/post', [PostController::class, 'store'])->middleware('auth');


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
