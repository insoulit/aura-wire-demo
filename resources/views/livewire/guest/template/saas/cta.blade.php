<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- SaaS Call to Action Banner -->
<div id="cta">

    <x-aura::card padding="xl" gap="6">

        <x-aura::flex direction="col" align="center" justify="center" gap="4">

            <x-aura::badge variant="neutral" size="sm">
                START OBSERVING TODAY
            </x-aura::badge>

            <x-aura::heading level="2" size="xl" align="center">
                Ready to Accelerate Your Application Performance?
            </x-aura::heading>

            <x-aura::text size="sm" variant="subtle" align="center">
                Join over 12,000 engineering teams monitoring production infrastructure with sub millisecond precision.
            </x-aura::text>

            <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                <x-aura::button href="#pricing" variant="primary" size="lg" icon="arrow-right">
                    Start
                </x-aura::button>

                <x-aura::button href="#features" variant="secondary" size="lg">
                    Explore
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </x-aura::card>

</div>
