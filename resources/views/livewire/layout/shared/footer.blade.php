<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::footer>
    <x-slot name="brand">
        <a href="/" class="flex items-center gap-2.5 group">
            <div class="p-1.5 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 shadow-xs flex items-center justify-center">
                <x-aura::icon name="sparkles" size="xs" />
            </div>
            <span class="font-bold text-zinc-900 dark:text-white text-sm tracking-tight">Aura Wire</span>
        </a>
    </x-slot>

    <x-aura::link href="/components">Components</x-aura::link>
    <x-aura::link href="/components/installation">Installation</x-aura::link>
    <x-aura::link href="/components/icon">Icons (1000+)</x-aura::link>
    <x-aura::link href="https://packagist.org/packages/insoulit/aura-wire" target="_blank">Packagist</x-aura::link>

    <x-slot name="bottom">
        <span>&copy; {{ date('Y') }} Aura Wire. Built with Laravel &amp; Livewire Volt.</span>
        <div class="flex items-center gap-4 text-xs">
            <span class="font-mono">Laravel &amp; Livewire</span>
        </div>
    </x-slot>
</x-aura::footer>
