<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Header - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-5xl mx-auto space-y-12">
    <!-- Header Page Intro -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Header</x-aura::heading>
            <x-aura::subheading size="md">
                Flexible, responsive application headers and navigation bars. Supports brand logos, search bars, navigation items, notifications, and user action triggers.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::header>
    <x-slot:brand>Logo</x-slot:brand>
    <x-slot:actions>Actions</x-slot:actions>
</x-aura::header>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. SaaS Workspace Application Header -->
    <x-aura::code  title="1. SaaS Workspace Application Header">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100/60 dark:bg-zinc-950 p-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::header :sticky="false" variant="bordered">
                        <x-slot name="brand">
                            <div class="flex items-center gap-2.5">
                                <div class="p-1.5 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 shadow-xs flex items-center justify-center">
                                    <x-aura::icon name="sparkles" size="xs" />
                                </div>
                                <span class="font-bold text-zinc-900 dark:text-white text-sm tracking-tight">Aura Cloud</span>
                            </div>
                        </x-slot>

                        <x-aura::header.item href="#" active>Overview</x-aura::header.item>
                        <x-aura::header.item href="#">Deployments</x-aura::header.item>
                        <x-aura::header.item href="#">Analytics</x-aura::header.item>
                        <x-aura::header.item href="#">Settings</x-aura::header.item>

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
                    </x-aura::header>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::header variant="bordered">
    <x-slot name="brand">
        <div class="flex items-center gap-2.5">
            <x-aura::icon name="sparkles" size="xs" />
            <span class="font-bold text-sm">Aura Cloud</span>
        </div>
    </x-slot>

    <x-aura::header.item href="#" active>Overview</x-aura::header.item>
    <x-aura::header.item href="#">Deployments</x-aura::header.item>
    <x-aura::header.item href="#">Analytics</x-aura::header.item>

    <x-slot name="actions">
        <x-aura::input placeholder="Search... (⌘K)" icon="search" size="sm" />
        <x-aura::icon-button icon="bell" variant="ghost" size="sm" />
        <x-aura::avatar src="..." size="sm" />
    </x-slot>
</x-aura::header>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. E-Commerce Store Header -->
    <x-aura::code  title="2. E-Commerce Storefront Header">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::header :sticky="false" variant="default">
                        <x-slot name="brand">
                            <span class="font-extrabold text-zinc-900 dark:text-white text-base tracking-widest uppercase font-sans">AURA STORE</span>
                        </x-slot>

                        <x-aura::header.item href="#" active>New Arrivals</x-aura::header.item>
                        <x-aura::header.item href="#">Men</x-aura::header.item>
                        <x-aura::header.item href="#">Women</x-aura::header.item>
                        <x-aura::header.item href="#">Summer Sale</x-aura::header.item>

                        <x-slot name="actions">
                            <span class="hidden md:inline-flex">
                                <x-aura::icon-button icon="heart" variant="ghost" size="sm" label="Wishlist" />
                            </span>
                            <x-aura::button variant="primary" size="sm" icon="shopping-bag">
                                Cart (3)
                            </x-aura::button>
                        </x-slot>
                    </x-aura::header>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::header variant="default">
    <x-slot name="brand">
        <span class="font-extrabold tracking-widest uppercase">AURA STORE</span>
    </x-slot>

    <x-aura::header.item href="#" active>New Arrivals</x-aura::header.item>
    <x-aura::header.item href="#">Men</x-aura::header.item>
    <x-aura::header.item href="#">Women</x-aura::header.item>

    <x-slot name="actions">
        <x-aura::icon-button icon="heart" variant="ghost" size="sm" />
        <x-aura::button variant="primary" size="sm" icon="shopping-bag">Cart (3)</x-aura::button>
    </x-slot>
</x-aura::header>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Minimal Marketing Header -->
    <x-aura::code  title="3. Minimal Landing Page Header">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-950 p-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::header :sticky="false" variant="minimal">
                        <x-slot name="brand">
                            <span class="font-bold text-zinc-900 dark:text-white text-sm">acme.inc</span>
                        </x-slot>

                        <x-aura::header.item href="#">Features</x-aura::header.item>
                        <x-aura::header.item href="#">Customers</x-aura::header.item>
                        <x-aura::header.item href="#">Pricing</x-aura::header.item>

                        <x-slot name="actions">
                            <span class="hidden md:inline-flex">
                                <x-aura::button variant="ghost" size="sm">Sign In</x-aura::button>
                            </span>
                            <x-aura::button variant="primary" size="sm">Get Started</x-aura::button>
                        </x-slot>
                    </x-aura::header>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::header variant="minimal">
    <x-slot name="brand">acme.inc</x-slot>

    <x-aura::header.item href="#">Features</x-aura::header.item>
    <x-aura::header.item href="#">Pricing</x-aura::header.item>

    <x-slot name="actions">
        <x-aura::button variant="ghost" size="sm">Sign In</x-aura::button>
        <x-aura::button variant="primary" size="sm">Get Started</x-aura::button>
    </x-slot>
</x-aura::header>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Custom Mobile Navigation Sheet Drawer -->
    <x-aura::code  title="4. Custom Mobile Navigation Sheet Drawer">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100/60 dark:bg-zinc-950 p-3 space-y-3">
                <div class="rounded-xl overflow-hidden shadow-xs">
                    <x-aura::header :sticky="false" :responsive="false" variant="bordered">
                        <x-slot name="brand">
                            <div class="flex items-center gap-2">
                                <x-aura::icon name="sparkles" size="xs" />
                                <span class="font-bold text-sm text-zinc-900 dark:text-white">Aura App</span>
                            </div>
                        </x-slot>

                        <!-- Desktop Nav (Hidden on mobile < md) -->
                        <div class="hidden md:flex items-center gap-1">
                            <x-aura::header.item href="#" active>Dashboard</x-aura::header.item>
                            <x-aura::header.item href="#">Projects</x-aura::header.item>
                            <x-aura::header.item href="#">Team</x-aura::header.item>
                            <x-aura::header.item href="#">Billing</x-aura::header.item>
                        </div>

                        <x-slot name="actions">
                            <span class="hidden md:inline-flex">
                                <x-aura::button variant="primary" size="sm">
                                    Upgrade Plan
                                </x-aura::button>
                            </span>

                            <!-- Mobile Hamburger Trigger -->
                            <div class="md:hidden">
                                <x-aura::icon-button
                                    icon="menu"
                                    variant="ghost"
                                    size="sm"
                                    label="Open menu"
                                    x-on:click="$dispatch('open-sheet', 'header-demo-mobile-nav')"
                                />
                            </div>
                        </x-slot>
                    </x-aura::header>
                </div>

                <x-aura::sheet name="header-demo-mobile-nav" side="right" title="Navigation">
                    <div class="flex flex-col gap-2 pt-2">
                        <x-aura::header.item href="#" active :block="true">Dashboard</x-aura::header.item>
                        <x-aura::header.item href="#" :block="true">Projects</x-aura::header.item>
                        <x-aura::header.item href="#" :block="true">Team</x-aura::header.item>
                        <x-aura::header.item href="#" :block="true">Billing</x-aura::header.item>
                    </div>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::header :responsive="false" variant="bordered">
    <x-slot name="brand">
        <span class="font-bold text-sm">Aura App</span>
    </x-slot>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center gap-1">
        <x-aura::header.item href="#" active>Dashboard</x-aura::header.item>
        <x-aura::header.item href="#">Projects</x-aura::header.item>
        <x-aura::header.item href="#">Team</x-aura::header.item>
        <x-aura::header.item href="#">Billing</x-aura::header.item>
    </div>

    <x-slot name="actions">
        <span class="hidden md:inline-flex">
            <x-aura::button variant="primary" size="sm">Upgrade Plan</x-aura::button>
        </span>

        <!-- Mobile Hamburger -->
        <div class="md:hidden">
            <x-aura::icon-button icon="menu" variant="ghost" size="sm" x-on:click="$dispatch('open-sheet', 'mobile-nav')" />
        </div>
    </x-slot>
</x-aura::header>

<!-- Mobile Sheet Drawer -->
<x-aura::sheet name="mobile-nav" side="right" title="Navigation">
    <div class="flex flex-col gap-2 pt-2">
        <x-aura::header.item href="#" active :block="true">Dashboard</x-aura::header.item>
        <x-aura::header.item href="#" :block="true">Projects</x-aura::header.item>
        <x-aura::header.item href="#" :block="true">Team</x-aura::header.item>
        <x-aura::header.item href="#" :block="true">Billing</x-aura::header.item>
    </div>
</x-aura::sheet>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
