<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('Creative Agency UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $service = 'web';
    public string $budget = '10k';
    public bool $hasBranding = false;
    public bool $hasDevelopment = true;
};

?>

<div class="w-full max-w-6xl space-y-16 py-6">
    <!-- Top Navigation Bar -->
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div class="flex items-center gap-3">
            <x-aura::button href="/guest#full-template" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>
            <span class="text-zinc-300 dark:text-zinc-700">/</span>
            <x-aura::badge variant="neutral" size="sm">Agency UI Kit</x-aura::badge>
        </div>

        <x-aura::badge variant="neutral" size="sm">Accepting Q3/Q4 Projects</x-aura::badge>
    </div>

    <!-- Agency Hero Section -->
    <div class="rounded-3xl bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 relative overflow-hidden border border-zinc-200/80 dark:border-zinc-800 shadow-sm">
        <div class="max-w-2xl space-y-4">
            <div class="inline-flex items-center gap-2">
                <x-aura::kicker class="text-zinc-500">⚡ STUDIO AURA DIGITAL</x-aura::kicker>
                <x-aura::badge variant="neutral" size="sm">Design &amp; Engineering</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="display-md" class="text-zinc-900 dark:text-white">
                We Craft Digital Products That Drive Growth
            </x-aura::heading>
            <x-aura::subheading class="text-zinc-600 dark:text-zinc-400 text-base">
                Partnering with ambitious founders and enterprise engineering teams to design high-converting web applications, brand identities, and design systems.
            </x-aura::subheading>
            <div class="pt-2 flex flex-wrap gap-3">
                <x-aura::button variant="primary" size="md" icon-trailing="arrow-right">
                    Start a Project
                </x-aura::button>
                <x-aura::button variant="outline" size="md">
                    View Portfolio Works
                </x-aura::button>
            </div>
        </div>
    </div>

    <!-- Services Offered Grid -->
    <div class="space-y-6">
        <div class="border-b border-zinc-200 dark:border-zinc-800 pb-3">
            <x-aura::heading level="2" size="lg">Core Agency Services</x-aura::heading>
            <x-aura::subheading>Full-cycle capabilities from product strategy to production deployment</x-aura::subheading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Service 1 -->
            <x-aura::card class="p-6 space-y-4 hover:border-zinc-900 dark:hover:border-white transition-all border border-zinc-200 dark:border-zinc-800">
                <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                    <x-aura::icon name="sparkles" class="w-5 h-5" />
                </div>
                <div>
                    <x-aura::heading level="3" size="sm">Brand Identity &amp; System</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs" class="mt-1">
                        Logo systems, typography guidelines, design tokens, and marketing asset libraries.
                    </x-aura::text>
                </div>
                <x-aura::badge variant="subtle" size="sm">Strategy &amp; Visuals</x-aura::badge>
            </x-aura::card>

            <!-- Service 2 -->
            <x-aura::card class="p-6 space-y-4 hover:border-zinc-900 dark:hover:border-white transition-all border border-zinc-200 dark:border-zinc-800">
                <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                    <x-aura::icon name="code" class="w-5 h-5" />
                </div>
                <div>
                    <x-aura::heading level="3" size="sm">Full-Stack Web Development</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs" class="mt-1">
                        Laravel 12, Livewire Volt, and Tailwind CSS app engineering with 100% test coverage.
                    </x-aura::text>
                </div>
                <x-aura::badge variant="neutral" size="sm">Production Engineering</x-aura::badge>
            </x-aura::card>

            <!-- Service 3 -->
            <x-aura::card class="p-6 space-y-4 hover:border-zinc-900 dark:hover:border-white transition-all border border-zinc-200 dark:border-zinc-800">
                <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                    <x-aura::icon name="target" class="w-5 h-5" />
                </div>
                <div>
                    <x-aura::heading level="3" size="sm">UI/UX Audit &amp; Optimization</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs" class="mt-1">
                        Conversion rate optimization, accessibility compliance audits, and user testing sessions.
                    </x-aura::text>
                </div>
                <x-aura::badge variant="subtle" size="sm">Performance &amp; Growth</x-aura::badge>
            </x-aura::card>
        </div>
    </div>

    <!-- Project Estimate Calculator Form Card -->
    <x-aura::card title="Request a Project Proposal">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <x-aura::field label="Project Scope Type">
                    <x-aura::select wire:model="service">
                        <option value="web">Web Application &amp; UI Kit</option>
                        <option value="branding">Brand Identity &amp; Logo</option>
                        <option value="audit">UX Optimization Audit</option>
                    </x-aura::select>
                </x-aura::field>

                <x-aura::field label="Estimated Budget Range">
                    <x-aura::select wire:model="budget">
                        <option value="5k">$5,000 – $10,000</option>
                        <option value="10k">$10,000 – $25,000</option>
                        <option value="25k">$25,000+</option>
                    </x-aura::select>
                </x-aura::field>
            </div>

            <div class="space-y-4">
                <x-aura::field label="Required Deliverables">
                    <div class="space-y-2.5 pt-1">
                        <x-aura::checkbox wire:model="hasBranding" label="Design System & Token Specs" />
                        <x-aura::checkbox wire:model="hasDevelopment" label="Laravel & Livewire Implementation" />
                    </div>
                </x-aura::field>
            </div>
        </div>

        <x-slot:footer>
            <div class="flex items-center justify-between w-full">
                <x-aura::badge variant="neutral" size="sm">Proposal within 48 hours</x-aura::badge>
                <x-aura::button variant="primary" size="sm" icon-trailing="arrow-right">Submit Project Inquiry</x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::card>
</div>
