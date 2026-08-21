<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('FAQ Accordion — Guest Portal | Aura Wire')] 
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

            <x-aura::card padding="xl" gap="6">

                <x-aura::accordion bordered="false">

                    <x-aura::accordion.item size="md" title="How does the Aura Wire component library work with Laravel?">

                        <x-aura::text variant="subtle" size="sm">
                            Aura Wire components are registered as native Blade components under the namespace. They work seamlessly with standard Blade templates and Livewire v3 Volt components without requiring extra configuration.
                        </x-aura::text>

                    </x-aura::accordion.item>

                    <x-aura::accordion.item size="md" title="Can I customize the Tailwind CSS design system tokens?">

                        <x-aura::text variant="subtle" size="sm">
                            Yes. All components leverage native Tailwind CSS design tokens. You can extend or override colors, spacing, rounded corners, and typography in your application Tailwind configuration.
                        </x-aura::text>

                    </x-aura::accordion.item>

                    <x-aura::accordion.item size="md" title="Is Alpine.js required for interactive components?">

                        <x-aura::text variant="subtle" size="sm">
                            Alpine.js comes bundled with Livewire v3 out of the box. Interactive components like Modals, Slide Overs, Accordions, and Dropdowns utilize lightweight Alpine directives for zero latency client side state.
                        </x-aura::text>

                    </x-aura::accordion.item>

                </x-aura::accordion>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="xl" gap="6">
                    <x-aura::accordion bordered="false">
                        <x-aura::accordion.item size="md" title="How does Aura Wire work with Laravel?">
                            <x-aura::text variant="subtle" size="sm">
                                Aura Wire components are registered as native Blade components.
                            </x-aura::text>
                        </x-aura::accordion.item>

                        <x-aura::accordion.item size="md" title="Can I customize design system tokens?">
                            <x-aura::text variant="subtle" size="sm">
                                Yes. All components leverage native Tailwind CSS design tokens.
                            </x-aura::text>
                        </x-aura::accordion.item>

                        <x-aura::accordion.item size="md" title="Is Alpine.js required?">
                            <x-aura::text variant="subtle" size="sm">
                                Alpine.js comes bundled with Livewire v3 out of the box.
                            </x-aura::text>
                        </x-aura::accordion.item>
                    </x-aura::accordion>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
