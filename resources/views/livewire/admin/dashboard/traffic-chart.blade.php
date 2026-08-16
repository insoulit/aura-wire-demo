<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $timeframe = 'Day';

    public function setTimeframe(string $period): void
    {
        $this->timeframe = $period;
    }

    public function with(): array
    {
        return [
            'chartData' => [
                'Day' => [
                    'total' => '48.2k',
                    'trend' => '+18.4%',
                    'points' => 'M0,110 C80,120 120,40 180,60 C240,80 280,20 340,35 C400,50 440,15 500,25',
                    'area' => 'M0,110 C80,120 120,40 180,60 C240,80 280,20 340,35 C400,50 440,15 500,25 L500,150 L0,150 Z',
                    'labels' => ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00', '23:59'],
                ],
                'Week' => [
                    'total' => '312.8k',
                    'trend' => '+12.1%',
                    'points' => 'M0,90 C80,70 140,110 200,50 C260,30 320,70 380,25 C440,15 470,30 500,15',
                    'area' => 'M0,90 C80,70 140,110 200,50 C260,30 320,70 380,25 C440,15 470,30 500,15 L500,150 L0,150 Z',
                    'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                ],
                'Month' => [
                    'total' => '1.42M',
                    'trend' => '+24.6%',
                    'points' => 'M0,120 C90,100 160,80 240,40 C310,60 380,30 440,20 480,10 500,8',
                    'area' => 'M0,120 C90,100 160,80 240,40 C310,60 380,30 440,20 480,10 500,8 L500,150 L0,150 Z',
                    'labels' => ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                ],
            ],
        ];
    }
};

?>

<x-aura::card>
    <x-aura::stack gap="4">
        <!-- Header with Period Toggles -->
        <x-aura::flex align="center" justify="between" gap="3" wrap="true">
            <div>
                <x-aura::flex align="center" gap="2">
                    <x-aura::heading level="2" size="sm">System Traffic</x-aura::heading>
                    <x-aura::badge variant="neutral" size="sm">Live</x-aura::badge>
                </x-aura::flex>
                <x-aura::flex align="baseline" gap="2">
                    <x-aura::heading level="3" size="lg">{{ $chartData[$timeframe]['total'] }}</x-aura::heading>
                    <x-aura::badge variant="neutral" size="sm">{{ $chartData[$timeframe]['trend'] }}</x-aura::badge>
                    <x-aura::text variant="subtle" size="sm">requests</x-aura::text>
                </x-aura::flex>
            </div>

            <!-- Period Filter Tabs -->
            <x-aura::flex align="center" gap="1">
                @foreach (['Day', 'Week', 'Month'] as $period)
                    <x-aura::button 
                        type="button" 
                        wire:click="setTimeframe('{{ $period }}')" 
                        variant="{{ $timeframe === $period ? 'primary' : 'ghost' }}"
                        size="xs"
                    >
                        <span>{{ $period }}</span>
                    </x-aura::button>
                @endforeach
            </x-aura::flex>
        </x-aura::flex>

        <!-- Monochromatic SVG Area Line Chart -->
        <div class="relative w-full h-44 pt-2">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="w-full h-full overflow-visible">
                <defs>
                    <linearGradient id="trafficGradient" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#000000" stop-opacity="0.18" class="dark:stop-color-white" />
                        <stop offset="100%" stop-color="#000000" stop-opacity="0" class="dark:stop-color-white" />
                    </linearGradient>
                </defs>

                <!-- Grid Reference Lines -->
                <line x1="0" y1="35" x2="500" y2="35" stroke="currentColor" class="text-zinc-100 dark:text-zinc-800/60" stroke-dasharray="4 4" stroke-width="1" />
                <line x1="0" y1="75" x2="500" y2="75" stroke="currentColor" class="text-zinc-100 dark:text-zinc-800/60" stroke-dasharray="4 4" stroke-width="1" />
                <line x1="0" y1="115" x2="500" y2="115" stroke="currentColor" class="text-zinc-100 dark:text-zinc-800/60" stroke-dasharray="4 4" stroke-width="1" />

                <!-- Monochrome Area Fill -->
                <path d="{{ $chartData[$timeframe]['area'] }}" fill="url(#trafficGradient)" />

                <!-- Monochrome Stroke Line -->
                <path d="{{ $chartData[$timeframe]['points'] }}" fill="none" stroke="currentColor" class="text-zinc-900 dark:text-white transition-all duration-300" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <!-- X Axis Labels -->
        <div>
            <x-aura::separator />
            <x-aura::flex align="center" justify="between" class="pt-1">
                @foreach ($chartData[$timeframe]['labels'] as $label)
                    <x-aura::text variant="mono" size="sm" variant="subtle">{{ $label }}</x-aura::text>
                @endforeach
            </x-aura::flex>
        </div>
    </x-aura::stack>
</x-aura::card>
