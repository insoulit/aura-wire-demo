<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Location & Opening Hours -->
<div id="hours">

    <x-aura::grid cols="1" md="2" gap="6">

        <!-- Location & Contact -->
        <x-aura::card padding="lg" gap="4">

            <x-aura::kicker>
                VISIT & CONTACT
            </x-aura::kicker>

            <x-aura::heading level="3" size="md">
                L'Aura Bistro and Grill
            </x-aura::heading>

            <x-aura::text size="sm" variant="subtle">
                420 Grand Architectural Boulevard, Suite 100<br />
                Downtown Arts District, San Francisco, CA 94103
            </x-aura::text>

            <x-aura::flex align="center" gap="4" wrap="true">

                <x-aura::badge variant="neutral" size="sm">
                    Valet Parking Available
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="sm">
                    Wheelchair Accessible
                </x-aura::badge>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::text size="sm" variant="subtle">
                    Direct inquiries: reservations@laurabistro.com
                </x-aura::text>

            </x-slot:footer>

        </x-aura::card>

        <!-- Service Hours -->
        <x-aura::card padding="lg" gap="4">

            <x-aura::kicker>
                DINING HOURS
            </x-aura::kicker>

            <x-aura::flex direction="col" gap="3">

                <x-aura::flex align="center" justify="between">

                    <x-aura::text size="sm" weight="semibold">
                        Tuesday to Thursday
                    </x-aura::text>

                    <x-aura::text size="sm" variant="subtle">
                        05:00 PM to 10:30 PM
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex align="center" justify="between">

                    <x-aura::text size="sm" weight="semibold">
                        Friday and Saturday
                    </x-aura::text>

                    <x-aura::text size="sm" variant="subtle">
                        12:00 PM to 11:30 PM
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex align="center" justify="between">

                    <x-aura::text size="sm" weight="semibold">
                        Sunday Brunch
                    </x-aura::text>

                    <x-aura::text size="sm" variant="subtle">
                        11:00 AM to 04:00 PM
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex align="center" justify="between">

                    <x-aura::text size="sm" weight="semibold">
                        Monday
                    </x-aura::text>

                    <x-aura::badge variant="subtle" size="xs">
                        Private Events Only
                    </x-aura::badge>

                </x-aura::flex>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::badge variant="neutral" size="sm">
                    Kitchen closes 30m prior
                </x-aura::badge>

            </x-slot:footer>

        </x-aura::card>

    </x-aura::grid>

</div>
