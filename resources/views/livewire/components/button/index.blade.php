<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Button - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Action Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Button</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Polymorphic button and link component with variant styles, icon support, loading states, and size scales.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::button&gt;
            </code>
        </div>
    </div>

    <!-- 1. Variants -->
    <x-aura::code class="w-full" title="1. Button Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary">Primary</x-aura::button>
                <x-aura::button variant="secondary">Secondary</x-aura::button>
                <x-aura::button variant="subtle">Subtle</x-aura::button>
                <x-aura::button variant="outline">Outline</x-aura::button>
                <x-aura::button variant="ghost">Ghost</x-aura::button>
                <x-aura::button variant="danger">Danger</x-aura::button>
                <x-aura::button variant="link" href="#">Link Button</x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Primary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="secondary"&gt;Secondary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="subtle"&gt;Subtle&lt;/x-aura::button&gt;
&lt;x-aura::button variant="outline"&gt;Outline&lt;/x-aura::button&gt;
&lt;x-aura::button variant="ghost"&gt;Ghost&lt;/x-aura::button&gt;
&lt;x-aura::button variant="danger"&gt;Danger&lt;/x-aura::button&gt;
&lt;x-aura::button variant="link" href="#"&gt;Link Button&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code class="w-full" title="2. Button Sizes">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" size="xs">Extra Small (xs)</x-aura::button>
                <x-aura::button variant="primary" size="sm">Small (sm)</x-aura::button>
                <x-aura::button variant="primary" size="md">Medium (md)</x-aura::button>
                <x-aura::button variant="primary" size="lg">Large (lg)</x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button size="xs"&gt;Extra Small (xs)&lt;/x-aura::button&gt;
&lt;x-aura::button size="sm"&gt;Small (sm)&lt;/x-aura::button&gt;
&lt;x-aura::button size="md"&gt;Medium (md)&lt;/x-aura::button&gt;
&lt;x-aura::button size="lg"&gt;Large (lg)&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Buttons with Icons -->
    <x-aura::code class="w-full" title="3. Buttons with Icons">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary">
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </x-slot:icon>
                    Create Project
                </x-aura::button>

                <x-aura::button variant="secondary">
                    Download Report
                    <x-slot:iconTrailing>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </x-slot:iconTrailing>
                </x-aura::button>

                <x-aura::button variant="outline">
                    <x-slot:icon>
                        <x-aura::icon.edit size="sm" />
                    </x-slot:icon>
                    Edit Document
                </x-aura::button>

                <x-aura::button variant="danger">
                    <x-slot:icon>
                        <x-aura::icon.trash size="sm" />
                    </x-slot:icon>
                    Delete File
                </x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;
    &lt;x-slot:icon&gt;&lt;svg class="w-4 h-4" .../&gt;&lt;/x-slot:icon&gt;
    Create Project
&lt;/x-aura::button&gt;

&lt;x-aura::button variant="secondary"&gt;
    Download Report
    &lt;x-slot:iconTrailing&gt;&lt;svg class="w-4 h-4" .../&gt;&lt;/x-slot:iconTrailing&gt;
&lt;/x-aura::button&gt;

&lt;x-aura::button variant="danger"&gt;
    &lt;x-slot:icon&gt;&lt;x-aura::icon.trash size="sm" /&gt;&lt;/x-slot:icon&gt;
    Delete File
&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Square & Circular Icon Buttons -->
    <x-aura::code class="w-full" title="4. Square Icon Buttons">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" square size="xs">
                    <x-aura::icon.edit size="xs" />
                </x-aura::button>
                <x-aura::button variant="secondary" square size="sm">
                    <x-aura::icon.show size="sm" />
                </x-aura::button>
                <x-aura::button variant="outline" square size="md">
                    <x-aura::icon.edit size="sm" />
                </x-aura::button>
                <x-aura::button variant="danger" square size="lg">
                    <x-aura::icon.trash size="md" />
                </x-aura::button>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="primary" square size="xs"&gt;
    &lt;x-aura::icon.edit size="xs" /&gt;
&lt;/x-aura::button&gt;

&lt;x-aura::button variant="secondary" square size="sm"&gt;
    &lt;x-aura::icon.show size="sm" /&gt;
&lt;/x-aura::button&gt;

&lt;x-aura::button variant="danger" square size="lg"&gt;
    &lt;x-aura::icon.trash size="md" /&gt;
&lt;/x-aura::button&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Disabled & Loading States -->
    <x-aura::code class="w-full" title="5. Disabled & Loading States">
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

    <!-- 6. Real-World Dialog & Form Actions Pattern -->
    <x-aura::code class="w-full" title="6. Real-World Action Card Patterns">
        <x-slot:preview>
            <div class="w-full space-y-4">
                <!-- Save / Cancel Toolbar -->
                <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 flex items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-zinc-900 dark:text-white">Unsaved Changes</p>
                        <p class="text-xs text-zinc-500">You have unsaved form modifications.</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-aura::button variant="ghost" size="sm">Discard</x-aura::button>
                        <x-aura::button variant="primary" size="sm">Save Changes</x-aura::button>
                    </div>
                </div>

                <!-- Destructive Confirm Action Bar -->
                <div class="p-4 rounded-xl border border-red-200 dark:border-red-900/50 bg-red-50/50 dark:bg-red-950/20 flex items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <span class="p-2 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400">
                            <x-aura::icon.trash size="sm" />
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
        <x-slot:codeSlot>&lt;!-- Save / Cancel Action Bar --&gt;
&lt;div class="flex items-center justify-between gap-4"&gt;
    &lt;span class="text-sm font-semibold"&gt;Unsaved Changes&lt;/span&gt;
    &lt;div class="flex gap-2"&gt;
        &lt;x-aura::button variant="ghost" size="sm"&gt;Discard&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Save Changes&lt;/x-aura::button&gt;
    &lt;/div&gt;
&lt;/div&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
