<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.components')] 
#[Title('Navbar - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-5xl mx-auto space-y-12">
    <!-- Navbar Page Intro -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Layout Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Navbar Component</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Lightweight, sticky application navigation bars. Supports brand logos, inline links, quick action triggers, search inputs, and user controls.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::navbar&gt;
            </code>
        </div>
    </div>

    <!-- 1. Default Workspace Application Navbar -->
    <x-aura::code class="w-full" title="1. Default Workspace Application Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100/60 dark:bg-zinc-950 p-3">
                <x-aura::navbar class="rounded-xl border border-zinc-200/80 dark:border-zinc-800/80">
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
                                <x-aura::input placeholder="Search... (⌘K)" icon="search" size="sm" class="w-32 sm:w-44" />
                                <x-aura::icon-button icon="bell" variant="ghost" size="sm" label="Notifications" />
                            </div>
                            <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="sm" class="cursor-pointer" />
                        </div>
                    </x-slot>
                </x-aura::navbar>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::navbar&gt;
    &lt;x-slot name="brandSlot"&gt;
        &lt;div class="flex items-center gap-2.5"&gt;
            &lt;x-aura::icon name="sparkles" size="xs" /&gt;
            &lt;span class="font-bold text-sm"&gt;Aura Workspace&lt;/span&gt;
        &lt;/div&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="navigation"&gt;
        &lt;x-aura::header.item href="#" active&gt;Overview&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#"&gt;Projects&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#"&gt;Analytics&lt;/x-aura::header.item&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::input placeholder="Search... (⌘K)" icon="search" size="sm" /&gt;
        &lt;x-aura::avatar src="..." size="sm" /&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::navbar&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Dark Theme Developer Platform Navbar -->
    <x-aura::code class="w-full" title="2. Dark Theme Developer Platform Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-800 bg-zinc-950 p-3">
                <x-aura::navbar class="rounded-xl !bg-zinc-900 !border-zinc-800 !text-white">
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
                        <x-aura::button variant="secondary" size="sm" class="!bg-zinc-800 !text-white !border-zinc-700 hover:!bg-zinc-700">
                            Console Login
                        </x-aura::button>
                    </x-slot>
                </x-aura::navbar>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::navbar class="!bg-zinc-900 !border-zinc-800 !text-white"&gt;
    &lt;x-slot name="brandSlot"&gt;
        &lt;span class="font-mono font-black text-white"&gt;&amp;lt;AURA/&amp;gt;&lt;/span&gt;
        &lt;x-aura::badge variant="positive" size="xs"&gt;OPERATIONAL&lt;/x-aura::badge&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="navigation"&gt;
        &lt;x-aura::header.item href="#" active variant="dark"&gt;Documentation&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#" variant="dark"&gt;API Reference&lt;/x-aura::header.item&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::button variant="secondary" size="sm"&gt;Console Login&lt;/x-aura::button&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::navbar&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. E-Commerce Storefront Top Navbar -->
    <x-aura::code class="w-full" title="3. E-Commerce Storefront Top Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-3">
                <x-aura::navbar class="rounded-xl">
                    <x-slot name="brandSlot">
                        <span class="font-extrabold text-zinc-900 dark:text-white text-base tracking-widest uppercase font-sans">AURA STORE</span>
                    </x-slot>

                    <x-slot name="navigation">
                        <x-aura::header.item href="#" active>New Arrivals</x-aura::header.item>
                        <x-aura::header.item href="#">Men</x-aura::header.item>
                        <x-aura::header.item href="#">Women</x-aura::header.item>
                        <x-aura::header.item href="#" class="text-red-600 font-bold">Summer Sale -30%</x-aura::header.item>
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
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::navbar&gt;
    &lt;x-slot name="brandSlot"&gt;
        &lt;span class="font-extrabold tracking-widest uppercase"&gt;AURA STORE&lt;/span&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="navigation"&gt;
        &lt;x-aura::header.item href="#" active&gt;New Arrivals&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#"&gt;Men&lt;/x-aura::header.item&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::button variant="primary" size="sm" icon="shopping-bag"&gt;Cart (3)&lt;/x-aura::button&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::navbar&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Minimal Product Landing Page Navbar -->
    <x-aura::code class="w-full" title="4. Minimal Landing Page Navbar">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-950 p-3">
                <x-aura::navbar class="rounded-xl border border-zinc-200/60 dark:border-zinc-800/60">
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
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::navbar&gt;
    &lt;x-slot name="brandSlot"&gt;acme.inc&lt;/x-slot&gt;

    &lt;x-slot name="navigation"&gt;
        &lt;x-aura::header.item href="#"&gt;Features&lt;/x-aura::header.item&gt;
        &lt;x-aura::header.item href="#"&gt;Pricing&lt;/x-aura::header.item&gt;
    &lt;/x-slot&gt;

    &lt;x-slot name="actions"&gt;
        &lt;x-aura::button variant="ghost" size="sm"&gt;Sign In&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Get Started&lt;/x-aura::button&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::navbar&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
