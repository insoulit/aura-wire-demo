<?php

it('executes optimize-clear route and returns json success payload', function () {
    $response = $this->get('/optimize-clear');

    $response->assertStatus(200)
        ->assertJson([
            'status' => 'success',
        ]);
});
