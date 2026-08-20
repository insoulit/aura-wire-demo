<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Portfolio UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $contactName = '';
    public string $contactEmail = '';
    public string $contactMessage = '';
};

?>

<x-aura::flex direction="col" gap="12">

    <!-- Breadcrumb & Status Top Bar -->
    <x-aura::flex align="center" justify="between" class="border-b border-zinc-200 dark:border-zinc-800 pb-4">

        <x-aura::flex align="center" gap="3">

            <x-aura::button href="/guest#full-template" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <span class="text-zinc-300 dark:text-zinc-700">/</span>

            <x-aura::badge variant="neutral" size="sm">
                Portfolio UI Kit
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::badge variant="neutral" size="sm">
            Available for Projects
        </x-aura::badge>

    </x-aura::flex>

    <!-- Creator Profile Hero -->
    <div class="bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 rounded-3xl border border-zinc-200/80 dark:border-zinc-800 shadow-xs">

        <x-aura::flex direction="col" gap="4" class="max-w-2xl">

            <x-aura::flex align="center" gap="3">

                <x-aura::avatar initials="AK" size="lg" status="online" />

                <x-aura::flex direction="col" gap="none">

                    <x-aura::heading level="1" size="lg">
                        Alex Kovacs
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Staff Product Designer and Frontend Engineer
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-aura::subheading>
                Specializing in high contrast design systems, developer tools, and reactive Laravel Livewire interfaces.
            </x-aura::subheading>

            <!-- Skill Tags -->
            <x-aura::flex align="center" gap="2" wrap="true" class="pt-2">

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

            </x-aura::flex>

            <x-aura::flex align="center" gap="3" wrap="true" class="pt-4">

                <x-aura::button variant="primary" size="md" icon="arrow-right" iconPlacement="right">
                    Book
                </x-aura::button>

                <x-aura::button variant="secondary" size="md" icon="download">
                    Resume
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </div>

    <!-- Case Studies / Selected Work Grid -->
    <x-aura::flex direction="col" gap="6">

        <x-aura::flex align="center" justify="between" class="border-b border-zinc-200 dark:border-zinc-800 pb-3">

            <x-aura::flex direction="col" gap="none">

                <x-aura::heading level="2" size="md">
                    Selected Works and Case Studies
                </x-aura::heading>

                <x-aura::subheading>
                    Recent web applications, component suites, and design systems
                </x-aura::subheading>

            </x-aura::flex>

            <x-aura::badge variant="subtle">
                2 Case Studies
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::grid cols="1" md="2" gap="6">

            <!-- Project 1 -->
            <x-aura::card gap="4">

                <div class="aspect-16/9 rounded-2xl bg-zinc-900 p-6 flex items-center justify-center text-white border border-zinc-800">
                    <span class="text-5xl font-bold group-hover:scale-105 transition-transform duration-300">Aura</span>
                </div>

                <x-aura::flex direction="col" gap="2">

                    <x-aura::flex align="center" gap="2">

                        <x-aura::badge variant="neutral" size="sm">
                            UI Package
                        </x-aura::badge>

                        <x-aura::text variant="subtle" size="sm">
                            2026
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::heading level="3" size="sm">
                        Aura Wire Component Suite
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        High contrast Blade component suite featuring 30+ interactive elements for Laravel.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::link href="/components" size="sm">
                        Read Case Study
                    </x-aura::link>

                    <x-aura::badge variant="neutral" size="sm">
                        Open Source
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <!-- Project 2 -->
            <x-aura::card gap="4">

                <div class="aspect-16/9 rounded-2xl bg-zinc-900 p-6 flex items-center justify-center text-white border border-zinc-800">
                    <span class="text-5xl font-bold group-hover:scale-105 transition-transform duration-300">Pulse</span>
                </div>

                <x-aura::flex direction="col" gap="2">

                    <x-aura::flex align="center" gap="2">

                        <x-aura::badge variant="subtle" size="sm">
                            Analytics App
                        </x-aura::badge>

                        <x-aura::text variant="subtle" size="sm">
                            2025
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::heading level="3" size="sm">
                        Pulse Metrics Dashboard
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Realtime event tracking dashboard handling 50k events/sec with dark mode UI tokens.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::link href="/admin" size="sm">
                        Read Case Study
                    </x-aura::link>

                    <x-aura::badge variant="neutral" size="sm">
                        SaaS Product
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

    <!-- Contact & Booking Section -->
    <x-aura::card title="Let's Build Something Great Together" gap="6">

        <x-aura::grid cols="1" md="2" gap="6">

            <x-aura::flex direction="col" gap="4">

                <x-aura::field label="Your Name">
                    <x-aura::input wire:model="contactName" placeholder="Jane Doe" icon="user" />
                </x-aura::field>

                <x-aura::field label="Email Address">
                    <x-aura::input wire:model="contactEmail" type="email" placeholder="jane@company.com" icon="mail" />
                </x-aura::field>

            </x-aura::flex>

            <x-aura::flex direction="col" gap="4">

                <x-aura::field label="Project Details">
                    <x-aura::textarea wire:model="contactMessage" placeholder="Tell me about your project scope, timeline, and goals..." rows="4" />
                </x-aura::field>

            </x-aura::flex>

        </x-aura::grid>

        <x-slot:footer>

            <x-aura::badge variant="neutral" size="sm">
                Fast 24h Response
            </x-aura::badge>

            <x-aura::button variant="primary" size="sm" icon="arrow-right" iconPlacement="right">
                Send
            </x-aura::button>

        </x-slot:footer>

    </x-aura::card>

</x-aura::flex>
