<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Button Group — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Button Group</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::button.group&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Button Groups">
            <x-slot:preview>
                <div class="flex flex-wrap items-center gap-8">
                    <x-aura::button.group>
                        <x-aura::button variant="secondary">Years</x-aura::button>
                        <x-aura::button variant="secondary">Months</x-aura::button>
                        <x-aura::button variant="secondary">Days</x-aura::button>
                    </x-aura::button.group>

                    <x-aura::button.group vertical>
                        <x-aura::button variant="outline" size="sm">Top</x-aura::button>
                        <x-aura::button variant="outline" size="sm">Bottom</x-aura::button>
                    </x-aura::button.group>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::button.group&gt;
    &lt;x-aura::button variant="secondary"&gt;Years&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary"&gt;Months&lt;/x-aura::button&gt;
&lt;/x-aura::button.group&gt;

&lt;x-aura::button.group vertical&gt;
    &lt;x-aura::button variant="outline"&gt;Top&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="outline"&gt;Bottom&lt;/x-aura::button&gt;
&lt;/x-aura::button.group&gt;</x-slot:codeSlot>
        </x-aura::code>
    
</div>
