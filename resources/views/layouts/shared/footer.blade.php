<footer class="border-t border-zinc-200 dark:border-zinc-800/80 bg-white/50 dark:bg-zinc-900/40 py-6 text-xs text-zinc-600 dark:text-zinc-400 transition-colors">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
        <x-aura::text size="xs" variant="subtle">Built with <span class="text-blue-600 dark:text-blue-400 font-medium">Aura Wire</span> &amp; <span class="text-zinc-900 dark:text-zinc-300 font-medium">Livewire Volt</span></x-aura::text>
        <x-aura::text size="xs" variant="subtle">Laravel v{{ app()->version() }}</x-aura::text>
    </div>
</footer>
