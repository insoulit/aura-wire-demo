<?php

it('renders homepage with hero banner and monochrome portal cards', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
        ->assertSee('Aura Wire')
        ->assertSee('UI Component Suite for Laravel')
        ->assertSee('Guest Showcase')
        ->assertSee('User Workspace')
        ->assertSee('Admin Console');
});

it('renders code terminal on homepage with highlighted syntax and without comments', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
        ->assertSee('text-amber-200', false)
        ->assertDontSee('// Clean, pure, zero runtime overhead');
});

it('includes quick links to all 3 application layout portals', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
        ->assertSee('href="/guest"', false)
        ->assertSee('href="/dashboard"', false)
        ->assertSee('href="/admin"', false);
});
