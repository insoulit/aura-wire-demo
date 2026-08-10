<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Tabs - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Overlay</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Tabs</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Tabbed navigation and content area switcher for profile settings, dashboards, and views.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::tabs&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Tabs -->
    <x-aura::code class="w-full" title="1. Standard Horizontal Tabs">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::tabs active="overview">
                    <x-aura::tabs.tab name="overview">Overview</x-aura::tabs.tab>
                    <x-aura::tabs.tab name="analytics">Analytics</x-aura::tabs.tab>
                    <x-aura::tabs.tab name="reports">Reports</x-aura::tabs.tab>
                    <x-aura::tabs.tab name="settings">Settings</x-aura::tabs.tab>
                </x-aura::tabs>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::tabs active="overview"&gt;
    &lt;x-aura::tabs.tab name="overview"&gt;Overview&lt;/x-aura::tabs.tab&gt;
    &lt;x-aura::tabs.tab name="analytics"&gt;Analytics&lt;/x-aura::tabs.tab&gt;
    &lt;x-aura::tabs.tab name="reports"&gt;Reports&lt;/x-aura::tabs.tab&gt;
    &lt;x-aura::tabs.tab name="settings"&gt;Settings&lt;/x-aura::tabs.tab&gt;
&lt;/x-aura::tabs&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Tabs with Icons -->
    <x-aura::code class="w-full" title="2. Icon Navigation Tabs">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::tabs active="account">
                    <x-aura::tabs.tab name="account">
                        <x-slot:icon>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </x-slot:icon>
                        Account Details
                    </x-aura::tabs.tab>

                    <x-aura::tabs.tab name="security">
                        <x-slot:icon>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </x-slot:icon>
                        Security & Password
                    </x-aura::tabs.tab>
                </x-aura::tabs>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::tabs active="account"&gt;
    &lt;x-aura::tabs.tab name="account"&gt;
        &lt;x-slot:icon&gt;&lt;svg class="w-4 h-4" .../&gt;&lt;/x-slot:icon&gt;
        Account Details
    &lt;/x-aura::tabs.tab&gt;
&lt;/x-aura::tabs&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
