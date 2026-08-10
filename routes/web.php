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
Volt::route('/components', 'component.index')->name('component.index');
Volt::route('/components/installation', 'component.installation')->name('component.installation');

// Typography Group
Volt::route('/components/heading', 'component.typography.heading')->name('component.heading');
Volt::route('/components/subheading', 'component.typography.subheading')->name('component.subheading');
Volt::route('/components/kicker', 'component.typography.kicker')->name('component.kicker');
Volt::route('/components/text', 'component.typography.text')->name('component.text');

// Button Group
Volt::route('/components/button', 'component.button.index')->name('component.button');
Volt::route('/components/button-group', 'component.button.group')->name('component.button-group');
Volt::route('/components/icon-button', 'component.button.icon-button')->name('component.icon-button');
Volt::route('/components/button-icon', 'component.button.icon-button')->name('component.button-icon');

// Form Controls Group
Volt::route('/components/input', 'component.form.input')->name('component.input');
Volt::route('/components/textarea', 'component.form.textarea')->name('component.textarea');
Volt::route('/components/select', 'component.form.select')->name('component.select');
Volt::route('/components/checkbox', 'component.form.checkbox')->name('component.checkbox');
Volt::route('/components/radio', 'component.form.radio')->name('component.radio');
Volt::route('/components/switch', 'component.form.switch')->name('component.switch');
Volt::route('/components/field', 'component.form.field')->name('component.field');
Volt::route('/components/label', 'component.form.label')->name('component.label');
Volt::route('/components/error', 'component.form.error')->name('component.error');
Volt::route('/components/file-upload', 'component.form.file-upload')->name('component.file-upload');
Volt::route('/components/pin-code', 'component.form.pin-code')->name('component.pin-code');
Volt::route('/components/rich-text', 'component.form.rich-text')->name('component.rich-text');
Volt::route('/components/combobox', 'component.form.combobox')->name('component.combobox');
Volt::route('/components/date-picker', 'component.form.date-picker')->name('component.date-picker');
Volt::route('/components/rating', 'component.form.rating')->name('component.rating');

// Data Display Group
Volt::route('/components/avatar', 'component.display.avatar')->name('component.avatar');
Volt::route('/components/badge', 'component.display.badge')->name('component.badge');
Volt::route('/components/card', 'component.display.card')->name('component.card');
Volt::route('/components/code', 'component.display.code')->name('component.code');
Volt::route('/components/separator', 'component.display.separator')->name('component.separator');
Volt::route('/components/empty-state', 'component.display.empty-state')->name('component.empty-state');
Volt::route('/components/numbered-list', 'component.display.numbered-list')->name('component.numbered-list');
Volt::route('/components/list', 'component.display.list')->name('component.list');
Volt::route('/components/product-card', 'component.display.product-card')->name('component.product-card');
Volt::route('/components/progress-bar', 'component.display.progress-bar')->name('component.progress-bar');
Volt::route('/components/icon', 'component.display.icon')->name('component.icon');
Volt::route('/components/accordion', 'component.display.accordion')->name('component.accordion');
Volt::route('/components/stat', 'component.display.stat')->name('component.stat');
Volt::route('/components/skeleton', 'component.display.skeleton')->name('component.skeleton');
Volt::route('/components/timeline', 'component.display.timeline')->name('component.timeline');

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
Volt::route('/components/breadcrumb', 'component.navigation.breadcrumb')->name('component.breadcrumb');
Volt::route('/components/pagination', 'component.navigation.pagination')->name('component.pagination');
Volt::route('/components/stepper', 'component.navigation.stepper')->name('component.stepper');

// Layout & Structural Group
Volt::route('/components/header', 'component.layout.header')->name('component.header');
Volt::route('/components/sidebar', 'component.layout.sidebar')->name('component.sidebar');
Volt::route('/components/main', 'component.layout.main')->name('component.main');
Volt::route('/components/navbar', 'component.layout.navbar')->name('component.navbar');
Volt::route('/components/footer', 'component.layout.footer')->name('component.footer');

// Overlays & Feedback Group
Volt::route('/components/modal', 'component.overlay.modal')->name('component.modal');
Volt::route('/components/toast', 'component.feedback.toast')->name('component.toast');
Volt::route('/components/dropdown', 'component.overlay.dropdown')->name('component.dropdown');
Volt::route('/components/tabs', 'component.overlay.tabs')->name('component.tabs');
Volt::route('/components/sheet', 'component.overlay.sheet')->name('component.sheet');
Volt::route('/components/alert', 'component.feedback.alert')->name('component.alert');
Volt::route('/components/banner', 'component.feedback.alert')->name('component.banner');
Volt::route('/components/spinner', 'component.feedback.spinner')->name('component.spinner');
Volt::route('/components/tag', 'component.display.tag')->name('component.tag');
Volt::route('/components/tooltip', 'component.overlay.tooltip')->name('component.tooltip');
Volt::route('/components/popover', 'component.overlay.popover')->name('component.popover');
Volt::route('/components/command', 'component.overlay.command')->name('component.command');

// Table Group
Volt::route('/components/table', 'component.table.index')->name('component.table');

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
Volt::route('/admin/users', 'admin.user.index')->name('admin.users');
Volt::route('/admin/users/create', 'admin.user.create')->name('admin.users.create');
Volt::route('/admin/users/edit', 'admin.user.edit')->name('admin.users.edit');
Volt::route('/admin/users/show', 'admin.user.show')->name('admin.users.show');
Volt::route('/admin/logs', 'admin.log.index')->name('admin.logs');
Volt::route('/admin/logs/show', 'admin.log.show')->name('admin.logs.show');
Volt::route('/admin/settings', 'admin.settings')->name('admin.settings');


