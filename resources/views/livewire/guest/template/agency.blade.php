<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Creative Agency UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $service = 'web';
    public string $budget = '10k';
    public bool $hasBranding = false;
    public bool $hasDevelopment = true;
};

?>

<x-aura::flex direction="col" gap="16">

    <!-- Top Navigation Bar -->
    <x-aura::flex align="center" justify="between" class="border-b border-zinc-200 dark:border-zinc-800 pb-4">

        <x-aura::flex align="center" gap="3">

            <x-aura::button href="/guest#full-template" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <span class="text-zinc-300 dark:text-zinc-700">/</span>

            <x-aura::badge variant="neutral" size="sm">
                Agency UI Kit
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::badge variant="neutral" size="sm">
            Accepting Projects
        </x-aura::badge>

    </x-aura::flex>

    <!-- Agency Hero Section -->
    <div class="rounded-3xl bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 relative overflow-hidden border border-zinc-200/80 dark:border-zinc-800 shadow-xs">

        <x-aura::flex direction="col" gap="4" class="max-w-2xl">

            <x-aura::flex align="center" gap="2">

                <x-aura::kicker>
                    STUDIO AURA DIGITAL
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    Design and Engineering
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="md">
                We Craft Digital Products That Drive Growth
            </x-aura::display>

            <x-aura::subheading>
                Partnering with ambitious founders and enterprise engineering teams to design high converting web applications, brand identities, and design systems.
            </x-aura::subheading>

            <x-aura::flex align="center" gap="3" wrap="true" class="pt-2">

                <x-aura::button variant="primary" size="md" icon="arrow-right" iconPlacement="right">
                    Start
                </x-aura::button>

                <x-aura::button variant="secondary" size="md">
                    Portfolio
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </div>

    <!-- Services Offered Grid -->
    <x-aura::flex direction="col" gap="6">

        <x-aura::flex direction="col" gap="none" class="border-b border-zinc-200 dark:border-zinc-800 pb-3">

            <x-aura::heading level="2" size="lg">
                Core Agency Services
            </x-aura::heading>

            <x-aura::subheading>
                Full cycle capabilities from product strategy to production deployment
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::grid cols="1" md="3" gap="6">

            <!-- Service 1 -->
            <x-aura::card gap="3">

                <x-aura::icon name="sparkles" size="md" variant="dark" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Brand Identity and System
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Logo systems, typography guidelines, design tokens, and marketing asset libraries.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="subtle" size="sm">
                        Strategy and Visuals
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <!-- Service 2 -->
            <x-aura::card gap="3">

                <x-aura::icon name="code" size="md" variant="dark" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Full Stack Web Development
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Laravel 12, Livewire Volt, and Tailwind CSS app engineering with comprehensive test coverage.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="neutral" size="sm">
                        Production Engineering
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <!-- Service 3 -->
            <x-aura::card gap="3">

                <x-aura::icon name="target" size="md" variant="dark" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        UI UX Audit and Optimization
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Funnel conversion analysis, accessibility audits, and design heuristic evaluations.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="subtle" size="sm">
                        Growth and CRO
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

    <!-- Interactive Proposal Request Estimator -->
    <x-aura::card title="Project Scope and Estimation Builder" description="Select required services to receive a detailed technical proposal and timeline." gap="6">

        <form class="space-y-6 pt-2" onsubmit="event.preventDefault()">

            <x-aura::grid cols="1" sm="2" gap="4">

                <x-aura::field label="Primary Engagement Scope">

                    <x-aura::select wire:model.live="service">
                        <option value="web">Full Web Application Build</option>
                        <option value="brand">Brand Identity and System</option>
                        <option value="audit">UI UX Audit and Refactor</option>
                    </x-aura::select>

                </x-aura::field>

                <x-aura::field label="Target Budget Range">

                    <x-aura::select wire:model.live="budget">
                        <option value="5k">$5,000 – $10,000</option>
                        <option value="10k">$10,000 – $25,000</option>
                        <option value="25k">$25,000+</option>
                    </x-aura::select>

                </x-aura::field>

            </x-aura::grid>

            <x-aura::flex direction="col" gap="3" class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">

                <x-aura::heading level="4" size="xs">
                    Included Capabilities
                </x-aura::heading>

                <x-aura::flex direction="col" sm="row" gap="4">

                    <x-aura::checkbox wire:model.live="hasBranding" label="Visual Brand Identity Kit" description="Includes logos, type, and color palettes." />

                    <x-aura::checkbox wire:model.live="hasDevelopment" label="Livewire Full Stack Implementation" description="Production ready code repository." />

                </x-aura::flex>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::text variant="subtle" size="sm">
                    Average delivery timeframe: <strong>3 to 6 weeks</strong> from kickoff.
                </x-aura::text>

                <x-aura::button variant="primary" size="md">
                    Submit
                </x-aura::button>

            </x-slot:footer>

        </form>

    </x-aura::card>

</x-aura::flex>
