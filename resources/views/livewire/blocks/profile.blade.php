<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.components')] #[Title('User Profile Block - Design Blocks | Aura Wire')] class extends Component {
    //
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Design Blocks</x-aura::kicker>
        <x-aura::heading level="1" size="lg">User Profile Block</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            User account management settings cards, avatar uploader, and profile controls.
        </x-aura::subheading>
    </div>

    <!-- User Profile Block Preview -->
    <x-aura::code class="w-full" title="Account Settings &amp; Profile Summary Block">
        <x-slot:preview>
            <div class="w-full max-w-xl mx-auto">
                <x-aura::card title="Public Profile Information" description="Update your account details and public avatar.">
                    <div class="space-y-6 py-2">
                        <!-- Avatar Uploader Row -->
                        <div class="flex items-center gap-5 p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
                            <x-aura::avatar initials="AM" status="online" size="xl" />
                            <div class="space-y-1 flex-1">
                                <h4 class="text-sm font-bold text-zinc-900 dark:text-white">Alex Morgan</h4>
                                <p class="text-xs text-zinc-500">Lead Systems Architect • PNG, JPG up to 5MB</p>
                                <div class="flex items-center gap-2 pt-1">
                                    <x-aura::button variant="outline" size="xs">Change Photo</x-aura::button>
                                    <x-aura::button variant="ghost" size="xs">Remove</x-aura::button>
                                </div>
                            </div>
                        </div>

                        <!-- Form Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <x-aura::field label="First Name">
                                <x-aura::input value="Alex" />
                            </x-aura::field>
                            <x-aura::field label="Last Name">
                                <x-aura::input value="Morgan" />
                            </x-aura::field>
                        </div>

                        <x-aura::field label="Email Address">
                            <x-aura::input type="email" value="alex.morgan@company.com">
                                <x-slot name="iconTrailing">
                                    <x-aura::badge variant="positive" size="sm">Verified</x-aura::badge>
                                </x-slot>
                            </x-aura::input>
                        </x-aura::field>
                    </div>

                    <x-slot name="footer">
                        <x-aura::button variant="ghost" size="sm">Cancel</x-aura::button>
                        <x-aura::button variant="primary" size="sm">Save Profile</x-aura::button>
                    </x-slot>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card title="Public Profile Information"&gt;
    &lt;x-aura::avatar initials="AM" status="online" size="xl" /&gt;
    &lt;x-aura::field label="Email Address"&gt;
        &lt;x-aura::input type="email" value="alex@company.com" /&gt;
    &lt;/x-aura::field&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>
