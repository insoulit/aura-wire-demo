<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Progress Bar — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Progress Bar</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::progress-bar&gt;</code>
    </div>

    {{-- Progress Bar Variations --}}
    <x-aura::code class="w-full" title="Progress Bar Variants & Sizes">
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
