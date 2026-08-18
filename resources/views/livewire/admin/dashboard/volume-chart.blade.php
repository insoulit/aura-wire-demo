<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'weeklyBars' => [
                ['day' => 'Mon', 'requests' => 140, 'errors' => 14, 'primaryHeight' => '65%', 'secondaryHeight' => '25%'],
                ['day' => 'Tue', 'requests' => 180, 'errors' => 22, 'primaryHeight' => '85%', 'secondaryHeight' => '35%'],
                ['day' => 'Wed', 'requests' => 160, 'errors' => 9, 'primaryHeight' => '72%', 'secondaryHeight' => '18%'],
                ['day' => 'Thu', 'requests' => 210, 'errors' => 28, 'primaryHeight' => '95%', 'secondaryHeight' => '42%'],
                ['day' => 'Fri', 'requests' => 195, 'errors' => 18, 'primaryHeight' => '88%', 'secondaryHeight' => '32%'],
                ['day' => 'Sat', 'requests' => 90, 'errors' => 5, 'primaryHeight' => '42%', 'secondaryHeight' => '12%'],
                ['day' => 'Sun', 'requests' => 75, 'errors' => 5, 'primaryHeight' => '36%', 'secondaryHeight' => '10%'],
            ],
        ];
    }
};

?>

<x-aura::card>
    <x-aura::flex direction="col" gap="4">
        <!-- Header with Clear Visual Legends -->
        <x-aura::flex align="center" justify="between" gap="3" wrap="true">
            <div>
                <x-aura::heading level="2" size="sm">Event Volume</x-aura::heading>
                <x-aura::flex align="baseline" gap="2">
                    <x-aura::heading level="3" size="lg">1,052</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">weekly events</x-aura::text>
                </x-aura::flex>
            </div>

            <!-- Clear High Contrast Monochrome Legends -->
            <x-aura::flex align="center" gap="3">
                <x-aura::flex align="center" gap="1.5">
                    <div class="w-2.5 h-2.5 rounded-xs bg-zinc-900 dark:bg-white shrink-0"></div>
                    <x-aura::text size="sm">Events</x-aura::text>
                </x-aura::flex>
                <x-aura::flex align="center" gap="1.5">
                    <div class="w-2.5 h-2.5 rounded-xs bg-zinc-400 dark:bg-zinc-500 shrink-0"></div>
                    <x-aura::text size="sm" variant="subtle">Issues</x-aura::text>
                </x-aura::flex>
            </x-aura::flex>
        </x-aura::flex>

        <!-- High Contrast Dual Bar Columns Grid -->
        <div class="h-44 flex items-end justify-between gap-2 sm:gap-3 pt-4 px-1">
            @foreach ($weeklyBars as $bar)
                <div class="flex-1 flex flex-col items-center gap-2 group cursor-pointer">
                    <div class="flex items-end justify-center gap-1 h-36 w-full pb-1 border-b border-zinc-200 dark:border-zinc-800">
                        <!-- Primary Bar (Events) -->
                        <div 
                            class="w-3 sm:w-3.5 bg-zinc-900 dark:bg-white rounded-t-sm transition-all duration-300 group-hover:opacity-85 shadow-2xs" 
                            style="height: {{ $bar['primaryHeight'] }}"
                            title="{{ $bar['day'] }} Events: {{ $bar['requests'] }}"
                        ></div>

                        <!-- Secondary Bar (Issues - Clearly Visible Medium Grey) -->
                        <div 
                            class="w-3 sm:w-3.5 bg-zinc-400 dark:bg-zinc-500 rounded-t-sm transition-all duration-300 group-hover:opacity-85 shadow-2xs border border-zinc-500/20 dark:border-zinc-400/20" 
                            style="height: {{ $bar['secondaryHeight'] }}"
                            title="{{ $bar['day'] }} Issues: {{ $bar['errors'] }}"
                        ></div>
                    </div>
                    <x-aura::text size="sm">{{ $bar['day'] }}</x-aura::text>
                </div>
            @endforeach
        </div>

        <!-- Footer Summary Info -->
        <div>
            <x-aura::separator />
            <x-aura::flex align="center" justify="between" class="pt-1">
                <x-aura::text variant="subtle" size="sm">Peak: Thursday (238 events)</x-aura::text>
                <x-aura::badge variant="neutral" size="sm">99.4% uptime</x-aura::badge>
            </x-aura::flex>
        </div>
    </x-aura::flex>
</x-aura::card>
