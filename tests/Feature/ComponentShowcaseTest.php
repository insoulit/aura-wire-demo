<?php

it('renders component directory index with all 8 category sections', function () {
    $response = $this->get('/components');

    $response->assertStatus(200)
        ->assertSee('Component Suite')
        ->assertSee('Typography')
        ->assertSee('Action')
        ->assertSee('Form')
        ->assertSee('Display')
        ->assertSee('Data')
        ->assertSee('Feedback')
        ->assertSee('Navigation')
        ->assertSee('Layout');
});

it('renders installation setup guide', function () {
    $response = $this->get('/components/installation');

    $response->assertStatus(200)
        ->assertSee('Installation &amp; Setup Guide', false)
        ->assertSee('composer require insoulit/aura-wire', false);
});

it('renders component doc pages with code preview containers', function (string $slug) {
    $response = $this->get("/components/{$slug}");

    $response->assertStatus(200)
        ->assertSee('Component Syntax', false);
})->with([
    'heading',
    'button',
    'input',
    'card',
    'table',
    'modal',
    'header',
    'stepper',
]);
