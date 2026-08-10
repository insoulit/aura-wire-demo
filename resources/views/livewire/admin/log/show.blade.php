<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.admin')] 
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

<div class="w-full max-w-3xl mx-auto space-y-3">

    <!-- Header with Back Button -->
    <div class="flex items-center justify-between gap-4 px-1">
        <div>
            <x-aura::kicker>Administration</x-aura::kicker>
            <x-aura::heading level="1" size="lg">Log Event Details</x-aura::heading>
        </div>
        <div class="flex items-center gap-2">
            <x-aura::button href="/admin/logs" wire:navigate variant="secondary" size="sm">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 mr-1" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Simple & Clean Log Summary Card -->
    <x-aura::card>
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <x-aura::badge :variant="$log['variant']" size="sm">{{ $log['level'] }}</x-aura::badge>
                <div>
                    <div class="flex items-center gap-2">
                        <x-aura::heading level="2" size="xs" class="font-bold font-mono text-zinc-900 dark:text-white">{{ $log['timestamp'] }}</x-aura::heading>
                    </div>
                    <x-aura::text variant="subtle" size="xs">Environment: {{ $log['env'] }}</x-aura::text>
                </div>
            </div>
            <x-aura::badge variant="neutral" size="sm">Log Event #{{ $log['id'] }}</x-aura::badge>
        </div>
    </x-aura::card>

    <!-- Log Payload & Stack Trace Details Card -->
    <x-aura::card title="Event Payload & Execution Trace">
        <div class="space-y-4 text-xs">
            <div class="py-2.5 border-b border-zinc-100 dark:border-zinc-800">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Log Message</span>
                <p class="font-mono text-xs font-semibold text-zinc-900 dark:text-white mt-1 p-3 rounded-lg bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200/80 dark:border-zinc-800">
                    {{ $log['message'] }}
                </p>
            </div>
            <div class="py-2.5 border-b border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Client IP Address</span>
                <span class="font-mono text-zinc-800 dark:text-zinc-200">{{ $log['ip'] }}</span>
            </div>
            <div class="py-2.5 border-b border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Execution Environment &bull; Context</span>
                <span class="font-mono text-zinc-800 dark:text-zinc-200">{{ $log['context'] }}</span>
            </div>
            <div class="pt-2">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Stack Trace Payload</span>
                <pre class="font-mono text-[11px] p-3.5 rounded-xl bg-zinc-900 text-zinc-200 mt-1.5 border border-zinc-800 overflow-x-auto whitespace-pre-wrap leading-relaxed">{{ $log['trace'] }}</pre>
            </div>
        </div>

        <x-slot:footer>
            <div class="flex items-center justify-center w-full">
                <x-aura::button href="/admin/logs" wire:navigate variant="secondary" size="sm">
                    <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 mr-1" />
                    <span>Return to Logs</span>
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::card>

</div>
