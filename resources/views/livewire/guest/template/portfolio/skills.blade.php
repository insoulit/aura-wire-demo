<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Core Skills & Specializations -->
<div id="skills">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                CORE SPECIALIZATIONS
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Engineering and Design Expertise
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Deep technical mastery across the full spectrum of modern web application development
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::grid cols="1" md="3" gap="6">

            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="layers" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Design Systems Architecture
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Building token based design systems in Figma and translating them to accessible, high contrast Blade primitives.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="code" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Reactive Full Stack Laravel
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Crafting fluid single page experiences using Livewire Volt, Alpine.js, and server driven UI state machines.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="zap" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Performance and Accessibility
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Optimizing critical rendering paths, keyboard focus navigation, screen reader support, and asset compilation.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</div>
