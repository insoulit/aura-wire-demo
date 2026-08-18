<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Navbar - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Navbar Page Intro -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Navbar</x-aura::heading>
            <x-aura::subheading size="md">
                Lightweight, sticky application navigation bars. Supports brand logos, inline links, quick action triggers, search inputs, and user controls.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::navbar>
    <x-slot:brandSlot>Logo</x-slot:brandSlot>
    <x-slot:navigation>Links</x-slot:navigation>
    <x-slot:actions>Actions</x-slot:actions>
</x-aura::navbar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Default Workspace Application Navbar -->
    <x-aura::code  title="1. Default Workspace Application Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100/60 dark:bg-zinc-950 p-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::navbar variant="bordered">
                        <x-slot name="brandSlot">
                            <div class="flex items-center gap-2.5">
                                <div class="p-1.5 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 shadow-xs flex items-center justify-center">
                                    <x-aura::icon name="sparkles" size="xs" />
                                </div>
                                <span class="font-bold text-zinc-900 dark:text-white text-sm tracking-tight">Aura Workspace</span>
                            </div>
                        </x-slot>

                        <x-slot name="navigation">
                            <x-aura::header.item href="#" active>Overview</x-aura::header.item>
                            <x-aura::header.item href="#">Projects</x-aura::header.item>
                            <x-aura::header.item href="#">Analytics</x-aura::header.item>
                            <x-aura::header.item href="#">Settings</x-aura::header.item>
                        </x-slot>

                        <x-slot name="actions">
                            <div class="flex items-center gap-2">
                                <div class="hidden md:flex items-center gap-2">
                                    <div class="w-32 sm:w-44">
                                        <x-aura::input placeholder="Search... (⌘K)" icon="search" size="sm" />
                                    </div>
                                    <x-aura::icon-button icon="bell" variant="ghost" size="sm" label="Notifications" />
                                </div>
                                <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="sm" />
                            </div>
                        </x-slot>
                    </x-aura::navbar>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::navbar variant="bordered">
    <x-slot name="brandSlot">
        <div class="flex items-center gap-2.5">
            <x-aura::icon name="sparkles" size="xs" />
            <span class="font-bold text-sm">Aura Workspace</span>
        </div>
    </x-slot>

    <x-slot name="navigation">
        <x-aura::header.item href="#" active>Overview</x-aura::header.item>
        <x-aura::header.item href="#">Projects</x-aura::header.item>
        <x-aura::header.item href="#">Analytics</x-aura::header.item>
    </x-slot>

    <x-slot name="actions">
        <x-aura::input placeholder="Search... (⌘K)" icon="search" size="sm" />
        <x-aura::avatar src="..." size="sm" />
    </x-slot>
</x-aura::navbar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Dark Theme Developer Platform Navbar -->
    <x-aura::code  title="2. Dark Theme Developer Platform Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-800 bg-zinc-950 p-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::navbar variant="dark">
                        <x-slot name="brandSlot">
                            <div class="flex items-center gap-2.5">
                                <span class="font-black text-white tracking-wider text-sm font-mono">&lt;AURA/&gt;</span>
                                <span class="hidden md:inline-flex">
                                    <x-aura::badge variant="positive" size="xs">SYSTEM OPERATIONAL</x-aura::badge>
                                </span>
                            </div>
                        </x-slot>

                        <x-slot name="navigation">
                            <x-aura::header.item href="#" active variant="dark">Documentation</x-aura::header.item>
                            <x-aura::header.item href="#" variant="dark">API Reference</x-aura::header.item>
                            <x-aura::header.item href="#" variant="dark">Status</x-aura::header.item>
                        </x-slot>

                        <x-slot name="actions">
                            <x-aura::button variant="secondary" size="sm">
                                Console Login
                            </x-aura::button>
                        </x-slot>
                    </x-aura::navbar>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::navbar variant="dark">
    <x-slot name="brandSlot">
        <span class="font-mono font-black text-white">&lt;AURA/&gt;</span>
        <x-aura::badge variant="positive" size="xs">OPERATIONAL</x-aura::badge>
    </x-slot>

    <x-slot name="navigation">
        <x-aura::header.item href="#" active variant="dark">Documentation</x-aura::header.item>
        <x-aura::header.item href="#" variant="dark">API Reference</x-aura::header.item>
    </x-slot>

    <x-slot name="actions">
        <x-aura::button variant="secondary" size="sm">Console Login</x-aura::button>
    </x-slot>
</x-aura::navbar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. E Commerce Storefront Top Navbar -->
    <x-aura::code  title="3. E Commerce Storefront Top Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::navbar>
                        <x-slot name="brandSlot">
                            <span class="font-extrabold text-zinc-900 dark:text-white text-base tracking-widest uppercase font-sans">AURA STORE</span>
                        </x-slot>

                        <x-slot name="navigation">
                            <x-aura::header.item href="#" active>New Arrivals</x-aura::header.item>
                            <x-aura::header.item href="#">Men</x-aura::header.item>
                            <x-aura::header.item href="#">Women</x-aura::header.item>
                            <x-aura::header.item href="#">Summer Sale</x-aura::header.item>
                        </x-slot>

                        <x-slot name="actions">
                            <div class="flex items-center gap-2">
                                <span class="hidden md:inline-flex">
                                    <x-aura::icon-button icon="heart" variant="ghost" size="sm" label="Wishlist" />
                                </span>
                                <x-aura::button variant="primary" size="sm" icon="shopping-bag">
                                    Cart (3)
                                </x-aura::button>
                            </div>
                        </x-slot>
                    </x-aura::navbar>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::navbar>
    <x-slot name="brandSlot">
        <span class="font-extrabold tracking-widest uppercase">AURA STORE</span>
    </x-slot>

    <x-slot name="navigation">
        <x-aura::header.item href="#" active>New Arrivals</x-aura::header.item>
        <x-aura::header.item href="#">Men</x-aura::header.item>
    </x-slot>

    <x-slot name="actions">
        <x-aura::button variant="primary" size="sm" icon="shopping-bag">Cart (3)</x-aura::button>
    </x-slot>
</x-aura::navbar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Minimal Product Landing Page Navbar -->
    <x-aura::code  title="4. Minimal Landing Page Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-950 p-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::navbar variant="minimal">
                        <x-slot name="brandSlot">
                            <span class="font-bold text-zinc-900 dark:text-white text-sm">acme.inc</span>
                        </x-slot>

                        <x-slot name="navigation">
                            <x-aura::header.item href="#">Features</x-aura::header.item>
                            <x-aura::header.item href="#">Customers</x-aura::header.item>
                            <x-aura::header.item href="#">Pricing</x-aura::header.item>
                        </x-slot>

                        <x-slot name="actions">
                            <div class="flex items-center gap-2">
                                <span class="hidden md:inline-flex">
                                    <x-aura::button variant="ghost" size="sm">Sign In</x-aura::button>
                                </span>
                                <x-aura::button variant="primary" size="sm">Get Started</x-aura::button>
                            </div>
                        </x-slot>
                    </x-aura::navbar>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::navbar variant="minimal">
    <x-slot name="brandSlot">acme.inc</x-slot>

    <x-slot name="navigation">
        <x-aura::header.item href="#">Features</x-aura::header.item>
        <x-aura::header.item href="#">Pricing</x-aura::header.item>
    </x-slot>

    <x-slot name="actions">
        <x-aura::button variant="ghost" size="sm">Sign In</x-aura::button>
        <x-aura::button variant="primary" size="sm">Get Started</x-aura::button>
    </x-slot>
</x-aura::navbar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
