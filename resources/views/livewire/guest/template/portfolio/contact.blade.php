<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $contactName = '';
    public string $contactEmail = '';
    public string $contactMessage = '';
    public bool $submitted = false;

    public function sendMessage(): void
    {
        if (!empty($this->contactEmail)) {
            $this->submitted = true;
        }
    }
};

?>

<!-- Contact & Booking Section -->
<div id="contact">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                GET IN TOUCH
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Let's Build Something Exceptional
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Have a project in mind or looking for architectural guidance? Reach out directly
            </x-aura::subheading>

        </x-aura::flex>

        @if ($submitted)

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex direction="col" align="center" justify="center" gap="4">

                    <x-aura::badge variant="neutral" size="sm">
                        MESSAGE DISPATCHED
                    </x-aura::badge>

                    <x-aura::heading level="3" size="lg" align="center">
                        Message Sent Successfully
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle" align="center">
                        Thank you for reaching out. I typically respond to all inquiries within 24 hours.
                    </x-aura::text>

                    <x-aura::button wire:click="$set('submitted', false)" variant="secondary" size="md">
                        Reset
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        @else

            <x-aura::card padding="lg" gap="6">

                <form wire:submit.prevent="sendMessage">

                    <x-aura::flex direction="col" gap="6">

                        <x-aura::grid cols="1" md="2" gap="6">

                            <x-aura::field label="Your Name">
                                <x-aura::input wire:model="contactName" placeholder="Jane Doe" icon="user" />
                            </x-aura::field>

                            <x-aura::field label="Email Address">
                                <x-aura::input wire:model="contactEmail" type="email" placeholder="jane@company.com" icon="mail" />
                            </x-aura::field>

                        </x-aura::grid>

                        <x-aura::field label="Project Scope and Details">
                            <x-aura::textarea wire:model="contactMessage" placeholder="Tell me about your project scope, target timeline, and product goals..." rows="4" />
                        </x-aura::field>

                        <x-aura::separator />

                        <x-aura::flex align="center" justify="between" gap="4">

                            <x-aura::badge variant="subtle" size="sm">
                                Direct response within 24 hours
                            </x-aura::badge>

                            <x-aura::button type="submit" variant="primary" size="md">
                                Send
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </form>

            </x-aura::card>

        @endif

    </x-aura::flex>

</div>
