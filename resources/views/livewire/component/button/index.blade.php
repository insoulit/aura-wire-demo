<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Button - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Action</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Button</x-aura::heading>
            <x-aura::subheading size="md">
                Versatile pill and circular square buttons for triggers, form submissions, icon actions, and interactive layout.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::button variant="primary" size="md" icon="sparkles"&gt;Action&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code class="w-full" title="1. Button Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary">Primary</x-aura::button>
                <x-aura::button variant="secondary">Secondary</x-aura::button>
                <x-aura::button variant="filled">Filled</x-aura::button>
                <x-aura::button variant="subtle">Subtle</x-aura::button>
                <x-aura::button variant="outline">Outline</x-aura::button>
                <x-aura::button variant="ghost">Ghost</x-aura::button>
                <x-aura::button variant="danger">Danger</x-aura::button>
                <x-aura::button variant="link" href="#">Link</x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Primary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="secondary"&gt;Secondary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="filled"&gt;Filled&lt;/x-aura::button&gt;
&lt;x-aura::button variant="subtle"&gt;Subtle&lt;/x-aura::button&gt;
&lt;x-aura::button variant="outline"&gt;Outline&lt;/x-aura::button&gt;
&lt;x-aura::button variant="ghost"&gt;Ghost&lt;/x-aura::button&gt;
&lt;x-aura::button variant="danger"&gt;Danger&lt;/x-aura::button&gt;
&lt;x-aura::button variant="link" href="#"&gt;Link&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code class="w-full" title="2. Button Sizes (xs, sm, md, lg)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" size="xs">Extra Small (xs)</x-aura::button>
                <x-aura::button variant="primary" size="sm">Small (sm)</x-aura::button>
                <x-aura::button variant="primary" size="md">Medium (md)</x-aura::button>
                <x-aura::button variant="primary" size="lg">Large (lg)</x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button size="xs"&gt;Extra Small&lt;/x-aura::button&gt;
&lt;x-aura::button size="sm"&gt;Small&lt;/x-aura::button&gt;
&lt;x-aura::button size="md"&gt;Medium&lt;/x-aura::button&gt;
&lt;x-aura::button size="lg"&gt;Large&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Leading & Trailing Icons -->
    <x-aura::code class="w-full" title="3. Buttons with Icons">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" icon="plus">
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" icon-trailing="download">
                    Download Report
                </x-aura::button>

                <x-aura::button variant="outline" icon="pencil">
                    Edit Document
                </x-aura::button>

                <x-aura::button variant="danger" icon="trash-2">
                    Delete File
                </x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary" icon="plus"&gt;
    Create
&lt;/x-aura::button&gt;

&lt;x-aura::button variant="secondary" icon-trailing="download"&gt;
    Download Report
&lt;/x-aura::button&gt;

&lt;x-aura::button variant="danger" icon="trash-2"&gt;
    Delete File
&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Pill & Circular Buttons -->
    <x-aura::code class="w-full" title="4. Pill &amp; Circular Buttons">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" pill>Pill Primary</x-aura::button>
                <x-aura::button variant="secondary" pill icon="sparkles">Pill with Icon</x-aura::button>
                <x-aura::button variant="outline" pill icon-trailing="arrow-right">Explore</x-aura::button>
                <x-aura::button variant="primary" square pill icon="plus" />
                <x-aura::button variant="secondary" square pill icon="heart" />
                <x-aura::icon-button variant="primary" shape="circle" icon="bell" />
                <x-aura::icon-button variant="subtle" shape="circle" icon="user" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary" pill&gt;Pill Primary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="secondary" pill icon="sparkles"&gt;Pill with Icon&lt;/x-aura::button&gt;
&lt;x-aura::button variant="outline" pill icon-trailing="arrow-right"&gt;Explore&lt;/x-aura::button&gt;
&lt;x-aura::button variant="primary" square pill icon="plus" /&gt;
&lt;x-aura::icon-button variant="primary" shape="circle" icon="bell" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Square Icon Buttons -->
    <x-aura::code class="w-full" title="5. Square Icon Buttons">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" square size="xs" icon="pencil" />
                <x-aura::button variant="secondary" square size="sm" icon="eye" />
                <x-aura::button variant="outline" square size="md" icon="pencil" />
                <x-aura::button variant="danger" square size="lg" icon="trash-2" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary" square size="xs" icon="pencil" /&gt;
&lt;x-aura::button variant="secondary" square size="sm" icon="eye" /&gt;
&lt;x-aura::button variant="danger" square size="lg" icon="trash-2" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 6. Disabled & Loading States -->
    <x-aura::code class="w-full" title="6. Disabled &amp; Loading States">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" disabled>Primary Disabled</x-aura::button>
                <x-aura::button variant="secondary" disabled>Secondary Disabled</x-aura::button>
                <x-aura::button variant="primary" :loading="true">Processing...</x-aura::button>
                <x-aura::button variant="outline" :loading="true">Syncing Data</x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary" disabled&gt;Disabled Button&lt;/x-aura::button&gt;
&lt;x-aura::button variant="primary" :loading="true"&gt;Processing...&lt;/x-aura::button&gt;
&lt;x-aura::button variant="outline" :loading="true"&gt;Syncing Data&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 7. Real-World Action Card Patterns -->
    <x-aura::code class="w-full" title="7. Real-World Action Card Patterns">
        <x-slot:preview>
            <div class="w-full space-y-4">
                <!-- Save / Cancel Toolbar -->
                <x-aura::card class="p-4 bg-zinc-50/80 dark:bg-zinc-900/60 flex items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-zinc-900 dark:text-white">Unsaved Changes</p>
                        <p class="text-xs text-zinc-500">You have unsaved form modifications.</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-aura::button variant="ghost" size="sm">Discard</x-aura::button>
                        <x-aura::button variant="primary" size="sm">Save Changes</x-aura::button>
                    </div>
                </x-aura::card>

                <!-- Destructive Confirm Action Bar -->
                <div class="p-4 rounded-xl border border-red-200 dark:border-red-900/50 bg-red-50/50 dark:bg-red-950/20 flex items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400">
                            <x-aura::icon name="trash-2" size="sm" />
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-red-900 dark:text-red-200">Delete Organization</p>
                            <p class="text-xs text-red-700 dark:text-red-400">This operation cannot be undone.</p>
                        </div>
                    </div>
                    <x-aura::button variant="danger" size="sm">Permanently Delete</x-aura::button>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;div class="flex items-center gap-2"&gt;
    &lt;x-aura::button variant="ghost" size="sm"&gt;Discard&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="primary" size="sm"&gt;Save Changes&lt;/x-aura::button&gt;
&lt;/div&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
