<footer class="border-t border-zinc-200 dark:border-zinc-800/80 bg-white/50 dark:bg-zinc-900/40 py-8 text-xs text-zinc-600 dark:text-zinc-400 transition-colors">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="h-7 w-7 rounded-lg bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center font-bold text-white text-xs shadow-sm">
                    A
                </div>
                <span class="font-semibold text-zinc-900 dark:text-white text-sm">Aura Wire</span>
                <span class="text-zinc-400 dark:text-zinc-500">| Guest Portal</span>
            </div>

            <div class="flex items-center gap-6 font-medium">
                <a href="/guest" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Guest Home</a>
                <a href="/components" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
                <a href="/login" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Sign In</a>
                <a href="/register" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Register</a>
            </div>
        </div>

        <div class="border-t border-zinc-200/60 dark:border-zinc-800/60 pt-4 flex flex-col sm:flex-row items-center justify-between gap-2 text-zinc-500">
            <p>&copy; {{ date('Y') }} Aura Wire. Built with Livewire Volt & Tailwind CSS v4.</p>
            <p>Laravel v{{ app()->version() }}</p>
        </div>
    </div>
</footer>
