<?php

use Livewire\Volt\Component;

new class extends Component {
    public function reviews(): array
    {
        return [
            [
                'rating' => 5,
                'content' => 'The active noise cancellation on the Aura studio headphones is extraordinary. The soundstage separation allows me to mix tracks for hours without fatigue.',
                'name' => 'Marcus Reynolds',
                'role' => 'Mastering Sound Engineer',
                'initials' => 'MR',
            ],
            [
                'rating' => 5,
                'content' => 'The compact mechanical keyboard is the best typing experience I have had in a decade of software engineering. Build quality is peerless.',
                'name' => 'Elena Lin',
                'role' => 'Senior Platform Architect',
                'initials' => 'EL',
            ],
            [
                'rating' => 5,
                'content' => 'The minimalist aluminum desk lamp provides crisp shadowless task illumination. Fits seamlessly into our design studio aesthetic.',
                'name' => 'David Keller',
                'role' => 'Industrial Product Designer',
                'initials' => 'DK',
            ],
        ];
    }
};

?>

<x-aura::flex direction="col" gap="8">

    <!-- Verified Customer Reviews Section -->
    <x-aura::flex direction="col" align="center" justify="center" gap="2">

        <x-aura::heading level="2" size="xl" align="center">
            Verified Creator Feedback
        </x-aura::heading>

        <x-aura::subheading size="md" align="center">
            Authentic thoughts from audio engineers, software developers, and architects
        </x-aura::subheading>

    </x-aura::flex>

    <x-aura::grid cols="1" md="3" gap="8">

        @foreach ($this->reviews() as $review)

            <x-aura::card padding="md" gap="4">

                <x-aura::rating :rating="$review['rating']" size="sm" readonly="true" />

                <x-aura::text size="sm">
                    {{ $review['content'] }}
                </x-aura::text>

                <x-slot:footer>

                    <x-aura::flex align="center" gap="3">

                        <x-aura::avatar :initials="$review['initials']" size="sm" />

                        <x-aura::flex direction="col" gap="none">

                            <x-aura::text size="sm" weight="bold">
                                {{ $review['name'] }}
                            </x-aura::text>

                            <x-aura::text size="sm" variant="subtle">
                                {{ $review['role'] }}
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-slot:footer>

            </x-aura::card>

        @endforeach

    </x-aura::grid>

</x-aura::flex>
