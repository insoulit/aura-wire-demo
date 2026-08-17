<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('CTA Banner — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="6" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>Design Blocks</x-aura::kicker>

                <x-aura::heading level="1" size="lg">CTA Banners</x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- 1. Promotional CTA Banner -->
    <x-aura::code title="1. High Converting Promotional CTA Banner">

        <x-slot:preview>

            <x-aura::card>

                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">

                    <div class="space-y-3 max-w-xl">

                        <div class="flex items-center gap-2">

                            <x-aura::tag variant="success" size="sm">Special Offer</x-aura::tag>

                            <x-aura::text size="xs" variant="subtle" class="font-mono">Limited Time</x-aura::text>

                        </div>

                        <div class="space-y-1">

                            <x-aura::heading level="2" size="md">Ready to Upgrade Your Workflow?</x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Unlock access to all premium design blocks, Livewire components, and priority email support.
                            </x-aura::text>

                        </div>

                    </div>

                    <div class="flex items-center gap-3 shrink-0 w-full sm:w-auto">

                        <x-aura::button variant="subtle" size="md">
                            Explore
                        </x-aura::button>

                        <x-aura::button variant="primary" size="md">
                            Start
                        </x-aura::button>

                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-3 max-w-xl">
            <x-aura::tag variant="success" size="sm">Special Offer</x-aura::tag>
            <div class="space-y-1">
                <x-aura::heading level="2" size="md">Ready to Upgrade Your Workflow?</x-aura::heading>
                <x-aura::text variant="subtle" size="sm">
                    Unlock access to all premium design blocks and Livewire components.
                </x-aura::text>
            </div>
        </div>
        <div class="flex gap-3">
            <x-aura::button variant="subtle" size="md">Explore</x-aura::button>
            <x-aura::button variant="primary" size="md">Start</x-aura::button>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Newsletter CTA Banner -->
    <x-aura::code title="2. Newsletter Subscription CTA Card">

        <x-slot:preview>

            <x-aura::card>

                <div class="space-y-1.5 max-w-lg mx-auto text-center">

                    <x-aura::heading level="2" size="md">Join 10,000+ Laravel Developers</x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Get weekly component updates, performance tips, and tutorials delivered straight to your inbox.
                    </x-aura::text>

                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-2.5 w-full max-w-md mx-auto pt-4">

                    <div class="flex-1 w-full">

                        <x-aura::input placeholder="Enter your work email..." icon="mail" />

                    </div>

                    <x-aura::button variant="primary" size="md">
                        Subscribe
                    </x-aura::button>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="space-y-1.5 max-w-lg mx-auto text-center">
        <x-aura::heading level="2" size="md">Join 10,000+ Laravel Developers</x-aura::heading>
        <x-aura::text variant="subtle" size="sm">Get weekly component updates delivered to your inbox.</x-aura::text>
    </div>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-2.5 w-full max-w-md mx-auto pt-4">
        <div class="flex-1 w-full">
            <x-aura::input placeholder="Enter your work email..." icon="mail" />
        </div>
        <x-aura::button variant="primary" size="md">Subscribe</x-aura::button>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

</x-aura::stack>
