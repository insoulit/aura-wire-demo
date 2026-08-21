<?php

use Livewire\Volt\Component;

new class extends Component {
    public function faqs(): array
    {
        return [
            [
                'question' => 'How does the 14 day trial work?',
                'answer' => 'You get immediate, unrestricted access to the full Pro Suite for 14 days without entering a credit card. At the end of the trial, choose a paid tier or transition to the free Developer plan.',
            ],
            [
                'question' => 'What is the performance overhead on our servers?',
                'answer' => 'Our telemetry agent uses zero copy asynchronous batching and kernel level eBPF tracing, incurring less than 0.05% CPU and sub millisecond latency impact on production workloads.',
            ],
            [
                'question' => 'Can we deploy on private VPCs or on premise clusters?',
                'answer' => 'Yes, our Enterprise plan supports dedicated VPC peering on AWS, GCP, and Azure, as well as self hosted air gapped deployments on Kubernetes.',
            ],
            [
                'question' => 'How do alerts integrate with PagerDuty and Slack?',
                'answer' => 'Connect your workspace in one click via OAuth. Configure granular notification thresholds, channel routes, escalation policies, and payload templates directly from the settings console.',
            ],
        ];
    }
};

?>

<!-- SaaS FAQ Section -->
<div id="faq">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                COMMON INQUIRIES
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Frequently Asked Questions
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Everything you need to know regarding telemetry, deployment, and security compliance
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::card padding="lg" gap="6">

            <x-aura::accordion bordered="false">

                @foreach ($this->faqs() as $faq)

                    <x-aura::accordion.item size="md" :title="$faq['question']">

                        <x-aura::text size="sm" variant="subtle">
                            {{ $faq['answer'] }}
                        </x-aura::text>

                    </x-aura::accordion.item>

                @endforeach

            </x-aura::accordion>

        </x-aura::card>

    </x-aura::flex>

</div>
