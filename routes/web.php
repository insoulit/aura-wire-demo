<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Main Portal Home Page (Card navigation to Guest, User, Admin)
Volt::route('/', 'home')->name('home');

// Component Showcase Route
Volt::route('/components', 'components.index')->name('components');

// Guest Portal Route
Volt::route('/guest', 'guest.index')->name('guest.index');

// User Workspace Route
Volt::route('/dashboard', 'user.dashboard')->name('dashboard');

// Admin Console Route
Volt::route('/admin', 'admin.dashboard')->name('admin.dashboard');
