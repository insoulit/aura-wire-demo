<?php

use Livewire\Volt\Volt;

// Component Showcase Index & Installation
Volt::route('/components', 'component.index')->name('component.index');
Volt::route('/components/installation', 'component.installation')->name('component.installation');
Volt::route('/components/icon-library', 'component.icon-library')->name('component.icon-library');
Volt::route('/components/icons', 'component.icon-library')->name('component.icons');

// Typography Group
Volt::route('/components/kicker', 'component.typography.kicker')->name('component.kicker');
Volt::route('/components/display', 'component.typography.display')->name('component.display');
Volt::route('/components/heading', 'component.typography.heading')->name('component.heading');
Volt::route('/components/subheading', 'component.typography.subheading')->name('component.subheading');
Volt::route('/components/text', 'component.typography.text')->name('component.text');

// Button Group
Volt::route('/components/button', 'component.button.index')->name('component.button');
Volt::route('/components/button-group', 'component.button.group')->name('component.button-group');
Volt::route('/components/icon-button', 'component.button.icon-button')->name('component.icon-button');
Volt::route('/components/button-icon', 'component.button.icon-button')->name('component.button-icon');
Volt::route('/components/link', 'component.button.link')->name('component.link');

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
Volt::route('/components/progress-bar', 'component.display.progress-bar')->name('component.progress-bar');
Volt::route('/components/icon', 'component.display.icon')->name('component.icon');
Volt::route('/components/accordion', 'component.display.accordion')->name('component.accordion');
Volt::route('/components/stat', 'component.display.stat')->name('component.stat');
Volt::route('/components/skeleton', 'component.display.skeleton')->name('component.skeleton');
Volt::route('/components/timeline', 'component.display.timeline')->name('component.timeline');

// Navigation Group
Volt::route('/components/breadcrumb', 'component.navigation.breadcrumb')->name('component.breadcrumb');
Volt::route('/components/pagination', 'component.navigation.pagination')->name('component.pagination');
Volt::route('/components/stepper', 'component.navigation.stepper')->name('component.stepper');

// Layout & Structural Group
Volt::route('/components/container', 'component.layout.container')->name('component.container');
Volt::route('/components/body', 'component.layout.body')->name('component.body');
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
