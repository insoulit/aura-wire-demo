<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Navigation and Footer — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="6" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>Design Blocks</x-aura::kicker>

                <x-aura::heading level="1" size="lg">Navigation and Footer</x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- 1. Header Navbar Block -->
    <x-aura::code title="1. Responsive Application Header Navbar">

        <x-slot:preview>

            <x-aura::card>

                <div class="flex items-center justify-between gap-3 sm:gap-4">

                    <!-- Brand & Desktop Navigation -->
                    <div class="flex items-center gap-4 sm:gap-6 min-w-0">

                        <div class="flex items-center gap-2.5 shrink-0">

                            <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs shadow-2xs shrink-0">
                                AW
                            </div>

                            <x-aura::heading level="3" size="sm">Aura Wire</x-aura::heading>

                        </div>

                        <nav class="hidden lg:flex items-center gap-5 text-xs font-medium text-zinc-500 dark:text-zinc-400 shrink-0">
                            <a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
                            <a href="/guest#design-block" class="text-zinc-900 dark:text-white font-semibold">Design Blocks</a>
                            <a href="/guest#full-template" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Templates</a>
                            <a href="/component/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Docs</a>
                        </nav>

                    </div>

                    <!-- Right Controls & Actions (Always Single Line) -->
                    <div class="flex items-center gap-2 sm:gap-2.5 shrink-0 whitespace-nowrap">

                        <div class="hidden xl:block w-36 shrink-0">
                            <x-aura::input placeholder="Search..." icon="search" size="sm" />
                        </div>

                        <x-aura::button variant="subtle" size="sm">
                            Login
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Start
                        </x-aura::button>

                        <x-aura::icon-button icon="menu" variant="ghost" size="sm" label="Toggle navigation menu" />

                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot name="codeSlot">@verbatim<x-aura::card>
    <div class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-6 min-w-0">
            <div class="flex items-center gap-2.5 shrink-0">
                <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs">
                    AW
                </div>
                <x-aura::heading level="3" size="sm">Aura Wire</x-aura::heading>
            </div>
            <nav class="hidden lg:flex items-center gap-5 text-xs font-medium text-zinc-500">
                <a href="#" class="hover:text-zinc-900">Components</a>
                <a href="#" class="hover:text-zinc-900">Design Blocks</a>
                <a href="#" class="hover:text-zinc-900">Docs</a>
            </nav>
        </div>
        <div class="flex items-center gap-2.5 shrink-0 whitespace-nowrap">
            <x-aura::button variant="subtle" size="sm">Login</x-aura::button>
            <x-aura::button variant="primary" size="sm">Start</x-aura::button>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot>

    </x-aura::code>

    <!-- 2. Multi-Column Footer Block -->
    <x-aura::code title="2. Application Multi Column Footer">

        <x-slot:preview>

            <x-aura::card>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                    <!-- Brand Column -->
                    <div class="space-y-3 md:col-span-1">

                        <div class="flex items-center gap-2">

                            <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs shadow-2xs">
                                AW
                            </div>

                            <x-aura::heading level="3" size="sm">Aura Wire</x-aura::heading>

                        </div>

                        <x-aura::text variant="subtle" size="xs">
                            Crafting production ready UI components for the modern Laravel Livewire ecosystem.
                        </x-aura::text>

                        <div class="pt-1">

                            <x-aura::tag variant="success" size="sm">Systems Operational</x-aura::tag>

                        </div>

                    </div>

                    <!-- Column 2: Product -->
                    <div class="space-y-2.5">

                        <x-aura::heading level="4" size="xxs">PRODUCT</x-aura::heading>

                        <ul class="space-y-2 text-xs text-zinc-500 dark:text-zinc-400">
                            <li><a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Component Catalog</a></li>
                            <li><a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Design Blocks</a></li>
                            <li><a href="/guest#full-template" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Starter Kits</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Figma UI Kit</a></li>
                        </ul>

                    </div>

                    <!-- Column 3: Resources -->
                    <div class="space-y-2.5">

                        <x-aura::heading level="4" size="xxs">RESOURCES</x-aura::heading>

                        <ul class="space-y-2 text-xs text-zinc-500 dark:text-zinc-400">
                            <li><a href="/component/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Documentation</a></li>
                            <li><a href="https://github.com" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors">GitHub Repository</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Release Notes</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Roadmap</a></li>
                        </ul>

                    </div>

                    <!-- Column 4: Legal -->
                    <div class="space-y-2.5">

                        <x-aura::heading level="4" size="xxs">LEGAL AND COMPLIANCE</x-aura::heading>

                        <ul class="space-y-2 text-xs text-zinc-500 dark:text-zinc-400">
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Terms of Service</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">MIT License</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Security Disclosures</a></li>
                        </ul>

                    </div>

                </div>

                <!-- Bottom Copyright Bar -->
                <div class="pt-6 border-t border-zinc-100 dark:border-zinc-800 flex flex-col sm:flex-row items-center justify-between text-xs text-zinc-400 gap-3">

                    <span>&copy; {{ date('Y') }} Aura Wire Component Library. All rights reserved.</span>

                    <div class="flex items-center gap-4">
                        <span class="font-mono text-[11px]">Laravel Livewire v3 and Volt</span>
                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot name="codeSlot">@verbatim<x-aura::card>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="space-y-3 md:col-span-1">
            <x-aura::heading level="3" size="sm">Aura Wire</x-aura::heading>
            <x-aura::text variant="subtle" size="xs">UI components for Laravel.</x-aura::text>
            <x-aura::tag variant="success" size="sm">Systems Operational</x-aura::tag>
        </div>
        <div class="space-y-2.5">
            <x-aura::heading level="4" size="xxs">PRODUCT</x-aura::heading>
            <ul class="space-y-2 text-xs text-zinc-500">
                <li><a href="#">Component Catalog</a></li>
                <li><a href="#">Design Blocks</a></li>
            </ul>
        </div>
    </div>
    <div class="pt-6 border-t flex justify-between text-xs text-zinc-400">
        <span>&copy; Aura Wire Component Library.</span>
    </div>
</x-aura::card>@endverbatim</x-slot>

    </x-aura::code>

</x-aura::stack>
