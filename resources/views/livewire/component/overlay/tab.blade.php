<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Tabs - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Overlay</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Tabs</x-aura::heading>
            <x-aura::subheading size="md">
                Tabbed navigation and content area switcher for profile settings, dashboards, and views.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::tab default="profile">
    <x-aura::tab.item name="profile" label="Profile">Content...</x-aura::tab.item>
</x-aura::tab>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard Tabs -->
    <x-aura::code  title="1. Standard Horizontal Tabs">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::tab active="overview">
                    <x-aura::tab.tab name="overview">Overview</x-aura::tab.tab>
                    <x-aura::tab.tab name="analytics">Analytics</x-aura::tab.tab>
                    <x-aura::tab.tab name="reports">Reports</x-aura::tab.tab>
                    <x-aura::tab.tab name="settings">Settings</x-aura::tab.tab>
                </x-aura::tab>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::tab active="overview">
    <x-aura::tab.tab name="overview">Overview</x-aura::tab.tab>
    <x-aura::tab.tab name="analytics">Analytics</x-aura::tab.tab>
    <x-aura::tab.tab name="reports">Reports</x-aura::tab.tab>
    <x-aura::tab.tab name="settings">Settings</x-aura::tab.tab>
</x-aura::tab>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Tabs with Icons -->
    <x-aura::code  title="2. Icon Navigation Tabs">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::tab active="account">
                    <x-aura::tab.tab name="account">
                        <x-slot:icon>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </x-slot:icon>
                        Account Details
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="security">
                        <x-slot:icon>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </x-slot:icon>
                        Security & Password
                    </x-aura::tab.tab>
                </x-aura::tab>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::tab active="account">
    <x-aura::tab.tab name="account">
        <x-slot:icon><svg class="w-4 h-4" .../></x-slot:icon>
        Account Details
    </x-aura::tab.tab>
</x-aura::tab>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
