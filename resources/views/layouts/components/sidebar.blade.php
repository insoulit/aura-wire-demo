<aside class="w-60 shrink-0 hidden lg:block border-r border-zinc-200 dark:border-zinc-800/80 pr-6 space-y-4 text-sm sticky top-20 self-start max-h-[calc(100vh-6rem)] overflow-y-auto scrollbar-thin">
    <!-- Start -->
    <div class="space-y-1">
        <x-aura::kicker class="px-1 text-xs font-semibold uppercase tracking-wider text-zinc-400">Start</x-aura::kicker>
        <ul class="space-y-1 font-medium">
            <li>
                <a href="/components" class="flex items-center gap-2 px-3 py-1.5 rounded-lg {{ request()->is('components') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    Overview
                </a>
            </li>
            <li>
                <a href="/components/installation" class="flex items-center gap-2 px-3 py-1.5 rounded-lg {{ request()->is('components/installation') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    Installation
                </a>
            </li>
            <li>
                <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between px-3 py-1.5 rounded-lg text-zinc-600 dark:text-zinc-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-zinc-100 dark:hover:bg-zinc-800/50 transition-colors">
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                        Packagist
                    </span>
                    <svg class="w-3 h-3 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </li>
        </ul>
    </div>

    <!-- Typography Dropdown -->
    @php
        $isTypographyActive = request()->is('components/heading', 'components/subheading', 'components/kicker', 'components/text');
    @endphp
    <div x-data="{ open: {{ $isTypographyActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isTypographyActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                Typography
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/heading" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/heading') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Heading</a></li>
            <li><a href="/components/subheading" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/subheading') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Subheading</a></li>
            <li><a href="/components/kicker" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/kicker') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Kicker</a></li>
            <li><a href="/components/text" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/text') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Text</a></li>
        </ul>
    </div>

    <!-- Layout Dropdown -->
    @php
        $isLayoutActive = request()->is('components/header', 'components/sidebar', 'components/main', 'components/navbar', 'components/footer');
    @endphp
    <div x-data="{ open: {{ $isLayoutActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isLayoutActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h3a1 1 0 011 1v6a1 1 0 01-1 1h-3a1 1 0 01-1-1v-6z"/></svg>
                Layout
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/header" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/header') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Header</a></li>
            <li><a href="/components/sidebar" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/sidebar') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Sidebar</a></li>
            <li><a href="/components/main" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/main') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Main</a></li>
            <li><a href="/components/navbar" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/navbar') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Navbar</a></li>
            <li><a href="/components/footer" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/footer') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Footer</a></li>
        </ul>
    </div>

    <!-- Actions Dropdown -->
    @php
        $isActionsActive = request()->is('components/button', 'components/button-group', 'components/dropdown');
    @endphp
    <div x-data="{ open: {{ $isActionsActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isActionsActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>
                Actions
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/button" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/button') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Button</a></li>
            <li><a href="/components/button-group" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/button-group') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Group</a></li>
            <li><a href="/components/dropdown" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/dropdown') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Dropdown</a></li>
        </ul>
    </div>

    <!-- Form Dropdown -->
    @php
        $isFormActive = request()->is('components/input', 'components/textarea', 'components/select', 'components/checkbox', 'components/radio', 'components/switch', 'components/field', 'components/file-upload', 'components/pin-code', 'components/error');
    @endphp
    <div x-data="{ open: {{ $isFormActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isFormActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                Form
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/input" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/input') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Input</a></li>
            <li><a href="/components/textarea" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/textarea') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Textarea</a></li>
            <li><a href="/components/select" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/select') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Select</a></li>
            <li><a href="/components/checkbox" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/checkbox') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Checkbox</a></li>
            <li><a href="/components/radio" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/radio') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Radio</a></li>
            <li><a href="/components/switch" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/switch') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Switch</a></li>
            <li><a href="/components/field" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/field') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Field</a></li>
            <li><a href="/components/file-upload" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/file-upload') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Upload</a></li>
            <li><a href="/components/pin-code" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/pin-code') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Pin</a></li>
            <li><a href="/components/error" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/error') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Error</a></li>
        </ul>
    </div>

    <!-- Display Dropdown -->
    @php
        $isDisplayActive = request()->is('components/avatar', 'components/badge', 'components/card', 'components/code', 'components/empty-state', 'components/numbered-list', 'components/product-card', 'components/progress-bar', 'components/separator', 'components/table', 'components/tabs');
    @endphp
    <div x-data="{ open: {{ $isDisplayActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isDisplayActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                Display
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/avatar" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/avatar') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Avatar</a></li>
            <li><a href="/components/badge" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/badge') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Badge</a></li>
            <li><a href="/components/card" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/card') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Card</a></li>
            <li><a href="/components/code" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/code') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Code</a></li>
            <li><a href="/components/empty-state" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/empty-state') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Empty</a></li>
            <li><a href="/components/numbered-list" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/numbered-list') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">List</a></li>
            <li><a href="/components/product-card" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/product-card') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Product</a></li>
            <li><a href="/components/progress-bar" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/progress-bar') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Progress</a></li>
            <li><a href="/components/separator" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/separator') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Separator</a></li>
            <li><a href="/components/table" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/table') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Table</a></li>
            <li><a href="/components/tabs" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/tabs') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Tabs</a></li>
        </ul>
    </div>

    <!-- Navigation Dropdown -->
    @php
        $isNavActive = request()->is('components/breadcrumbs', 'components/pagination');
    @endphp
    <div x-data="{ open: {{ $isNavActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isNavActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                Navigation
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/breadcrumbs" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/breadcrumbs') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Breadcrumbs</a></li>
            <li><a href="/components/pagination" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/pagination') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Pagination</a></li>
        </ul>
    </div>

    <!-- Overlays Dropdown -->
    @php
        $isOverlayActive = request()->is('components/banner', 'components/modal', 'components/sheet');
    @endphp
    <div x-data="{ open: {{ $isOverlayActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isOverlayActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                Overlays
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/banner" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/banner') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Banner</a></li>
            <li><a href="/components/modal" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/modal') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Modal</a></li>
            <li><a href="/components/sheet" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/sheet') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Sheet</a></li>
        </ul>
    </div>

    <!-- Feedback Dropdown -->
    @php
        $isFeedbackActive = request()->is('components/spinner', 'components/tag', 'components/toast');
    @endphp
    <div x-data="{ open: {{ $isFeedbackActive ? 'true' : 'false' }} }" class="space-y-1">
        <button
            type="button"
            x-on:click="open = !open"
            class="flex items-center justify-between w-full px-1 py-1.5 text-xs font-semibold uppercase tracking-wider transition-colors cursor-pointer select-none group {{ $isFeedbackActive ? 'text-indigo-600 dark:text-indigo-400' : 'text-zinc-500 hover:text-zinc-900 dark:hover:text-white' }}"
        >
            <span class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                Feedback
            </span>
            <svg
                class="w-3.5 h-3.5 transition-transform duration-200 text-zinc-400 group-hover:text-zinc-600 dark:group-hover:text-zinc-300"
                :class="open ? 'rotate-90' : ''"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <ul x-show="open" x-transition class="space-y-1 font-medium pl-2.5 border-l border-zinc-200 dark:border-zinc-800/80 ml-1.5 my-1">
            <li><a href="/components/spinner" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/spinner') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Spinner</a></li>
            <li><a href="/components/tag" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/tag') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Tag</a></li>
            <li><a href="/components/toast" class="block px-2.5 py-1.5 rounded-lg {{ request()->is('components/toast') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Toast</a></li>
        </ul>
    </div>
</aside>
