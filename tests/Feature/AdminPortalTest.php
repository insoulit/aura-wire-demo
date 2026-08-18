<?php

it('renders admin dashboard console with metrics and quick navigation', function () {
    $response = $this->get('/admin');

    $response->assertStatus(200)
        ->assertSee('Admin')
        ->assertSee('Dashboard');
});

it('renders admin users management index table', function () {
    $response = $this->get('/admin/users');

    $response->assertStatus(200);
});

it('renders admin user create form with single-word Create button label', function () {
    $response = $this->get('/admin/users/create');

    $response->assertStatus(200)
        ->assertSee('Create');
});

it('renders admin user edit view', function () {
    $response = $this->get('/admin/users/edit');

    $response->assertStatus(200);
});

it('renders admin user show profile view', function () {
    $response = $this->get('/admin/users/show');

    $response->assertStatus(200);
});

it('renders admin activity logs', function () {
    $response = $this->get('/admin/logs');

    $response->assertStatus(200);
});

it('renders admin settings configuration view', function () {
    $response = $this->get('/admin/setting');

    $response->assertStatus(200);
});
