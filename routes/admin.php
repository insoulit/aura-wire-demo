<?php

use Livewire\Volt\Volt;

// Admin Portal Console Routes
Volt::route('/admin', 'admin.dashboard.index')->name('admin.index');
Volt::route('/admin/dashboard', 'admin.dashboard.index')->name('admin.dashboard');
Volt::route('/admin/users', 'admin.user.index')->name('admin.users');
Volt::route('/admin/users/create', 'admin.user.create')->name('admin.users.create');
Volt::route('/admin/users/edit', 'admin.user.edit')->name('admin.users.edit');
Volt::route('/admin/users/show', 'admin.user.show')->name('admin.users.show');
Volt::route('/admin/logs', 'admin.log.index')->name('admin.logs');
Volt::route('/admin/logs/show', 'admin.log.show')->name('admin.logs.show');
Volt::route('/admin/setting', 'admin.setting.index')->name('admin.setting');
