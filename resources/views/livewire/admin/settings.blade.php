<?php

use function Livewire\Volt\{layout, title};

layout('layouts.admin');
title('Admin Settings — Admin Console | Aura Wire');

?>

<div class="space-y-8">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-5">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <x-aura::kicker class="text-indigo-600 dark:text-indigo-400">⚡ ADMIN MODULE</x-aura::kicker>
                <x-aura::badge variant="accent" size="sm">config/aura-wire.php</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="lg">Admin &amp; System Settings</x-aura::heading>
            <x-aura::subheading>Configure global package prefix, theme tokens, and layout defaults</x-aura::subheading>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="primary" size="sm">Save Settings</x-aura::button>
        </div>
    </div>

    <!-- Package Config Settings Card -->
    <x-aura::card title="Aura Wire Package Tokens">
        <div class="space-y-6">
            <x-aura::field label="Component Prefix" description="Blade namespace prefix for package tags (<aura:button> vs <x-aura::button>).">
                <x-aura::input value="aura" />
            </x-aura::field>

            <x-aura::field label="Dark Mode Strategy" description="Select how theme switching is detected by package components.">
                <x-aura::select>
                    <option value="class" selected>Class (HTML dark class attribute)</option>
                    <option value="media">Media (System prefers-color-scheme)</option>
                </x-aura::select>
            </x-aura::field>

            <x-aura::field label="Default Border Radius" description="Global border radius strategy applied to components.">
                <x-aura::select>
                    <option value="sm">Small (sm)</option>
                    <option value="md" selected>Medium (md)</option>
                    <option value="lg">Large (lg)</option>
                    <option value="full">Full (Pill)</option>
                </x-aura::select>
            </x-aura::field>

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
                <div>
                    <div class="text-sm font-semibold text-zinc-900 dark:text-white">Enable Cache Automation</div>
                    <x-aura::text variant="subtle" size="xs">Automatically clear view cache on component asset publish.</x-aura::text>
                </div>
                <x-aura::switch checked />
            </div>
        </div>
    </x-aura::card>
</div>
