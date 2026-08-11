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
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Overlay</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Toast</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Temporary notification popups supporting status variants, dismiss triggers, action buttons, and live notification stacks.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::toast&gt;
            </code>
        </div>
    </div>

    <!-- 1. Status Varieties (Success, Warning, Danger, Info) -->
    <x-aura::code class="w-full" title="1. Status Toast Varieties">
        <x-slot:preview>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                <x-aura::toast variant="success" title="Project Published" description="Your project has been deployed to production environment (us-east-1)." />
                <x-aura::toast variant="info" title="System Update Available" description="Aura Wire v2.4.0 is ready for installation." />
                <x-aura::toast variant="warning" title="API Rate Limit Warning" description="You have consumed 85% of your hourly API request quota." />
                <x-aura::toast variant="danger" title="Database Connection Failed" description="Could not establish connection to primary database cluster." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::toast variant="success" title="Project Published" description="Your project has been deployed to production environment (us-east-1)." /&gt;
&lt;x-aura::toast variant="info" title="System Update Available" description="Aura Wire v2.4.0 is ready for installation." /&gt;
&lt;x-aura::toast variant="warning" title="API Rate Limit Warning" description="You have consumed 85% of your hourly API request quota." /&gt;
&lt;x-aura::toast variant="danger" title="Database Connection Failed" description="Could not establish connection to primary database cluster." /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Subtle & Neutral Card Toasts with Action Links -->
    <x-aura::code class="w-full" title="2. Subtle & Neutral Card Toasts with Action Links">
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
        <x-slot:codeSlot>&lt;x-aura::toast variant="subtle" title="New Message Received" description="Alex Rivera sent 3 new attachments in #design-system."&gt;
    &lt;x-slot:action&gt;
        &lt;a href="#" class="inline-flex items-center text-xs font-bold text-zinc-900 dark:text-white no-underline hover:opacity-80"&gt;
            Reply in Chat &rarr;
        &lt;/a&gt;
    &lt;/x-slot:action&gt;
&lt;/x-aura::toast&gt;

&lt;x-aura::toast variant="neutral" title="Backup Created Successfully" description="Automated daily SQL snapshot completed at 04:00 AM."&gt;
    &lt;x-slot:action&gt;
        &lt;a href="#" class="inline-flex items-center text-xs font-bold text-white dark:text-zinc-900 no-underline hover:opacity-80"&gt;
            View Backups &rarr;
        &lt;/a&gt;
    &lt;/x-slot:action&gt;
&lt;/x-aura::toast&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Live Interactive Toast Stack Trigger Demo -->
    <x-aura::code class="w-full" title="3. Live Interactive Toast Stack Trigger Demo">
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
        <x-slot:codeSlot>&lt;!-- Trigger Success Toast --&gt;
&lt;x-aura::button x-on:click="addToast('success', 'Project Settings Saved', 'Your team workspace and API webhooks have been updated successfully.')"&gt;
    Trigger Success Toast
&lt;/x-aura::button&gt;

&lt;!-- Trigger Error Toast --&gt;
&lt;x-aura::button x-on:click="addToast('danger', 'Payment Authorization Failed', 'Unable to process card ending in 4242. Please check your billing details.')"&gt;
    Trigger Error Toast
&lt;/x-aura::button&gt;

&lt;!-- Trigger Info Toast --&gt;
&lt;x-aura::button x-on:click="addToast('info', 'New Pull Request #142', 'Sarah Chen requested a code review on Add Toast Notification Stack.')"&gt;
    Trigger Info Toast
&lt;/x-aura::button&gt;

&lt;!-- Floating Toast Stack Container --&gt;
&lt;template x-teleport="body"&gt;
    &lt;div class="fixed top-5 right-5 z-50 flex flex-col gap-3"&gt;
        &lt;template x-for="t in toasts" :key="t.id"&gt;
            &lt;x-aura::toast /&gt;
        &lt;/template&gt;
    &lt;/div&gt;
&lt;/template&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
