<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Button Group Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Button Group Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::button.group&gt;</code></p>
    </div>

    <section class="space-y-4">
        <h2 class="text-xl font-bold text-zinc-900 dark:text-white">Group Layouts</h2>
        <x-aura::code title="Button Groups">
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
    </section>
</div>
