<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Kicker - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Typography</x-aura::kicker>
                <x-aura::badge variant="subtle" size="md">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Kicker</x-aura::heading>
            <x-aura::subheading size="md">
                Uppercase category labels and eyebrow headers placed above primary section titles to establish clear visual context and hierarchy.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::kicker>Category Name</x-aura::kicker>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard Section Kicker -->
    <x-aura::code title="1. Standard Section Header Kicker">
        <x-slot:preview>
            <div class="space-y-1 text-center flex flex-col items-center w-full">
                <x-aura::kicker>FEATURED PACKAGE</x-aura::kicker>
                <x-aura::heading level="2" size="lg">Aura Wire Design System</x-aura::heading>
                <x-aura::subheading size="sm">
                    Production-ready Blade &amp; Livewire design primitives with zero build step required.
                </x-aura::subheading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="space-y-1 text-center">
    <x-aura::kicker>FEATURED PACKAGE</x-aura::kicker>
    <x-aura::heading level="2" size="lg">Aura Wire Design System</x-aura::heading>
    <x-aura::subheading size="sm">
        Production-ready Blade & Livewire design primitives with zero build step required.
    </x-aura::subheading>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sidebar & Navigation Group Labels -->
    <x-aura::code title="2. Sidebar & Navigation Group Labels">
        <x-slot:preview>
            <x-aura::card>
                <div class="space-y-4 w-full">
                    <div class="space-y-1.5">
                        <x-aura::kicker>MAIN NAVIGATION</x-aura::kicker>
                        <ul class="space-y-0.5 text-sm font-medium">
                            <li class="px-2.5 py-1.5 rounded-md bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white font-semibold">Dashboard</li>
                            <li class="px-2.5 py-1.5 rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white">Analytics</li>
                            <li class="px-2.5 py-1.5 rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white">Reports</li>
                        </ul>
                    </div>

                    <div class="space-y-1.5 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                        <x-aura::kicker>ACCOUNT &amp; SETTINGS</x-aura::kicker>
                        <ul class="space-y-0.5 text-sm font-medium">
                            <li class="px-2.5 py-1.5 rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white">Profile Preferences</li>
                            <li class="px-2.5 py-1.5 rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white">Security Keys</li>
                        </ul>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="space-y-1.5">
    <x-aura::kicker>MAIN NAVIGATION</x-aura::kicker>
    <ul class="space-y-0.5 text-sm">
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/analytics">Analytics</a></li>
    </ul>
</div>

<div class="space-y-1.5">
    <x-aura::kicker>ACCOUNT & SETTINGS</x-aura::kicker>
    <ul class="space-y-0.5 text-sm">
        <li><a href="/settings">Profile Preferences</a></li>
    </ul>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Kickers with Status Indicators & Icons -->
    <x-aura::code title="3. Kickers with Status Indicators & Icons">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse inline-block"></span>
                    <x-aura::kicker>SYSTEM OPERATIONAL</x-aura::kicker>
                </div>

                <div class="flex items-center gap-1.5">
                    <x-aura::icon name="sparkles" size="xs" />
                    <x-aura::kicker>RELEASE v2.0</x-aura::kicker>
                </div>

                <div class="flex items-center gap-1.5">
                    <x-aura::icon name="shield-check" size="xs" />
                    <x-aura::kicker>SOC-2 COMPLIANT</x-aura::kicker>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim{{-- Kicker with live status pulse --}}
<div class="flex items-center gap-2">
    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
    <x-aura::kicker>SYSTEM OPERATIONAL</x-aura::kicker>
</div>

{{-- Kicker with accent icon --}}
<div class="flex items-center gap-1.5">
    <x-aura::icon name="sparkles" size="xs" />
    <x-aura::kicker>RELEASE v2.0</x-aura::kicker>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Hero Banner Section Header -->
    <x-aura::code title="4. Hero Banner Section Header">
        <x-slot:preview>
            <x-aura::card>
                <div class="space-y-3 max-w-2xl">
                    <x-aura::kicker>ENTERPRISE DEPLOYMENTS</x-aura::kicker>
                    <x-aura::heading level="1" size="display-lg">
                        Scale your infrastructure without friction
                    </x-aura::heading>
                    <x-aura::subheading size="md">
                        Global multi-region cloud servers with automated load balancing, zero downtime rollouts, and SOC-2 verified security.
                    </x-aura::subheading>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="space-y-3 max-w-2xl">
        <x-aura::kicker>ENTERPRISE DEPLOYMENTS</x-aura::kicker>
        <x-aura::heading level="1" size="display-lg">
            Scale your infrastructure without friction
        </x-aura::heading>
        <x-aura::subheading size="md">
            Global multi-region cloud servers with automated load balancing.
        </x-aura::subheading>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
