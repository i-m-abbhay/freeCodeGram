<?php

use App\Http\Controllers\Profile\AvatarController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {

    // $user = User::create([
    //     'name' => 'abhay2',
    //     'email' => 'abc2s@gmail.com',
    //     'password' => 'password',
    // ]);

    // $user = DB::table('users')->insert([
    //     'name' => 'abhayt',
    //     'email' => 'abcd@gmail.com',
    //     'password' => 'password',
    // ]);
    // $users = DB::table('users')->where('id', 1)->get();
    // dd($users);

    // fetch all users
    // $users = DB::select("select * from users where email=?", ['abhay.tiwari.er@gmail.com']);
    // dd($users);

    // create an user
    // $user = DB::insert('insert into users (name, email, password) values (?,?,?)', ['Abhay', '20je0018@me.iitism.ac.in', 'password']);
    // dd($user);


    //updating user
    // $user = DB::update("update users set email='abc@bitfumes.com' where id=2");
    // dd($user);

    // deleting user
    // $user = DB::delete("delete from users where id=1");
    // dd($user);
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
