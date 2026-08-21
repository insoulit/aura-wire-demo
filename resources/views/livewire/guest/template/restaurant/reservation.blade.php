<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $guests = '2';
    public string $date = '2026-08-25';
    public string $time = '19:00';
    public string $specialRequests = '';
    public bool $confirmed = false;
    public string $bookingCode = '';

    public function confirmReservation(): void
    {
        $this->bookingCode = 'BISTRO-' . rand(1000, 9999);
        $this->confirmed = true;
    }
};

?>

<!-- Table Reservation Section -->
<div id="reservation">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                TABLE RESERVATIONS
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Book Your Dining Experience
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Secure your table for lunch or evening dinner with instant confirmation
            </x-aura::subheading>

        </x-aura::flex>

        @if ($confirmed)

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex direction="col" align="center" justify="center" gap="4">

                    <x-aura::badge variant="neutral" size="sm">
                        TABLE RESERVED
                    </x-aura::badge>

                    <x-aura::heading level="3" size="lg" align="center">
                        Reservation Confirmed
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle" align="center">
                        Your table reservation reference is <strong class="text-zinc-900 dark:text-white">{{ $bookingCode }}</strong> for {{ $guests }} guests on {{ $date }} at {{ $time }}.
                    </x-aura::text>

                    <x-aura::button wire:click="$set('confirmed', false)" variant="secondary" size="md">
                        Reset
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        @else

            <x-aura::card padding="lg" gap="6">

                <form wire:submit.prevent="confirmReservation">

                    <x-aura::flex direction="col" gap="6">

                        <x-aura::grid cols="1" sm="3" gap="4">

                            <x-aura::field label="Party Size">

                                <x-aura::select wire:model="guests">
                                    <option value="2">2 Guests (Table for Two)</option>
                                    <option value="4">4 Guests (Family Table)</option>
                                    <option value="6">6 Guests (Bistro Booth)</option>
                                    <option value="8">8+ Guests (Private Dining)</option>
                                </x-aura::select>

                            </x-aura::field>

                            <x-aura::field label="Reservation Date">
                                <x-aura::input wire:model="date" type="date" />
                            </x-aura::field>

                            <x-aura::field label="Preferred Seating Time">

                                <x-aura::select wire:model="time">
                                    <option value="18:00">06:00 PM</option>
                                    <option value="19:00">07:00 PM (Prime)</option>
                                    <option value="20:00">08:00 PM (Prime)</option>
                                    <option value="21:15">09:15 PM</option>
                                </x-aura::select>

                            </x-aura::field>

                        </x-aura::grid>

                        <x-aura::field label="Dietary Notes or Special Requests">
                            <x-aura::textarea wire:model="specialRequests" placeholder="Please let us know about any allergies, anniversary celebrations, or seating preferences..." rows="3" />
                        </x-aura::field>

                        <x-aura::separator />

                        <x-aura::flex align="center" justify="between" gap="4">

                            <x-aura::flex align="center" width="auto" gap="2">

                                <x-aura::icon name="check" size="sm" />

                                <x-aura::text size="sm" variant="subtle">
                                    Complimentary cancellation up to 4 hours before seating
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::button type="submit" variant="primary" size="md">
                                Confirm
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </form>

            </x-aura::card>

        @endif

    </x-aura::flex>

</div>
