<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('FAQ Accordion — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">FAQ Accordion</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" class="shrink-0 gap-1.5">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 shrink-0" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- FAQ Accordion Block Preview -->
    <x-aura::code class="w-full" title="Interactive FAQ Accordion Block">
        <x-slot:preview>
            <div class="space-y-3 w-full max-w-2xl mx-auto" x-data="{ open: 1 }">
                <!-- FAQ Item 1 -->
                <x-aura::card class="p-5 overflow-hidden transition-all border border-zinc-200 dark:border-zinc-800">
                    <button
                        type="button"
                        x-on:click="open = (open === 1 ? null : 1)"
                        class="w-full flex items-center justify-between text-left gap-4 cursor-pointer select-none"
                    >
                        <x-aura::heading level="3" size="sm" class="text-zinc-900 dark:text-white">
                            How does the Aura Wire component library work with Laravel?
                        </x-aura::heading>
                        <x-aura::icon
                            name="chevron-down"
                            class="w-4 h-4 text-zinc-400 shrink-0 transition-transform duration-200"
                            ::class="{ 'rotate-180': open === 1 }"
                        />
                    </button>
                    <div x-show="open === 1" x-collapse style="display: none;">
                        <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800/80 mt-3">
                            <x-aura::text variant="subtle" size="sm" class="leading-relaxed">
                                Aura Wire components are registered as native Blade components under the <code class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-indigo-600 dark:text-indigo-400 font-mono text-xs">&lt;x-aura::*&gt;</code> namespace. They work seamlessly with standard Blade templates and Livewire v3 Volt components without requiring extra configuration.
                            </x-aura::text>
                        </div>
                    </div>
                </x-aura::card>

                <!-- FAQ Item 2 -->
                <x-aura::card class="p-5 overflow-hidden transition-all border border-zinc-200 dark:border-zinc-800">
                    <button
                        type="button"
                        x-on:click="open = (open === 2 ? null : 2)"
                        class="w-full flex items-center justify-between text-left gap-4 cursor-pointer select-none"
                    >
                        <x-aura::heading level="3" size="sm" class="text-zinc-900 dark:text-white">
                            Can I customize the Tailwind CSS design system tokens?
                        </x-aura::heading>
                        <x-aura::icon
                            name="chevron-down"
                            class="w-4 h-4 text-zinc-400 shrink-0 transition-transform duration-200"
                            ::class="{ 'rotate-180': open === 2 }"
                        />
                    </button>
                    <div x-show="open === 2" x-collapse style="display: none;">
                        <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800/80 mt-3">
                            <x-aura::text variant="subtle" size="sm" class="leading-relaxed">
                                Yes! All components leverage native Tailwind CSS utility classes and design tokens. You can extend or override colors, spacing, rounded corners, and typography in your application's Tailwind configuration.
                            </x-aura::text>
                        </div>
                    </div>
                </x-aura::card>

                <!-- FAQ Item 3 -->
                <x-aura::card class="p-5 overflow-hidden transition-all border border-zinc-200 dark:border-zinc-800">
                    <button
                        type="button"
                        x-on:click="open = (open === 3 ? null : 3)"
                        class="w-full flex items-center justify-between text-left gap-4 cursor-pointer select-none"
                    >
                        <x-aura::heading level="3" size="sm" class="text-zinc-900 dark:text-white">
                            Is Alpine.js required for interactive components?
                        </x-aura::heading>
                        <x-aura::icon
                            name="chevron-down"
                            class="w-4 h-4 text-zinc-400 shrink-0 transition-transform duration-200"
                            ::class="{ 'rotate-180': open === 3 }"
                        />
                    </button>
                    <div x-show="open === 3" x-collapse style="display: none;">
                        <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800/80 mt-3">
                            <x-aura::text variant="subtle" size="sm" class="leading-relaxed">
                                Alpine.js comes bundled with Livewire v3 out-of-the-box. Interactive components like Modals, Slide Overs, Accordions, and Dropdowns utilize lightweight Alpine directives for zero-latency client-side state.
                            </x-aura::text>
                        </div>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="space-y-3 w-full max-w-2xl mx-auto" x-data="{ open: 1 }"&gt;
    &lt;!-- Accordion Item --&gt;
    &lt;x-aura::card class="p-5 border border-zinc-200 dark:border-zinc-800"&gt;
        &lt;button type="button" x-on:click="open = (open === 1 ? null : 1)" class="w-full flex items-center justify-between text-left gap-4"&gt;
            &lt;x-aura::heading level="3" size="sm"&gt;How does Aura Wire work with Laravel?&lt;/x-aura::heading&gt;
            &lt;x-aura::icon name="chevron-down" class="w-4 h-4 text-zinc-400 transition-transform duration-200" ::class="{ 'rotate-180': open === 1 }" /&gt;
        &lt;/button&gt;
        &lt;div x-show="open === 1" x-collapse&gt;
            &lt;div class="pt-3 border-t border-zinc-100 dark:border-zinc-800 mt-3"&gt;
                &lt;x-aura::text variant="subtle" size="sm"&gt;
                    Aura Wire components are registered as native Blade components under the &amp;lt;x-aura::*&amp;gt; namespace.
                &lt;/x-aura::text&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>
