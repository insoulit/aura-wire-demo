<aside class="w-64 border-r border-zinc-200 dark:border-zinc-800/80 bg-white dark:bg-zinc-900/60 p-4 flex flex-col justify-between hidden md:flex shrink-0 transition-colors">
    <div class="space-y-6">
        <!-- Admin Brand Header linking back to Home -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-2 py-1 group">
            <div class="h-8 w-8 rounded-lg bg-gradient-to-tr from-red-600 to-amber-500 flex items-center justify-center font-bold text-white shadow-md shadow-red-500/20 group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <h1 class="text-sm font-semibold tracking-tight text-zinc-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">Admin Control</h1>
                <p class="text-xs text-zinc-500 dark:text-zinc-400">Aura Wire System</p>
            </div>
        </a>

        <!-- Navigation Links -->
        <nav class="space-y-1 text-sm font-medium text-zinc-600 dark:text-zinc-400">
            <a href="/admin" class="flex items-center gap-3 px-3 py-2 rounded-lg text-zinc-900 dark:text-white bg-zinc-200/60 dark:bg-zinc-800/80 font-medium">
                <svg class="w-4 h-4 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                Dashboard
            </a>
            <a href="/components" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all">
                <svg class="w-4 h-4 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                Package Components
            </a>
            <a href="/admin/users" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all">
                <svg class="w-4 h-4 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                User Management
            </a>
            <a href="/admin/logs" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/40 transition-all">
                <svg class="w-4 h-4 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                System Logs
            </a>
        </nav>
    </div>

    <!-- Admin Status -->
    <div class="p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950/60 border border-zinc-200 dark:border-zinc-800/80 space-y-1 text-xs">
        <span class="text-zinc-500 dark:text-zinc-400">Environment</span>
        <div class="flex items-center justify-between text-zinc-900 dark:text-white font-medium">
            <span>DDEV Local</span>
            <span class="px-1.5 py-0.5 rounded bg-red-500/20 text-red-600 dark:text-red-400 text-[10px] uppercase font-bold">Admin</span>
        </div>
    </div>
</aside>
