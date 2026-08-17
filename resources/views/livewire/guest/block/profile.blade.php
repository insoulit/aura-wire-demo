<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('User Profile — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="4" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>Design Blocks</x-aura::kicker>

                <x-aura::heading level="1" size="lg">User Profile</x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- User Profile Block Preview -->
    <x-aura::code title="Account Settings and Profile Summary Block">

        <x-slot:preview>

            <div class="w-full max-w-xl mx-auto">

                <x-aura::card title="Public Profile Information" description="Update your account details and public avatar.">

                    <div class="space-y-6 py-2">

                        <!-- Avatar Uploader Row -->
                        <div class="flex items-center gap-5 p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">

                            <x-aura::avatar initials="AM" status="online" size="xl" />

                            <div class="space-y-1 flex-1">

                                <x-aura::heading level="4" size="xs">Alex Morgan</x-aura::heading>

                                <x-aura::text size="xs" variant="subtle">Lead Systems Architect • PNG, JPG up to 5MB</x-aura::text>

                                <div class="flex items-center gap-2 pt-1">

                                    <x-aura::button variant="outline" size="xs">
                                        Change
                                    </x-aura::button>

                                    <x-aura::button variant="ghost" size="xs">
                                        Remove
                                    </x-aura::button>

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

                        <x-aura::button variant="ghost" size="sm">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Save
                        </x-aura::button>

                    </x-slot>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot name="codeSlot">@verbatim<x-aura::card title="Public Profile Information" description="Update your account details and public avatar.">
    <div class="space-y-6 py-2">
        <!-- Avatar Uploader Row -->
        <div class="flex items-center gap-5 p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
            <x-aura::avatar initials="AM" status="online" size="xl" />
            <div class="space-y-1 flex-1">
                <x-aura::heading level="4" size="xs">Alex Morgan</x-aura::heading>
                <x-aura::text size="xs" variant="subtle">Lead Systems Architect</x-aura::text>
                <div class="flex items-center gap-2 pt-1">
                    <x-aura::button variant="outline" size="xs">Change</x-aura::button>
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
        <x-aura::button variant="primary" size="sm">Save</x-aura::button>
    </x-slot>
</x-aura::card>@endverbatim</x-slot>

    </x-aura::code>

</x-aura::stack>
