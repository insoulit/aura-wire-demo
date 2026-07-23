<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Input Component — Aura Wire');

state(['email' => '']);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Input Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::input&gt;</x-aura::code></x-aura::text>
    </div>

    <section class="space-y-4">
        <x-aura::heading level="2" size="lg">Text Inputs</x-aura::heading>
        <x-aura::code title="Input Controls">
            <x-slot:preview>
                <div class="w-full max-w-sm space-y-4">
                    <x-aura::input wire:model="email" placeholder="you@example.com" label="Email Address" />
                    <x-aura::input type="password" placeholder="••••••••" label="Password" required />
                    <x-aura::input placeholder="Disabled input" label="Disabled State" disabled />
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::input wire:model="email" placeholder="you@example.com" label="Email Address" /&gt;
&lt;x-aura::input type="password" placeholder="••••••••" label="Password" required /&gt;</x-slot:codeSlot>
        </x-aura::code>
    </section>
</div>
