<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        $activeGroup = 'none';
        if (request()->is('components/kicker', 'components/display', 'components/heading', 'components/subheading', 'components/text')) {
            $activeGroup = 'typography';
        } elseif (request()->is('components/button', 'components/icon-button', 'components/button-group', 'components/link', 'components/dropdown')) {
            $activeGroup = 'actions';
        } elseif (request()->is('components/field', 'components/label', 'components/error', 'components/input', 'components/textarea', 'components/rich-text', 'components/pin-code', 'components/select', 'components/combobox', 'components/date-picker', 'components/checkbox', 'components/radio', 'components/switch', 'components/rating', 'components/file-upload')) {
            $activeGroup = 'form';
        } elseif (request()->is('components/card', 'components/tabs', 'components/accordion', 'components/avatar', 'components/badge', 'components/icon', 'components/tag', 'components/separator', 'components/progress-bar', 'components/skeleton', 'components/empty-state')) {
            $activeGroup = 'display';
        } elseif (request()->is('components/table', 'components/stat', 'components/timeline', 'components/code', 'components/list', 'components/numbered-list')) {
            $activeGroup = 'data';
        } elseif (request()->is('components/alert', 'components/banner', 'components/toast', 'components/modal', 'components/sheet', 'components/command', 'components/popover', 'components/tooltip', 'components/spinner')) {
            $activeGroup = 'feedback';
        } elseif (request()->is('components/breadcrumb', 'components/stepper', 'components/pagination')) {
            $activeGroup = 'navigation';
        } elseif (request()->is('components/body', 'components/container', 'components/header', 'components/navbar', 'components/sidebar', 'components/main', 'components/footer')) {
            $activeGroup = 'layout';
        }

        return ['activeGroup' => $activeGroup];
    }
};

?>

<div x-data="{ openGroup: '{{ $activeGroup }}' }" class="space-y-2.5">

    <!-- Start Section -->
    <x-aura::stack gap="1">
        <x-aura::kicker>Start</x-aura::kicker>
        <ul class="space-y-0.5 font-medium text-xs sm:text-sm">
            <li>
                <a href="/components" class="flex items-center gap-2.5 px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold shadow-2xs' : 'text-zinc-700 dark:text-zinc-300 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/60' }}">
                    <x-aura::icon name="layers" size="xs" />
                    <span>Overview</span>
                </a>
            </li>
            <li>
                <a href="/components/installation" class="flex items-center gap-2.5 px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/installation') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold shadow-2xs' : 'text-zinc-700 dark:text-zinc-300 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/60' }}">
                    <x-aura::icon name="download" size="xs" />
                    <span>Installation</span>
                </a>
            </li>
            <li>
                <a href="/components/icon-library" class="flex items-center gap-2.5 px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/icon-library', 'components/icons') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold shadow-2xs' : 'text-zinc-700 dark:text-zinc-300 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/60' }}">
                    <x-aura::icon name="sparkles" size="xs" />
                    <span>Icon Library</span>
                </a>
            </li>
        </ul>
    </x-aura::stack>

    <!-- Category Separator -->
    <x-aura::separator />

    <!-- 1. Typography Dropdown -->
    @php
        $isTypographyActive = request()->is('components/kicker', 'components/display', 'components/heading', 'components/subheading', 'components/text');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'typography' ? '' : 'typography'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isTypographyActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="type" size="xs" />
                Typography
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'typography' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'typography'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/kicker" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/kicker') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Kicker</a></li>
            <li><a href="/components/display" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/display') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Display</a></li>
            <li><a href="/components/heading" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/heading') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Heading</a></li>
            <li><a href="/components/subheading" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/subheading') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Subheading</a></li>
            <li><a href="/components/text" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/text') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Text</a></li>
        </ul>
    </x-aura::stack>

    <!-- 2. Actions Dropdown -->
    @php
        $isActionsActive = request()->is('components/button', 'components/icon-button', 'components/button-group', 'components/link', 'components/dropdown');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'actions' ? '' : 'actions'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isActionsActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="mouse-pointer-click" size="xs" />
                Action
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'actions' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'actions'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/button" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/button') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Button</a></li>
            <li><a href="/components/icon-button" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/icon-button') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Icon Button</a></li>
            <li><a href="/components/button-group" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/button-group') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Group</a></li>
            <li><a href="/components/link" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/link') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Link</a></li>
            <li><a href="/components/dropdown" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/dropdown') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Dropdown</a></li>
        </ul>
    </x-aura::stack>

    <!-- 3. Form Controls Dropdown -->
    @php
        $isFormActive = request()->is('components/field', 'components/label', 'components/error', 'components/input', 'components/textarea', 'components/rich-text', 'components/pin-code', 'components/select', 'components/combobox', 'components/date-picker', 'components/checkbox', 'components/radio', 'components/switch', 'components/rating', 'components/file-upload');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'form' ? '' : 'form'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isFormActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="pencil" size="xs" />
                Form
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'form' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'form'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/field" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/field') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Field</a></li>
            <li><a href="/components/label" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/label') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Label</a></li>
            <li><a href="/components/error" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/error') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Error</a></li>
            <li><a href="/components/input" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/input') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Input</a></li>
            <li><a href="/components/textarea" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/textarea') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Textarea</a></li>
            <li><a href="/components/rich-text" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/rich-text') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Rich Text</a></li>
            <li><a href="/components/pin-code" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/pin-code') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Pin</a></li>
            <li><a href="/components/select" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/select') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Select</a></li>
            <li><a href="/components/combobox" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/combobox') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Combobox</a></li>
            <li><a href="/components/date-picker" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/date-picker') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Date Picker</a></li>
            <li><a href="/components/checkbox" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/checkbox') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Checkbox</a></li>
            <li><a href="/components/radio" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/radio') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Radio</a></li>
            <li><a href="/components/switch" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/switch') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Switch</a></li>
            <li><a href="/components/rating" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/rating') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Rating</a></li>
            <li><a href="/components/file-upload" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/file-upload') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Upload</a></li>
        </ul>
    </x-aura::stack>

    <!-- 4. Display Dropdown -->
    @php
        $isDisplayActive = request()->is('components/card', 'components/tabs', 'components/accordion', 'components/avatar', 'components/badge', 'components/icon', 'components/tag', 'components/separator', 'components/progress-bar', 'components/skeleton', 'components/empty-state');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'display' ? '' : 'display'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isDisplayActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="layout" size="xs" />
                Display
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'display' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'display'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/card" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/card') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Card</a></li>
            <li><a href="/components/tabs" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/tabs') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Tabs</a></li>
            <li><a href="/components/accordion" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/accordion') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Accordion</a></li>
            <li><a href="/components/avatar" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/avatar') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Avatar</a></li>
            <li><a href="/components/badge" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/badge') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Badge</a></li>
            <li><a href="/components/icon" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/icon') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Icon</a></li>
            <li><a href="/components/tag" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/tag') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Tag</a></li>
            <li><a href="/components/separator" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/separator') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Separator</a></li>
            <li><a href="/components/progress-bar" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/progress-bar') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Progress</a></li>
            <li><a href="/components/skeleton" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/skeleton') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Skeleton</a></li>
            <li><a href="/components/empty-state" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/empty-state') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Empty</a></li>
        </ul>
    </x-aura::stack>

    <!-- 5. Data Dropdown -->
    @php
        $isDataActive = request()->is('components/table', 'components/stat', 'components/timeline', 'components/code', 'components/list', 'components/numbered-list');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'data' ? '' : 'data'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isDataActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="database" size="xs" />
                Data
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'data' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'data'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/table" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/table') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Table</a></li>
            <li><a href="/components/stat" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/stat') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Stat</a></li>
            <li><a href="/components/timeline" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/timeline') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Timeline</a></li>
            <li><a href="/components/code" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/code') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Code</a></li>
            <li><a href="/components/list" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/list') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">List</a></li>
            <li><a href="/components/numbered-list" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/numbered-list') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Numbered List</a></li>
        </ul>
    </x-aura::stack>

    <!-- 6. Feedback Dropdown -->
    @php
        $isFeedbackActive = request()->is('components/alert', 'components/banner', 'components/toast', 'components/modal', 'components/sheet', 'components/command', 'components/popover', 'components/tooltip', 'components/spinner');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'feedback' ? '' : 'feedback'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isFeedbackActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="message-square" size="xs" />
                Feedback
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'feedback' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'feedback'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/alert" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/alert') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Alert</a></li>
            <li><a href="/components/banner" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/banner') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Banner</a></li>
            <li><a href="/components/toast" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/toast') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Toast</a></li>
            <li><a href="/components/modal" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/modal') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Modal</a></li>
            <li><a href="/components/sheet" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/sheet') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Sheet</a></li>
            <li><a href="/components/command" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/command') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Command</a></li>
            <li><a href="/components/popover" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/popover') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Popover</a></li>
            <li><a href="/components/tooltip" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/tooltip') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Tooltip</a></li>
            <li><a href="/components/spinner" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/spinner') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Spinner</a></li>
        </ul>
    </x-aura::stack>

    <!-- 6. Navigation Dropdown -->
    @php
        $isNavActive = request()->is('components/breadcrumb', 'components/stepper', 'components/pagination');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'navigation' ? '' : 'navigation'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isNavActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="compass" size="xs" />
                Navigation
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'navigation' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'navigation'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/breadcrumb" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/breadcrumb') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Breadcrumb</a></li>
            <li><a href="/components/stepper" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/stepper') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Stepper</a></li>
            <li><a href="/components/pagination" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/pagination') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Pagination</a></li>
        </ul>
    </x-aura::stack>

    <!-- 7. Layout Dropdown -->
    @php
        $isLayoutActive = request()->is('components/body', 'components/container', 'components/flex', 'components/center', 'components/stack', 'components/header', 'components/navbar', 'components/sidebar', 'components/main', 'components/footer');
    @endphp
    <x-aura::stack gap="0.5">
        <button
            type="button"
            x-on:click="openGroup = openGroup === 'layout' ? '' : 'layout'"
            class="flex items-center justify-between w-full px-2 py-1.5 rounded-md text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isLayoutActive ? 'text-zinc-900 dark:text-white font-bold bg-zinc-100/50 dark:bg-zinc-800/40' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100/50 dark:hover:bg-zinc-800/40' }}"
        >
            <span class="flex items-center gap-2">
                <x-aura::icon name="sidebar" size="xs" />
                Layout
            </span>
            <div class="transition-transform duration-200" :class="openGroup === 'layout' ? 'rotate-90' : ''">
                <x-aura::icon name="chevron-right" size="xs" />
            </div>
        </button>
        <ul x-show="openGroup === 'layout'" x-transition class="space-y-0.5 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-2 py-1 text-xs sm:text-sm">
            <li><a href="/components/container" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/container') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Container</a></li>
            <li><a href="/components/flex" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/flex') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Flex</a></li>
            <li><a href="/components/center" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/center') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Center</a></li>
            <li><a href="/components/stack" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/stack') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Stack</a></li>
            <li><a href="/components/body" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/body') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Body</a></li>
            <li><a href="/components/header" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/header') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Header</a></li>
            <li><a href="/components/navbar" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/navbar') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Navbar</a></li>
            <li><a href="/components/sidebar" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/sidebar') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Sidebar</a></li>
            <li><a href="/components/main" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/main') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Main</a></li>
            <li><a href="/components/footer" class="block px-2.5 py-1.5 rounded-md transition-colors {{ request()->is('components/footer') ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-semibold shadow-2xs' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Footer</a></li>
        </ul>
    </x-aura::stack>

</div>
