<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.components')] 
#[Title('Kicker - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Typography Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Kicker</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Uppercase category labels and subheader kickers placed above primary section titles to establish visual context.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::kicker&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Section Kicker -->
    <x-aura::code class="w-full" title="1. Standard Section Header Kicker">
        <x-slot:preview>
            <div class="space-y-1 text-center flex flex-col items-center w-full">
                <x-aura::kicker>FEATURED PACKAGE</x-aura::kicker>
                <x-aura::heading level="2" size="lg">Aura Wire Design System</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::kicker&gt;FEATURED PACKAGE&lt;/x-aura::kicker&gt;
&lt;x-aura::heading level="2" size="lg"&gt;Aura Wire Design System&lt;/x-aura::heading&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sidebar & Group Section Kickers -->
    <x-aura::code class="w-full" title="2. Sidebar &amp; Group Section Kickers">
        <x-slot:preview>
            <div class="w-64 p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 space-y-3">
                <div class="space-y-1">
                    <x-aura::kicker class="text-[10px]">MAIN NAVIGATION</x-aura::kicker>
                    <ul class="space-y-1 text-xs text-zinc-700 dark:text-zinc-300 font-medium">
                        <li class="px-2 py-1 rounded bg-zinc-100 dark:bg-zinc-800 font-bold">Dashboard</li>
                        <li class="px-2 py-1">Analytics</li>
                        <li class="px-2 py-1">Settings</li>
                    </ul>
                </div>

                <div class="space-y-1 pt-2 border-t border-zinc-200 dark:border-zinc-800">
                    <x-aura::kicker class="text-[10px]">PROJECT LABELS</x-aura::kicker>
                    <div class="flex flex-wrap gap-1.5 pt-1">
                        <x-aura::badge variant="outline" size="xs">Production</x-aura::badge>
                        <x-aura::badge variant="subtle" size="xs">Staging</x-aura::badge>
                    </div>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::kicker class="text-[10px]"&gt;MAIN NAVIGATION&lt;/x-aura::kicker&gt;
&lt;x-aura::kicker class="text-[10px]"&gt;PROJECT LABELS&lt;/x-aura::kicker&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Badge & Icon Accent Kickers -->
    <x-aura::code class="w-full" title="3. Badge &amp; Icon Accent Kickers">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::badge variant="subtle" size="sm">
                    <x-aura::icon name="sparkles" size="xs" class="mr-1 inline-block text-zinc-500 dark:text-zinc-400" />
                    <span>NEW RELEASE v2.0</span>
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse mr-1 inline-block"></span>
                    <span>LIVE MONITORING</span>
                </x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge variant="subtle" size="sm"&gt;
    &lt;x-aura::icon name="sparkles" size="xs" class="mr-1 inline-block" /&gt;
    &lt;span&gt;NEW RELEASE v2.0&lt;/span&gt;
&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Hero Banner Section Header -->
    <x-aura::code class="w-full" title="4. Hero Banner Section Header">
        <x-slot:preview>
            <div class="p-8 rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 text-center flex flex-col items-center space-y-3 w-full">
                <x-aura::kicker class="text-indigo-600 dark:text-indigo-400 font-bold tracking-widest">
                    ENTERPRISE DEPLOYMENTS
                </x-aura::kicker>
                <x-aura::heading level="1" size="display-lg">
                    Scale your infrastructure without friction
                </x-aura::heading>
                <x-aura::subheading size="sm" class="max-w-md">
                    Global multi-region cloud servers with automated load balancing.
                </x-aura::subheading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::kicker class="text-indigo-600 font-bold tracking-widest"&gt;
    ENTERPRISE DEPLOYMENTS
&lt;/x-aura::kicker&gt;
&lt;x-aura::heading level="1" size="display-lg"&gt;
    Scale your infrastructure without friction
&lt;/x-aura::heading&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
