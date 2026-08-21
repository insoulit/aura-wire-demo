<?php

use Livewire\Volt\Component;

new class extends Component {
    public function addBundle(): void
    {
        $this->dispatch('add-bundle');
    }

    public function items(): array
    {
        return [
            [
                'name' => 'Aura Studio Wireless ANC Headphones',
                'category' => 'Audio Acoustics',
                'value' => '$299.00',
                'tag' => 'Flagship',
                'icon' => 'headphones',
            ],
            [
                'name' => 'Compact Wireless Mechanical Keyboard',
                'category' => 'Keyboards',
                'value' => '$189.00',
                'tag' => 'Tactile Gasket',
                'icon' => 'keyboard',
            ],
            [
                'name' => 'Minimalist Precision Aluminum Lamp',
                'category' => 'Lighting',
                'value' => '$129.00',
                'tag' => 'CNC Aluminum',
                'icon' => 'sun',
            ],
        ];
    }
};

?>

<!-- Featured Bundle Section -->
<div id="bundle">

    <x-aura::flex direction="col" gap="8">

        <!-- Section Title & Subheading -->
        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                SPECIAL HARDWARE BUNDLE
            </x-aura::kicker>

            <x-aura::heading level="2" size="2xl" align="center">
                The Master Studio Desk Bundle
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Three flagship acoustic and tactile tools unified into a single uncompromising studio workspace
            </x-aura::subheading>

        </x-aura::flex>

        <!-- 2-Column Split: Items List on Left, Valuation Card on Right -->
        <x-aura::grid cols="1" lg="12" gap="8">

            <!-- Left: Included Hardware Items (7 Columns) -->
            <div class="lg:col-span-7 flex flex-col gap-4">

                @foreach ($this->items() as $index => $item)

                    <div class="p-5 rounded-2xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800 transition-colors">

                        <x-aura::flex align="center" justify="between" gap="4">

                            <x-aura::flex align="center" gap="4">

                                <div class="w-14 h-14 shrink-0 flex items-center justify-center rounded-xl bg-white dark:bg-zinc-800/80 border border-zinc-200/70 dark:border-zinc-700/60 shadow-2xs">

                                    <x-aura::icon :name="$item['icon']" size="md" />

                                </div>

                                <x-aura::flex direction="col" gap="none">

                                    <x-aura::flex align="center" gap="2">

                                        <x-aura::kicker>
                                            {{ $item['category'] }}
                                        </x-aura::kicker>

                                        <x-aura::badge variant="subtle" size="xs">
                                            {{ $item['tag'] }}
                                        </x-aura::badge>

                                    </x-aura::flex>

                                    <x-aura::heading level="3" size="md">
                                        {{ $item['name'] }}
                                    </x-aura::heading>

                                </x-aura::flex>

                            </x-aura::flex>

                            <x-aura::text size="sm" weight="semibold">
                                {{ $item['value'] }}
                            </x-aura::text>

                        </x-aura::flex>

                    </div>

                @endforeach

                <!-- Free Gift Bonus Callout -->
                <div class="p-4 rounded-2xl bg-zinc-100/70 dark:bg-zinc-900/30 border border-dashed border-zinc-300 dark:border-zinc-700">

                    <x-aura::flex align="center" justify="between" gap="3">

                        <x-aura::flex align="center" gap="3">

                            <x-aura::icon name="gift" size="sm" />

                            <x-aura::text size="sm">
                                Includes complimentary merino wool desk pad and braided custom cables
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::badge variant="neutral" size="xs">
                            $60 Free
                        </x-aura::badge>

                    </x-aura::flex>

                </div>

            </div>

            <!-- Right: Valuation & Bundle Action Card (5 Columns) -->
            <div class="lg:col-span-5 flex flex-col">

                <x-aura::card padding="lg" gap="6">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::kicker>
                            BUNDLE VALUATION
                        </x-aura::kicker>

                        <x-aura::badge variant="neutral" size="sm">
                            Save $140
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::flex align="baseline" gap="3">

                            <x-aura::heading level="3" size="2xl">
                                $477.00
                            </x-aura::heading>

                            <x-aura::text size="lg" variant="subtle">
                                <del>$617.00</del>
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::text size="sm" variant="subtle">
                            Complete studio setup with direct savings applied
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::separator />

                    <!-- Guarantees List -->
                    <x-aura::flex direction="col" gap="3">

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Lifetime hardware coverage
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                30 day risk free studio test
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Carbon neutral global shipping
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-aura::button wire:click="addBundle" variant="primary" size="lg" block="true" icon="sparkles">
                        Bundle
                    </x-aura::button>

                </x-aura::card>

            </div>

        </x-aura::grid>

    </x-aura::flex>

</div>
