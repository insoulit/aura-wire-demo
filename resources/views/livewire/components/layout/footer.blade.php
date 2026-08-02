<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Footer Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Footer Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::footer&gt;</x-aura::code> / <x-aura::code>&lt;x-aura::layout.footer&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Footer Demo --}}
    <x-aura::code title="Application Footer">
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
