<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Toast - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Overlay</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Toast</x-aura::heading>
            <x-aura::subheading size="md">
                Temporary notification popups supporting status variants, dismiss triggers, action buttons, and live notification stacks.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::toast variant="success" title="Changes Saved" message="Profile updated." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Status Varieties (Success, Warning, Danger, Info) -->
    <x-aura::code  title="1. Status Toast Varieties">
        <x-slot:preview>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                <x-aura::toast variant="success" title="Project Published" description="Your project has been deployed to production environment (us-east-1)." />
                <x-aura::toast variant="info" title="System Update Available" description="Aura Wire v2.4.0 is ready for installation." />
                <x-aura::toast variant="warning" title="API Rate Limit Warning" description="You have consumed 85% of your hourly API request quota." />
                <x-aura::toast variant="danger" title="Database Connection Failed" description="Could not establish connection to primary database cluster." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::toast variant="success" title="Project Published" description="Your project has been deployed to production environment (us-east-1)." />
<x-aura::toast variant="info" title="System Update Available" description="Aura Wire v2.4.0 is ready for installation." />
<x-aura::toast variant="warning" title="API Rate Limit Warning" description="You have consumed 85% of your hourly API request quota." />
<x-aura::toast variant="danger" title="Database Connection Failed" description="Could not establish connection to primary database cluster." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Subtle & Neutral Card Toasts with Action Links -->
    <x-aura::code  title="2. Subtle & Neutral Card Toasts with Action Links">
        <x-slot:preview>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                <x-aura::toast variant="subtle" title="New Message Received" description="Alex Rivera sent 3 new attachments in #design-system.">
                    <x-slot:action>
                        <a href="#" class="inline-flex items-center text-xs font-bold text-zinc-900 dark:text-white no-underline hover:opacity-80 transition-opacity">
                            Reply in Chat &rarr;
                        </a>
                    </x-slot:action>
                </x-aura::toast>

                <x-aura::toast variant="neutral" title="Backup Created Successfully" description="Automated daily SQL snapshot completed at 04:00 AM.">
                    <x-slot:action>
                        <a href="#" class="inline-flex items-center text-xs font-bold text-white dark:text-zinc-900 no-underline hover:opacity-80 transition-opacity">
                            View Backups &rarr;
                        </a>
                    </x-slot:action>
                </x-aura::toast>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::toast variant="subtle" title="New Message Received" description="Alex Rivera sent 3 new attachments in #design-system.">
    <x-slot:action>
        <a href="#" class="inline-flex items-center text-xs font-bold text-zinc-900 dark:text-white no-underline hover:opacity-80">
            Reply in Chat →
        </a>
    </x-slot:action>
</x-aura::toast>

<x-aura::toast variant="neutral" title="Backup Created Successfully" description="Automated daily SQL snapshot completed at 04:00 AM.">
    <x-slot:action>
        <a href="#" class="inline-flex items-center text-xs font-bold text-white dark:text-zinc-900 no-underline hover:opacity-80">
            View Backups →
        </a>
    </x-slot:action>
</x-aura::toast>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Live Interactive Toast Stack Trigger Demo -->
    <x-aura::code  title="3. Live Interactive Toast Stack Trigger Demo">
        <x-slot:preview>
            <div
                x-data="{
                    toasts: [],
                    addToast(variant, title, description) {
                        const id = Date.now();
                        this.toasts.push({ id, variant, title, description });
                        setTimeout(() => {
                            this.toasts = this.toasts.filter(t => t.id !== id);
                        }, 4000);
                    }
                }"
                class="w-full flex flex-col items-center gap-4"
            >
                <div class="flex flex-wrap items-center gap-3">
                    <x-aura::button variant="primary" size="sm" x-on:click="addToast('success', 'Project Settings Saved', 'Your team workspace and API webhooks have been updated successfully.')">
                        Trigger Success Toast
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm" x-on:click="addToast('danger', 'Payment Authorization Failed', 'Unable to process card ending in 4242. Please check your billing details.')">
                        Trigger Error Toast
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm" x-on:click="addToast('info', 'New Pull Request #142', 'Sarah Chen requested a code review on Add Toast Notification Stack.')">
                        Trigger Info Toast
                    </x-aura::button>
                </div>

                {{-- Fixed Floating Toast Stack --}}
                <template x-teleport="body">
                    <div class="fixed top-5 right-5 z-50 flex flex-col gap-3 max-w-sm pointer-events-none">
                        <template x-for="t in toasts" :key="t.id">
                            <x-aura::toast
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-x-8"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-8"
                            />
                        </template>
                    </div>
                </template>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Trigger Success Toast -->
<x-aura::button x-on:click="addToast('success', 'Project Settings Saved', 'Your team workspace and API webhooks have been updated successfully.')">
    Trigger Success Toast
</x-aura::button>

<!-- Trigger Error Toast -->
<x-aura::button x-on:click="addToast('danger', 'Payment Authorization Failed', 'Unable to process card ending in 4242. Please check your billing details.')">
    Trigger Error Toast
</x-aura::button>

<!-- Trigger Info Toast -->
<x-aura::button x-on:click="addToast('info', 'New Pull Request #142', 'Sarah Chen requested a code review on Add Toast Notification Stack.')">
    Trigger Info Toast
</x-aura::button>

<!-- Floating Toast Stack Container -->
<template x-teleport="body">
    <div class="fixed top-5 right-5 z-50 flex flex-col gap-3">
        <template x-for="t in toasts" :key="t.id">
            <x-aura::toast />
        </template>
    </div>
</template>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
