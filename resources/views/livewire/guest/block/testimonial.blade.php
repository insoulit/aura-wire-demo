<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Testimonial — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Testimonials
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Testimonial Block Preview -->
    <x-aura::code title="Customer Review and Social Proof Block">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="2" gap="6">

                <x-aura::card padding="lg" gap="4">

                    <x-aura::rating rating="5" readonly="true" size="sm" />

                    <x-aura::text variant="subtle" size="sm">
                        "Aura Wire has cut our UI development time in half. The components are extremely well crafted and responsive across all device breakpoints."
                    </x-aura::text>

                    <x-aura::separator />

                    <x-aura::flex align="center" gap="3">

                        <x-aura::avatar initials="JD" status="online" size="sm" />

                        <x-aura::flex direction="col" gap="none">

                            <x-aura::heading level="4" size="xs">
                                Jane Doe
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                CTO at TechCorp
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card padding="lg" gap="4">

                    <x-aura::rating rating="5" readonly="true" size="sm" />

                    <x-aura::text variant="subtle" size="sm">
                        "The cleanest Blade component library available for TALL stack developers. Worth every single penny for production applications."
                    </x-aura::text>

                    <x-aura::separator />

                    <x-aura::flex align="center" gap="3">

                        <x-aura::avatar initials="MS" status="online" size="sm" />

                        <x-aura::flex direction="col" gap="none">

                            <x-aura::heading level="4" size="xs">
                                Marcus Smith
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Lead Engineer at SaaSify
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="2" gap="6">
                    <x-aura::card padding="lg" gap="4">
                        <x-aura::rating rating="5" readonly="true" size="sm" />

                        <x-aura::text variant="subtle" size="sm">
                            "Aura Wire has cut our UI development time in half."
                        </x-aura::text>

                        <x-aura::separator />

                        <x-aura::flex align="center" gap="3">
                            <x-aura::avatar initials="JD" status="online" size="sm" />

                            <x-aura::flex direction="col" gap="none">
                                <x-aura::heading level="4" size="xs">
                                    Jane Doe
                                </x-aura::heading>

                                <x-aura::text variant="subtle" size="sm">
                                    CTO at TechCorp
                                </x-aura::text>
                            </x-aura::flex>
                        </x-aura::flex>
                    </x-aura::card>
                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
