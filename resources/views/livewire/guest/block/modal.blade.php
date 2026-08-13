<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Modal — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Modal</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" >
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- 1. Interactive Trigger Modals -->
    <x-aura::code  title="1. Live Interactive Overlay Modals">
        <x-slot:preview>
            <div class="p-8 w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-50/50 dark:bg-zinc-900/40 text-center flex flex-col items-center justify-center space-y-4">
                <div class="space-y-1 max-w-md">
                    <x-aura::heading level="3" size="sm">Test Interactive Modal Dialogs</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">Click the buttons below to open accessible, teleported modal overlays with backdrop blur.</x-aura::text>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                    <!-- Form Modal Trigger -->
                    <x-aura::button variant="primary" size="md" x-data x-on:click="$dispatch('open-modal', 'create-key-demo-modal')">
                        Open Form Modal
                    </x-aura::button>

                    <!-- Destructive Modal Trigger -->
                    <x-aura::button variant="danger" size="md" x-data x-on:click="$dispatch('open-modal', 'delete-project-demo-modal')">
                        Open Danger Modal
                    </x-aura::button>
                </div>

                <!-- Form Modal Overlay Component -->
                <x-aura::modal name="create-key-demo-modal" title="Generate API Access Key" description="Create a secret access key for SDK authentication." maxWidth="lg">
                    <div class="space-y-4 py-2">
                        <x-aura::field label="Token Name">
                            <x-aura::input placeholder="e.g. Staging Webhook Worker" />
                        </x-aura::field>
                        <x-aura::field label="Expiration Scope">
                            <x-aura::select>
                                <option>90 Days (Recommended)</option>
                                <option>30 Days</option>
                                <option>Never Expire</option>
                            </x-aura::select>
                        </x-aura::field>
                    </div>
                    <x-slot:footer>
                        <x-aura::button variant="subtle" size="sm" x-on:click="open = false">Cancel</x-aura::button>
                        <x-aura::button variant="primary" size="sm"><span>Create</span></x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>

                <!-- Destructive Danger Modal Overlay Component -->
                <x-aura::modal name="delete-project-demo-modal" variant="centered" title="Delete Deployment Environment?" description="This action will permanently purge all server instances and backups." maxWidth="md">
                    <div class="p-3 rounded-lg bg-red-50 dark:bg-red-950/40 border border-red-200/80 dark:border-red-800/40 text-xs text-red-700 dark:text-red-300 font-mono text-center">
                        Target: production-us-east-1
                    </div>
                    <x-slot:footer>
                        <x-aura::button variant="subtle" size="sm" x-on:click="open = false">Cancel</x-aura::button>
                        <x-aura::button variant="danger" size="sm">Confirm Deletion</x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;!-- Modal Trigger Button --&gt;
&lt;x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'create-key-modal')"&gt;
    Open Modal
&lt;/x-aura::button&gt;

&lt;!-- Modal Overlay Component --&gt;
&lt;x-aura::modal name="create-key-modal" title="Generate API Access Key" description="Create a secret access key for authentication."&gt;
    &lt;div class="space-y-4"&gt;
        &lt;x-aura::field label="Token Name"&gt;
            &lt;x-aura::input placeholder="e.g. Production Worker" /&gt;
        &lt;/x-aura::field&gt;
    &lt;/div&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="subtle" size="sm" x-on:click="open = false"&gt;Cancel&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;&lt;span&gt;Create&lt;/span&gt;&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot>
    </x-aura::code>

    <!-- 2. Clean Modal Dialog Card Layout Preview -->
    <x-aura::code  title="2. Modal Card Dialog Structure">
        <x-slot:preview>
            <div class="w-full max-w-lg mx-auto">
                <x-aura::card >
                    <div class="flex items-start justify-between gap-4 border-b border-zinc-100 dark:border-zinc-800 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shrink-0">
                                <x-aura::icon name="key"  size="sm" />
                            </div>
                            <div>
                                <x-aura::heading level="3" size="sm">Create Access Token</x-aura::heading>
                                <x-aura::text variant="subtle" size="xs">Configure API permissions for external services.</x-aura::text>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <x-aura::field label="Token Name">
                            <x-aura::input placeholder="e.g. Analytics Pipeline" />
                        </x-aura::field>
                    </div>
                    <div class="flex items-center justify-end gap-2 pt-3 border-t border-zinc-100 dark:border-zinc-800">
                        <x-aura::button variant="subtle" size="sm">Cancel</x-aura::button>
                        <x-aura::button variant="primary" size="sm"><span>Create</span></x-aura::button>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-6 space-y-5 shadow-xl border border-zinc-200 dark:border-zinc-800"&gt;
    &lt;div class="flex items-start justify-between border-b border-zinc-100 dark:border-zinc-800 pb-4"&gt;
        &lt;div class="flex items-center gap-3"&gt;
            &lt;div class="h-10 w-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center"&gt;
                &lt;x-aura::icon name="key" class="w-5 h-5" /&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;x-aura::heading level="3" size="sm"&gt;Create Access Token&lt;/x-aura::heading&gt;
                &lt;x-aura::text variant="subtle" size="xs"&gt;Configure API permissions.&lt;/x-aura::text&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="space-y-4"&gt;
        &lt;x-aura::field label="Token Name"&gt;
            &lt;x-aura::input placeholder="e.g. Analytics Pipeline" /&gt;
        &lt;/x-aura::field&gt;
    &lt;/div&gt;
    &lt;div class="flex items-center justify-end gap-2 pt-3 border-t border-zinc-100 dark:border-zinc-800"&gt;
        &lt;x-aura::button variant="subtle" size="sm"&gt;Cancel&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;&lt;span&gt;Create&lt;/span&gt;&lt;/x-aura::button&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>
