<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Feature Grid — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="4" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>
                    Design Blocks
                </x-aura::kicker>

                <x-aura::heading level="1" size="lg">
                    Feature Grid
                </x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- Feature Grid Block Preview -->
    <x-aura::code title="3 Column Feature Highlight Block">

        <x-slot:preview>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 w-full">

                <!-- Feature 1: Enterprise Security -->
                <x-aura::card>

                    <div class="space-y-3">

                        <div class="h-10 w-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200/80 dark:border-zinc-700/80 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                            <x-aura::icon name="shield-check" size="sm" />
                        </div>

                        <div class="space-y-1">

                            <x-aura::heading level="3" size="sm">
                                Enterprise Access Control
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Role-based permissions, encrypted audit logging, and single sign-on integration built in.
                            </x-aura::text>

                        </div>

                    </div>

                    <div class="pt-2">

                        <x-aura::tag variant="neutral" size="sm">
                            SOC 2 Ready
                        </x-aura::tag>

                    </div>

                </x-aura::card>

                <!-- Feature 2: High Performance -->
                <x-aura::card>

                    <div class="space-y-3">

                        <div class="h-10 w-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200/80 dark:border-zinc-700/80 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                            <x-aura::icon name="zap" size="sm" />
                        </div>

                        <div class="space-y-1">

                            <x-aura::heading level="3" size="sm">
                                Edge State Hydration
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Ultra-low latency reactive state diffing powered natively by Livewire v3 Volt engine.
                            </x-aura::text>

                        </div>

                    </div>

                    <div class="pt-2">

                        <x-aura::tag variant="neutral" size="sm">
                            Sub-Millisecond
                        </x-aura::tag>

                    </div>

                </x-aura::card>

                <!-- Feature 3: Developer Experience -->
                <x-aura::card>

                    <div class="space-y-3">

                        <div class="h-10 w-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200/80 dark:border-zinc-700/80 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                            <x-aura::icon name="sparkles" size="sm" />
                        </div>

                        <div class="space-y-1">

                            <x-aura::heading level="3" size="sm">
                                Native Blade Component API
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Zero build step required. Copy-paste production ready Blade tags with full IDE autocompletion.
                            </x-aura::text>

                        </div>

                    </div>

                    <div class="pt-2">

                        <x-aura::tag variant="neutral" size="sm">
                            Developer First
                        </x-aura::tag>

                    </div>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 w-full">
                    <x-aura::card>
                        <div class="space-y-3">
                            <div class="h-10 w-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200/80 flex items-center justify-center">
                                <x-aura::icon name="shield-check" size="sm" />
                            </div>
                            <div class="space-y-1">
                                <x-aura::heading level="3" size="sm">
                                    Enterprise Access Control
                                </x-aura::heading>
                                <x-aura::text variant="subtle" size="sm">
                                    Role-based permissions, encrypted audit logging, and SSO built in.
                                </x-aura::text>
                            </div>
                        </div>
                        <div class="pt-2">
                            <x-aura::tag variant="neutral" size="sm">
                                SOC 2 Ready
                            </x-aura::tag>
                        </div>
                    </x-aura::card>
                </div>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::flex>
