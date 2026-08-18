<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Testimonial — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="6" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>
                    Design Blocks
                </x-aura::kicker>

                <x-aura::heading level="1" size="lg">
                    Testimonial
                </x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- Testimonial Block Preview -->
    <x-aura::code title="Customer Review &amp; Social Proof Block">

        <x-slot:preview>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">

                <x-aura::card>

                    <div class="flex items-center gap-1 text-zinc-900 dark:text-white text-sm select-none">
                        ★★★★★
                    </div>

                    <x-aura::text variant="subtle" size="sm">
                        "Aura Wire has cut our UI development time in half. The components are extremely well crafted and responsive across all device breakpoints."
                    </x-aura::text>

                    <div class="flex items-center gap-3 pt-2">

                        <x-aura::avatar initials="JD" status="online" size="sm" />

                        <div>

                            <x-aura::heading level="4" size="xs">
                                Jane Doe
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="xs">
                                CTO at TechCorp
                            </x-aura::text>

                        </div>

                    </div>

                </x-aura::card>

                <x-aura::card>

                    <div class="flex items-center gap-1 text-zinc-900 dark:text-white text-sm select-none">
                        ★★★★★
                    </div>

                    <x-aura::text variant="subtle" size="sm">
                        "The cleanest Blade component library available for TALL stack developers. Worth every single penny for production applications."
                    </x-aura::text>

                    <div class="flex items-center gap-3 pt-2">

                        <x-aura::avatar initials="MS" status="online" size="sm" />

                        <div>

                            <x-aura::heading level="4" size="xs">
                                Marcus Smith
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="xs">
                                Lead Engineer at SaaSify
                            </x-aura::text>

                        </div>

                    </div>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                    <x-aura::card>
                        <div class="text-zinc-900 dark:text-white text-sm">
                            ★★★★★
                        </div>

                        <x-aura::text variant="subtle" size="sm" class="italic">
                            "Aura Wire has cut our UI development time in half. Highly recommended!"
                        </x-aura::text>

                        <div class="flex items-center gap-3 pt-2">
                            <x-aura::avatar initials="JD" status="online" size="sm" />

                            <div>
                                <x-aura::heading level="4" size="xs">
                                    Jane Doe
                                </x-aura::heading>

                                <x-aura::text variant="subtle" size="xs">
                                    CTO at TechCorp
                                </x-aura::text>
                            </div>
                        </div>
                    </x-aura::card>
                </div>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::flex>
