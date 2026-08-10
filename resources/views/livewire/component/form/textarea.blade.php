<?php

use function Livewire\Volt\{layout, title, state};

layout('layout.component');
title('Textarea - Aura Wire');

state(['bio' => '']);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Textarea</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Multi-line text input field supporting auto-resize, custom row count, labels, and error states.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::textarea&gt;
            </code>
        </div>
    </div>
    <x-aura::code class="w-full" title="Textarea Control">
        <x-slot:preview>
            <div class="w-full max-w-md">
                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::textarea wire:model="bio" rows="4" label="Biography" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
