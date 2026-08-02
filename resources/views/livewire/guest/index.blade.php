<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.guest');
title('Aura Wire — Modern UI Component Suite for Laravel & Livewire');

state([
    'email' => '',
    'role' => 'developer',
    'plan' => 'pro',
    'notification' => true,
]);

?>

<div class="w-full max-w-6xl space-y-16 py-10">
    <!-- Hero Section -->
    <div class="relative text-center space-y-6 max-w-4xl mx-auto pt-6">
        <!-- Ambient Glowing Background Effect -->
        <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-96 h-96 bg-gradient-to-tr from-indigo-500/20 via-purple-500/15 to-pink-500/10 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="inline-flex items-center gap-2">
            <x-aura::badge variant="positive" size="md">✨ Introducing Aura Wire v1.0</x-aura::badge>
            <x-aura::badge variant="subtle" size="md">Laravel 11 &amp; 12 Ready</x-aura::badge>
        </div>

        <x-aura::heading level="1" size="display-lg" class="tracking-tight">
            Build Breathtaking Apps with <br class="hidden sm:block" />
            <span class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 dark:from-indigo-400 dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                Aura Wire Components
            </span>
        </x-aura::heading>

        <x-aura::subheading class="max-w-2xl mx-auto text-lg">
            A high-contrast, razor-sharp UI component library designed for Laravel Blade &amp; Livewire. Beautiful defaults, zero config, and effortless customization.
        </x-aura::subheading>

        <!-- CTA Action Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3 pt-4">
            <x-aura::button variant="primary" size="lg" href="/components">
                Explore Component Library &rarr;
            </x-aura::button>
            <x-aura::button variant="outline" size="lg" href="/components/installation">
                <x-slot name="icon">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </x-slot>
                Installation Guide
            </x-aura::button>
            <x-aura::button variant="secondary" size="lg" href="/admin">
                Admin Console &rarr;
            </x-aura::button>
        </div>

        <!-- Quick Install Terminal Snippet -->
        <div class="pt-4 max-w-md mx-auto">
            <div class="flex items-center justify-between px-4 py-2.5 rounded-full bg-zinc-900 text-zinc-200 dark:bg-zinc-900 border border-zinc-800 shadow-xl font-mono text-xs">
                <span class="flex items-center gap-2">
                    <span class="text-indigo-400">$</span>
                    <span>composer require insoulit/aura-wire</span>
                </span>
                <x-aura::badge variant="accent" size="sm" class="cursor-pointer" onclick="navigator.clipboard.writeText('composer require insoulit/aura-wire'); alert('Copied to clipboard!');">Copy</x-aura::badge>
            </div>
        </div>
    </div>

    <!-- Feature Metrics Stats Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-4">
        <x-aura::card class="text-center p-5">
            <x-aura::heading level="3" size="display-sm" class="text-indigo-600 dark:text-indigo-400 font-extrabold">30+</x-aura::heading>
            <x-aura::text variant="subtle" size="xs" class="mt-1 font-semibold uppercase tracking-wider">Blade Components</x-aura::text>
        </x-aura::card>

        <x-aura::card class="text-center p-5">
            <x-aura::heading level="3" size="display-sm" class="text-indigo-600 dark:text-indigo-400 font-extrabold">100%</x-aura::heading>
            <x-aura::text variant="subtle" size="xs" class="mt-1 font-semibold uppercase tracking-wider">Tailwind CSS</x-aura::text>
        </x-aura::card>

        <x-aura::card class="text-center p-5">
            <x-aura::heading level="3" size="display-sm" class="text-indigo-600 dark:text-indigo-400 font-extrabold">v11 &amp; 12</x-aura::heading>
            <x-aura::text variant="subtle" size="xs" class="mt-1 font-semibold uppercase tracking-wider">Laravel Support</x-aura::text>
        </x-aura::card>

        <x-aura::card class="text-center p-5">
            <x-aura::heading level="3" size="display-sm" class="text-indigo-600 dark:text-indigo-400 font-extrabold">Dual</x-aura::heading>
            <x-aura::text variant="subtle" size="xs" class="mt-1 font-semibold uppercase tracking-wider">Tag Syntax</x-aura::text>
        </x-aura::card>
    </div>

    <!-- Live Interactive Showcase -->
    <div class="space-y-6">
        <div class="text-center space-y-2 max-w-2xl mx-auto">
            <x-aura::kicker class="text-indigo-600 dark:text-indigo-400">⚡ LIVE PREVIEW</x-aura::kicker>
            <x-aura::heading level="2" size="lg">Experience Aura Wire Components in Action</x-aura::heading>
            <x-aura::subheading>Every component is engineered with accessible HTML semantics and responsive dark mode defaults.</x-aura::subheading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Form Controls Demo Card -->
            <x-aura::card title="Interactive Form Controls">
                <div class="space-y-4">
                    <x-aura::field label="Full Name" description="Your display name across the platform.">
                        <x-aura::input placeholder="Alex Kovacs" />
                    </x-aura::field>

                    <x-aura::field label="Subscription Role">
                        <x-aura::select wire:model="role">
                            <option value="developer">Developer License</option>
                            <option value="team">Team Plan</option>
                            <option value="enterprise">Enterprise</option>
                        </x-aura::select>
                    </x-aura::field>

                    <div class="pt-2 flex items-center justify-between border-t border-zinc-100 dark:border-zinc-800">
                        <div>
                            <div class="text-sm font-semibold text-zinc-900 dark:text-white">Email Digest Updates</div>
                            <x-aura::text variant="subtle" size="xs">Receive weekly feature releases</x-aura::text>
                        </div>
                        <x-aura::switch wire:model="notification" />
                    </div>
                </div>
                <x-slot:footer>
                    <div class="flex items-center justify-between w-full">
                        <x-aura::badge variant="positive" size="sm">Form Ready</x-aura::badge>
                        <x-aura::button variant="primary" size="sm">Save Preferences</x-aura::button>
                    </div>
                </x-slot:footer>
            </x-aura::card>

            <!-- Buttons, Badges & UI Tokens Card -->
            <x-aura::card title="UI Tokens &amp; Action States">
                <div class="space-y-6">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">Status Badges</div>
                        <div class="flex flex-wrap gap-2">
                            <x-aura::badge variant="neutral" size="sm">Neutral</x-aura::badge>
                            <x-aura::badge variant="positive" size="sm">Positive</x-aura::badge>
                            <x-aura::badge variant="info" size="sm">Info</x-aura::badge>
                            <x-aura::badge variant="warning" size="sm">Warning</x-aura::badge>
                            <x-aura::badge variant="negative" size="sm">Danger</x-aura::badge>
                        </div>
                    </div>

                    <div>
                        <div class="text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">Button Variants</div>
                        <div class="flex flex-wrap gap-2">
                            <x-aura::button variant="primary" size="sm">Primary</x-aura::button>
                            <x-aura::button variant="secondary" size="sm">Secondary</x-aura::button>
                            <x-aura::button variant="outline" size="sm">Outline</x-aura::button>
                            <x-aura::button variant="ghost" size="sm">Ghost</x-aura::button>
                            <x-aura::button variant="danger" size="sm">Danger</x-aura::button>
                        </div>
                    </div>

                    <div>
                        <div class="text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">Pill Button Groups</div>
                        <x-aura::button.group>
                            <x-aura::button variant="secondary" size="sm">Daily</x-aura::button>
                            <x-aura::button variant="primary" size="sm">Weekly</x-aura::button>
                            <x-aura::button variant="secondary" size="sm">Monthly</x-aura::button>
                        </x-aura::button.group>
                    </div>
                </div>
            </x-aura::card>
        </div>
    </div>

    <!-- Final Call to Action Section -->
    <x-aura::card class="bg-gradient-to-tr from-indigo-900 via-zinc-900 to-zinc-950 text-white border-zinc-800 p-8 text-center space-y-6">
        <div class="max-w-2xl mx-auto space-y-3">
            <x-aura::badge variant="accent" size="md">Ready for Production</x-aura::badge>
            <x-aura::heading level="2" size="xl" class="text-white">Start Building with Aura Wire Today</x-aura::heading>
            <x-aura::text variant="subtle" size="md" class="text-zinc-300">
                Install the package via Composer and start crafting production-ready Livewire components in minutes.
            </x-aura::text>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <x-aura::button variant="primary" size="lg" href="/components/installation">
                Get Started with Installation &rarr;
            </x-aura::button>
            <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-semibold text-zinc-200 bg-zinc-800/80 hover:bg-zinc-700 border border-zinc-700 transition-all">
                <svg class="w-4 h-4 text-indigo-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                <span>View on Packagist</span>
            </a>
        </div>
    </x-aura::card>
</div>
