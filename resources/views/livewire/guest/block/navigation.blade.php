<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Navigation and Footer — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6" class="py-6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Navigation and Footer
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- 1. Header Navbar Block -->
    <x-aura::code title="1. Responsive Application Header Navbar">

        <x-slot:preview>

            <x-aura::card>

                <x-aura::flex align="center" justify="between" gap="4">

                    <!-- Brand & Desktop Navigation -->
                    <x-aura::flex align="center" gap="6" class="min-w-0">

                        <x-aura::flex align="center" gap="2.5" class="shrink-0">

                            <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs shadow-2xs shrink-0">
                                AW
                            </div>

                            <x-aura::heading level="3" size="sm">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                        <nav class="hidden lg:flex items-center gap-5 text-sm font-medium text-zinc-500 dark:text-zinc-400 shrink-0">
                            <a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
                            <a href="/guest#design-block" class="text-zinc-900 dark:text-white font-semibold">Design Blocks</a>
                            <a href="/guest#full-template" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Templates</a>
                            <a href="/components/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Docs</a>
                        </nav>

                    </x-aura::flex>

                    <!-- Right Controls & Actions -->
                    <x-aura::flex align="center" justify="end" gap="2.5" class="shrink-0 whitespace-nowrap">

                        <div class="hidden xl:block w-36 shrink-0">
                            <x-aura::input placeholder="Search..." icon="search" size="sm" />
                        </div>

                        <x-aura::button variant="secondary" size="sm">
                            Login
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Start
                        </x-aura::button>

                        <x-aura::icon-button icon="menu" variant="ghost" size="sm" label="Toggle navigation menu" />

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>
                    <x-aura::flex align="center" justify="between" gap="4">
                        <x-aura::flex align="center" gap="6">
                            <div class="flex items-center gap-2.5">
                                <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs">
                                    AW
                                </div>
                                <x-aura::heading level="3" size="sm">
                                    Aura Wire
                                </x-aura::heading>
                            </div>
                            <nav class="hidden lg:flex items-center gap-5 text-sm text-zinc-500">
                                <a href="#">Components</a>
                                <a href="#">Design Blocks</a>
                                <a href="#">Docs</a>
                            </nav>
                        </x-aura::flex>
                        <x-aura::flex align="center" gap="2">
                            <x-aura::button variant="secondary" size="sm">
                                Login
                            </x-aura::button>
                            <x-aura::button variant="primary" size="sm">
                                Start
                            </x-aura::button>
                        </x-aura::flex>
                    </x-aura::flex>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Multi Column Footer Block -->
    <x-aura::code title="2. Application Multi Column Footer">

        <x-slot:preview>

            <x-aura::card>

                <x-aura::grid cols="1" md="4" gap="8">

                    <!-- Brand Column -->
                    <x-aura::flex direction="col" gap="3">

                        <x-aura::flex align="center" gap="2">

                            <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs shadow-2xs">
                                AW
                            </div>

                            <x-aura::heading level="3" size="sm">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                        <x-aura::text variant="subtle" size="sm">
                            Crafting production ready UI components for the modern Laravel Livewire ecosystem.
                        </x-aura::text>

                        <div class="pt-1">

                            <x-aura::tag variant="neutral" size="sm">
                                Systems Operational
                            </x-aura::tag>

                        </div>

                    </x-aura::flex>

                    <!-- Column 2: Product -->
                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::heading level="4" size="2xs">
                            PRODUCT
                        </x-aura::heading>

                        <ul class="space-y-2 text-sm text-zinc-500 dark:text-zinc-400">
                            <li><a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Component Catalog</a></li>
                            <li><a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Design Blocks</a></li>
                            <li><a href="/guest#full-template" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Starter Kits</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Figma UI Kit</a></li>
                        </ul>

                    </x-aura::flex>

                    <!-- Column 3: Resources -->
                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::heading level="4" size="2xs">
                            RESOURCES
                        </x-aura::heading>

                        <ul class="space-y-2 text-sm text-zinc-500 dark:text-zinc-400">
                            <li><a href="/components/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Documentation</a></li>
                            <li><a href="https://github.com" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors">GitHub Repository</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Release Notes</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Roadmap</a></li>
                        </ul>

                    </x-aura::flex>

                    <!-- Column 4: Legal & Newsletter -->
                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::heading level="4" size="2xs">
                            UPDATES
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Subscribe for early component releases and updates.
                        </x-aura::text>

                        <x-aura::flex align="center" gap="2" class="pt-1">

                            <div class="flex-1">
                                <x-aura::input placeholder="Email address..." size="sm" />
                            </div>

                            <x-aura::button variant="primary" size="sm">
                                Join
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::grid>

                <!-- Footer Copyright Bottom Strip -->
                <x-aura::flex direction="col" sm="row" align="center" justify="between" gap="3" class="pt-4 border-t border-zinc-100 dark:border-zinc-800/80 mt-6 text-sm text-zinc-500 dark:text-zinc-400">

                    <x-aura::text variant="subtle" size="sm">
                        &copy; {{ date('Y') }} Aura Wire UI. All rights reserved.
                    </x-aura::text>

                    <x-aura::flex align="center" gap="4">

                        <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Privacy Policy</a>

                        <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Terms of Service</a>

                        <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Security</a>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>
                    <x-aura::grid cols="1" md="4" gap="8">
                        <x-aura::flex direction="col" gap="3">
                            <x-aura::heading level="3" size="sm">
                                Aura Wire
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Crafting UI components for modern Laravel Livewire.
                            </x-aura::text>
                        </x-aura::flex>
                        <!-- Other columns -->
                    </x-aura::grid>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
