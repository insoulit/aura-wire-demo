<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        $docsPages = [
            ['title' => 'Overview', 'url' => '/components'],
            ['title' => 'Installation', 'url' => '/components/installation'],
            ['title' => 'Icon library', 'url' => '/components/icon'],

            // 1. Typography
            ['title' => 'Kicker', 'url' => '/components/kicker'],
            ['title' => 'Display', 'url' => '/components/display'],
            ['title' => 'Heading', 'url' => '/components/heading'],
            ['title' => 'Subheading', 'url' => '/components/subheading'],
            ['title' => 'Text', 'url' => '/components/text'],

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
            ['title' => 'Product Card', 'url' => '/components/product-card'],
            ['title' => 'Stat Card', 'url' => '/components/stat'],
            ['title' => 'Badge', 'url' => '/components/badge'],
            ['title' => 'Tag', 'url' => '/components/tag'],
            ['title' => 'Avatar', 'url' => '/components/avatar'],
            ['title' => 'List', 'url' => '/components/list'],
            ['title' => 'Numbered List', 'url' => '/components/numbered-list'],
            ['title' => 'Table', 'url' => '/components/table'],
            ['title' => 'Tabs', 'url' => '/components/tabs'],
            ['title' => 'Accordion', 'url' => '/components/accordion'],
            ['title' => 'Timeline', 'url' => '/components/timeline'],
            ['title' => 'Code', 'url' => '/components/code'],
            ['title' => 'Separator', 'url' => '/components/separator'],
            ['title' => 'Progress Bar', 'url' => '/components/progress-bar'],
            ['title' => 'Skeleton', 'url' => '/components/skeleton'],
            ['title' => 'Empty State', 'url' => '/components/empty-state'],

            // 5. Feedback
            ['title' => 'Alert', 'url' => '/components/alert'],
            ['title' => 'Banner', 'url' => '/components/banner'],
            ['title' => 'Toast', 'url' => '/components/toast'],
            ['title' => 'Modal', 'url' => '/components/modal'],
            ['title' => 'Sheet', 'url' => '/components/sheet'],
            ['title' => 'Command', 'url' => '/components/command'],
            ['title' => 'Popover', 'url' => '/components/popover'],
            ['title' => 'Tooltip', 'url' => '/components/tooltip'],
            ['title' => 'Spinner', 'url' => '/components/spinner'],

            // 6. Navigation
            ['title' => 'Breadcrumb', 'url' => '/components/breadcrumb'],
            ['title' => 'Stepper', 'url' => '/components/stepper'],
            ['title' => 'Pagination', 'url' => '/components/pagination'],

            // 7. Layout
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

<div class="w-full">
    @if ($prevPage || $nextPage)
        <div class="w-full max-w-4xl mx-auto mt-12 grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 items-stretch">
            <div>
                @if ($prevPage)
                    <a href="{{ $prevPage['url'] }}" wire:navigate class="group flex flex-col p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 hover:border-zinc-400 dark:hover:border-zinc-600 bg-white dark:bg-zinc-900/50 transition-all shadow-2xs h-full justify-center">
                        <span class="text-[11px] font-semibold text-zinc-400 dark:text-zinc-500 uppercase tracking-wider flex items-center gap-1.5 mb-1 group-hover:text-zinc-900 dark:group-hover:text-white transition-colors">
                            <x-aura::icon name="arrow-left" size="xs" />
                            Previous
                        </span>
                        <span class="text-sm font-bold text-zinc-900 dark:text-white group-hover:text-zinc-600 dark:group-hover:text-zinc-300">
                            {{ $prevPage['title'] }}
                        </span>
                    </a>
                @endif
            </div>

            <div class="sm:col-start-2 text-right">
                @if ($nextPage)
                    <a href="{{ $nextPage['url'] }}" wire:navigate class="group flex flex-col items-end p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 hover:border-zinc-400 dark:hover:border-zinc-600 bg-white dark:bg-zinc-900/50 transition-all shadow-2xs h-full justify-center">
                        <span class="text-[11px] font-semibold text-zinc-400 dark:text-zinc-500 uppercase tracking-wider flex items-center gap-1.5 mb-1 group-hover:text-zinc-900 dark:group-hover:text-white transition-colors">
                            Next
                            <x-aura::icon name="arrow-right" size="xs" />
                        </span>
                        <span class="text-sm font-bold text-zinc-900 dark:text-white group-hover:text-zinc-600 dark:group-hover:text-zinc-300">
                            {{ $nextPage['title'] }}
                        </span>
                    </a>
                @endif
            </div>
        </div>
    @endif
</div>
