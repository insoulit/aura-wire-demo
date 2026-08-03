<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Modal - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Overlay Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Modal</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Accessible dialog windows for confirmation prompts, form interactions, and critical alert popups.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::modal&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Confirmation Modal -->
    <x-aura::code class="w-full" title="1. Interactive Confirmation Modal">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'demo-modal')">
                    Launch Confirmation Modal
                </x-aura::button>

                <x-aura::modal name="demo-modal" title="Confirm Project Deployment" description="Deploying to production environment (us-east-1).">
                    <div class="space-y-3 py-2">
                        <x-aura::text size="sm">
                            This action will release version <span class="font-mono font-bold text-zinc-900 dark:text-white">v2.4.0</span> to all live users. Please ensure all database migrations are prepared.
                        </x-aura::text>
                    </div>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'demo-modal')">Cancel</x-aura::button>
                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'demo-modal')">Start Deployment</x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button x-on:click="$dispatch('open-modal', 'demo-modal')"&gt;
    Launch Modal
&lt;/x-aura::button&gt;

&lt;x-aura::modal name="demo-modal" title="Confirm Deployment" description="..."&gt;
    &lt;x-aura::text size="sm"&gt;Deploy version v2.4.0?&lt;/x-aura::text&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Start Deployment&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Destructive Confirm Modal -->
    <x-aura::code class="w-full" title="2. Destructive Action Modal Pattern">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="danger" x-on:click="$dispatch('open-modal', 'delete-modal')">
                    <x-slot:icon><x-aura::icon.trash size="sm" /></x-slot:icon>
                    Delete Repository
                </x-aura::button>

                <x-aura::modal name="delete-modal" title="Delete Repository" description="Are you sure you want to delete this repository?">
                    <div class="p-3 rounded-lg bg-red-50 dark:bg-red-950/30 text-red-700 dark:text-red-300 text-xs">
                        Warning: All branches, pull requests, and commit logs associated with this repository will be permanently destroyed.
                    </div>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'delete-modal')">Cancel</x-aura::button>
                        <x-aura::button variant="danger" size="sm" x-on:click="$dispatch('close-modal', 'delete-modal')">Delete Permanently</x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button variant="danger" x-on:click="$dispatch('open-modal', 'delete-modal')"&gt;
    Delete Repository
&lt;/x-aura::button&gt;

&lt;x-aura::modal name="delete-modal" title="Delete Repository"&gt;
    &lt;p class="text-xs text-red-600"&gt;Warning: All data will be lost.&lt;/p&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="danger" size="sm"&gt;Delete Permanently&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
