<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Utility Routes
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return response()->json([
        'status' => 'success',
        'message' => 'Application cache cleared successfully via optimize:clear.',
        'output' => trim(Artisan::output()),
    ]);
})->name('optimize.clear');

// Main Portal Home Page
Volt::route('/', 'home')->name('home');

// Component Showcase Routes (Organized by Component Group)
Volt::route('/components', 'components.index')->name('components.index');
Volt::route('/components/installation', 'components.installation')->name('components.installation');

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
Volt::route('/components/file-upload', 'components.form.file-upload')->name('components.file-upload');
Volt::route('/components/pin-code', 'components.form.pin-code')->name('components.pin-code');

// Data Display Group
Volt::route('/components/avatar', 'components.display.avatar')->name('components.avatar');
Volt::route('/components/badge', 'components.display.badge')->name('components.badge');
Volt::route('/components/card', 'components.display.card')->name('components.card');
Volt::route('/components/code', 'components.display.code')->name('components.code');
Volt::route('/components/separator', 'components.display.separator')->name('components.separator');
Volt::route('/components/empty-state', 'components.display.empty-state')->name('components.empty-state');
Volt::route('/components/numbered-list', 'components.display.numbered-list')->name('components.numbered-list');
Volt::route('/components/product-card', 'blocks.product-card')->name('components.product-card');
Volt::route('/components/progress-bar', 'components.display.progress-bar')->name('components.progress-bar');

// Design Blocks Group
Volt::route('/blocks/product-card', 'blocks.product-card')->name('blocks.product-card');
Volt::route('/blocks/pricing', 'blocks.pricing')->name('blocks.pricing');
Volt::route('/blocks/dashboard', 'blocks.dashboard')->name('blocks.dashboard');
Volt::route('/blocks/auth', 'blocks.auth')->name('blocks.auth');
Volt::route('/blocks/profile', 'blocks.profile')->name('blocks.profile');

// Navigation Group
Volt::route('/components/breadcrumbs', 'components.navigation.breadcrumbs')->name('components.breadcrumbs');
Volt::route('/components/pagination', 'components.navigation.pagination')->name('components.pagination');

// Layout & Structural Group
Volt::route('/components/header', 'components.layout.header')->name('components.header');
Volt::route('/components/sidebar', 'components.layout.sidebar')->name('components.sidebar');
Volt::route('/components/main', 'components.layout.main')->name('components.main');
Volt::route('/components/navbar', 'components.layout.navbar')->name('components.navbar');
Volt::route('/components/footer', 'components.layout.footer')->name('components.footer');

// Overlays & Feedback Group
Volt::route('/components/modal', 'components.overlay.modal')->name('components.modal');
Volt::route('/components/toast', 'components.overlay.toast')->name('components.toast');
Volt::route('/components/dropdown', 'components.overlay.dropdown')->name('components.dropdown');
Volt::route('/components/tabs', 'components.overlay.tabs')->name('components.tabs');
Volt::route('/components/sheet', 'components.overlay.sheet')->name('components.sheet');
Volt::route('/components/banner', 'components.feedback.banner')->name('components.banner');
Volt::route('/components/spinner', 'components.feedback.spinner')->name('components.spinner');
Volt::route('/components/tag', 'components.feedback.tag')->name('components.tag');

// Table Group
Volt::route('/components/table', 'components.table.index')->name('components.table');

// Portal Layout Routes
Volt::route('/guest', 'guest.index')->name('guest.index');
Volt::route('/guest/ecommerce', 'guest.ecommerce')->name('guest.ecommerce');
Volt::route('/guest/portfolio', 'guest.portfolio')->name('guest.portfolio');
Volt::route('/guest/restaurant', 'guest.restaurant')->name('guest.restaurant');
Volt::route('/guest/saas', 'guest.saas')->name('guest.saas');
Volt::route('/guest/agency', 'guest.agency')->name('guest.agency');
Volt::route('/dashboard', 'user.dashboard')->name('dashboard');
Volt::route('/user/profile', 'user.profile')->name('user.profile');
Volt::route('/user/avatar', 'user.avatar')->name('user.avatar');
Volt::route('/user/email', 'user.email')->name('user.email');
Volt::route('/user/password', 'user.password')->name('user.password');
Volt::route('/user/settings', 'user.settings')->name('user.settings');
Volt::route('/admin', 'admin.dashboard')->name('admin.dashboard');
Volt::route('/admin/users', 'admin.users')->name('admin.users');
Volt::route('/admin/logs', 'admin.logs')->name('admin.logs');
Volt::route('/admin/settings', 'admin.settings')->name('admin.settings');


