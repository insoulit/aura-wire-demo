<?php

it('renders guest showcase portal landing page', function () {
    $response = $this->get('/guest');

    $response->assertStatus(200)
        ->assertSee('Guest Portal', false)
        ->assertSee('Blocks &amp; Templates', false);
});

it('renders guest design blocks', function (string $blockUrl) {
    $response = $this->get($blockUrl);

    $response->assertStatus(200);
})->with([
    '/guest/block/hero',
    '/guest/block/feature',
    '/guest/block/cta',
    '/guest/block/pricing',
    '/guest/block/testimonial',
    '/guest/block/product-card',
    '/guest/block/dashboard',
    '/guest/block/auth',
    '/guest/block/profile',
    '/guest/block/modal',
    '/guest/block/slide-over',
    '/guest/block/timeline',
    '/guest/block/empty-state',
    '/guest/block/faq',
    '/guest/block/navigation',
]);

it('renders guest full application templates', function (string $templateUrl) {
    $response = $this->get($templateUrl);

    $response->assertStatus(200);
})->with([
    '/guest/template/ecommerce',
    '/guest/template/portfolio',
    '/guest/template/restaurant',
    '/guest/template/saas',
    '/guest/template/agency',
]);
