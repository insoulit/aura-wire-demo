<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Main Portal Home Page
Volt::route('/', 'home')->name('home');

// Component Showcase Routes (Organized by Component Group)
Volt::route('/components', 'components.index')->name('components.index');

// Typography Group
Volt::route('/components/heading', 'components.typography.heading')->name('components.heading');
Volt::route('/components/subheading', 'components.typography.subheading')->name('components.subheading');
Volt::route('/components/kicker', 'components.typography.kicker')->name('components.kicker');
Volt::route('/components/text', 'components.typography.text')->name('components.text');

// Button Group
Volt::route('/components/button', 'components.button.index')->name('components.button');
Volt::route('/components/button-group', 'components.button.group')->name('components.button-group');

// Form Controls Group
Volt::route('/components/input', 'components.form.input')->name('components.input');
Volt::route('/components/textarea', 'components.form.textarea')->name('components.textarea');
Volt::route('/components/select', 'components.form.select')->name('components.select');
Volt::route('/components/checkbox', 'components.form.checkbox')->name('components.checkbox');
Volt::route('/components/radio', 'components.form.radio')->name('components.radio');
Volt::route('/components/switch', 'components.form.switch')->name('components.switch');
Volt::route('/components/field', 'components.form.field')->name('components.field');
Volt::route('/components/label', 'components.form.label')->name('components.label');
Volt::route('/components/error', 'components.form.error')->name('components.error');

// Data Display Group
Volt::route('/components/avatar', 'components.display.avatar')->name('components.avatar');
Volt::route('/components/badge', 'components.display.badge')->name('components.badge');
Volt::route('/components/card', 'components.display.card')->name('components.card');
Volt::route('/components/code', 'components.display.code')->name('components.code');
Volt::route('/components/separator', 'components.display.separator')->name('components.separator');

// Layout & Structural Group
Volt::route('/components/header', 'components.layout.header')->name('components.header');
Volt::route('/components/sidebar', 'components.layout.sidebar')->name('components.sidebar');
Volt::route('/components/main', 'components.layout.main')->name('components.main');
Volt::route('/components/navbar', 'components.layout.navbar')->name('components.navbar');

// Overlays & Feedback Group
Volt::route('/components/modal', 'components.overlay.modal')->name('components.modal');
Volt::route('/components/toast', 'components.overlay.toast')->name('components.toast');
Volt::route('/components/dropdown', 'components.overlay.dropdown')->name('components.dropdown');
Volt::route('/components/tabs', 'components.overlay.tabs')->name('components.tabs');

// Table Group
Volt::route('/components/table', 'components.table.index')->name('components.table');

// Portal Layout Routes
Volt::route('/guest', 'guest.index')->name('guest.index');
Volt::route('/dashboard', 'user.dashboard')->name('dashboard');
Volt::route('/admin', 'admin.dashboard')->name('admin.dashboard');
