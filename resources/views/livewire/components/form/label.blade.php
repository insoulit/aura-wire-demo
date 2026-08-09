<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Label - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Label</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Accessible form input labels with size variants and required asterisk badges.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::label&gt;
            </code>
        </div>
    </div>
    <x-aura::code class="w-full" title="Form Label">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::label required>Email Address</x-aura::label>
                <x-aura::label>Optional Nickname</x-aura::label>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::label required&gt;Email Address&lt;/x-aura::label&gt;
&lt;x-aura::label&gt;Optional Nickname&lt;/x-aura::label&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
