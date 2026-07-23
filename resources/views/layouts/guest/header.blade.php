<header class="border-b border-zinc-800/80 bg-zinc-900/50 backdrop-blur sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3 group">
            <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center font-bold text-white shadow-md shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <h1 class="text-sm font-semibold tracking-tight text-white group-hover:text-indigo-400 transition-colors">Aura Wire</h1>
                <p class="text-xs text-zinc-400">Guest Portal</p>
            </div>
        </a>

        <div class="flex items-center gap-3 text-sm font-medium">
            <a href="/login" class="text-zinc-400 hover:text-white transition-colors px-3 py-1.5">Sign In</a>
            <x-aura::button variant="primary" size="sm" href="/register">Get Started</x-aura::button>
        </div>
    </div>
</header>
