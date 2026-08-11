<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Code - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Data Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Code</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Interactive code block component with Preview/Code tabs and clipboard copy functionality.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::code&gt;
            </code>
        </div>
    </div>

    <x-aura::code class="w-full" title="Code Block Component">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::code class="w-full" title="Example Code Block" language="blade">
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
