<?php

use Livewire\Volt\Volt;

// Component Showcase Index & Installation
Volt::route('/components', 'component.index')->name('component.index');
Volt::route('/components/installation', 'component.installation')->name('component.installation');
Volt::route('/components/icon-library', 'component.icon-library')->name('component.icon-library');
Volt::route('/components/icons', 'component.icon-library')->name('component.icons');

// 1. Typography Group
Volt::route('/components/kicker', 'component.typography.kicker')->name('component.kicker');
Volt::route('/components/display', 'component.typography.display')->name('component.display');
Volt::route('/components/heading', 'component.typography.heading')->name('component.heading');
Volt::route('/components/subheading', 'component.typography.subheading')->name('component.subheading');
Volt::route('/components/lead', 'component.typography.lead')->name('component.lead');
Volt::route('/components/text', 'component.typography.text')->name('component.text');
Volt::route('/components/blockquote', 'component.typography.blockquote')->name('component.blockquote');
Volt::route('/components/inline-code', 'component.typography.inline-code')->name('component.inline-code');
Volt::route('/components/kbd', 'component.typography.kbd')->name('component.kbd');

// 2. Action Group
Volt::route('/components/button', 'component.action.button')->name('component.button');
Volt::route('/components/button-group', 'component.action.button-group')->name('component.button-group');
Volt::route('/components/icon-button', 'component.action.icon-button')->name('component.icon-button');
Volt::route('/components/button-icon', 'component.action.icon-button')->name('component.button-icon');
Volt::route('/components/link', 'component.action.link')->name('component.link');

// 3. Form Group
Volt::route('/components/field', 'component.form.field')->name('component.field');
Volt::route('/components/label', 'component.form.label')->name('component.label');
Volt::route('/components/error', 'component.form.error')->name('component.error');
Volt::route('/components/input', 'component.form.input')->name('component.input');
Volt::route('/components/textarea', 'component.form.textarea')->name('component.textarea');
Volt::route('/components/rich-text', 'component.form.rich-text')->name('component.rich-text');
Volt::route('/components/pin-code', 'component.form.pin-code')->name('component.pin-code');
Volt::route('/components/select', 'component.form.select')->name('component.select');
Volt::route('/components/combobox', 'component.form.combobox')->name('component.combobox');
Volt::route('/components/date-picker', 'component.form.date-picker')->name('component.date-picker');
Volt::route('/components/checkbox', 'component.form.checkbox')->name('component.checkbox');
Volt::route('/components/radio', 'component.form.radio')->name('component.radio');
Volt::route('/components/switch', 'component.form.switch')->name('component.switch');
Volt::route('/components/rating', 'component.form.rating')->name('component.rating');
Volt::route('/components/file-upload', 'component.form.file-upload')->name('component.file-upload');

// 4. Display Group
Volt::route('/components/card', 'component.display.card')->name('component.card');
Volt::route('/components/tabs', 'component.display.tab')->name('component.tabs');
Volt::route('/components/accordion', 'component.display.accordion')->name('component.accordion');
Volt::route('/components/avatar', 'component.display.avatar')->name('component.avatar');
Volt::route('/components/badge', 'component.display.badge')->name('component.badge');
Volt::route('/components/icon', 'component.display.icon')->name('component.icon');
Volt::route('/components/tag', 'component.display.tag')->name('component.tag');
Volt::route('/components/separator', 'component.display.separator')->name('component.separator');
Volt::route('/components/progress-bar', 'component.display.progress-bar')->name('component.progress-bar');
Volt::route('/components/skeleton', 'component.display.skeleton')->name('component.skeleton');
Volt::route('/components/empty-state', 'component.display.empty-state')->name('component.empty-state');

// 5. Data Group
Volt::route('/components/table', 'component.data.table')->name('component.table');
Volt::route('/components/stat', 'component.data.stat')->name('component.stat');
Volt::route('/components/timeline', 'component.data.timeline')->name('component.timeline');
Volt::route('/components/code', 'component.data.code')->name('component.code');
Volt::route('/components/list', 'component.data.list')->name('component.list');
Volt::route('/components/numbered-list', 'component.data.numbered-list')->name('component.numbered-list');

// 6. Feedback Group
Volt::route('/components/alert', 'component.feedback.alert')->name('component.alert');
Volt::route('/components/banner', 'component.feedback.alert')->name('component.banner');
Volt::route('/components/toast', 'component.feedback.toast')->name('component.toast');
Volt::route('/components/modal', 'component.feedback.modal')->name('component.modal');
Volt::route('/components/sheet', 'component.feedback.sheet')->name('component.sheet');
Volt::route('/components/command', 'component.feedback.command')->name('component.command');
Volt::route('/components/popover', 'component.feedback.popover')->name('component.popover');
Volt::route('/components/tooltip', 'component.feedback.tooltip')->name('component.tooltip');
Volt::route('/components/spinner', 'component.feedback.spinner')->name('component.spinner');
Volt::route('/components/dropdown', 'component.feedback.dropdown')->name('component.dropdown');

// 7. Navigation Group
Volt::route('/components/breadcrumb', 'component.navigation.breadcrumb')->name('component.breadcrumb');
Volt::route('/components/pagination', 'component.navigation.pagination')->name('component.pagination');
Volt::route('/components/stepper', 'component.navigation.stepper')->name('component.stepper');

// 8. Layout Group
Volt::route('/components/container', 'component.layout.container')->name('component.container');
Volt::route('/components/grid', 'component.layout.grid')->name('component.grid');
Volt::route('/components/flex', 'component.layout.flex')->name('component.flex');
Volt::route('/components/center', 'component.layout.center')->name('component.center');
Volt::route('/components/header', 'component.layout.header')->name('component.header');
Volt::route('/components/navbar', 'component.layout.navbar')->name('component.navbar');
Volt::route('/components/sidebar', 'component.layout.sidebar')->name('component.sidebar');
Volt::route('/components/main', 'component.layout.main')->name('component.main');
Volt::route('/components/footer', 'component.layout.footer')->name('component.footer');
Volt::route('/components/body', 'component.layout.body')->name('component.body');

