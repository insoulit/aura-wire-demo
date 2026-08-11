<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Footer — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Footer</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" class="shrink-0 gap-1.5">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 shrink-0" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- 1. Header Navbar Block -->
    <x-aura::code class="w-full" title="1. Responsive Application Header Navbar">
        <x-slot:preview>
            <x-aura::card class="p-3.5 sm:p-4 w-full border border-zinc-200 dark:border-zinc-800">
                <div class="flex items-center justify-between gap-3 sm:gap-4">
                    <!-- Brand & Desktop Navigation -->
                    <div class="flex items-center gap-4 sm:gap-6 min-w-0">
                        <div class="flex items-center gap-2.5 shrink-0">
                            <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs shadow-2xs shrink-0">
                                AW
                            </div>
                            <x-aura::heading level="3" size="sm" class="tracking-tight whitespace-nowrap">Aura Wire</x-aura::heading>
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
                        <x-aura::button variant="subtle" size="sm" class="hidden sm:inline-flex shrink-0">Sign In</x-aura::button>
                        <x-aura::button variant="primary" size="sm" class="shrink-0">Get Started</x-aura::button>
                        <button type="button" class="lg:hidden p-1.5 rounded-lg text-zinc-400 hover:text-zinc-600 dark:hover:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors cursor-pointer shrink-0" aria-label="Toggle navigation menu">
                            <x-aura::icon name="menu" class="w-5 h-5" />
                        </button>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-4 w-full border border-zinc-200 dark:border-zinc-800"&gt;
    &lt;div class="flex items-center justify-between gap-4"&gt;
        &lt;div class="flex items-center gap-6 min-w-0"&gt;
            &lt;div class="flex items-center gap-2.5 shrink-0"&gt;
                &lt;div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs"&gt;
                    AW
                &lt;/div&gt;
                &lt;x-aura::heading level="3" size="sm"&gt;Aura Wire&lt;/x-aura::heading&gt;
            &lt;/div&gt;
            &lt;nav class="hidden lg:flex items-center gap-5 text-xs font-medium text-zinc-500"&gt;
                &lt;a href="#" class="hover:text-zinc-900"&gt;Components&lt;/a&gt;
                &lt;a href="#" class="hover:text-zinc-900"&gt;Design Blocks&lt;/a&gt;
                &lt;a href="#" class="hover:text-zinc-900"&gt;Docs&lt;/a&gt;
            &lt;/nav&gt;
        &lt;/div&gt;
        &lt;div class="flex items-center gap-2.5 shrink-0 whitespace-nowrap"&gt;
            &lt;x-aura::button variant="subtle" size="sm" class="hidden sm:inline-flex"&gt;Sign In&lt;/x-aura::button&gt;
            &lt;x-aura::button variant="primary" size="sm"&gt;Get Started&lt;/x-aura::button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>

    <!-- 2. Multi-Column Footer Block -->
    <x-aura::code class="w-full" title="2. Application Multi-Column Footer">
        <x-slot:preview>
            <x-aura::card class="p-8 w-full space-y-8 border border-zinc-200 dark:border-zinc-800">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Brand Column -->
                    <div class="space-y-3 md:col-span-1">
                        <div class="flex items-center gap-2">
                            <div class="h-8 w-8 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 flex items-center justify-center font-bold font-mono text-xs shadow-2xs">
                                AW
                            </div>
                            <x-aura::heading level="3" size="sm">Aura Wire</x-aura::heading>
                        </div>
                        <x-aura::text variant="subtle" size="xs" class="leading-relaxed">
                            Crafting production-ready UI components for the modern Laravel Livewire ecosystem.
                        </x-aura::text>
                        <div class="pt-1">
                            <x-aura::tag variant="success" size="sm">Systems Operational</x-aura::tag>
                        </div>
                    </div>

                    <!-- Column 2: Product -->
                    <div class="space-y-2.5">
                        <x-aura::heading level="4" size="xxs" class="text-zinc-400">PRODUCT</x-aura::heading>
                        <ul class="space-y-2 text-xs text-zinc-500 dark:text-zinc-400">
                            <li><a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Component Catalog</a></li>
                            <li><a href="/guest#design-block" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Design Blocks</a></li>
                            <li><a href="/guest#full-template" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Starter Kits</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Figma UI Kit</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Resources -->
                    <div class="space-y-2.5">
                        <x-aura::heading level="4" size="xxs" class="text-zinc-400">RESOURCES</x-aura::heading>
                        <ul class="space-y-2 text-xs text-zinc-500 dark:text-zinc-400">
                            <li><a href="/component/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Documentation</a></li>
                            <li><a href="https://github.com" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors">GitHub Repository</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Release Notes</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Roadmap</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Legal -->
                    <div class="space-y-2.5">
                        <x-aura::heading level="4" size="xxs" class="text-zinc-400">LEGAL &amp; COMPLIANCE</x-aura::heading>
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
                        <span class="font-mono text-[11px]">Laravel Livewire v3 &amp; Volt</span>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-8 w-full space-y-8"&gt;
    &lt;div class="grid grid-cols-1 md:grid-cols-4 gap-8"&gt;
        &lt;div class="space-y-3 md:col-span-1"&gt;
            &lt;x-aura::heading level="3" size="sm"&gt;Aura Wire&lt;/x-aura::heading&gt;
            &lt;x-aura::text variant="subtle" size="xs"&gt;UI components for Laravel.&lt;/x-aura::text&gt;
            &lt;x-aura::tag variant="success" size="sm"&gt;Systems Operational&lt;/x-aura::tag&gt;
        &lt;/div&gt;
        &lt;div class="space-y-2.5"&gt;
            &lt;x-aura::heading level="4" size="xxs" class="text-zinc-400"&gt;PRODUCT&lt;/x-aura::heading&gt;
            &lt;ul class="space-y-2 text-xs text-zinc-500"&gt;
                &lt;li&gt;&lt;a href="#"&gt;Component Catalog&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Design Blocks&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="pt-6 border-t flex justify-between text-xs text-zinc-400"&gt;
        &lt;span&gt;&amp;copy; Aura Wire Component Library.&lt;/span&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>
