<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Feature Grid — Guest Portal | Aura Wire')] 
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
                Feature Grid
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Feature Grid Block Preview -->
    <x-aura::code title="3 Column Feature Highlight Block">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="3" gap="5" class="w-full">

                <!-- Feature 1: Enterprise Security -->
                <x-aura::card gap="3">

                    <x-aura::icon name="shield-check" size="md" :container="true" />

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Enterprise Access Control
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Role based permissions, encrypted audit logging, and single sign on integration built in.
                        </x-aura::text>

                    </x-aura::flex>

                    <div class="pt-2 mt-auto">

                        <x-aura::tag variant="neutral" size="sm">
                            SOC 2 Ready
                        </x-aura::tag>

                    </div>

                </x-aura::card>

                <!-- Feature 2: High Performance -->
                <x-aura::card gap="3">

                    <x-aura::icon name="zap" size="md" :container="true" />

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Edge State Hydration
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Ultra fast reactive state diffing powered natively by Livewire v3 Volt engine.
                        </x-aura::text>

                    </x-aura::flex>

                    <div class="pt-2 mt-auto">

                        <x-aura::tag variant="neutral" size="sm">
                            Sub Millisecond
                        </x-aura::tag>

                    </div>

                </x-aura::card>

                <!-- Feature 3: Developer Experience -->
                <x-aura::card gap="3">

                    <x-aura::icon name="sparkles" size="md" :container="true" />

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Native Blade Component API
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Zero build step required. Copy paste production ready Blade tags with full IDE autocompletion.
                        </x-aura::text>

                    </x-aura::flex>

                    <div class="pt-2 mt-auto">

                        <x-aura::tag variant="neutral" size="sm">
                            Developer First
                        </x-aura::tag>

                    </div>

                </x-aura::card>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="3" gap="5" class="w-full">
                    <x-aura::card gap="3">
                        <x-aura::icon name="shield-check" size="md" :container="true" />

                        <x-aura::flex direction="col" gap="1">
                            <x-aura::heading level="3" size="sm">
                                Enterprise Access Control
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Role based permissions, encrypted audit logging, and SSO built in.
                            </x-aura::text>
                        </x-aura::flex>

                        <div class="pt-2 mt-auto">
                            <x-aura::tag variant="neutral" size="sm">
                                SOC 2 Ready
                            </x-aura::tag>
                        </div>
                    </x-aura::card>
                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
