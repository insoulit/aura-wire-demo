<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Textarea — Aura Wire');

state(['bio' => '']);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Textarea</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::textarea&gt;</code>
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
