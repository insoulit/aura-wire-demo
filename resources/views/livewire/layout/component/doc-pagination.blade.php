<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        $docsPages = [
            ['title' => 'Overview', 'url' => '/components'],
            ['title' => 'Installation', 'url' => '/components/installation'],
            ['title' => 'Icon library', 'url' => '/components/icon'],
            ['title' => 'Heading', 'url' => '/components/heading'],
            ['title' => 'Subheading', 'url' => '/components/subheading'],
            ['title' => 'Kicker', 'url' => '/components/kicker'],
            ['title' => 'Text', 'url' => '/components/text'],
            ['title' => 'Button', 'url' => '/components/button'],
            ['title' => 'Button Group', 'url' => '/components/button-group'],
            ['title' => 'Icon Button', 'url' => '/components/icon-button'],
            ['title' => 'Input', 'url' => '/components/input'],
            ['title' => 'Textarea', 'url' => '/components/textarea'],
            ['title' => 'Select', 'url' => '/components/select'],
            ['title' => 'Combobox', 'url' => '/components/combobox'],
            ['title' => 'Date Picker', 'url' => '/components/date-picker'],
            ['title' => 'Rating', 'url' => '/components/rating'],
            ['title' => 'Checkbox', 'url' => '/components/checkbox'],
            ['title' => 'Radio', 'url' => '/components/radio'],
            ['title' => 'Switch', 'url' => '/components/switch'],
            ['title' => 'Field', 'url' => '/components/field'],
            ['title' => 'Label', 'url' => '/components/label'],
            ['title' => 'File Upload', 'url' => '/components/file-upload'],
            ['title' => 'Pin Code', 'url' => '/components/pin-code'],
            ['title' => 'Rich Text', 'url' => '/components/rich-text'],
            ['title' => 'Error', 'url' => '/components/error'],
            ['title' => 'Accordion', 'url' => '/components/accordion'],
            ['title' => 'Avatar', 'url' => '/components/avatar'],
            ['title' => 'Badge', 'url' => '/components/badge'],
            ['title' => 'Card', 'url' => '/components/card'],
            ['title' => 'Code', 'url' => '/components/code'],
            ['title' => 'Empty State', 'url' => '/components/empty-state'],
            ['title' => 'Numbered List', 'url' => '/components/numbered-list'],
            ['title' => 'List', 'url' => '/components/list'],
            ['title' => 'Product Card', 'url' => '/components/product-card'],
            ['title' => 'Progress Bar', 'url' => '/components/progress-bar'],
            ['title' => 'Separator', 'url' => '/components/separator'],
            ['title' => 'Skeleton', 'url' => '/components/skeleton'],
            ['title' => 'Stat Card', 'url' => '/components/stat'],
            ['title' => 'Table', 'url' => '/components/table'],
            ['title' => 'Tabs', 'url' => '/components/tabs'],
            ['title' => 'Tag', 'url' => '/components/tag'],
            ['title' => 'Timeline', 'url' => '/components/timeline'],
            ['title' => 'Alert', 'url' => '/components/alert'],
            ['title' => 'Banner', 'url' => '/components/banner'],
            ['title' => 'Command', 'url' => '/components/command'],
            ['title' => 'Dropdown', 'url' => '/components/dropdown'],
            ['title' => 'Modal', 'url' => '/components/modal'],
            ['title' => 'Popover', 'url' => '/components/popover'],
            ['title' => 'Sheet', 'url' => '/components/sheet'],
            ['title' => 'Spinner', 'url' => '/components/spinner'],
            ['title' => 'Toast', 'url' => '/components/toast'],
            ['title' => 'Tooltip', 'url' => '/components/tooltip'],
            ['title' => 'Breadcrumb', 'url' => '/components/breadcrumb'],
            ['title' => 'Pagination', 'url' => '/components/pagination'],
            ['title' => 'Stepper', 'url' => '/components/stepper'],
            ['title' => 'Container', 'url' => '/components/container'],
            ['title' => 'Body', 'url' => '/components/body'],
            ['title' => 'Header', 'url' => '/components/header'],
            ['title' => 'Sidebar', 'url' => '/components/sidebar'],
            ['title' => 'Main', 'url' => '/components/main'],
            ['title' => 'Navbar', 'url' => '/components/navbar'],
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
                            <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 transition-transform group-hover:-translate-x-0.5" />
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
                            <x-aura::icon name="arrow-right" class="w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5" />
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
