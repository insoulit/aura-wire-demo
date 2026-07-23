<header class="border-b border-zinc-200 dark:border-zinc-800/80 bg-white/80 dark:bg-zinc-900/60 backdrop-blur sticky top-0 z-50 transition-colors">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5 flex items-center justify-between gap-4">
        <!-- Brand / Logo -->
        <div class="flex items-center gap-8">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-emerald-600 via-teal-500 to-indigo-500 flex items-center justify-center font-bold text-white shadow-md shadow-emerald-500/20 group-hover:scale-105 transition-transform duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <div>
                    <h1 class="text-sm font-semibold tracking-tight text-zinc-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Aura Wire UI</h1>
                    <p class="text-xs text-zinc-500 dark:text-zinc-400">Component Docs</p>
                </div>
            </a>

            <!-- Component Navigation Links for sub-pages -->
            <nav class="hidden md:flex items-center gap-1 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                <a href="/components" class="px-3 py-1.5 rounded-lg {{ request()->is('components') ? 'text-zinc-900 dark:text-white bg-zinc-200/60 dark:bg-zinc-800/80 font-semibold' : 'hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all' }}">Overview</a>
                <a href="/components/buttons" class="px-3 py-1.5 rounded-lg {{ request()->is('components/buttons') ? 'text-zinc-900 dark:text-white bg-zinc-200/60 dark:bg-zinc-800/80 font-semibold' : 'hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all' }}">Buttons</a>
                <a href="/components/inputs" class="px-3 py-1.5 rounded-lg {{ request()->is('components/inputs') ? 'text-zinc-900 dark:text-white bg-zinc-200/60 dark:bg-zinc-800/80 font-semibold' : 'hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all' }}">Inputs</a>
                <a href="/components/toggles" class="px-3 py-1.5 rounded-lg {{ request()->is('components/toggles') ? 'text-zinc-900 dark:text-white bg-zinc-200/60 dark:bg-zinc-800/80 font-semibold' : 'hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all' }}">Toggles</a>
                <a href="/components/data-display" class="px-3 py-1.5 rounded-lg {{ request()->is('components/data-display') ? 'text-zinc-900 dark:text-white bg-zinc-200/60 dark:bg-zinc-800/80 font-semibold' : 'hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all' }}">Display</a>
            </nav>
        </div>

        <!-- Right Side Actions -->
        <div class="flex items-center gap-4">
            <x-theme-switcher />
            <x-aura::button variant="secondary" size="sm" href="{{ route('home') }}">
                &larr; Home Page
            </x-aura::button>
        </div>
    </div>
</header>
