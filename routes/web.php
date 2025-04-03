<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('/admin/dashboard', Dashboard::class)
->middleware('auth', 'user_type:admin') // pré requisito para acessar a rota, tem que estar logado e ser admin
->name('admin.dashboard');
