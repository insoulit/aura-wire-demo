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
Volt::route('/components/icon-button', 'components.button.icon-button')->name('components.icon-button');
Volt::route('/components/button-icon', 'components.button.icon-button')->name('components.button-icon');

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
Volt::route('/components/rich-text', 'components.form.rich-text')->name('components.rich-text');

// Data Display Group
Volt::route('/components/avatar', 'components.display.avatar')->name('components.avatar');
Volt::route('/components/badge', 'components.display.badge')->name('components.badge');
Volt::route('/components/card', 'components.display.card')->name('components.card');
Volt::route('/components/code', 'components.display.code')->name('components.code');
Volt::route('/components/separator', 'components.display.separator')->name('components.separator');
Volt::route('/components/empty-state', 'components.display.empty-state')->name('components.empty-state');
Volt::route('/components/numbered-list', 'components.display.numbered-list')->name('components.numbered-list');
Volt::route('/components/list', 'components.display.list')->name('components.list');
Volt::route('/components/product-card', 'guest.blocks.product-card')->name('components.product-card');
Volt::route('/components/progress-bar', 'components.display.progress-bar')->name('components.progress-bar');
Volt::route('/components/icon', 'components.display.icon')->name('components.icon');

// Guest Design Blocks Primary Group
Volt::route('/guest/blocks', 'guest.blocks.index')->name('guest.blocks.index');
Volt::route('/guest/blocks/product-card', 'guest.blocks.product-card')->name('guest.blocks.product-card');
Volt::route('/guest/blocks/pricing', 'guest.blocks.pricing')->name('guest.blocks.pricing');
Volt::route('/guest/blocks/dashboard', 'guest.blocks.dashboard')->name('guest.blocks.dashboard');
Volt::route('/guest/blocks/auth', 'guest.blocks.auth')->name('guest.blocks.auth');
Volt::route('/guest/blocks/profile', 'guest.blocks.profile')->name('guest.blocks.profile');

// Direct /guest/* Aliases for Design Blocks
Volt::route('/guest/product-card', 'guest.blocks.product-card')->name('guest.product-card');
Volt::route('/guest/pricing', 'guest.blocks.pricing')->name('guest.pricing');
Volt::route('/guest/dashboard-widgets', 'guest.blocks.dashboard')->name('guest.dashboard-widgets');
Volt::route('/guest/auth', 'guest.blocks.auth')->name('guest.auth');
Volt::route('/guest/profile', 'guest.blocks.profile')->name('guest.profile');

// Top-Level /blocks/* Aliases for Design Blocks
Volt::route('/blocks', 'guest.blocks.index')->name('blocks.index');
Volt::route('/blocks/product-card', 'guest.blocks.product-card')->name('blocks.product-card');
Volt::route('/blocks/pricing', 'guest.blocks.pricing')->name('blocks.pricing');
Volt::route('/blocks/dashboard', 'guest.blocks.dashboard')->name('blocks.dashboard');
Volt::route('/blocks/auth', 'guest.blocks.auth')->name('blocks.auth');
Volt::route('/blocks/profile', 'guest.blocks.profile')->name('blocks.profile');

// Synonym / Plural Route Aliases for Design Blocks
Volt::route('/guest/blocks/product', 'guest.blocks.product-card')->name('guest.blocks.product');
Volt::route('/guest/blocks/products', 'guest.blocks.product-card')->name('guest.blocks.products');
Volt::route('/guest/blocks/pricing-table', 'guest.blocks.pricing')->name('guest.blocks.pricing-table');
Volt::route('/guest/blocks/pricing-cards', 'guest.blocks.pricing')->name('guest.blocks.pricing-cards');
Volt::route('/guest/blocks/widgets', 'guest.blocks.dashboard')->name('guest.blocks.widgets');
Volt::route('/guest/blocks/analytics', 'guest.blocks.dashboard')->name('guest.blocks.analytics');
Volt::route('/guest/blocks/login', 'guest.blocks.auth')->name('guest.blocks.login');
Volt::route('/guest/blocks/security', 'guest.blocks.auth')->name('guest.blocks.security');
Volt::route('/guest/blocks/user-profile', 'guest.blocks.profile')->name('guest.blocks.user-profile');
Volt::route('/guest/blocks/user', 'guest.blocks.profile')->name('guest.blocks.user');

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
Volt::route('/components/toast', 'components.feedback.toast')->name('components.toast');
Volt::route('/components/dropdown', 'components.overlay.dropdown')->name('components.dropdown');
Volt::route('/components/tabs', 'components.overlay.tabs')->name('components.tabs');
Volt::route('/components/sheet', 'components.overlay.sheet')->name('components.sheet');
Volt::route('/components/alert', 'components.feedback.alert')->name('components.alert');
Volt::route('/components/banner', 'components.feedback.alert')->name('components.banner');
Volt::route('/components/spinner', 'components.feedback.spinner')->name('components.spinner');
Volt::route('/components/tag', 'components.display.tag')->name('components.tag');

// Table Group
Volt::route('/components/table', 'components.table.index')->name('components.table');

// Portal Layout Routes
Volt::route('/guest', 'guest.index')->name('guest.index');

// Guest Templates Group
Volt::route('/guest/templates', 'guest.templates.index')->name('guest.templates.index');
Volt::route('/guest/templates/ecommerce', 'guest.templates.ecommerce')->name('guest.templates.ecommerce');
Volt::route('/guest/templates/portfolio', 'guest.templates.portfolio')->name('guest.templates.portfolio');
Volt::route('/guest/templates/restaurant', 'guest.templates.restaurant')->name('guest.templates.restaurant');
Volt::route('/guest/templates/saas', 'guest.templates.saas')->name('guest.templates.saas');
Volt::route('/guest/templates/agency', 'guest.templates.agency')->name('guest.templates.agency');

// Backward Compatibility Aliases for /guest/*
Volt::route('/guest/ecommerce', 'guest.templates.ecommerce')->name('guest.ecommerce');
Volt::route('/guest/portfolio', 'guest.templates.portfolio')->name('guest.portfolio');
Volt::route('/guest/restaurant', 'guest.templates.restaurant')->name('guest.restaurant');
Volt::route('/guest/saas', 'guest.templates.saas')->name('guest.saas');
Volt::route('/guest/agency', 'guest.templates.agency')->name('guest.agency');
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


