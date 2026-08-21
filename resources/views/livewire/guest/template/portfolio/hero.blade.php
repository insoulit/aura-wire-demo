<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Creator Profile Hero -->
<div id="hero">

    <x-aura::card padding="xl" gap="6">

        <x-aura::flex direction="col" gap="4">

            <x-aura::flex align="center" gap="4">

                <x-aura::avatar initials="AK" size="lg" status="online" />

                <x-aura::flex direction="col" gap="none">

                    <x-aura::heading level="1" size="xl">
                        Alex Kovacs
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Staff Product Designer and Frontend Systems Engineer
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-aura::subheading size="md">
                Specializing in high contrast design systems, developer tools, and reactive Laravel Livewire interfaces for modern software teams.
            </x-aura::subheading>

            <!-- Skill Tags -->
            <x-aura::flex align="center" gap="2" wrap="true">

                <x-aura::tag variant="neutral">
                    Laravel 12
                </x-aura::tag>

                <x-aura::tag variant="neutral">
                    Livewire Volt
                </x-aura::tag>

                <x-aura::tag variant="neutral">
                    Tailwind CSS
                </x-aura::tag>

                <x-aura::tag variant="neutral">
                    Alpine.js
                </x-aura::tag>

                <x-aura::tag variant="neutral">
                    Design Systems
                </x-aura::tag>

            </x-aura::flex>

            <x-aura::flex align="center" gap="3" wrap="true">

                <x-aura::button href="#contact" variant="primary" size="md" icon="arrow-right">
                    Book
                </x-aura::button>

                <x-aura::button variant="secondary" size="md" icon="download">
                    Resume
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </x-aura::card>

</div>
