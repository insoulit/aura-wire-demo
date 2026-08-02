<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Card — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Card</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::card&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Container Card">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::card title="Project Statistics" description="Monthly traffic overview">
                    <x-aura::text size="sm">Total Visitors: 45,210</x-aura::text>
                    <x-slot name="footer">
                        <x-aura::button variant="primary" size="sm">Export Report</x-aura::button>
                    </x-slot>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::card title="Project Statistics" description="Monthly traffic overview"&gt;
    &lt;x-aura::text size="sm"&gt;Total Visitors: 45,210&lt;/x-aura::text&gt;
    &amp;lt;x-slot name="footer"&amp;gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Export Report&lt;/x-aura::button&gt;
    &amp;lt;/x-slot&amp;gt;
&lt;/x-aura::card&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
