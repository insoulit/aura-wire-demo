<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Card Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Card Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::card&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Container Card">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::card title="Project Statistics" description="Monthly traffic overview">
                    <x-aura::text size="sm">Total Visitors: 45,210</x-aura::text>
                    <x-slot:footer>
                        <x-aura::button variant="primary" size="sm">Export Report</x-aura::button>
                    </x-slot:footer>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::card title="Project Statistics" description="Monthly traffic overview"&gt;
    &lt;x-aura::text size="sm"&gt;Total Visitors: 45,210&lt;/x-aura::text&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Export Report&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::card&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
