<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Footer - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-5xl mx-auto space-y-12">
    <!-- Header Page Intro -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Footer</x-aura::heading>
            <x-aura::subheading size="md">
                Flexible, responsive application footers. Supports brand logos, multi-column navigation links, social triggers, newsletter subscriptions, and copyright bottom bars.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::footer>
    <x-slot:brand>Brand Content</x-slot:brand>
    <x-slot:bottom>Copyright Content</x-slot:bottom>
</x-aura::footer>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Simple Application Footer -->
    <x-aura::code  title="1. Simple Application Footer">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100/60 dark:bg-zinc-950 p-3">
                <x-aura::footer class="rounded-xl border border-zinc-200/80 dark:border-zinc-800/80">
                    <x-slot name="brand">
                        <div class="flex items-center gap-2.5">
                            <div class="p-1.5 rounded-lg bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 shadow-xs flex items-center justify-center">
                                <x-aura::icon name="sparkles" size="xs" />
                            </div>
                            <span class="font-bold text-zinc-900 dark:text-white text-sm tracking-tight">Aura Wire</span>
                        </div>
                    </x-slot>

                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Documentation</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">GitHub</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">License</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Privacy Policy</a>

                    <x-slot name="bottom">
                        <span>&copy; {{ date('Y') }} Insoulit. All rights reserved.</span>
                        <div class="flex items-center gap-4 text-xs">
                            <span class="font-mono">v1.5.0</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        </div>
                    </x-slot>
                </x-aura::footer>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::footer>
    <x-slot name="brand">
        <div class="flex items-center gap-2.5">
            <x-aura::icon name="sparkles" size="xs" />
            <span class="font-bold text-sm">Aura Wire</span>
        </div>
    </x-slot>

    <a href="#">Documentation</a>
    <a href="#">GitHub</a>
    <a href="#">License</a>

    <x-slot name="bottom">
        <span>&copy; {{ date('Y') }} Insoulit. All rights reserved.</span>
        <span class="font-mono">v1.5.0</span>
    </x-slot>
</x-aura::footer>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Multi-Column Corporate SaaS Footer -->
    <x-aura::code  title="2. Multi-Column Corporate SaaS Footer">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-6 space-y-8">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                    <!-- Brand Column -->
                    <div class="col-span-2 space-y-3">
                        <div class="flex items-center gap-2.5">
                            <div class="p-1.5 rounded-lg bg-indigo-600 text-white shadow-xs flex items-center justify-center">
                                <x-aura::icon name="layers" size="xs" />
                            </div>
                            <span class="font-extrabold text-zinc-900 dark:text-white text-base tracking-tight">Aura Cloud</span>
                        </div>
                        <p class="text-xs text-zinc-500 dark:text-zinc-400 max-w-sm leading-relaxed">
                            Empowering developers to build beautiful, accessible Livewire applications with unstyled Blade design system primitives.
                        </p>
                        <div class="flex items-center gap-2 pt-1">
                            <x-aura::icon-button icon="github" variant="ghost" size="xs" label="GitHub" />
                            <x-aura::icon-button icon="twitter" variant="ghost" size="xs" label="Twitter" />
                            <x-aura::icon-button icon="globe" variant="ghost" size="xs" label="Website" />
                        </div>
                    </div>

                    <!-- Column 1: Product -->
                    <div class="space-y-2.5">
                        <p class="text-xs font-bold uppercase tracking-wider text-zinc-900 dark:text-white">Product</p>
                        <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-400">
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Design Blocks</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Templates</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Changelog</a></li>
                        </ul>
                    </div>

                    <!-- Column 2: Resources -->
                    <div class="space-y-2.5">
                        <p class="text-xs font-bold uppercase tracking-wider text-zinc-900 dark:text-white">Resources</p>
                        <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-400">
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Documentation</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Starter Kits</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Icon library</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Community</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Company -->
                    <div class="space-y-2.5">
                        <p class="text-xs font-bold uppercase tracking-wider text-zinc-900 dark:text-white">Company</p>
                        <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-400">
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">About Us</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Careers</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Copyright Bar -->
                <div class="pt-6 border-t border-zinc-200 dark:border-zinc-800 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-zinc-500">
                    <span>&copy; {{ date('Y') }} Aura Wire SaaS Platform. All rights reserved.</span>
                    <div class="flex items-center gap-4">
                        <a href="#" class="hover:underline">Privacy</a>
                        <a href="#" class="hover:underline">Terms</a>
                        <a href="#" class="hover:underline">Cookies</a>
                    </div>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="grid grid-cols-2 md:grid-cols-5 gap-8">
    <div class="col-span-2 space-y-3">
        <span class="font-extrabold text-base">Aura Cloud</span>
        <p class="text-xs text-zinc-500">Empowering Livewire developers.</p>
    </div>

    <div class="space-y-2.5">
        <p class="text-xs font-bold uppercase">Product</p>
        <ul class="space-y-2 text-xs text-zinc-600">
            <li><a href="#">Components</a></li>
            <li><a href="#">Templates</a></li>
        </ul>
    </div>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Dark Theme Developer Platform Footer -->
    <x-aura::code  title="3. Dark Theme Developer Platform Footer">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-800 bg-zinc-950 p-3">
                <x-aura::footer class="rounded-xl !bg-zinc-900 !border-zinc-800 !text-zinc-300">
                    <x-slot name="brand">
                        <div class="flex items-center gap-3">
                            <span class="font-black text-white tracking-wider text-sm font-mono">&lt;AURA/&gt;</span>
                            <x-aura::badge variant="positive" size="xs">SYSTEM OPERATIONAL</x-aura::badge>
                        </div>
                    </x-slot>

                    <a href="#" class="hover:text-white transition-colors">API Docs</a>
                    <a href="#" class="hover:text-white transition-colors">Status</a>
                    <a href="#" class="hover:text-white transition-colors">GitHub</a>
                    <a href="#" class="hover:text-white transition-colors">Security</a>

                    <x-slot name="bottom">
                        <span class="text-zinc-400">&copy; {{ date('Y') }} Aura Developer Platform Inc.</span>
                        <div class="flex items-center gap-3 text-xs">
                            <span class="font-mono text-zinc-400">US-EAST-1</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        </div>
                    </x-slot>
                </x-aura::footer>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::footer class="!bg-zinc-900 !border-zinc-800 !text-zinc-300">
    <x-slot name="brand">
        <span class="font-mono font-black text-white">&lt;AURA/&gt;</span>
        <x-aura::badge variant="positive" size="xs">OPERATIONAL</x-aura::badge>
    </x-slot>

    <a href="#">API Docs</a>
    <a href="#">Status</a>

    <x-slot name="bottom">
        <span>&copy; {{ date('Y') }} Aura Dev Platform.</span>
    </x-slot>
</x-aura::footer>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. E-Commerce Storefront Footer with Newsletter -->
    <x-aura::code  title="4. E-Commerce Storefront Footer with Newsletter">
        <x-slot:preview>
            <div class="w-full rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-950 p-6 space-y-8">
                <!-- Newsletter Section -->
                <div class="p-6 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="space-y-1 text-center md:text-left">
                        <h4 class="text-sm font-bold text-zinc-900 dark:text-white">Subscribe to our newsletter</h4>
                        <p class="text-xs text-zinc-500 dark:text-zinc-400">Get 15% off your first order plus weekly exclusive arrivals.</p>
                    </div>
                    <div class="flex items-center gap-2 w-full md:w-auto">
                        <x-aura::input placeholder="Enter your email" icon="mail" size="sm" class="w-full md:w-64" />
                        <x-aura::button variant="primary" size="sm" class="shrink-0">Subscribe</x-aura::button>
                    </div>
                </div>

                <!-- Footer Main Row -->
                <x-aura::footer class="rounded-xl border border-zinc-200/80 dark:border-zinc-800/80">
                    <x-slot name="brand">
                        <span class="font-extrabold text-zinc-900 dark:text-white text-base tracking-widest uppercase font-sans">AURA STORE</span>
                    </x-slot>

                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Track Order</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Shipping &amp; Returns</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Store Locator</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Contact Support</a>

                    <x-slot name="bottom">
                        <span>&copy; {{ date('Y') }} AURA STORE. All rights reserved.</span>
                        <div class="flex items-center gap-2 font-mono text-[10px] uppercase text-zinc-400">
                            <span>VISA</span>
                            <span>•</span>
                            <span>MASTERCARD</span>
                            <span>•</span>
                            <span>PAYPAL</span>
                            <span>•</span>
                            <span>APPLE PAY</span>
                        </div>
                    </x-slot>
                </x-aura::footer>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="p-6 rounded-xl bg-white border border-zinc-200 flex justify-between gap-6">
    <div>
        <h4 class="text-sm font-bold">Subscribe to our newsletter</h4>
    </div>
    <div class="flex gap-2">
        <x-aura::input placeholder="Enter your email" size="sm" />
        <x-aura::button variant="primary" size="sm">Subscribe</x-aura::button>
    </div>
</div>

<x-aura::footer brand="AURA STORE">
    <a href="#">Track Order</a>
    <a href="#">Shipping &amp; Returns</a>
</x-aura::footer>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
