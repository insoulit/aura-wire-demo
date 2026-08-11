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

<div class="w-full max-w-5xl space-y-12 py-6">
    <!-- Breadcrumb & Status Top Bar -->
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div class="flex items-center gap-3">
            <x-aura::button href="/guest#full-template" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>
            <span class="text-zinc-300 dark:text-zinc-700">/</span>
            <x-aura::badge variant="neutral" size="sm">Portfolio UI Kit</x-aura::badge>
        </div>

        <x-aura::badge variant="neutral" size="sm">Available for Q3 Projects</x-aura::badge>
    </div>

    <!-- Creator Profile Hero -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 rounded-3xl border border-zinc-200/80 dark:border-zinc-800 shadow-sm">
        <div class="space-y-4 max-w-2xl">
            <div class="flex items-center gap-3">
                <x-aura::avatar initials="AK" size="lg" status="online" />
                <div>
                    <x-aura::heading level="1" size="lg" class="text-zinc-900 dark:text-white">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs" class="text-zinc-600 dark:text-zinc-400">Staff Product Designer &amp; Frontend Engineer</x-aura::text>
                </div>
            </div>

            <x-aura::subheading class="text-zinc-600 dark:text-zinc-400 text-base leading-relaxed">
                Specializing in high-contrast design systems, developer tools, and reactive Laravel Livewire interfaces.
            </x-aura::subheading>

            <!-- Skill Tags -->
            <div class="flex flex-wrap gap-2 pt-2">
                <x-aura::tag variant="primary">Laravel 12</x-aura::tag>
                <x-aura::tag variant="default">Livewire Volt</x-aura::tag>
                <x-aura::tag variant="default">Tailwind CSS v4</x-aura::tag>
                <x-aura::tag variant="default">Alpine.js</x-aura::tag>
            </div>

            <div class="pt-4 flex flex-wrap gap-3">
                <x-aura::button variant="primary" size="md" icon-trailing="arrow-right">Book Project Call</x-aura::button>
                <x-aura::button variant="outline" size="md" icon="download">Download CV</x-aura::button>
            </div>
        </div>
    </div>

    <!-- Case Studies / Selected Work Grid -->
    <div class="space-y-6">
        <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-3">
            <div>
                <x-aura::heading level="2" size="md">Selected Works &amp; Case Studies</x-aura::heading>
                <x-aura::subheading>Recent web applications, component suites, and design systems</x-aura::subheading>
            </div>
            <x-aura::badge variant="subtle">3 Case Studies</x-aura::badge>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Project 1 -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group border border-zinc-200 dark:border-zinc-800">
                <div class="space-y-4">
                    <div class="aspect-16/9 rounded-2xl bg-zinc-900 p-6 flex items-center justify-center text-white border border-zinc-800">
                        <span class="text-5xl font-black group-hover:scale-110 transition-transform duration-300">⚡ Aura</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <x-aura::badge variant="neutral" size="sm">UI Package</x-aura::badge>
                            <x-aura::text variant="subtle" size="xs">2026</x-aura::text>
                        </div>
                        <x-aura::heading level="3" size="sm">Aura Wire Component Suite</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1">
                            High-contrast Blade component suite featuring 30+ interactive elements for Laravel.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-4 flex items-center justify-between border-t border-zinc-100 dark:border-zinc-800">
                    <x-aura::text variant="accent" size="xs" weight="semibold" class="flex items-center gap-1">
                        <span>Read Case Study</span>
                        <x-aura::icon name="arrow-right" class="w-3.5 h-3.5" />
                    </x-aura::text>
                    <x-aura::badge variant="neutral" size="sm">Open Source</x-aura::badge>
                </div>
            </x-aura::card>

            <!-- Project 2 -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group border border-zinc-200 dark:border-zinc-800">
                <div class="space-y-4">
                    <div class="aspect-16/9 rounded-2xl bg-zinc-900 p-6 flex items-center justify-center text-white border border-zinc-800">
                        <span class="text-5xl font-black group-hover:scale-110 transition-transform duration-300">📊 Pulse</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <x-aura::badge variant="subtle" size="sm">Analytics App</x-aura::badge>
                            <x-aura::text variant="subtle" size="xs">2025</x-aura::text>
                        </div>
                        <x-aura::heading level="3" size="sm">Pulse Metrics Dashboard</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1">
                            Realtime event tracking dashboard handling 50k events/sec with dark mode UI tokens.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-4 flex items-center justify-between border-t border-zinc-100 dark:border-zinc-800">
                    <x-aura::text variant="accent" size="xs" weight="semibold" class="flex items-center gap-1">
                        <span>Read Case Study</span>
                        <x-aura::icon name="arrow-right" class="w-3.5 h-3.5" />
                    </x-aura::text>
                    <x-aura::badge variant="neutral" size="sm">SaaS Product</x-aura::badge>
                </div>
            </x-aura::card>
        </div>
    </div>

    <!-- Contact & Booking Section -->
    <x-aura::card title="Let's Build Something Great Together">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <x-aura::field label="Your Name">
                    <x-aura::input wire:model="contactName" placeholder="Jane Doe" icon="user" />
                </x-aura::field>

                <x-aura::field label="Email Address">
                    <x-aura::input wire:model="contactEmail" type="email" placeholder="jane@company.com" icon="mail" />
                </x-aura::field>
            </div>

            <div class="space-y-4">
                <x-aura::field label="Project Details">
                    <x-aura::textarea wire:model="contactMessage" placeholder="Tell me about your project scope, timeline, and goals..." rows="4" />
                </x-aura::field>
            </div>
        </div>

        <x-slot:footer>
            <div class="flex items-center justify-between w-full">
                <x-aura::badge variant="neutral" size="sm">⚡ Fast 24h Response</x-aura::badge>
                <x-aura::button variant="primary" size="sm" icon-trailing="arrow-right">Send Project Inquiry</x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::card>
</div>
