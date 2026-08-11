<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Portal Landing Page
Volt::route('/guest', 'guest.index')->name('guest.index');

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

// Guest Templates Group
Route::redirect('/guest/template', '/guest#full-template')->name('guest.template.index');
Volt::route('/guest/template/ecommerce', 'guest.template.ecommerce')->name('guest.template.ecommerce');
Volt::route('/guest/template/portfolio', 'guest.template.portfolio')->name('guest.template.portfolio');
Volt::route('/guest/template/restaurant', 'guest.template.restaurant')->name('guest.template.restaurant');
Volt::route('/guest/template/saas', 'guest.template.saas')->name('guest.template.saas');
Volt::route('/guest/template/agency', 'guest.template.agency')->name('guest.template.agency');

// Direct /guest/* Template Aliases
Volt::route('/guest/ecommerce', 'guest.template.ecommerce')->name('guest.ecommerce');
Volt::route('/guest/portfolio', 'guest.template.portfolio')->name('guest.portfolio');
Volt::route('/guest/restaurant', 'guest.template.restaurant')->name('guest.restaurant');
Volt::route('/guest/saas', 'guest.template.saas')->name('guest.saas');
Volt::route('/guest/agency', 'guest.template.agency')->name('guest.agency');
