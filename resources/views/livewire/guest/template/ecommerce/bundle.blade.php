<?php

use Livewire\Volt\Component;

new class extends Component {
    public function addBundle(): void
    {
        $this->dispatch('add-bundle');
    }
};

?>

<!-- Featured Bundle Spotlight Card -->
<div id="bundle">

    <x-aura::card padding="xl" gap="8">

        <x-aura::grid cols="1" lg="2" gap="8">

            <!-- Bundle Copy & Itemization -->
            <x-aura::flex direction="col" gap="6">

                <x-aura::flex align="center" gap="3">

                    <x-aura::kicker>
                        EXCLUSIVE BUNDLE OFFER
                    </x-aura::kicker>

                    <x-aura::badge variant="neutral" size="sm">
                        Save $140
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::heading level="2" size="xl">
                    The Master Acoustic and Desk Studio Bundle
                </x-aura::heading>

                <x-aura::subheading size="md">
                    Everything required for an uncompromising workspace setup. Includes our flagship wireless headphones, mechanical keyboard, precision lamp, and merino wool desk pad.
                </x-aura::subheading>

                <x-aura::card padding="sm" divided="false" gap="3">

                    <x-aura::flex direction="col" gap="3">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::flex align="center" gap="3">

                                <x-aura::badge variant="neutral" size="sm">
                                    1
                                </x-aura::badge>

                                <x-aura::text size="sm" weight="semibold">
                                    Aura Studio Wireless ANC Headphones
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::text size="sm" variant="subtle">
                                $299 Value
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::separator />

                        <x-aura::flex align="center" justify="between">

                            <x-aura::flex align="center" gap="3">

                                <x-aura::badge variant="neutral" size="sm">
                                    2
                                </x-aura::badge>

                                <x-aura::text size="sm" weight="semibold">
                                    Compact Wireless Mechanical Keyboard
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::text size="sm" variant="subtle">
                                $189 Value
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::separator />

                        <x-aura::flex align="center" justify="between">

                            <x-aura::flex align="center" gap="3">

                                <x-aura::badge variant="neutral" size="sm">
                                    3
                                </x-aura::badge>

                                <x-aura::text size="sm" weight="semibold">
                                    Minimalist Precision Aluminum Desk Lamp
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::text size="sm" variant="subtle">
                                $129 Value
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::flex align="center" gap="4">

                    <x-aura::button wire:click="addBundle" variant="primary" size="lg" icon="sparkles">
                        Bundle
                    </x-aura::button>

                    <x-aura::text size="sm" variant="subtle">
                        Instant express shipping included
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <!-- Bundle Summary Stat Box -->
            <x-aura::flex direction="col" justify="between" gap="6">

                <x-aura::card padding="lg" divided="false" gap="6">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::kicker>
                            BUNDLE VALUATION
                        </x-aura::kicker>

                        <x-aura::badge variant="subtle" size="sm">
                            25 Percent Off
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::flex align="baseline" gap="3">

                        <x-aura::heading level="3" size="2xl">
                            $477.00
                        </x-aura::heading>

                        <x-aura::text size="lg" variant="subtle">
                            <del>$617.00</del>
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::separator />

                    <x-aura::flex direction="col" gap="3">

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Complimentary premium custom braided cables
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Extended five year comprehensive warranty
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Priority access to future firmware enhancements
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::alert variant="primary">

                    <x-aura::text size="sm">
                        Limited production release. Only 40 bundle sets remaining for current quarter.
                    </x-aura::text>

                </x-aura::alert>

            </x-aura::flex>

        </x-aura::grid>

    </x-aura::card>

</div>
