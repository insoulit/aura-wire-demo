<x-aura::footer>
    <x-slot:brand>
        <div class="h-7 w-7 rounded-lg bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center font-bold text-white text-xs shadow-sm">
            A
        </div>
        <span class="font-semibold text-zinc-900 dark:text-white text-sm">Aura Wire</span>
        <span class="text-zinc-400 dark:text-zinc-500">| Guest Portal</span>
    </x-slot:brand>

    <a href="/guest" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Guest Home</a>
    <a href="/components" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
    <a href="/login" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Sign In</a>
    <a href="/register" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Register</a>

    <x-slot:bottom>
        <p>&copy; {{ date('Y') }} Aura Wire. Built with Livewire Volt & Tailwind CSS v4.</p>
        <p>Laravel v{{ app()->version() }}</p>
    </x-slot:bottom>
</x-aura::footer>
