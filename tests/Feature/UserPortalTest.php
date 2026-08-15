<?php

it('renders user workspace dashboard on /user', function () {
    $response = $this->get('/user');

    $response->assertStatus(200)
        ->assertSee('Alex Kovacs', false)
        ->assertSee('Profile Info', false);
});

it('redirects legacy /dashboard to /user', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect('/user');
});

it('renders user profile management view', function () {
    $response = $this->get('/user/profile');

    $response->assertStatus(200);
});

it('renders user avatar settings view', function () {
    $response = $this->get('/user/avatar');

    $response->assertStatus(200);
});

it('renders user email change view', function () {
    $response = $this->get('/user/email');

    $response->assertStatus(200);
});

it('renders user password change view', function () {
    $response = $this->get('/user/password');

    $response->assertStatus(200);
});

it('renders user preferences settings view', function () {
    $response = $this->get('/user/setting');

    $response->assertStatus(200);
});
