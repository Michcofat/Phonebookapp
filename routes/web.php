<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneBookController;




//create homecontroller
Route::get('/', [HomeController::class, 'index']);

Route::get('login', [AuthController::class, 'login'])->name('login');

// the authentication is use for login 
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('register', [AuthController::class, 'register'])->name('register');

Route::post('create_user', [AuthController::class, 'createUser'])->name('create_user');


Route::group(['middleware' => 'auth'],function(){
     Route::get('logout',[PhoneBookController::class, 'logout'])->name('logout');
     Route::get('phone-book',[PhoneBookController::class, 'index'])->name('phone.book');
     Route::get('phone-book/create',[PhoneBookController::class, 'create'])->name('phonebook.create');
     Route::post('phone-book',[PhoneBookController::class, 'store'])->name('phonebook.store');
     Route::get('phone-book/{phonebook}/edit',[PhoneBookController::class, 'edit'])->name('phonebook.edit');
     Route::put('phone-book/{phonebook}',[PhoneBookController::class, 'update'])->name('phonebook.update');
 
     Route::delete('phone-book/{phonebook}',[PhoneBookController::class, 'delete'])->name('phonebook.delete');
});