<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Header - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-5xl mx-auto space-y-12">
    <!-- Header Page Intro -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Layout</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Header</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Flexible, responsive application headers and navigation bars. Supports brand logos, search bars, navigation items, notifications, and user action triggers.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::header&gt;
            </code>
        </div>
    </div>

    <!-- 1. SaaS Workspace Application Header -->
    <x-aura::code class="w-full" title="1. SaaS Workspace Application Header">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100/60 dark:bg-zinc-950 p-3">
                <x-aura::header :sticky="false" variant="bordered" class="rounded-xl">
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
                                <x-aura::input placeholder="Search... (⌘K)" icon="search" size="sm" class="w-32 sm:w-44" />
                                <x-aura::icon-button icon="bell" variant="ghost" size="sm" label="Notifications" />
                            </div>
                            <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="sm" class="cursor-pointer" />
                        </div>
                    </x-slot>
                </x-aura::header>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::header variant="bordered"&gt;
    &lt;x-slot name="brand"&gt;
        &lt;div class="flex items-center gap-2.5"&gt;
            &lt;x-aura::icon name="sparkles" size="xs" /&gt;
            &lt;span class="font-bold text-sm"&gt;Aura Cloud&lt;/span&gt;
        &lt;/div&gt;
    &lt;/x-slot&gt;

    &lt;x-aura::header.item href="#" active&gt;Overview&lt;/x-aura::header.item&gt;
    &lt;x-aura::header.item href="#"&gt;Deployments&lt;/x-aura::header.item&gt;
    &lt;x-aura::header.item href="#"&gt;Analytics&lt;/x-aura::header.item&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::input placeholder="Search... (⌘K)" icon="search" size="sm" /&gt;
        &lt;x-aura::icon-button icon="bell" variant="ghost" size="sm" /&gt;
        &lt;x-aura::avatar src="..." size="sm" /&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::header&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. E-Commerce Store Header -->
    <x-aura::code class="w-full" title="2. E-Commerce Storefront Header">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-3">
                <x-aura::header :sticky="false" variant="default" class="rounded-xl">
                    <x-slot name="brand">
                        <span class="font-extrabold text-zinc-900 dark:text-white text-base tracking-widest uppercase font-sans">AURA STORE</span>
                    </x-slot>

                    <x-aura::header.item href="#" active>New Arrivals</x-aura::header.item>
                    <x-aura::header.item href="#">Men</x-aura::header.item>
                    <x-aura::header.item href="#">Page 2</x-aura::header.item>
                    <x-aura::header.item href="#" class="text-red-600 font-bold">Summer Sale -30%</x-aura::header.item>

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
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::header variant="default"&gt;
    &lt;x-slot name="brand"&gt;
        &lt;span class="font-extrabold tracking-widest uppercase"&gt;AURA STORE&lt;/span&gt;
    &lt;/x-slot&gt;

    &lt;x-aura::header.item href="#" active&gt;New Arrivals&lt;/x-aura::header.item&gt;
    &lt;x-aura::header.item href="#"&gt;Men&lt;/x-aura::header.item&gt;
    &lt;x-aura::header.item href="#"&gt;Women&lt;/x-aura::header.item&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::icon-button icon="heart" variant="ghost" size="sm" /&gt;
        &lt;x-aura::button variant="primary" size="sm" icon="shopping-bag"&gt;Cart (3)&lt;/x-aura::button&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::header&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Minimal Marketing Header -->
    <x-aura::code class="w-full" title="3. Minimal Landing Page Header">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-950 p-3">
                <x-aura::header :sticky="false" variant="minimal" class="rounded-xl">
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
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::header variant="minimal"&gt;
    &lt;x-slot name="brand"&gt;acme.inc&lt;/x-slot&gt;

    &lt;x-aura::header.item href="#"&gt;Features&lt;/x-aura::header.item&gt;
    &lt;x-aura::header.item href="#"&gt;Pricing&lt;/x-aura::header.item&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::button variant="ghost" size="sm"&gt;Sign In&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Get Started&lt;/x-aura::button&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::header&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Custom Mobile Navigation Sheet Drawer -->
    <x-aura::code class="w-full" title="4. Custom Mobile Navigation Sheet Drawer">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100/60 dark:bg-zinc-950 p-3 space-y-3">
                <x-aura::header :sticky="false" :responsive="false" variant="bordered" class="rounded-xl">
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

                <x-aura::sheet name="header-demo-mobile-nav" side="right" title="Navigation">
                    <div class="flex flex-col gap-2 pt-2">
                        <x-aura::header.item href="#" active class="w-full justify-start">Dashboard</x-aura::header.item>
                        <x-aura::header.item href="#" class="w-full justify-start">Projects</x-aura::header.item>
                        <x-aura::header.item href="#" class="w-full justify-start">Team</x-aura::header.item>
                        <x-aura::header.item href="#" class="w-full justify-start">Billing</x-aura::header.item>
                    </div>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::header :responsive="false" variant="bordered"&gt;
    &lt;x-slot name="brand"&gt;
        &lt;span class="font-bold text-sm"&gt;Aura App&lt;/span&gt;
    &lt;/x-slot&gt;

    &lt;!-- Desktop Navigation --&gt;
    &lt;div class="hidden md:flex items-center gap-1"&gt;
        &lt;x-aura::header.item href="#" active&gt;Dashboard&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#"&gt;Projects&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#"&gt;Team&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#"&gt;Billing&lt;/x-aura::header.item&gt;
    &lt;/div&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::button variant="primary" size="sm" class="hidden md:inline-flex"&gt;Upgrade Plan&lt;/x-aura::button&gt;

        &lt;!-- Mobile Hamburger --&gt;
        &lt;div class="md:hidden"&gt;
            &lt;x-aura::icon-button icon="menu" variant="ghost" size="sm" x-on:click="$dispatch('open-sheet', 'mobile-nav')" /&gt;
        &lt;/div&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::header&gt;

&lt;!-- Mobile Sheet Drawer --&gt;
&lt;x-aura::sheet name="mobile-nav" side="right" title="Navigation"&gt;
    &lt;div class="flex flex-col gap-2 pt-2"&gt;
        &lt;x-aura::header.item href="#" active class="w-full justify-start"&gt;Dashboard&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#" class="w-full justify-start"&gt;Projects&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#" class="w-full justify-start"&gt;Team&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#" class="w-full justify-start"&gt;Billing&lt;/x-aura::header.item&gt;
    &lt;/div&gt;
&lt;/x-aura::sheet&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
