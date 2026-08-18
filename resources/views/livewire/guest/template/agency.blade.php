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

<x-aura::flex direction="col" gap="16" class="w-full max-w-6xl py-6">

    <!-- Top Navigation Bar -->
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">

        <div class="flex items-center gap-3">

            <x-aura::button href="/guest#full-template" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <span class="text-zinc-300 dark:text-zinc-700">/</span>

            <x-aura::badge variant="neutral" size="sm">
                Agency UI Kit
            </x-aura::badge>

        </div>

        <x-aura::badge variant="neutral" size="sm">
            Accepting Projects
        </x-aura::badge>

    </div>

    <!-- Agency Hero Section -->
    <div class="rounded-3xl bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 relative overflow-hidden border border-zinc-200/80 dark:border-zinc-800 shadow-xs">

        <div class="max-w-2xl space-y-4">

            <div class="inline-flex items-center gap-2">

                <x-aura::kicker>
                    STUDIO AURA DIGITAL
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    Design &amp; Engineering
                </x-aura::badge>

            </div>

            <x-aura::display size="md">
                We Craft Digital Products That Drive Growth
            </x-aura::display>

            <x-aura::subheading>
                Partnering with ambitious founders and enterprise engineering teams to design high converting web applications, brand identities, and design systems.
            </x-aura::subheading>

            <div class="pt-2 flex flex-wrap gap-3">

                <x-aura::button variant="primary" size="md" icon="arrow-right" iconPlacement="right">
                    Start
                </x-aura::button>

                <x-aura::button variant="outline" size="md">
                    Portfolio
                </x-aura::button>

            </div>

        </div>

    </div>

    <!-- Services Offered Grid -->
    <div class="space-y-6">

        <div class="border-b border-zinc-200 dark:border-zinc-800 pb-3">

            <x-aura::heading level="2" size="lg">
                Core Agency Services
            </x-aura::heading>

            <x-aura::subheading>
                Full cycle capabilities from product strategy to production deployment
            </x-aura::subheading>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Service 1 -->
            <x-aura::card>

                <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                    <x-aura::icon name="sparkles" size="sm" />
                </div>

                <div>

                    <x-aura::heading level="3" size="sm">
                        Brand Identity &amp; System
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="xs">
                        Logo systems, typography guidelines, design tokens, and marketing asset libraries.
                    </x-aura::text>

                </div>

                <x-aura::badge variant="subtle" size="sm">
                    Strategy &amp; Visuals
                </x-aura::badge>

            </x-aura::card>

            <!-- Service 2 -->
            <x-aura::card>

                <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                    <x-aura::icon name="code" size="sm" />
                </div>

                <div>

                    <x-aura::heading level="3" size="sm">
                        Full Stack Web Development
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="xs">
                        Laravel 12, Livewire Volt, and Tailwind CSS app engineering with comprehensive test coverage.
                    </x-aura::text>

                </div>

                <x-aura::badge variant="neutral" size="sm">
                    Production Engineering
                </x-aura::badge>

            </x-aura::card>

            <!-- Service 3 -->
            <x-aura::card>

                <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                    <x-aura::icon name="target" size="sm" />
                </div>

                <div>

                    <x-aura::heading level="3" size="sm">
                        UI UX Audit &amp; Optimization
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="xs">
                        Funnel conversion analysis, accessibility audits, and design heuristic evaluations.
                    </x-aura::text>

                </div>

                <x-aura::badge variant="subtle" size="sm">
                    Growth &amp; CRO
                </x-aura::badge>

            </x-aura::card>

        </div>

    </div>

    <!-- Interactive Proposal Request Estimator -->
    <x-aura::card title="Project Scope &amp; Estimation Builder" description="Select required services to receive a detailed technical proposal and timeline.">

        <form class="space-y-6 pt-2" onsubmit="event.preventDefault()">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <x-aura::field label="Primary Engagement Scope">

                    <x-aura::select wire:model.live="service">
                        <option value="web">Full Web Application Build</option>
                        <option value="brand">Brand Identity &amp; System</option>
                        <option value="audit">UI/UX Audit &amp; Refactor</option>
                    </x-aura::select>

                </x-aura::field>

                <x-aura::field label="Target Budget Range">

                    <x-aura::select wire:model.live="budget">
                        <option value="5k">$5,000 – $10,000</option>
                        <option value="10k">$10,000 – $25,000</option>
                        <option value="25k">$25,000+</option>
                    </x-aura::select>

                </x-aura::field>

            </div>

            <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800 space-y-3">

                <x-aura::heading level="4" size="xs">
                    Included Capabilities
                </x-aura::heading>

                <div class="flex flex-col sm:flex-row gap-4">

                    <x-aura::checkbox wire:model.live="hasBranding" label="Visual Brand Identity Kit" description="Includes logos, type, and color palettes." />

                    <x-aura::checkbox wire:model.live="hasDevelopment" label="Livewire Full Stack Implementation" description="Production ready code repository." />

                </div>

            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2 border-t border-zinc-100 dark:border-zinc-800">

                <x-aura::text variant="subtle" size="xs">
                    Average delivery timeframe: <strong>3 to 6 weeks</strong> from kickoff.
                </x-aura::text>

                <x-aura::button variant="primary" size="md">
                    Submit
                </x-aura::button>

            </div>

        </form>

    </x-aura::card>

</x-aura::flex>
