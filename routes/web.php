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
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('try');
})->middleware(['auth'])->name('dashboard');

Route::get('/app-chat', function () {
    return view('app-chat');
});

Route::get('/task', function () {
    return view('task');
});

Route::get('/project-creation', function () {
    return view('project');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/accounts-profile', function () {
    return view('accounts-profile');
});

Route::get('/accounts-security', function () {
    return view('accounts-security');
});

Route::get('/invoice-add', function () {
    return view('invoice-add');
});

Route::get('/invoice-edit', function () {
    return view('invoice-edit');
});

Route::get('/invoice-list', function () {
    return view('invoice-list');
});

Route::get('/invoice-preview', function () {
    return view('invoice-preview');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/try', function () {
    return view('try');
});

Route::get('/app-kanban', function () {
    return view('kanban');
});

require __DIR__ . '/auth.php';
