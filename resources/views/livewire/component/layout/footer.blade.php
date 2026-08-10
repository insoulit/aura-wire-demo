<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Footer - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-5xl mx-auto space-y-12">
    <!-- Footer Page Intro -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Layout</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Footer</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Flexible, responsive application footers. Supports brand logos, multi-column navigation links, social triggers, newsletter subscriptions, and copyright bottom bars.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::footer&gt;
            </code>
        </div>
    </div>

    <!-- 1. Simple Application Footer -->
    <x-aura::code class="w-full" title="1. Simple Application Footer">
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
                            <span class="font-mono">v1.4.0</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        </div>
                    </x-slot>
                </x-aura::footer>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::footer&gt;
    &lt;x-slot name="brand"&gt;
        &lt;div class="flex items-center gap-2.5"&gt;
            &lt;x-aura::icon name="sparkles" size="xs" /&gt;
            &lt;span class="font-bold text-sm"&gt;Aura Wire&lt;/span&gt;
        &lt;/div&gt;
    &lt;/x-slot&gt;

    &lt;a href="#"&gt;Documentation&lt;/a&gt;
    &lt;a href="#"&gt;GitHub&lt;/a&gt;
    &lt;a href="#"&gt;License&lt;/a&gt;

    &lt;x-slot name="bottom"&gt;
        &lt;span&gt;&amp;copy; {{ date('Y') }} Insoulit. All rights reserved.&lt;/span&gt;
        &lt;span class="font-mono"&gt;v1.4.0&lt;/span&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::footer&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Multi-Column Corporate SaaS Footer -->
    <x-aura::code class="w-full" title="2. Multi-Column Corporate SaaS Footer">
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
                            <li><a href="#" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Icons Library</a></li>
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
        <x-slot:codeSlot>&lt;div class="grid grid-cols-2 md:grid-cols-5 gap-8"&gt;
    &lt;div class="col-span-2 space-y-3"&gt;
        &lt;span class="font-extrabold text-base"&gt;Aura Cloud&lt;/span&gt;
        &lt;p class="text-xs text-zinc-500"&gt;Empowering Livewire developers.&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="space-y-2.5"&gt;
        &lt;p class="text-xs font-bold uppercase"&gt;Product&lt;/p&gt;
        &lt;ul class="space-y-2 text-xs text-zinc-600"&gt;
            &lt;li&gt;&lt;a href="#"&gt;Components&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Templates&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Dark Theme Developer Platform Footer -->
    <x-aura::code class="w-full" title="3. Dark Theme Developer Platform Footer">
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
        <x-slot:codeSlot>&lt;x-aura::footer class="!bg-zinc-900 !border-zinc-800 !text-zinc-300"&gt;
    &lt;x-slot name="brand"&gt;
        &lt;span class="font-mono font-black text-white"&gt;&amp;lt;AURA/&amp;gt;&lt;/span&gt;
        &lt;x-aura::badge variant="positive" size="xs"&gt;OPERATIONAL&lt;/x-aura::badge&gt;
    &lt;/x-slot&gt;

    &lt;a href="#"&gt;API Docs&lt;/a&gt;
    &lt;a href="#"&gt;Status&lt;/a&gt;

    &lt;x-slot name="bottom"&gt;
        &lt;span&gt;&amp;copy; {{ date('Y') }} Aura Dev Platform.&lt;/span&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::footer&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. E-Commerce Storefront Footer with Newsletter -->
    <x-aura::code class="w-full" title="4. E-Commerce Storefront Footer with Newsletter">
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
        <x-slot:codeSlot>&lt;div class="p-6 rounded-xl bg-white border border-zinc-200 flex justify-between gap-6"&gt;
    &lt;div&gt;
        &lt;h4 class="text-sm font-bold"&gt;Subscribe to our newsletter&lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="flex gap-2"&gt;
        &lt;x-aura::input placeholder="Enter your email" size="sm" /&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Subscribe&lt;/x-aura::button&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;x-aura::footer brand="AURA STORE"&gt;
    &lt;a href="#"&gt;Track Order&lt;/a&gt;
    &lt;a href="#"&gt;Shipping &amp;amp; Returns&lt;/a&gt;
&lt;/x-aura::footer&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
