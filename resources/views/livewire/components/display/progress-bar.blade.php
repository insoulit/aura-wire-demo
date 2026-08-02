<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Progress Bar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Progress Bar Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::progress-bar&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Progress Bar Variations --}}
    <x-aura::code title="Progress Bar Variants & Sizes">
        <x-slot:preview>
            <div class="w-full max-w-xl space-y-6">
                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>Upload Progress (Indigo)</span>
                        <span>75%</span>
                    </div>
                    <x-aura::progress-bar percent="75" variant="indigo" size="md" />
                </div>

                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>Task Completed (Emerald)</span>
                        <span>100%</span>
                    </div>
                    <x-aura::progress-bar percent="100" variant="emerald" size="lg" />
                </div>

                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>Storage Usage (Amber)</span>
                        <span>60%</span>
                    </div>
                    <x-aura::progress-bar percent="60" variant="amber" size="sm" />
                </div>

                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>Server Load (Red)</span>
                        <span>92%</span>
                    </div>
                    <x-aura::progress-bar percent="92" variant="red" size="md" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::progress-bar percent="75" variant="indigo" size="md" /&gt;
&lt;x-aura::progress-bar percent="100" variant="emerald" size="lg" /&gt;
&lt;x-aura::progress-bar percent="60" variant="amber" size="sm" /&gt;
&lt;x-aura::progress-bar percent="92" variant="red" size="md" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
