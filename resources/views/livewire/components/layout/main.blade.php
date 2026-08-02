<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Main — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Main</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::main&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Main Content Wrapper">
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
