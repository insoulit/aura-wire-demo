<?php

it('renders user workspace dashboard', function () {
    $response = $this->get('/dashboard');

    $response->assertStatus(200);
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
