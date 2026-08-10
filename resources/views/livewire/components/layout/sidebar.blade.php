<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Sidebar - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Layout</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Sidebar</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Collapsible vertical navigation sidebars with section groups, active state highlights, and icon items.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::sidebar&gt;
            </code>
        </div>
    </div>

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
        <x-slot:codeSlot>&lt;x-aura::sidebar&gt;
    &lt;x-aura::sidebar.heading&gt;Navigation&lt;/x-aura::sidebar.heading&gt;
    &lt;x-aura::sidebar.item href="#" active&gt;Dashboard&lt;/x-aura::sidebar.item&gt;
    &lt;x-aura::sidebar.item href="#" badge="12"&gt;Notifications&lt;/x-aura::sidebar.item&gt;
&lt;/x-aura::sidebar&gt;</x-slot:codeSlot>
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
        <x-slot:codeSlot>&lt;x-aura::sidebar.dropdown label="Management" badge="Admin" :active="true"&gt;
    &lt;x-aura::sidebar.item href="#" active&gt;User Accounts&lt;/x-aura::sidebar.item&gt;
    &lt;x-aura::sidebar.item href="#"&gt;Roles &amp; Permissions&lt;/x-aura::sidebar.item&gt;
    &lt;x-aura::sidebar.item href="#"&gt;Access Control&lt;/x-aura::sidebar.item&gt;
&lt;/x-aura::sidebar.dropdown&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
