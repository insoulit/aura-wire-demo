<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Input — Aura Wire');

state(['email' => '']);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Input</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::input&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Input Controls">
            <x-slot:preview>
                <div class="w-full max-w-sm space-y-3">
                    <x-aura::input wire:model="email" placeholder="you@example.com" label="Email Address" />
                    <x-aura::input type="password" placeholder="••••••••" label="Password" required />
                    <x-aura::input placeholder="Disabled input" label="Disabled State" disabled />
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::input wire:model="email" placeholder="you@example.com" label="Email Address" /&gt;
&lt;x-aura::input type="password" placeholder="••••••••" label="Password" required /&gt;</x-slot:codeSlot>
        </x-aura::code>
    
</div>
