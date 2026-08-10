<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('User Profile — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-4 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">User Profile</x-aura::heading>
            </div>
            <x-aura::button href="/guest" variant="subtle" size="sm" class="shrink-0 gap-1.5">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 shrink-0" />
                <span>Back</span>
            </x-aura::button>
        </div>
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
        <x-slot name="codeSlot">&lt;x-aura::card title="Public Profile Information" description="Update your account details and public avatar."&gt;
    &lt;div class="space-y-6 py-2"&gt;
        &lt;!-- Avatar Uploader Row --&gt;
        &lt;div class="flex items-center gap-5 p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border"&gt;
            &lt;x-aura::avatar initials="AM" status="online" size="xl" /&gt;
            &lt;div class="space-y-1 flex-1"&gt;
                &lt;h4 class="text-sm font-bold"&gt;Alex Morgan&lt;/h4&gt;
                &lt;p class="text-xs text-zinc-500"&gt;Lead Systems Architect&lt;/p&gt;
                &lt;div class="flex items-center gap-2 pt-1"&gt;
                    &lt;x-aura::button variant="outline" size="xs"&gt;Change Photo&lt;/x-aura::button&gt;
                    &lt;x-aura::button variant="ghost" size="xs"&gt;Remove&lt;/x-aura::button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;!-- Form Grid --&gt;
        &lt;div class="grid grid-cols-1 sm:grid-cols-2 gap-4"&gt;
            &lt;x-aura::field label="First Name"&gt;
                &lt;x-aura::input value="Alex" /&gt;
            &lt;/x-aura::field&gt;
            &lt;x-aura::field label="Last Name"&gt;
                &lt;x-aura::input value="Morgan" /&gt;
            &lt;/x-aura::field&gt;
        &lt;/div&gt;

        &lt;x-aura::field label="Email Address"&gt;
            &lt;x-aura::input type="email" value="alex.morgan@company.com"&gt;
                &lt;x-slot name="iconTrailing"&gt;
                    &lt;x-aura::badge variant="positive" size="sm"&gt;Verified&lt;/x-aura::badge&gt;
                &lt;/x-slot&gt;
            &lt;/x-aura::input&gt;
        &lt;/x-aura::field&gt;
    &lt;/div&gt;

    &lt;x-slot name="footer"&gt;
        &lt;x-aura::button variant="ghost" size="sm"&gt;Cancel&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Save Profile&lt;/x-aura::button&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>
