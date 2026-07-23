<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Main Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Main Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::main&gt;</x-aura::code>
        </x-aura::text>
    </div>
    <x-aura::code title="Main Content Wrapper">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4">
                <x-aura::main>
                    <x-aura::text size="sm">
                        Main container layout area enforcing consistent padding, max-width boundary, and auto margin alignment across viewports.
                    </x-aura::text>
                </x-aura::main>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::main&gt;
    &lt;x-aura::text size="sm"&gt;Page content goes here...&lt;/x-aura::text&gt;
&lt;/x-aura::main&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
