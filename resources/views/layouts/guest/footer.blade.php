<x-aura::footer>
    <x-slot:brand>
        <div class="h-7 w-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xs shadow-sm">
            A
        </div>
        <x-aura::text size="sm" weight="semibold">Aura Wire</x-aura::text>
        <x-aura::text size="xs" variant="subtle">| Guest Portal</x-aura::text>
    </x-slot:brand>

    <a href="/guest" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Guest Home</a>
    <a href="/components" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
    <a href="/login" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Sign In</a>
    <a href="/register" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Register</a>

    <x-slot:bottom>
        <x-aura::text size="xs" variant="subtle">&copy; {{ date('Y') }} Aura Wire. Built with Livewire Volt &amp; Tailwind CSS v4.</x-aura::text>
        <x-aura::text size="xs" variant="subtle">Laravel v{{ app()->version() }}</x-aura::text>
    </x-slot:bottom>
</x-aura::footer>
