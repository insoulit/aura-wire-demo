<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Accordion — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Accordion
        </x-aura::heading>

        <x-aura::subheading size="md">
            Expandable vertical accordion item groups with support for single or multiple open items.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::accordion default="faq-1">
                    <x-aura::accordion.item name="faq-1" title="Question Title">
                        Content
                    </x-aura::accordion.item>
                </x-aura::accordion>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard FAQ Accordion -->
    <x-aura::code title="1. Accordion Group">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::accordion default="faq-1">

                    <x-aura::accordion.item name="faq-1" title="What is Aura Wire?">
                        Aura Wire is a sleek Blade and Livewire component library crafted with high contrast monochrome design foundation.
                    </x-aura::accordion.item>

                    <x-aura::accordion.item name="faq-2" title="How do I install it into my project?">
                        Install via Composer and publish configuration assets.
                    </x-aura::accordion.item>

                    <x-aura::accordion.item name="faq-3" title="Does it support Dark Mode?">
                        Yes, dark mode is supported out of the box with automatic class or media strategy options.
                    </x-aura::accordion.item>

                </x-aura::accordion>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::accordion default="faq-1">

                    <x-aura::accordion.item name="faq-1" title="What is Aura Wire?">
                        Aura Wire is a sleek Blade and Livewire component library crafted with high contrast monochrome design foundation.
                    </x-aura::accordion.item>

                    <x-aura::accordion.item name="faq-2" title="How do I install it into my project?">
                        Install via Composer and publish configuration assets.
                    </x-aura::accordion.item>

                    <x-aura::accordion.item name="faq-3" title="Does it support Dark Mode?">
                        Yes, dark mode is supported out of the box with automatic class or media strategy options.
                    </x-aura::accordion.item>

                </x-aura::accordion>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
