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
Route::redirect('/guest/block', '/guest#design-block')->name('guest.block.index');
Volt::route('/guest/block/product-card', 'guest.block.product-card')->name('guest.block.product-card');
Volt::route('/guest/block/pricing', 'guest.block.pricing')->name('guest.block.pricing');
Volt::route('/guest/block/dashboard', 'guest.block.dashboard')->name('guest.block.dashboard');
Volt::route('/guest/block/auth', 'guest.block.auth')->name('guest.block.auth');
Volt::route('/guest/block/profile', 'guest.block.profile')->name('guest.block.profile');
Volt::route('/guest/block/hero', 'guest.block.hero')->name('guest.block.hero');
Volt::route('/guest/block/feature', 'guest.block.feature')->name('guest.block.feature');
Volt::route('/guest/block/cta', 'guest.block.cta')->name('guest.block.cta');
Volt::route('/guest/block/testimonial', 'guest.block.testimonial')->name('guest.block.testimonial');
Volt::route('/guest/block/modal', 'guest.block.modal')->name('guest.block.modal');
Volt::route('/guest/block/slide-over', 'guest.block.slide-over')->name('guest.block.slide-over');
Volt::route('/guest/block/timeline', 'guest.block.timeline')->name('guest.block.timeline');
Volt::route('/guest/block/empty-state', 'guest.block.empty-state')->name('guest.block.empty-state');
Volt::route('/guest/block/faq', 'guest.block.faq')->name('guest.block.faq');
Volt::route('/guest/block/navigation', 'guest.block.navigation')->name('guest.block.navigation');

// Direct /guest/* Aliases for Design Blocks
Volt::route('/guest/product-card', 'guest.block.product-card')->name('guest.product-card');
Volt::route('/guest/pricing', 'guest.block.pricing')->name('guest.pricing');
Volt::route('/guest/dashboard-widgets', 'guest.block.dashboard')->name('guest.dashboard-widgets');
Volt::route('/guest/auth', 'guest.block.auth')->name('guest.auth');
Volt::route('/guest/profile', 'guest.block.profile')->name('guest.profile');

// Top-Level /blocks/* Aliases for Design Blocks
Route::redirect('/blocks', '/guest#design-block')->name('blocks.index');
Volt::route('/blocks/product-card', 'guest.block.product-card')->name('blocks.product-card');
Volt::route('/blocks/pricing', 'guest.block.pricing')->name('blocks.pricing');
Volt::route('/blocks/dashboard', 'guest.block.dashboard')->name('blocks.dashboard');
Volt::route('/blocks/auth', 'guest.block.auth')->name('blocks.auth');
Volt::route('/blocks/profile', 'guest.block.profile')->name('blocks.profile');

// Synonym / Plural Route Aliases for Design Blocks
Volt::route('/guest/block/product', 'guest.block.product-card')->name('guest.block.product');
Volt::route('/guest/block/products', 'guest.block.product-card')->name('guest.block.products');
Volt::route('/guest/block/pricing-table', 'guest.block.pricing')->name('guest.block.pricing-table');
Volt::route('/guest/block/pricing-cards', 'guest.block.pricing')->name('guest.block.pricing-cards');
Volt::route('/guest/block/widgets', 'guest.block.dashboard')->name('guest.block.widgets');
Volt::route('/guest/block/analytics', 'guest.block.dashboard')->name('guest.block.analytics');
Volt::route('/guest/block/login', 'guest.block.auth')->name('guest.block.login');
Volt::route('/guest/block/security', 'guest.block.auth')->name('guest.block.security');
Volt::route('/guest/block/user-profile', 'guest.block.profile')->name('guest.block.user-profile');
Volt::route('/guest/block/user', 'guest.block.profile')->name('guest.block.user');

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
Volt::route('/components/tabs', 'component.overlay.tab')->name('component.tabs');
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
Route::redirect('/guest/template', '/guest#full-template')->name('guest.template.index');
Volt::route('/guest/template/ecommerce', 'guest.template.ecommerce')->name('guest.template.ecommerce');
Volt::route('/guest/template/portfolio', 'guest.template.portfolio')->name('guest.template.portfolio');
Volt::route('/guest/template/restaurant', 'guest.template.restaurant')->name('guest.template.restaurant');
Volt::route('/guest/template/saas', 'guest.template.saas')->name('guest.template.saas');
Volt::route('/guest/template/agency', 'guest.template.agency')->name('guest.template.agency');

// Backward Compatibility Aliases for /guest/*
Volt::route('/guest/ecommerce', 'guest.template.ecommerce')->name('guest.ecommerce');
Volt::route('/guest/portfolio', 'guest.template.portfolio')->name('guest.portfolio');
Volt::route('/guest/restaurant', 'guest.template.restaurant')->name('guest.restaurant');
Volt::route('/guest/saas', 'guest.template.saas')->name('guest.saas');
Volt::route('/guest/agency', 'guest.template.agency')->name('guest.agency');
Volt::route('/dashboard', 'user.dashboard')->name('dashboard');
Volt::route('/user/profile', 'user.profile')->name('user.profile');
Volt::route('/user/avatar', 'user.avatar')->name('user.avatar');
Volt::route('/user/email', 'user.email')->name('user.email');
Volt::route('/user/password', 'user.password')->name('user.password');
Volt::route('/user/setting', 'user.setting')->name('user.setting');
Volt::route('/admin', 'admin.dashboard')->name('admin.dashboard');
Volt::route('/admin/users', 'admin.user.index')->name('admin.users');
Volt::route('/admin/users/create', 'admin.user.create')->name('admin.users.create');
Volt::route('/admin/users/edit', 'admin.user.edit')->name('admin.users.edit');
Volt::route('/admin/users/show', 'admin.user.show')->name('admin.users.show');
Volt::route('/admin/logs', 'admin.log.index')->name('admin.logs');
Volt::route('/admin/logs/show', 'admin.log.show')->name('admin.logs.show');
Volt::route('/admin/setting', 'admin.setting')->name('admin.setting');


