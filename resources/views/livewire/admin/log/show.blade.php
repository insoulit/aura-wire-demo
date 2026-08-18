<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Log Details — Admin Panel | Aura Wire')] 
class extends Component {
    public array $log = [
        'id' => 104,
        'timestamp' => '2026-08-10 10:20:44',
        'level' => 'ERROR',
        'variant' => 'danger',
        'env' => 'local',
        'message' => 'Uncaught ConnectionException: Redis server unreachable on 127.0.0.1:6379.',
        'ip' => '192.168.1.45',
        'context' => 'DDEV Local PHP-FPM 8.3 &bull; Livewire 3.5.2',
        'trace' => "Predis\\Connection\\AbstractConnection->onConnectionError()\nPredis\\Connection\\StreamConnection->connect()\nIlluminate\\Redis\\Connections\\Connection->command()\nIlluminate\\Redis\\RedisManager->command()\nApp\\Services\\CacheManager->getOrSet()\nIlluminate\\Routing\\ControllerDispatcher->dispatch()",
    ];
};

?>

<x-aura::flex direction="col" gap="3" class="w-full max-w-3xl mx-auto">

    <!-- Top Header -->
    <x-aura::flex align="center" justify="between" gap="4" class="px-1">

        <div>

            <x-aura::kicker>
                Administration
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Log Details
            </x-aura::heading>

        </div>

        <x-aura::flex align="center" gap="2">

            <x-aura::button href="/admin/logs" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Unified Log Event Card -->
    <x-aura::card>

        <!-- Log Summary Header -->
        <x-aura::flex align="center" justify="between" gap="4" class="pb-6 border-b border-zinc-100 dark:border-zinc-800 flex-col sm:flex-row">

            <x-aura::flex align="center" gap="3.5">

                <x-aura::badge :variant="$log['variant']" size="sm">
                    {{ $log['level'] }}
                </x-aura::badge>

                <x-aura::flex direction="col" gap="0.5">

                    <x-aura::heading level="2" size="sm">
                        {{ $log['timestamp'] }}
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Environment: {{ $log['env'] }}
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-aura::badge variant="neutral" size="sm">
                Event #{{ $log['id'] }}
            </x-aura::badge>

        </x-aura::flex>

        <!-- Specifications & Trace Details Table -->
        <x-aura::table borderless="true">

            <x-aura::table.body>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Event Identifier
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text variant="mono" size="sm">
                            LOG-{{ str_pad($log['id'], 5, '0', STR_PAD_LEFT) }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Severity Level
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::badge :variant="$log['variant']" size="sm">
                            {{ $log['level'] }}
                        </x-aura::badge>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Environment
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text size="sm">
                            {{ $log['env'] }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Client IP Address
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text variant="mono" size="sm">
                            {{ $log['ip'] }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Execution Context
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text size="sm">
                            {!! $log['context'] !!}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell colspan="2">

                        <x-aura::flex direction="col" gap="1.5" class="pt-2">

                            <x-aura::text variant="subtle" size="sm">
                                Log Message
                            </x-aura::text>

                            <p class="font-mono text-sm font-semibold text-zinc-900 dark:text-white p-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200/80 dark:border-zinc-800">
                                {{ $log['message'] }}
                            </p>

                        </x-aura::flex>

                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell colspan="2">

                        <x-aura::flex direction="col" gap="1.5" class="pt-2">

                            <x-aura::text variant="subtle" size="sm">
                                Stack Trace Payload
                            </x-aura::text>

                            <pre class="font-mono text-xs p-3.5 rounded-xl bg-zinc-900 text-zinc-200 border border-zinc-800 overflow-x-auto whitespace-pre-wrap leading-relaxed">{{ $log['trace'] }}</pre>

                        </x-aura::flex>

                    </x-aura::table.cell>

                </x-aura::table.row>

            </x-aura::table.body>

        </x-aura::table>

        <x-slot:footer>

            <x-aura::center class="w-full">

                <x-aura::button href="/admin/logs" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                    Back
                </x-aura::button>

            </x-aura::center>

        </x-slot:footer>

    </x-aura::card>

</x-aura::flex>
