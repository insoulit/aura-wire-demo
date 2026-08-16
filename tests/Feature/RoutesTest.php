<?php

it('returns a successful 200 response for all component, portal, design block, and template routes', function (string $url) {
    $response = $this->get($url);

    if ($response->status() !== 200) {
        fwrite(STDERR, "\nFAILED URL: {$url}\nStatus: {$response->status()}\nError: " . ($response->exception ? $response->exception->getMessage() : 'No exception') . "\n");
    }

    $response->assertStatus(200, "Failed URL: {$url}");
})->with([
    // Home Page
    'Home Page' => '/',

    // User Portal & Workspace
    'User Workspace Dashboard' => '/user',
    'User Profile Settings' => '/user/profile',
    'User Avatar Upload' => '/user/avatar',
    'User Email Change' => '/user/email',
    'User Password Change' => '/user/password',
    'User Preferences Setting' => '/user/setting',

    // Admin Portal Console
    'Admin Console Dashboard' => '/admin',
    'Admin Users Directory' => '/admin/users',
    'Admin User Create' => '/admin/users/create',
    'Admin User Edit' => '/admin/users/edit',
    'Admin User Detail Show' => '/admin/users/show',
    'Admin System Logs' => '/admin/logs',
    'Admin Log Detail Show' => '/admin/logs/show',
    'Admin Global Setting' => '/admin/setting',

    // Guest Portal
    'Guest Portal Landing' => '/guest',

    // Guest Design Blocks
    'Block Product Card' => '/guest/block/product-card',
    'Block Pricing Table' => '/guest/block/pricing',
    'Block Dashboard Widgets' => '/guest/block/dashboard',
    'Block Auth Screens' => '/guest/block/auth',
    'Block User Profile' => '/guest/block/profile',
    'Block Hero Section' => '/guest/block/hero',
    'Block Feature Grid' => '/guest/block/feature',
    'Block Call To Action' => '/guest/block/cta',
    'Block Testimonials' => '/guest/block/testimonial',
    'Block Dialog Modal' => '/guest/block/modal',
    'Block Slide Over Drawer' => '/guest/block/slide-over',
    'Block Timeline Activity' => '/guest/block/timeline',
    'Block Empty State' => '/guest/block/empty-state',
    'Block FAQ Accordion' => '/guest/block/faq',
    'Block Header Navigation' => '/guest/block/navigation',

    // Direct /guest/* Aliases
    'Direct Alias Product Card' => '/guest/product-card',
    'Direct Alias Pricing' => '/guest/pricing',
    'Direct Alias Dashboard' => '/guest/dashboard-widgets',
    'Direct Alias Auth' => '/guest/auth',
    'Direct Alias Profile' => '/guest/profile',

    // Blocks Top-level Aliases
    'Top-level Alias Product Card' => '/blocks/product-card',
    'Top-level Alias Pricing' => '/blocks/pricing',
    'Top-level Alias Dashboard' => '/blocks/dashboard',
    'Top-level Alias Auth' => '/blocks/auth',
    'Top-level Alias Profile' => '/blocks/profile',

    // Full Application Templates
    'Template E-Commerce Store' => '/guest/template/ecommerce',
    'Template Portfolio Minimal' => '/guest/template/portfolio',
    'Template Restaurant Bistro' => '/guest/template/restaurant',
    'Template SaaS Cloud Platform' => '/guest/template/saas',
    'Template Creative Agency' => '/guest/template/agency',

    // Direct /guest/* Template Aliases
    'Direct Template E-Commerce' => '/guest/ecommerce',
    'Direct Template Portfolio' => '/guest/portfolio',
    'Direct Template Restaurant' => '/guest/restaurant',
    'Direct Template SaaS' => '/guest/saas',
    'Direct Template Agency' => '/guest/agency',

    // Component Suite Index & Setup Guide
    'Component Directory' => '/components',
    'Installation Guide' => '/components/installation',
    'Icon Library Page' => '/components/icon-library',
    'Icons Alias' => '/components/icons',

    // Typography Components
    'Kicker Component' => '/components/kicker',
    'Display Component' => '/components/display',
    'Heading Component' => '/components/heading',
    'Subheading Component' => '/components/subheading',
    'Text Component' => '/components/text',

    // Action Components
    'Button Component' => '/components/button',
    'Button Group Component' => '/components/button-group',
    'Icon Button Component' => '/components/icon-button',
    'Icon Button Alias' => '/components/button-icon',
    'Link Component' => '/components/link',
    'Dropdown Component' => '/components/dropdown',

    // Form Controls
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
    'Rich Text Component' => '/components/rich-text',
    'Combobox Component' => '/components/combobox',
    'Date Picker Component' => '/components/date-picker',
    'Rating Component' => '/components/rating',

    // Display Components
    'Card Component' => '/components/card',
    'Tabs Component' => '/components/tabs',
    'Accordion Component' => '/components/accordion',
    'Avatar Component' => '/components/avatar',
    'Badge Component' => '/components/badge',
    'Icon Component' => '/components/icon',
    'Tag Component' => '/components/tag',
    'Separator Component' => '/components/separator',
    'Progress Bar Component' => '/components/progress-bar',
    'Skeleton Component' => '/components/skeleton',
    'Empty State Component' => '/components/empty-state',

    // Data Components
    'Table Component' => '/components/table',
    'Stat Component' => '/components/stat',
    'Timeline Component' => '/components/timeline',
    'Code Component' => '/components/code',
    'List Component' => '/components/list',
    'Numbered List Component' => '/components/numbered-list',

    // Feedback & Overlay Components
    'Alert Component' => '/components/alert',
    'Banner Component' => '/components/banner',
    'Toast Component' => '/components/toast',
    'Modal Component' => '/components/modal',
    'Sheet Component' => '/components/sheet',
    'Command Component' => '/components/command',
    'Popover Component' => '/components/popover',
    'Tooltip Component' => '/components/tooltip',
    'Spinner Component' => '/components/spinner',

    // Layout Components
    'Body Component' => '/components/body',
    'Container Component' => '/components/container',
    'Header Component' => '/components/header',
    'Navbar Component' => '/components/navbar',
    'Sidebar Component' => '/components/sidebar',
    'Main Component' => '/components/main',
    'Footer Component' => '/components/footer',

    // Navigation Components
    'Breadcrumbs Component' => '/components/breadcrumb',
    'Pagination Component' => '/components/pagination',
    'Stepper Component' => '/components/stepper',
]);
