<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Main Portal Home Page
Volt::route('/', 'home')->name('home');

// Component Showcase Routes (Individual Standalone Pages)
Volt::route('/components', 'components.index')->name('components.index');
Volt::route('/components/avatar', 'components.avatar')->name('components.avatar');
Volt::route('/components/badge', 'components.badge')->name('components.badge');
Volt::route('/components/button', 'components.button')->name('components.button');
Volt::route('/components/button-group', 'components.button-group')->name('components.button-group');
Volt::route('/components/card', 'components.card')->name('components.card');
Volt::route('/components/checkbox', 'components.checkbox')->name('components.checkbox');
Volt::route('/components/dropdown', 'components.dropdown')->name('components.dropdown');
Volt::route('/components/error', 'components.error')->name('components.error');
Volt::route('/components/field', 'components.field')->name('components.field');
Volt::route('/components/input', 'components.input')->name('components.input');
Volt::route('/components/label', 'components.label')->name('components.label');
Volt::route('/components/modal', 'components.modal')->name('components.modal');
Volt::route('/components/navbar', 'components.navbar')->name('components.navbar');
Volt::route('/components/radio', 'components.radio')->name('components.radio');
Volt::route('/components/select', 'components.select')->name('components.select');
Volt::route('/components/separator', 'components.separator')->name('components.separator');
Volt::route('/components/sidebar', 'components.sidebar')->name('components.sidebar');
Volt::route('/components/switch', 'components.switch')->name('components.switch');
Volt::route('/components/table', 'components.table')->name('components.table');
Volt::route('/components/tabs', 'components.tabs')->name('components.tabs');
Volt::route('/components/textarea', 'components.textarea')->name('components.textarea');
Volt::route('/components/toast', 'components.toast')->name('components.toast');

// Portal Layout Routes
Volt::route('/guest', 'guest.index')->name('guest.index');
Volt::route('/dashboard', 'user.dashboard')->name('dashboard');
Volt::route('/admin', 'admin.dashboard')->name('admin.dashboard');
