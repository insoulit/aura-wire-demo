<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::footer class="mt-8">
    <x-slot name="brand">
        <a href="/" class="flex items-center gap-2 group">
            <div class="w-6 h-6 rounded-md bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center text-xs font-bold shadow-2xs group-hover:scale-105 transition-transform">A</div>
            <x-aura::text size="sm" class="font-bold text-zinc-900 dark:text-white">Aura Wire</x-aura::text>
        </a>
    </x-slot>

    <a href="/components" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
    <a href="/components/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Installation</a>
    <a href="/components/icon" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Icons (1000+)</a>
    <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-900 dark:hover:text-white transition-colors inline-flex items-center gap-1">
        <span>Packagist</span>
        <x-aura::icon name="external-link" size="xs" class="text-zinc-400 inline-block" />
    </a>

    <x-slot name="bottom">
        <x-aura::text size="xs" variant="subtle">&copy; {{ date('Y') }} Aura Wire. Built with Laravel &amp; Livewire Volt.</x-aura::text>
        <x-aura::text size="xs" variant="subtle">Laravel v{{ app()->version() }}</x-aura::text>
    </x-slot>
</x-aura::footer>
