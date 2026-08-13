<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::header>
    <x-slot name="brand">
        <a href="/" class="flex items-center gap-2.5 sm:gap-3.5 group min-w-0">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-extrabold text-base sm:text-lg shadow-xs group-hover:scale-105 transition-all duration-200 ring-1 ring-zinc-900/10 dark:ring-white/20 shrink-0">
                <div class="sm:hidden">
                    <x-aura::icon name="sparkles" size="sm" />
                </div>
                <div class="hidden sm:block">
                    <x-aura::icon name="sparkles" size="md" />
                </div>
            </div>
            <div class="flex flex-col justify-center min-w-0">
                <div class="flex items-center gap-1.5 sm:gap-2">
                    <span class="font-extrabold tracking-tight text-sm sm:text-lg text-zinc-900 dark:text-white group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors leading-none truncate">
                        Aura Wire
                    </span>
                </div>
                <span class="hidden sm:block text-xs text-zinc-500 dark:text-zinc-400 font-medium leading-normal mt-0.5 truncate">
                    Livewire UI Kit
                </span>
            </div>
        </a>
    </x-slot>

    <x-aura::header.item href="/components" icon="layers" :active="request()->is('components*')">Components</x-aura::header.item>
    <x-aura::header.item href="/guest" icon="globe" :active="request()->is('guest*')">Guest</x-aura::header.item>
    <x-aura::header.item href="/dashboard" icon="user" :active="request()->is('dashboard*')">User</x-aura::header.item>
    <x-aura::header.item href="/admin" icon="shield-check" :active="request()->is('admin*')">Admin</x-aura::header.item>

    <x-slot name="actions">
        @if(request()->is('components*'))
            <div class="lg:hidden">
                <x-aura::icon-button
                    icon="panel-left"
                    variant="ghost"
                    size="sm"
                    label="Component Menu"
                    x-on:click="$dispatch('open-sheet', 'components-mobile-sidebar')"
                />
            </div>
        @endif

        <div class="hidden md:inline-flex">
            <x-aura::button variant="outline" size="md" icon="package" href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer">
                Packagist
            </x-aura::button>
        </div>
        <div class="hidden md:inline-flex">
            <x-theme-switcher />
        </div>
    </x-slot>
</x-aura::header>
