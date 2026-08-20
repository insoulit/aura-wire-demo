<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('FAQ Accordion — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6" class="py-6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                FAQ Accordion
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- FAQ Accordion Block Preview -->
    <x-aura::code title="Interactive FAQ Accordion Block">

        <x-slot:preview>

            <x-aura::flex direction="col" gap="3" class="w-full max-w-2xl mx-auto" x-data="{ open: 1 }">

                <!-- FAQ Item 1 -->
                <x-aura::card>

                    <button
                        type="button"
                        x-on:click="open = (open === 1 ? null : 1)"
                        class="w-full flex items-center justify-between text-left gap-4 cursor-pointer select-none"
                    >

                        <x-aura::heading level="3" size="sm">
                            How does the Aura Wire component library work with Laravel?
                        </x-aura::heading>

                        <x-aura::icon name="chevron-down" size="xs" />

                    </button>

                    <div x-show="open === 1" x-collapse style="display: none;">

                        <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800/80 mt-3">

                            <x-aura::text variant="subtle" size="sm">
                                Aura Wire components are registered as native Blade components under the <code class="px-1.5 py-0.5 rounded bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-zinc-100 font-mono text-xs">&lt;x-aura::*&gt;</code> namespace. They work seamlessly with standard Blade templates and Livewire v3 Volt components without requiring extra configuration.
                            </x-aura::text>

                        </div>

                    </div>

                </x-aura::card>

                <!-- FAQ Item 2 -->
                <x-aura::card>

                    <button
                        type="button"
                        x-on:click="open = (open === 2 ? null : 2)"
                        class="w-full flex items-center justify-between text-left gap-4 cursor-pointer select-none"
                    >

                        <x-aura::heading level="3" size="sm">
                            Can I customize the Tailwind CSS design system tokens?
                        </x-aura::heading>

                        <x-aura::icon name="chevron-down" size="xs" />

                    </button>

                    <div x-show="open === 2" x-collapse style="display: none;">

                        <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800/80 mt-3">

                            <x-aura::text variant="subtle" size="sm">
                                Yes! All components leverage native Tailwind CSS utility classes and design tokens. You can extend or override colors, spacing, rounded corners, and typography in your application Tailwind configuration.
                            </x-aura::text>

                        </div>

                    </div>

                </x-aura::card>

                <!-- FAQ Item 3 -->
                <x-aura::card>

                    <button
                        type="button"
                        x-on:click="open = (open === 3 ? null : 3)"
                        class="w-full flex items-center justify-between text-left gap-4 cursor-pointer select-none"
                    >

                        <x-aura::heading level="3" size="sm">
                            Is Alpine.js required for interactive components?
                        </x-aura::heading>

                        <x-aura::icon name="chevron-down" size="xs" />

                    </button>

                    <div x-show="open === 3" x-collapse style="display: none;">

                        <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800/80 mt-3">

                            <x-aura::text variant="subtle" size="sm">
                                Alpine.js comes bundled with Livewire v3 out of the box. Interactive components like Modals, Slide Overs, Accordions, and Dropdowns utilize lightweight Alpine directives for zero latency client side state.
                            </x-aura::text>

                        </div>

                    </div>

                </x-aura::card>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" gap="3" class="w-full max-w-2xl mx-auto" x-data="{ open: 1 }">
                    <x-aura::card>
                        <button type="button" x-on:click="open = (open === 1 ? null : 1)" class="w-full flex items-center justify-between text-left gap-4">
                            <x-aura::heading level="3" size="sm">
                                How does Aura Wire work with Laravel?
                            </x-aura::heading>
                            <x-aura::icon name="chevron-down" size="xs" />
                        </button>
                        <div x-show="open === 1" x-collapse>
                            <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800 mt-3">
                                <x-aura::text variant="subtle" size="sm">
                                    Aura Wire components are registered as native Blade components under the &lt;x-aura::*&gt; namespace.
                                </x-aura::text>
                            </div>
                        </div>
                    </x-aura::card>
                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
