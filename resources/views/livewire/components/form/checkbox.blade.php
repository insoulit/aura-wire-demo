<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Checkbox - Aura Wire');

state(['remember' => true]);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Checkbox</x-aura::heading>
        <x-aura::subheading class="max-w-xl">
            Boolean selection inputs for multi-option forms, terms agreements, and toggle states.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::checkbox&gt;
            </code>
        </div>
    </div>
    <x-aura::code class="w-full" title="Checkbox Input">
        <x-slot:preview>
            <div class="flex items-center gap-4">
                <x-aura::checkbox wire:model="remember" label="Remember me on this browser" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::checkbox wire:model="remember" label="Remember me" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
