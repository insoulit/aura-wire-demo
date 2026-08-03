<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Footer - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Footer</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::footer&gt;</code>
    </div>

    {{-- Footer Demo --}}
    <x-aura::code class="w-full" title="Application Footer">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden">
                <x-aura::layout.footer brand="Aura Wire Demo">
                    <a href="#" class="hover:underline">Documentation</a>
                    <a href="#" class="hover:underline">GitHub</a>
                    <a href="#" class="hover:underline">License</a>

                    <x-slot name="bottom">
                        <span>&copy; {{ date('Y') }} Insoulit. All rights reserved.</span>
                        <span>v1.0.0</span>
                    </x-slot>
                </x-aura::layout.footer>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::layout.footer brand="Aura Wire Demo"&gt;
    &lt;a href="#" class="hover:underline"&gt;Documentation&lt;/a&gt;
    &lt;a href="#" class="hover:underline"&gt;GitHub&lt;/a&gt;
    &lt;a href="#" class="hover:underline"&gt;License&lt;/a&gt;

    &amp;lt;x-slot name="bottom"&amp;gt;
        &amp;lt;span&amp;gt;&amp;copy; {{ date('Y') }} Insoulit. All rights reserved.&amp;lt;/span&amp;gt;
        &amp;lt;span&amp;gt;v1.0.0&amp;lt;/span&amp;gt;
    &amp;lt;/x-slot&amp;gt;
&lt;/x-aura::layout.footer&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
