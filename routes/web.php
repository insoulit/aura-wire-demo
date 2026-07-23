<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Guest Volt Route
Volt::route('/', 'guest.index')->name('home');

// User Volt Route
Volt::route('/dashboard', 'user.dashboard')->name('dashboard');

// Admin Volt Route
Volt::route('/admin', 'admin.dashboard')->name('admin.dashboard');
