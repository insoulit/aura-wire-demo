<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Sheet Drawer - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Overlay</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Sheet Drawer</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Slide-over panels for filter options, mobile navigation drawers, bottom action sheets, and side parameter panels.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::sheet&gt;
            </code>
        </div>
    </div>

    <!-- 1. Right Slide-Out Filter Sheet -->
    <x-aura::code class="w-full" title="1. Right Slide-Out Filter Sheet (side='right')">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" x-on:click="$dispatch('open-sheet', 'filter-sheet')">
                    Open Filter Sheet (Right)
                </x-aura::button>

                <x-aura::sheet name="filter-sheet" side="right" maxWidth="md" title="Filter Products" description="Refine catalog results by status, price, and category.">
                    <div class="space-y-4 pt-1">
                        <x-aura::field label="Product Category">
                            <x-aura::select :options="['All Categories', 'Audio & Headphones', 'Keyboards', 'Monitors', 'Accessories']" />
                        </x-aura::field>

                        <x-aura::field label="Availability Status">
                            <x-aura::select :options="['In Stock Only', 'Pre-Order', 'Out of Stock', 'All']" />
                        </x-aura::field>

                        <x-aura::field label="Price Range">
                            <div class="grid grid-cols-2 gap-3">
                                <x-aura::input placeholder="Min ($)" type="number" />
                                <x-aura::input placeholder="Max ($)" type="number" />
                            </div>
                        </x-aura::field>
                    </div>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-sheet', 'filter-sheet')">Reset</x-aura::button>
                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-sheet', 'filter-sheet')">Apply Filters</x-aura::button>
                    </x-slot:footer>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button x-on:click="$dispatch('open-sheet', 'filter-sheet')"&gt;
    Open Filter Sheet
&lt;/x-aura::button&gt;

&lt;x-aura::sheet name="filter-sheet" side="right" maxWidth="md" title="Filter Products"&gt;
    &lt;x-aura::select :options="['All Categories', 'Audio', 'Keyboards']" /&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Apply Filters&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::sheet&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Left Slide-Out Navigation Drawer -->
    <x-aura::code class="w-full" title="2. Left Navigation Drawer (side='left')">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="secondary" x-on:click="$dispatch('open-sheet', 'nav-sheet')">
                    Open Left Navigation Drawer
                </x-aura::button>

                <x-aura::sheet name="nav-sheet" side="left" maxWidth="xs" title="Navigation Panel" description="Quick access menu.">
                    <ul class="space-y-1 text-sm font-medium pt-1">
                        <li><a href="/components" class="flex items-center px-3 py-2 rounded-xl text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Overview</a></li>
                        <li><a href="/components/button" class="flex items-center px-3 py-2 rounded-xl text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Buttons & Triggers</a></li>
                        <li><a href="/components/table" class="flex items-center px-3 py-2 rounded-xl text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Data Tables</a></li>
                        <li><a href="/components/modal" class="flex items-center px-3 py-2 rounded-xl text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Modals & Overlays</a></li>
                        <li><a href="/components/sheet" class="flex items-center px-3 py-2 rounded-xl text-zinc-900 dark:text-white bg-zinc-100 dark:bg-zinc-800 font-bold transition-colors">Sheet Drawer</a></li>
                    </ul>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button x-on:click="$dispatch('open-sheet', 'nav-sheet')"&gt;
    Open Nav Drawer
&lt;/x-aura::button&gt;

&lt;x-aura::sheet name="nav-sheet" side="left" maxWidth="xs" title="Navigation"&gt;
    &lt;ul class="space-y-1"&gt;
        &lt;li&gt;&lt;a href="/components"&gt;Overview&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/x-aura::sheet&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Bottom Mobile Action Sheet -->
    <x-aura::code class="w-full" title="3. Bottom Mobile Action Sheet (side='bottom')">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="outline" x-on:click="$dispatch('open-sheet', 'bottom-sheet')">
                    Open Bottom Action Sheet
                </x-aura::button>

                <x-aura::sheet name="bottom-sheet" side="bottom" title="Share Document" description="Select how you would like to share this file.">
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-1 text-center">
                        <button class="p-4 rounded-2xl bg-zinc-100 dark:bg-zinc-800 hover:bg-zinc-200 dark:hover:bg-zinc-700 transition-colors flex flex-col items-center gap-2 cursor-pointer">
                            <span class="text-xl">📧</span>
                            <span class="text-xs font-bold text-zinc-900 dark:text-white">Email Link</span>
                        </button>
                        <button class="p-4 rounded-2xl bg-zinc-100 dark:bg-zinc-800 hover:bg-zinc-200 dark:hover:bg-zinc-700 transition-colors flex flex-col items-center gap-2 cursor-pointer">
                            <span class="text-xl">📋</span>
                            <span class="text-xs font-bold text-zinc-900 dark:text-white">Copy Link</span>
                        </button>
                        <button class="p-4 rounded-2xl bg-zinc-100 dark:bg-zinc-800 hover:bg-zinc-200 dark:hover:bg-zinc-700 transition-colors flex flex-col items-center gap-2 cursor-pointer">
                            <span class="text-xl">💬</span>
                            <span class="text-xs font-bold text-zinc-900 dark:text-white">Slack Message</span>
                        </button>
                        <button class="p-4 rounded-2xl bg-zinc-100 dark:bg-zinc-800 hover:bg-zinc-200 dark:hover:bg-zinc-700 transition-colors flex flex-col items-center gap-2 cursor-pointer">
                            <span class="text-xl">🔒</span>
                            <span class="text-xs font-bold text-zinc-900 dark:text-white">Private Team</span>
                        </button>
                    </div>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-sheet', 'bottom-sheet')">Cancel</x-aura::button>
                    </x-slot:footer>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::sheet name="bottom-sheet" side="bottom" title="Share Document"&gt;
    &lt;div class="grid grid-cols-4 gap-3"&gt;
        &lt;button&gt;Copy Link&lt;/button&gt;
    &lt;/div&gt;
&lt;/x-aura::sheet&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Top Notification Bar Sheet -->
    <x-aura::code class="w-full" title="4. Top Notification Sheet (side='top')">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="subtle" x-on:click="$dispatch('open-sheet', 'top-sheet')">
                    Open Top Notification Sheet
                </x-aura::button>

                <x-aura::sheet name="top-sheet" side="top" title="System Maintenance Notice" description="Scheduled maintenance will take place tonight at 02:00 UTC.">
                    <div class="p-3 rounded-xl bg-amber-50 dark:bg-amber-950/40 text-amber-800 dark:text-amber-200 text-xs leading-relaxed border border-amber-200 dark:border-amber-800/60">
                        Please save all active drafts before 01:50 UTC to prevent data loss. Services will resume automatically within 30 minutes.
                    </div>

                    <x-slot:footer>
                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-sheet', 'top-sheet')">Acknowledge</x-aura::button>
                    </x-slot:footer>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::sheet name="top-sheet" side="top" title="System Maintenance"&gt;
    &lt;p class="text-xs text-amber-700"&gt;Save drafts before 01:50 UTC.&lt;/p&gt;
&lt;/x-aura::sheet&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
