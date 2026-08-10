<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Dropdown - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Action</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Dropdown Menu</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Contextual popover menus with support for headers, icon items, badges, separators, and destructive danger actions.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::dropdown&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Action Menu -->
    <x-aura::code class="w-full" title="1. Action Menu (With Sub-components)">
        <x-slot:preview>
            <div class="flex items-start justify-center min-h-[320px] pt-8 w-full">
                <x-aura::dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <x-aura::button variant="secondary">
                            <span>Actions Menu</span>
                            <x-aura::icon name="chevron-down" size="xs" />
                        </x-aura::button>
                    </x-slot>

                    <x-aura::dropdown.header>Manage Item</x-aura::dropdown.header>
                    <x-aura::dropdown.item href="#" icon="pencil">Edit Item</x-aura::dropdown.item>
                    <x-aura::dropdown.item href="#" icon="copy" badge="Ctrl+C">Duplicate</x-aura::dropdown.item>
                    <x-aura::dropdown.item href="#" icon="share-2">Share Link</x-aura::dropdown.item>

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.item href="#" icon="trash-2" variant="danger">Delete Item</x-aura::dropdown.item>
                </x-aura::dropdown>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::dropdown align="right" width="56"&gt;
    &lt;x-slot name="trigger"&gt;
        &lt;x-aura::button variant="secondary"&gt;
            &lt;span&gt;Actions Menu&lt;/span&gt;
            &lt;x-aura::icon name="chevron-down" size="xs" /&gt;
        &lt;/x-aura::button&gt;
    &lt;/x-slot&gt;

    &lt;x-aura::dropdown.header&gt;Manage Item&lt;/x-aura::dropdown.header&gt;
    &lt;x-aura::dropdown.item href="#" icon="pencil"&gt;Edit Item&lt;/x-aura::dropdown.item&gt;
    &lt;x-aura::dropdown.item href="#" icon="copy" badge="Ctrl+C"&gt;Duplicate&lt;/x-aura::dropdown.item&gt;
    &lt;x-aura::dropdown.item href="#" icon="share-2"&gt;Share Link&lt;/x-aura::dropdown.item&gt;

    &lt;x-aura::dropdown.separator /&gt;

    &lt;x-aura::dropdown.item href="#" icon="trash-2" variant="danger"&gt;Delete Item&lt;/x-aura::dropdown.item&gt;
&lt;/x-aura::dropdown&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. User Account Dropdown -->
    <x-aura::code class="w-full" title="2. User Account Dropdown">
        <x-slot:preview>
            <div class="flex items-start justify-center min-h-[350px] pt-8 w-full">
                <x-aura::dropdown align="right" width="64">
                    <x-slot name="trigger">
                        <button type="button" class="flex items-center gap-2.5 p-1.5 rounded-full hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors cursor-pointer border border-zinc-200 dark:border-zinc-800">
                            <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" alt="Sarah Connor" size="sm" />
                            <span class="text-xs font-semibold text-zinc-900 dark:text-white pr-1">Sarah Connor</span>
                            <x-aura::icon name="chevron-down" size="xs" class="text-zinc-400 mr-1" />
                        </button>
                    </x-slot>

                    <div class="px-3 py-2.5 bg-zinc-50 dark:bg-zinc-800/50 rounded-xl mb-1 border border-zinc-100 dark:border-zinc-800/60">
                        <p class="text-xs font-bold text-zinc-900 dark:text-white">Sarah Connor</p>
                        <p class="text-[11px] text-zinc-500 truncate">sarah@example.com</p>
                    </div>

                    <x-aura::dropdown.header>Account</x-aura::dropdown.header>
                    <x-aura::dropdown.item href="#" icon="user">My Profile</x-aura::dropdown.item>
                    <x-aura::dropdown.item href="#" icon="settings">Account Settings</x-aura::dropdown.item>
                    <x-aura::dropdown.item href="#" icon="shield-check" badge="Pro">Subscription</x-aura::dropdown.item>

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.item href="#" icon="log-out" variant="danger">Sign Out</x-aura::dropdown.item>
                </x-aura::dropdown>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::dropdown align="right" width="64"&gt;
    &lt;x-slot name="trigger"&gt;
        &lt;button type="button" class="flex items-center gap-2.5 p-1.5 rounded-full border"&gt;
            &lt;x-aura::avatar src="..." size="sm" /&gt;
            &lt;span class="text-xs font-semibold"&gt;Sarah Connor&lt;/span&gt;
        &lt;/button&gt;
    &lt;/x-slot&gt;

    &lt;div class="px-3 py-2.5 bg-zinc-50 dark:bg-zinc-800/50 rounded-xl border mb-1"&gt;
        &lt;p class="text-xs font-bold"&gt;Sarah Connor&lt;/p&gt;
        &lt;p class="text-[11px] text-zinc-500"&gt;sarah@example.com&lt;/p&gt;
    &lt;/div&gt;

    &lt;x-aura::dropdown.header&gt;Account&lt;/x-aura::dropdown.header&gt;
    &lt;x-aura::dropdown.item href="#" icon="user"&gt;My Profile&lt;/x-aura::dropdown.item&gt;
    &lt;x-aura::dropdown.item href="#" icon="settings"&gt;Account Settings&lt;/x-aura::dropdown.item&gt;
    &lt;x-aura::dropdown.separator /&gt;
    &lt;x-aura::dropdown.item href="#" icon="log-out" variant="danger"&gt;Sign Out&lt;/x-aura::dropdown.item&gt;
&lt;/x-aura::dropdown&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Icon Kebab Trigger & Alignment -->
    <x-aura::code class="w-full" title="3. Icon Kebab Trigger &amp; Left Alignment">
        <x-slot:preview>
            <div class="flex items-start justify-between w-full max-w-md mx-auto min-h-[280px] pt-8">
                <x-aura::dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <x-aura::icon-button icon="ellipsis-vertical" variant="ghost" size="sm" class="rounded-xl border border-zinc-200 dark:border-zinc-800" />
                    </x-slot>

                    <x-aura::dropdown.header>Quick Options</x-aura::dropdown.header>
                    <x-aura::dropdown.item href="#" icon="eye">View Details</x-aura::dropdown.item>
                    <x-aura::dropdown.item href="#" icon="download">Download File</x-aura::dropdown.item>
                    <x-aura::dropdown.separator />
                    <x-aura::dropdown.item href="#" icon="archive">Archive</x-aura::dropdown.item>
                </x-aura::dropdown>

                <x-aura::dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <x-aura::button variant="dark" size="sm">
                            <span>Filter Status</span>
                            <x-aura::icon name="filter" size="xs" />
                        </x-aura::button>
                    </x-slot>

                    <x-aura::dropdown.header>Filter By</x-aura::dropdown.header>
                    <x-aura::dropdown.item href="#" icon="check-circle" badge="12">Active</x-aura::dropdown.item>
                    <x-aura::dropdown.item href="#" icon="clock" badge="4">Pending</x-aura::dropdown.item>
                    <x-aura::dropdown.item href="#" icon="x-circle" badge="2">Inactive</x-aura::dropdown.item>
                </x-aura::dropdown>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::dropdown align="left" width="48"&gt;
    &lt;x-slot name="trigger"&gt;
        &lt;x-aura::icon-button icon="ellipsis-vertical" variant="ghost" /&gt;
    &lt;/x-slot&gt;
    &lt;x-aura::dropdown.header&gt;Quick Options&lt;/x-aura::dropdown.header&gt;
    &lt;x-aura::dropdown.item href="#" icon="eye"&gt;View Details&lt;/x-aura::dropdown.item&gt;
    &lt;x-aura::dropdown.item href="#" icon="download"&gt;Download File&lt;/x-aura::dropdown.item&gt;
&lt;/x-aura::dropdown&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
