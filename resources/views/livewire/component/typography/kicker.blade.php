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
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Kicker</x-aura::heading>
            <x-aura::subheading size="md">
                Uppercase category labels and subheader kickers placed above primary section titles to establish visual context.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::kicker>Category Name</x-aura::kicker>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard Section Kicker -->
    <x-aura::code  title="1. Standard Section Header Kicker">
        <x-slot:preview>
            <div class="space-y-1 text-center flex flex-col items-center w-full">
                <x-aura::kicker>FEATURED PACKAGE</x-aura::kicker>
                <x-aura::heading level="2" size="lg">Aura Wire Design System</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::kicker>FEATURED PACKAGE</x-aura::kicker>
<x-aura::heading level="2" size="lg">Aura Wire Design System</x-aura::heading>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sidebar & Group Section Kickers -->
    <x-aura::code  title="2. Sidebar & Group Section Kickers">
        <x-slot:preview>
            <x-aura::card>
                <div class="space-y-1">
                    <x-aura::kicker>MAIN NAVIGATION</x-aura::kicker>
                    <ul class="space-y-1 text-xs text-zinc-700 dark:text-zinc-300 font-medium">
                        <li class="px-2 py-1 rounded bg-zinc-100 dark:bg-zinc-800 font-bold">Dashboard</li>
                        <li class="px-2 py-1">Analytics</li>
                        <li class="px-2 py-1">Settings</li>
                    </ul>
                </div>

                <div class="space-y-1 pt-2 border-t border-zinc-200 dark:border-zinc-800">
                    <x-aura::kicker>PROJECT LABELS</x-aura::kicker>
                    <div class="flex flex-wrap gap-1.5 pt-1">
                        <x-aura::badge variant="outline" size="xs">Production</x-aura::badge>
                        <x-aura::badge variant="subtle" size="xs">Staging</x-aura::badge>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::kicker>MAIN NAVIGATION</x-aura::kicker>
<x-aura::kicker>PROJECT LABELS</x-aura::kicker>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Badge & Icon Accent Kickers -->
    <x-aura::code  title="3. Badge & Icon Accent Kickers">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::badge variant="subtle" size="sm">
                    <x-aura::icon name="sparkles" size="xs"  />
                    <span>NEW RELEASE v2.0</span>
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse mr-1 inline-block"></span>
                    <span>LIVE MONITORING</span>
                </x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::badge variant="subtle" size="sm">
    <x-aura::icon name="sparkles" size="xs"  />
    <span>NEW RELEASE v2.0</span>
</x-aura::badge>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Hero Banner Section Header -->
    <x-aura::code  title="4. Hero Banner Section Header">
        <x-slot:preview>
            <x-aura::card>
                <x-aura::kicker>
                    ENTERPRISE DEPLOYMENTS
                </x-aura::kicker>
                <x-aura::heading level="1" size="display-lg">
                    Scale your infrastructure without friction
                </x-aura::heading>
                <x-aura::subheading size="sm" >
                    Global multi-region cloud servers with automated load balancing.
                </x-aura::subheading>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::kicker>
    ENTERPRISE DEPLOYMENTS
</x-aura::kicker>
<x-aura::heading level="1" size="display-lg">
    Scale your infrastructure without friction
</x-aura::heading>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
