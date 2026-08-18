<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Dropdown - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Action</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Dropdown Menu</x-aura::heading>
            <x-aura::subheading size="md">
                Contextual popover menus with support for headers, icon items, badges, separators, and destructive danger actions.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::dropdown>
    <x-slot:trigger><x-aura::button>Options</x-aura::button></x-slot:trigger>
    <x-aura::dropdown.item icon="user">Profile</x-aura::dropdown.item>
</x-aura::dropdown>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard Action Menu -->
    <x-aura::code  title="1. Action Menu (With Sub-components)">
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
        <x-slot:codeSlot>@verbatim<x-aura::dropdown align="right" width="56">
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
</x-aura::dropdown>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. User Account Dropdown -->
    <x-aura::code  title="2. User Account Dropdown">
        <x-slot:preview>
            <div class="flex items-start justify-center min-h-[350px] pt-8 w-full">
                <x-aura::dropdown align="right" width="64">
                    <x-slot name="trigger">
                        <button type="button" class="flex items-center gap-2.5 p-1.5 rounded-full hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors cursor-pointer border border-zinc-200 dark:border-zinc-800">
                            <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" alt="Sarah Connor" size="sm" />
                            <span class="text-xs font-semibold text-zinc-900 dark:text-white pr-1">Sarah Connor</span>
                            <x-aura::icon name="chevron-down" size="xs"  />
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
        <x-slot:codeSlot>@verbatim<x-aura::dropdown align="right" width="64">
    <x-slot name="trigger">
        <button type="button" class="flex items-center gap-2.5 p-1.5 rounded-full border">
            <x-aura::avatar src="..." size="sm" />
            <span class="text-xs font-semibold">Sarah Connor</span>
        </button>
    </x-slot>

    <div class="px-3 py-2.5 bg-zinc-50 dark:bg-zinc-800/50 rounded-xl border mb-1">
        <p class="text-xs font-bold">Sarah Connor</p>
        <p class="text-[11px] text-zinc-500">sarah@example.com</p>
    </div>

    <x-aura::dropdown.header>Account</x-aura::dropdown.header>
    <x-aura::dropdown.item href="#" icon="user">My Profile</x-aura::dropdown.item>
    <x-aura::dropdown.item href="#" icon="settings">Account Settings</x-aura::dropdown.item>
    <x-aura::dropdown.separator />
    <x-aura::dropdown.item href="#" icon="log-out" variant="danger">Sign Out</x-aura::dropdown.item>
</x-aura::dropdown>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Icon Kebab Trigger & Alignment -->
    <x-aura::code  title="3. Icon Kebab Trigger &amp; Left Alignment">
        <x-slot:preview>
            <div class="flex items-start justify-between w-full max-w-md mx-auto min-h-[280px] pt-8">
                <x-aura::dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <x-aura::icon-button icon="ellipsis-vertical" variant="ghost" size="sm"  />
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
        <x-slot:codeSlot>@verbatim<x-aura::dropdown align="left" width="48">
    <x-slot name="trigger">
        <x-aura::icon-button icon="ellipsis-vertical" variant="ghost" />
    </x-slot>
    <x-aura::dropdown.header>Quick Options</x-aura::dropdown.header>
    <x-aura::dropdown.item href="#" icon="eye">View Details</x-aura::dropdown.item>
    <x-aura::dropdown.item href="#" icon="download">Download File</x-aura::dropdown.item>
</x-aura::dropdown>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
