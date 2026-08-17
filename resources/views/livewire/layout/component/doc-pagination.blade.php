<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        $docsPages = [
            ['title' => 'Overview', 'url' => '/components'],
            ['title' => 'Installation', 'url' => '/components/installation'],
            ['title' => 'Icon Library', 'url' => '/components/icon-library'],

            // 1. Typography
            ['title' => 'Kicker', 'url' => '/components/kicker'],
            ['title' => 'Display', 'url' => '/components/display'],
            ['title' => 'Heading', 'url' => '/components/heading'],
            ['title' => 'Subheading', 'url' => '/components/subheading'],
            ['title' => 'Lead', 'url' => '/components/lead'],
            ['title' => 'Text', 'url' => '/components/text'],
            ['title' => 'Blockquote', 'url' => '/components/blockquote'],
            ['title' => 'Inline Code', 'url' => '/components/inline-code'],
            ['title' => 'Keyboard', 'url' => '/components/kbd'],

            // 2. Action
            ['title' => 'Button', 'url' => '/components/button'],
            ['title' => 'Icon Button', 'url' => '/components/icon-button'],
            ['title' => 'Button Group', 'url' => '/components/button-group'],
            ['title' => 'Link', 'url' => '/components/link'],
            ['title' => 'Dropdown', 'url' => '/components/dropdown'],

            // 3. Form
            ['title' => 'Field', 'url' => '/components/field'],
            ['title' => 'Label', 'url' => '/components/label'],
            ['title' => 'Error', 'url' => '/components/error'],
            ['title' => 'Input', 'url' => '/components/input'],
            ['title' => 'Textarea', 'url' => '/components/textarea'],
            ['title' => 'Rich Text', 'url' => '/components/rich-text'],
            ['title' => 'Pin Code', 'url' => '/components/pin-code'],
            ['title' => 'Select', 'url' => '/components/select'],
            ['title' => 'Combobox', 'url' => '/components/combobox'],
            ['title' => 'Date Picker', 'url' => '/components/date-picker'],
            ['title' => 'Checkbox', 'url' => '/components/checkbox'],
            ['title' => 'Radio', 'url' => '/components/radio'],
            ['title' => 'Switch', 'url' => '/components/switch'],
            ['title' => 'Rating', 'url' => '/components/rating'],
            ['title' => 'File Upload', 'url' => '/components/file-upload'],

            // 4. Display
            ['title' => 'Card', 'url' => '/components/card'],
            ['title' => 'Tabs', 'url' => '/components/tabs'],
            ['title' => 'Accordion', 'url' => '/components/accordion'],
            ['title' => 'Avatar', 'url' => '/components/avatar'],
            ['title' => 'Badge', 'url' => '/components/badge'],
            ['title' => 'Icon', 'url' => '/components/icon'],
            ['title' => 'Tag', 'url' => '/components/tag'],
            ['title' => 'Separator', 'url' => '/components/separator'],
            ['title' => 'Progress Bar', 'url' => '/components/progress-bar'],
            ['title' => 'Skeleton', 'url' => '/components/skeleton'],
            ['title' => 'Empty State', 'url' => '/components/empty-state'],

            // 5. Data
            ['title' => 'Table', 'url' => '/components/table'],
            ['title' => 'Stat', 'url' => '/components/stat'],
            ['title' => 'Timeline', 'url' => '/components/timeline'],
            ['title' => 'Code', 'url' => '/components/code'],
            ['title' => 'List', 'url' => '/components/list'],
            ['title' => 'Numbered List', 'url' => '/components/numbered-list'],

            // 6. Feedback
            ['title' => 'Alert', 'url' => '/components/alert'],
            ['title' => 'Banner', 'url' => '/components/banner'],
            ['title' => 'Toast', 'url' => '/components/toast'],
            ['title' => 'Modal', 'url' => '/components/modal'],
            ['title' => 'Sheet', 'url' => '/components/sheet'],
            ['title' => 'Command', 'url' => '/components/command'],
            ['title' => 'Popover', 'url' => '/components/popover'],
            ['title' => 'Tooltip', 'url' => '/components/tooltip'],
            ['title' => 'Spinner', 'url' => '/components/spinner'],

            // 7. Navigation
            ['title' => 'Breadcrumb', 'url' => '/components/breadcrumb'],
            ['title' => 'Stepper', 'url' => '/components/stepper'],
            ['title' => 'Pagination', 'url' => '/components/pagination'],

            // 8. Layout
            ['title' => 'Body', 'url' => '/components/body'],
            ['title' => 'Container', 'url' => '/components/container'],
            ['title' => 'Header', 'url' => '/components/header'],
            ['title' => 'Navbar', 'url' => '/components/navbar'],
            ['title' => 'Sidebar', 'url' => '/components/sidebar'],
            ['title' => 'Main', 'url' => '/components/main'],
            ['title' => 'Footer', 'url' => '/components/footer'],
        ];

        $currentPath = rtrim(request()->getPathInfo(), '/');
        if ($currentPath === '') {
            $currentPath = '/components';
        }

        $currentIndex = null;
        foreach ($docsPages as $index => $page) {
            if (rtrim($page['url'], '/') === $currentPath) {
                $currentIndex = $index;
                break;
            }
        }

        return [
            'prevPage' => ($currentIndex !== null && $currentIndex > 0) ? $docsPages[$currentIndex - 1] : null,
            'nextPage' => ($currentIndex !== null && $currentIndex < count($docsPages) - 1) ? $docsPages[$currentIndex + 1] : null,
        ];
    }
};

?>

<div class="w-full max-w-4xl mx-auto pt-10">

    @if ($prevPage || $nextPage)

        <x-aura::flex justify="between" align="stretch" gap="md">

            <div class="flex-1">

                @if ($prevPage)

                    <x-aura::card href="{{ $prevPage['url'] }}" wire:navigate>

                        <x-aura::stack gap="1">

                            <x-aura::flex align="center" gap="1.5">

                                <x-aura::icon name="arrow-left" size="sm" />

                                <x-aura::text size="sm" variant="subtle">
                                    Previous
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::heading level="3" size="xs">
                                {{ $prevPage['title'] }}
                            </x-aura::heading>

                        </x-aura::stack>

                    </x-aura::card>

                @endif

            </div>

            <div class="flex-1">

                @if ($nextPage)

                    <x-aura::card href="{{ $nextPage['url'] }}" wire:navigate>

                        <x-aura::stack gap="1" align="end">

                            <x-aura::flex align="center" gap="1.5">

                                <x-aura::text size="sm" variant="subtle">
                                    Next
                                </x-aura::text>

                                <x-aura::icon name="arrow-right" size="sm" />

                            </x-aura::flex>

                            <x-aura::heading level="3" size="xs">
                                {{ $nextPage['title'] }}
                            </x-aura::heading>

                        </x-aura::stack>

                    </x-aura::card>

                @endif

            </div>

        </x-aura::flex>

    @endif

</div>
