<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Sidebar - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Sidebar</x-aura::heading>
            <x-aura::subheading size="md">
                Collapsible vertical navigation sidebars with section groups, active state highlights, and icon items.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>@verbatim<x-aura::sidebar>
    <x-aura::sidebar.heading>Navigation</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="#" icon="layout-dashboard" active>Dashboard</x-aura::sidebar.item>
</x-aura::sidebar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Standard Sidebar --}}
    <x-aura::code class="w-full" title="Sidebar Navigation Container">
        <x-slot:preview>
            <div class="w-64 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden bg-white dark:bg-zinc-900 p-2">
                <x-aura::sidebar.heading>Navigation</x-aura::sidebar.heading>
                <x-aura::sidebar.item href="#" active>Dashboard</x-aura::sidebar.item>
                <x-aura::sidebar.item href="#" badge="12">Notifications</x-aura::sidebar.item>
                <x-aura::sidebar.item href="#">Settings</x-aura::sidebar.item>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::sidebar>
    <x-aura::sidebar.heading>Navigation</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="#" active>Dashboard</x-aura::sidebar.item>
    <x-aura::sidebar.item href="#" badge="12">Notifications</x-aura::sidebar.item>
</x-aura::sidebar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Sidebar Collapsible Dropdown Menu --}}
    <x-aura::code class="w-full" title="Collapsible Sidebar Dropdown Option">
        <x-slot:preview>
            <div class="w-64 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden bg-white dark:bg-zinc-900 p-2">
                <x-aura::sidebar.heading>Nested Navigation</x-aura::sidebar.heading>
                <x-aura::sidebar.dropdown label="Management" badge="Admin" :active="true">
                    <x-aura::sidebar.item href="#" active>User Accounts</x-aura::sidebar.item>
                    <x-aura::sidebar.item href="#">Roles &amp; Permissions</x-aura::sidebar.item>
                    <x-aura::sidebar.item href="#">Access Control</x-aura::sidebar.item>
                </x-aura::sidebar.dropdown>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::sidebar.dropdown label="Management" badge="Admin" :active="true">
    <x-aura::sidebar.item href="#" active>User Accounts</x-aura::sidebar.item>
    <x-aura::sidebar.item href="#">Roles & Permissions</x-aura::sidebar.item>
    <x-aura::sidebar.item href="#">Access Control</x-aura::sidebar.item>
</x-aura::sidebar.dropdown>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
