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
    'Code Component' => '/components/code',
    'Dropdown Component' => '/components/dropdown',
    'Error Component' => '/components/error',
    'Field Component' => '/components/field',
    'Header Component' => '/components/header',
    'Heading Component' => '/components/heading',
    'Input Component' => '/components/input',
    'Kicker Component' => '/components/kicker',
    'Label Component' => '/components/label',
    'Main Component' => '/components/main',
    'Modal Component' => '/components/modal',
    'Navbar Component' => '/components/navbar',
    'Radio Component' => '/components/radio',
    'Select Component' => '/components/select',
    'Separator Component' => '/components/separator',
    'Sidebar Component' => '/components/sidebar',
    'Subheading Component' => '/components/subheading',
    'Switch Component' => '/components/switch',
    'Table Component' => '/components/table',
    'Tabs Component' => '/components/tabs',
    'Text Component' => '/components/text',
    'Textarea Component' => '/components/textarea',
    'Toast Component' => '/components/toast',
]);
