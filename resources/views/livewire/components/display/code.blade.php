<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Code Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Code Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::code&gt;</code>
        </p>
    </div>

    <x-aura::code title="Code Block Component">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::code title="Example Code Block" language="blade">
                    <x-slot:preview>
                        <x-aura::button variant="primary">Click Me</x-aura::button>
                    </x-slot:preview>
                    <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Click Me&lt;/x-aura::button&gt;</x-slot:codeSlot>
                </x-aura::code>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::code title="Example Code Block" language="blade"&gt;
    &lt;x-slot:preview&gt;
        &lt;x-aura::button variant="primary"&gt;Click Me&lt;/x-aura::button&gt;
    &lt;/x-slot:preview&gt;
    &lt;x-slot:codeSlot&gt;&amp;lt;x-aura::button variant="primary"&amp;gt;Click Me&amp;lt;/x-aura::button&amp;gt;&lt;/x-slot:codeSlot&gt;
&lt;/x-aura::code&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
