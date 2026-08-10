<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.components')] 
#[Title('Modal - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Overlay</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Modal</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Accessible dialog windows supporting standard forms, centered alert popups, destructive prompts, and wide modal layouts.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::modal&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Confirmation Modal -->
    <x-aura::code class="w-full" title="1. Standard Form & Confirmation Modal">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'demo-modal')">
                    Launch Standard Modal
                </x-aura::button>

                <x-aura::modal name="demo-modal" title="Confirm Project Deployment" description="Deploying to production environment (us-east-1).">
                    <div class="space-y-3 py-1">
                        <x-aura::text size="sm">
                            This action will release version <span class="font-mono font-bold text-zinc-900 dark:text-white">v2.4.0</span> to all live users. Please ensure database migrations are executed.
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

    <!-- 2. Centered Success Alert Modal -->
    <x-aura::code class="w-full" title="2. Centered Icon Alert Modal (variant='centered')">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="subtle" x-on:click="$dispatch('open-modal', 'success-modal')">
                    Launch Centered Success Alert
                </x-aura::button>

                <x-aura::modal name="success-modal" variant="centered" title="Payment Completed!" description="Your order #ORD-9482 has been confirmed. A receipt was sent to your email.">
                    <x-slot:footer>
                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'success-modal')">Continue to Dashboard</x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::modal name="success-modal" variant="centered" title="Payment Completed!" description="..."&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Continue&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Destructive Danger Confirm Modal -->
    <x-aura::code class="w-full" title="3. Destructive Action Modal (variant='danger')">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="danger" x-on:click="$dispatch('open-modal', 'delete-modal')">
                    Delete Project Repository
                </x-aura::button>

                <x-aura::modal name="delete-modal" variant="danger" title="Delete Repository" description="Are you sure you want to permanently delete this repository?">
                    <div class="p-3 rounded-xl bg-red-50 dark:bg-red-950/30 text-red-700 dark:text-red-300 text-xs leading-relaxed border border-red-200 dark:border-red-800/60">
                        Warning: All branches, pull requests, and commit logs associated with this repository will be permanently destroyed.
                    </div>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'delete-modal')">Cancel</x-aura::button>
                        <x-aura::button variant="danger" size="sm" x-on:click="$dispatch('close-modal', 'delete-modal')">Delete Permanently</x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::modal name="delete-modal" variant="danger" title="Delete Repository"&gt;
    &lt;div class="p-3 rounded-xl bg-red-50 text-red-700"&gt;
        Warning: All data will be lost.
    &lt;/div&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="danger" size="sm"&gt;Delete Permanently&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Wide Form Modal (maxWidth='2xl') -->
    <x-aura::code class="w-full" title="4. Large Form Modal (maxWidth='2xl')">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::button variant="outline" x-on:click="$dispatch('open-modal', 'wide-modal')">
                    Launch Wide Form Modal
                </x-aura::button>

                <x-aura::modal name="wide-modal" maxWidth="2xl" title="Create New Team Member" description="Add a new developer or designer to your organization.">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
                        <x-aura::input label="Full Name" placeholder="Alex Rivera" required />
                        <x-aura::input label="Email Address" type="email" placeholder="alex@company.com" required />
                        <x-aura::select label="Role" :options="['Developer', 'Designer', 'Product Manager', 'Admin']" required />
                        <x-aura::select label="Department" :options="['Engineering', 'Design', 'Product', 'Sales']" required />
                    </div>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'wide-modal')">Cancel</x-aura::button>
                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'wide-modal')">Create Member</x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::modal name="wide-modal" maxWidth="2xl" title="Create Team Member"&gt;
    &lt;div class="grid grid-cols-2 gap-4"&gt;
        &lt;x-aura::input label="Full Name" /&gt;
        &lt;x-aura::input label="Email Address" /&gt;
    &lt;/div&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Create Member&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
