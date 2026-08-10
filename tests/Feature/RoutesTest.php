<?php

it('returns a successful 200 response for all component and portal page links', function (string $url) {
    $response = $this->get($url);

    if ($response->status() !== 200) {
        fwrite(STDERR, "\nFAILED URL: {$url}\nError: " . ($response->exception ? $response->exception->getMessage() : 'No exception') . "\n");
    }

    $response->assertStatus(200, "Failed URL: {$url} with error: " . ($response->exception ? $response->exception->getMessage() : 'none'));
})->with([
    'Home Page' => '/',
    'Guest Portal' => '/guest',
    'User Workspace' => '/dashboard',
    'User Profile' => '/user/profile',
    'User Avatar' => '/user/avatar',
    'User Email' => '/user/email',
    'User Password' => '/user/password',
    'User Settings' => '/user/setting',
    'Admin Console' => '/admin',
    'Component Directory' => '/components',
    'Heading Component' => '/components/heading',
    'Subheading Component' => '/components/subheading',
    'Kicker Component' => '/components/kicker',
    'Text Component' => '/components/text',
    'Button Component' => '/components/button',
    'Button Group Component' => '/components/button-group',
    'Dropdown Component' => '/components/dropdown',
    'Input Component' => '/components/input',
    'Textarea Component' => '/components/textarea',
    'Select Component' => '/components/select',
    'Checkbox Component' => '/components/checkbox',
    'Radio Component' => '/components/radio',
    'Switch Component' => '/components/switch',
    'Field Component' => '/components/field',
    'Label Component' => '/components/label',
    'Error Component' => '/components/error',
    'File Upload Component' => '/components/file-upload',
    'PIN Code Component' => '/components/pin-code',
    'Avatar Component' => '/components/avatar',
    'Badge Component' => '/components/badge',
    'Card Component' => '/components/card',
    'Code Component' => '/components/code',
    'Separator Component' => '/components/separator',
    'Empty State Component' => '/components/empty-state',
    'Numbered List Component' => '/components/numbered-list',
    'Product Card Component' => '/components/product-card',
    'Progress Bar Component' => '/components/progress-bar',
    'Breadcrumbs Component' => '/components/breadcrumb',
    'Pagination Component' => '/components/pagination',
    'Header Component' => '/components/header',
    'Sidebar Component' => '/components/sidebar',
    'Main Component' => '/components/main',
    'Navbar Component' => '/components/navbar',
    'Footer Component' => '/components/footer',
    'Modal Component' => '/components/modal',
    'Toast Component' => '/components/toast',
    'Sheet Component' => '/components/sheet',
    'Banner Component' => '/components/banner',
    'Spinner Component' => '/components/spinner',
    'Tag Component' => '/components/tag',
    'Table Component' => '/components/table',
    'Tabs Component' => '/components/tabs',
]);
