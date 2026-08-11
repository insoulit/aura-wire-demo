<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::footer class="mt-8">
    <x-slot name="brand">
        <a href="/" class="flex items-center gap-2.5 group">
            <x-aura::icon-button icon="sparkles" variant="primary" size="sm" class="rounded-xl group-hover:scale-105 transition-transform pointer-events-none" />
            <x-aura::text size="sm" weight="bold">Aura Wire</x-aura::text>
        </a>
    </x-slot>

    <x-aura::text size="sm" weight="medium" as="a" href="/components" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</x-aura::text>
    <x-aura::text size="sm" weight="medium" as="a" href="/components/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Installation</x-aura::text>
    <x-aura::text size="sm" weight="medium" as="a" href="/components/icon" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Icons (1000+)</x-aura::text>
    <x-aura::text size="sm" weight="medium" as="a" href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-900 dark:hover:text-white transition-colors inline-flex items-center gap-1">
        <span>Packagist</span>
        <x-aura::icon name="external-link" size="xs" class="text-zinc-400 inline-block" />
    </x-aura::text>

    <x-slot name="bottom">
        <x-aura::text size="xs" variant="subtle">&copy; {{ date('Y') }} Aura Wire. Built with Laravel &amp; Livewire Volt.</x-aura::text>
        <x-aura::text size="xs" variant="subtle">Laravel v{{ app()->version() }}</x-aura::text>
    </x-slot>
</x-aura::footer>
