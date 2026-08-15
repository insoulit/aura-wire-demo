<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Member Workspace Dashboard & Profile Settings
Route::redirect('/dashboard', '/user');
Volt::route('/user', 'user.dashboard')->name('user.dashboard');
Volt::route('/user/profile', 'user.profile')->name('user.profile');
Volt::route('/user/avatar', 'user.avatar')->name('user.avatar');
Volt::route('/user/email', 'user.email')->name('user.email');
Volt::route('/user/password', 'user.password')->name('user.password');
Volt::route('/user/setting', 'user.setting')->name('user.setting');
