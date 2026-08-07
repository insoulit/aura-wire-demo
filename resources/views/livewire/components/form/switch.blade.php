<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Switch - Aura Wire');

state(['enabled' => false]);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Switch</x-aura::heading>
        <x-aura::subheading class="max-w-xl">
            Interactive toggle switches for binary settings and real-time state preferences.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::switch&gt;
            </code>
        </div>
    </div>
    <x-aura::code class="w-full" title="Toggle Switch">
        <x-slot:preview>
            <div class="flex items-center gap-4">
                <x-aura::switch wire:model="enabled" label="Enable Notifications" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::switch wire:model="enabled" label="Enable Notifications" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
