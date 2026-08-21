<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $newsletterEmail = '';
    public bool $subscribed = false;

    public function subscribeNewsletter(): void
    {
        if (!empty($this->newsletterEmail)) {
            $this->subscribed = true;
        }
    }
};

?>

<!-- VIP Studio Newsletter Access Section -->
<x-aura::card padding="xl" gap="8">

    <x-aura::flex direction="col" align="center" justify="center" gap="6">

        <x-aura::kicker>
            INSIDER DISPATCH
        </x-aura::kicker>

        <x-aura::heading level="3" size="2xl" align="center">
            Join the Aura Hardware Collective
        </x-aura::heading>

        <x-aura::text size="sm" variant="subtle" align="center">
            Receive early access to limited production batches, architectural guides, and engineering updates.
        </x-aura::text>

        @if ($subscribed)

            <x-aura::badge variant="neutral" size="md">
                Subscribed to Insider Dispatch
            </x-aura::badge>

        @else

            <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                <x-aura::input wire:model="newsletterEmail" placeholder="Enter your work email" size="md" width="md" icon="mail" />

                <x-aura::button wire:click="subscribeNewsletter" variant="primary" size="md">
                    Subscribe
                </x-aura::button>

            </x-aura::flex>

        @endif

    </x-aura::flex>

</x-aura::card>
