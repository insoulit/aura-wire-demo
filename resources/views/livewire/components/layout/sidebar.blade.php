<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Sidebar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Sidebar Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::sidebar&gt;</x-aura::code> &amp; <x-aura::code>&lt;x-aura::sidebar.item&gt;</x-aura::code>
        </x-aura::text>
    </div>
    <x-aura::code title="Sidebar Navigation Container">
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
</div>
