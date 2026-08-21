<?php

use Livewire\Volt\Component;

new class extends Component {
    public function faqs(): array
    {
        return [
            [
                'question' => 'What does the lifetime hardware warranty cover?',
                'answer' => 'Our lifetime warranty covers all internal electronic components, switch contacts, driver membranes, and CNC structural aluminum integrity against manufacturing defects.',
            ],
            [
                'question' => 'How long does international express transit take?',
                'answer' => 'Orders are dispatched within 24 hours from regional fulfillment centers in North America, Europe, and Asia Pacific. Transit typically takes between 2 to 4 business days.',
            ],
            [
                'question' => 'How does the 30 day studio trial work?',
                'answer' => 'You have 30 days from delivery to evaluate the hardware in your own studio environment. If unsatisfied for any reason, return the items in original packaging for a full refund.',
            ],
            [
                'question' => 'Are custom mechanical switches easily hot swappable?',
                'answer' => 'Yes, our mechanical keyboards feature universal five pin hot swappable sockets compatible with all standard Cherry MX, Gateron, and Kailh switch configurations without soldering.',
            ],
        ];
    }
};

?>

<x-aura::flex direction="col" gap="8">

    <!-- Frequently Asked Questions (FAQ) Section -->
    <x-aura::flex direction="col" align="center" justify="center" gap="2">

        <x-aura::heading level="2" size="xl" align="center">
            Frequently Asked Inquiries
        </x-aura::heading>

        <x-aura::subheading size="md" align="center">
            Answers to common questions regarding logistics, guarantees, and hardware maintenance
        </x-aura::subheading>

    </x-aura::flex>

    <x-aura::card padding="lg" gap="6">

        <x-aura::accordion bordered="false">

            @foreach ($this->faqs() as $faq)

                <x-aura::accordion.item :title="$faq['question']">

                    <x-aura::text size="sm" variant="subtle">
                        {{ $faq['answer'] }}
                    </x-aura::text>

                </x-aura::accordion.item>

            @endforeach

        </x-aura::accordion>

    </x-aura::card>

</x-aura::flex>
