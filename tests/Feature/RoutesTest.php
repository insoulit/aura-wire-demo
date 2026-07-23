<?php

it('returns a successful 200 response for all application and component routes', function (string $url) {
    $response = $this->get($url);

    $response->assertStatus(200);
})->with([
    'Home Page' => '/',
    'Guest Portal' => '/guest',
    'User Workspace' => '/dashboard',
    'Admin Console' => '/admin',
    'Component Directory' => '/components',
    'Avatar Component' => '/components/avatar',
    'Badge Component' => '/components/badge',
    'Button Component' => '/components/button',
    'Button Group Component' => '/components/button-group',
    'Card Component' => '/components/card',
    'Checkbox Component' => '/components/checkbox',
    'Dropdown Component' => '/components/dropdown',
    'Error Component' => '/components/error',
    'Field Component' => '/components/field',
    'Header Component' => '/components/header',
    'Input Component' => '/components/input',
    'Label Component' => '/components/label',
    'Main Component' => '/components/main',
    'Modal Component' => '/components/modal',
    'Navbar Component' => '/components/navbar',
    'Radio Component' => '/components/radio',
    'Select Component' => '/components/select',
    'Separator Component' => '/components/separator',
    'Sidebar Component' => '/components/sidebar',
    'Switch Component' => '/components/switch',
    'Table Component' => '/components/table',
    'Tabs Component' => '/components/tabs',
    'Textarea Component' => '/components/textarea',
    'Toast Component' => '/components/toast',
]);
