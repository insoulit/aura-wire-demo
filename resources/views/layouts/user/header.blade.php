<header class="border-b border-zinc-200 dark:border-zinc-800/80 bg-white/80 dark:bg-zinc-900/60 backdrop-blur sticky top-0 z-50 transition-colors">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5 flex items-center justify-between">
        <div class="flex items-center gap-8">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center font-bold text-white shadow-md shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-200">
                    A
                </div>
                <div>
                    <h1 class="text-sm font-semibold tracking-tight text-zinc-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Aura Wire</h1>
                    <p class="text-xs text-zinc-500 dark:text-zinc-400">User Workspace</p>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-1 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                <a href="/dashboard" class="px-3 py-1.5 rounded-lg text-zinc-900 dark:text-white bg-zinc-200/60 dark:bg-zinc-800/80 font-medium">Dashboard</a>
                <a href="/projects" class="px-3 py-1.5 rounded-lg hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all">Projects</a>
                <a href="/settings" class="px-3 py-1.5 rounded-lg hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all">Settings</a>
            </nav>
        </div>

        <div class="flex items-center gap-4">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-medium bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 border border-zinc-200 dark:border-zinc-700">
                <span class="h-2 w-2 rounded-full bg-emerald-500 dark:bg-emerald-400"></span>
                Member
            </span>

            <x-theme-switcher />

            <div class="h-8 w-8 rounded-full bg-indigo-600 text-white flex items-center justify-center text-xs font-semibold ring-2 ring-indigo-500/30">
                US
            </div>
        </div>
    </div>
</header>
