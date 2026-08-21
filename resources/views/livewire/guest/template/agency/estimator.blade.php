<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $service = 'web';
    public string $budget = '10k';
    public bool $hasBranding = true;
    public bool $hasDevelopment = true;
    public bool $submitted = false;

    public function submitProposal(): void
    {
        $this->submitted = true;
    }
};

?>

<!-- Interactive Scope & Estimation Builder -->
<div id="estimator">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                PROJECT SCOPE ESTIMATOR
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Configure Your Project Engagement
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Select your parameters to receive a tailored technical blueprint and execution timeline
            </x-aura::subheading>

        </x-aura::flex>

        @if ($submitted)

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex direction="col" align="center" justify="center" gap="4">

                    <x-aura::badge variant="neutral" size="sm">
                        PROPOSAL REQUEST RECEIVED
                    </x-aura::badge>

                    <x-aura::heading level="3" size="lg" align="center">
                        Thank You for Reaching Out
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle" align="center">
                        Our lead technical partner will review your requirements and respond with an estimate within 24 hours.
                    </x-aura::text>

                    <x-aura::button wire:click="$set('submitted', false)" variant="secondary" size="md">
                        Reset
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        @else

            <x-aura::card padding="lg" gap="6">

                <form wire:submit.prevent="submitProposal">

                    <x-aura::flex direction="col" gap="6">

                        <x-aura::grid cols="1" sm="2" gap="4">

                            <x-aura::field label="Primary Engagement Scope">

                                <x-aura::select wire:model.live="service">
                                    <option value="web">Full Web Application Build</option>
                                    <option value="brand">Brand Identity and System</option>
                                    <option value="audit">UI UX Audit and Optimization</option>
                                </x-aura::select>

                            </x-aura::field>

                            <x-aura::field label="Target Budget Range">

                                <x-aura::select wire:model.live="budget">
                                    <option value="5k">$5,000 to $10,000</option>
                                    <option value="10k">$10,000 to $25,000</option>
                                    <option value="25k">$25,000+</option>
                                </x-aura::select>

                            </x-aura::field>

                        </x-aura::grid>

                        <x-aura::card padding="sm" divided="false">

                            <x-aura::flex direction="col" gap="3">

                                <x-aura::heading level="4" size="xs">
                                    Included Capabilities
                                </x-aura::heading>

                                <x-aura::flex direction="col" sm="row" gap="4">

                                    <x-aura::checkbox wire:model.live="hasBranding" label="Visual Brand Identity Kit" description="Includes logos, typography, and token guidelines." />

                                    <x-aura::checkbox wire:model.live="hasDevelopment" label="Full Stack Livewire Implementation" description="Production ready code repository with test suite." />

                                </x-aura::flex>

                            </x-aura::flex>

                        </x-aura::card>

                        <x-aura::separator />

                        <x-aura::flex direction="col" sm="row" align="stretch" smAlign="center" justify="between" gap="4">

                            <x-aura::text variant="subtle" size="sm">
                                Typical delivery timeframe: <strong>3 to 6 weeks</strong> from kickoff.
                            </x-aura::text>

                            <x-aura::button type="submit" variant="primary" size="lg">
                                Submit
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </form>

            </x-aura::card>

        @endif

    </x-aura::flex>

</div>
