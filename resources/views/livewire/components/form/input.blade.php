<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Input - Aura Wire');

state([
    'email' => 'alex@example.com',
    'search' => '',
]);

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Input</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Versatile text, password, and search inputs with icon prefixing, size scales, and validation states.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::input&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Input Types -->
    <x-aura::code class="w-full" title="1. Standard Input Types">
        <x-slot:preview>
            <div class="w-full max-w-md space-y-4">
                <x-aura::input name="email" wire:model="email" placeholder="john@example.com" value="alex@example.com" />
                <x-aura::input type="password" name="password" placeholder="Enter secure password" value="secret123" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::input name="email" wire:model="email" placeholder="john@example.com" /&gt;
&lt;x-aura::input type="password" name="password" placeholder="Enter password" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Input Sizes -->
    <x-aura::code class="w-full" title="2. Input Sizes (sm, md, lg)">
        <x-slot:preview>
            <div class="w-full max-w-md space-y-4">
                <x-aura::input size="sm" placeholder="Small input (sm)" />
                <x-aura::input size="md" placeholder="Medium input (md)" />
                <x-aura::input size="lg" placeholder="Large input (lg)" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::input size="sm" placeholder="Small input (sm)" /&gt;
&lt;x-aura::input size="md" placeholder="Medium input (md)" /&gt;
&lt;x-aura::input size="lg" placeholder="Large input (lg)" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Inputs with Icons -->
    <x-aura::code class="w-full" title="3. Inputs with Prefix & Suffix Icons">
        <x-slot:preview>
            <div class="w-full max-w-md space-y-4">
                <!-- Search Input with Search Icon -->
                <x-aura::input placeholder="Search users, orders, or logs...">
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </x-slot:icon>
                </x-aura::input>

                <!-- Email Input with Mail Icon -->
                <x-aura::input type="email" placeholder="billing@acme.com">
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </x-slot:icon>
                </x-aura::input>

                <!-- Amount Input with Currency Symbol -->
                <x-aura::input placeholder="0.00">
                    <x-slot:icon>
                        <span class="text-xs font-bold font-mono">$</span>
                    </x-slot:icon>
                    <x-slot:iconTrailing>
                        <span class="text-xs font-semibold text-zinc-400">USD</span>
                    </x-slot:iconTrailing>
                </x-aura::input>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::input placeholder="Search users..."&gt;
    &lt;x-slot:icon&gt;&lt;svg class="w-4 h-4" .../&gt;&lt;/x-slot:icon&gt;
&lt;/x-aura::input&gt;

&lt;x-aura::input placeholder="0.00"&gt;
    &lt;x-slot:icon&gt;&lt;span class="text-xs font-bold font-mono"&gt;$&lt;/span&gt;&lt;/x-slot:icon&gt;
    &lt;x-slot:iconTrailing&gt;&lt;span class="text-xs font-semibold"&gt;USD&lt;/span&gt;&lt;/x-slot:iconTrailing&gt;
&lt;/x-aura::input&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Validation & Invalid State -->
    <x-aura::code class="w-full" title="4. Validation Error & Invalid State">
        <x-slot:preview>
            <div class="w-full max-w-md space-y-4">
                <x-aura::input value="invalid-email" invalid placeholder="Email address" />
                <x-aura::error message="Please enter a valid email address." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::input value="invalid-email" invalid /&gt;
&lt;x-aura::error message="Please enter a valid email address." /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Disabled State -->
    <x-aura::code class="w-full" title="5. Disabled State">
        <x-slot:preview>
            <div class="w-full max-w-md space-y-4">
                <x-aura::input value="system.admin@acme.internal" disabled />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::input value="system.admin@acme.internal" disabled /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
