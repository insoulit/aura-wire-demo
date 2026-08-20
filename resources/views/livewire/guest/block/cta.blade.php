<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('CTA Banner — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6" class="py-6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                CTA Banners
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- 1. Promotional CTA Banner -->
    <x-aura::code title="1. High Converting Promotional CTA Banner">

        <x-slot:preview>

            <x-aura::card>

                <x-aura::flex direction="col" md="row" align="start" justify="between" gap="6">

                    <x-aura::flex direction="col" gap="3" class="max-w-xl">

                        <x-aura::flex align="center" gap="2">

                            <x-aura::tag variant="neutral" size="sm">
                                Special Offer
                            </x-aura::tag>

                            <x-aura::text size="sm" variant="subtle" class="font-mono">
                                Limited Time
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::heading level="2" size="md">
                                Ready to Upgrade Your Workflow?
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Unlock access to all premium design blocks, Livewire components, and priority email support.
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="3" class="shrink-0 w-full sm:w-auto">

                        <x-aura::button variant="secondary" size="md">
                            Explore
                        </x-aura::button>

                        <x-aura::button variant="primary" size="md">
                            Start
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>
                    <x-aura::flex direction="col" md="row" align="center" justify="between" gap="6">
                        <x-aura::flex direction="col" gap="3" class="max-w-xl">
                            <x-aura::tag variant="neutral" size="sm">
                                Special Offer
                            </x-aura::tag>

                            <x-aura::flex direction="col" gap="1">
                                <x-aura::heading level="2" size="md">
                                    Ready to Upgrade Your Workflow?
                                </x-aura::heading>

                                <x-aura::text variant="subtle" size="sm">
                                    Unlock access to all premium design blocks and Livewire components.
                                </x-aura::text>
                            </x-aura::flex>
                        </x-aura::flex>

                        <x-aura::flex align="center" gap="3">
                            <x-aura::button variant="secondary" size="md">
                                Explore
                            </x-aura::button>

                            <x-aura::button variant="primary" size="md">
                                Start
                            </x-aura::button>
                        </x-aura::flex>
                    </x-aura::flex>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Newsletter CTA Banner -->
    <x-aura::code title="2. Newsletter Subscription CTA Card">

        <x-slot:preview>

            <x-aura::card>

                <x-aura::flex direction="col" align="center" gap="2" class="max-w-lg mx-auto text-center">

                    <x-aura::heading level="2" size="md">
                        Join 10,000+ Laravel Developers
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Get weekly component updates, performance tips, and tutorials delivered straight to your inbox.
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" sm="row" align="center" justify="center" gap="2.5" class="w-full max-w-md mx-auto pt-4">

                    <div class="flex-1 w-full">
                        <x-aura::input placeholder="Enter your work email..." icon="mail" />
                    </div>

                    <x-aura::button variant="primary" size="md">
                        Subscribe
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>
                    <x-aura::flex direction="col" align="center" gap="2" class="max-w-lg mx-auto text-center">
                        <x-aura::heading level="2" size="md">
                            Join 10,000+ Laravel Developers
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Get weekly component updates delivered to your inbox.
                        </x-aura::text>
                    </x-aura::flex>

                    <x-aura::flex direction="col" sm="row" align="center" justify="center" gap="2.5" class="w-full max-w-md mx-auto pt-4">
                        <div class="flex-1 w-full">
                            <x-aura::input placeholder="Enter your work email..." icon="mail" />
                        </div>

                        <x-aura::button variant="primary" size="md">
                            Subscribe
                        </x-aura::button>
                    </x-aura::flex>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
