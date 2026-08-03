<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Error - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Error</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::error&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Field Error Message">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::error message="The email field is required." />
                <x-aura::error message="Password must be at least 8 characters." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::error message="The email field is required." /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
