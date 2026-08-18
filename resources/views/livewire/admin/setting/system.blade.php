<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $cacheAutomation = true;
    public bool $debugLogs = true;
    public bool $maintenanceMode = false;
    public bool $saved = false;

    public function save(): void
    {
        $this->saved = true;
    }
};

?>

<x-aura::card title="System & Automation Controls" description="Manage view cache invalidation, debug logs, and maintenance state.">
    <form wire:submit.prevent="save">
        <x-aura::flex direction="col" gap="1" class="pt-1">
            @if ($saved)
                <x-aura::banner variant="dark" dismissible="true">
                    System controls updated successfully!
                </x-aura::banner>
            @endif

            <x-aura::switch 
                wire:model="cacheAutomation" 
                label="View Cache Automation" 
                description="Automatically flush view cache when template files change." 
                size="sm" 
            />

            <x-aura::separator />

            <x-aura::switch 
                wire:model="debugLogs" 
                label="Detailed Debug Logs" 
                description="Write trace data to system log stream for diagnostics." 
                size="sm" 
            />

            <x-aura::separator />

            <x-aura::switch 
                wire:model="maintenanceMode" 
                label="Maintenance Mode" 
                description="Restrict non admin access and display 503 maintenance page." 
                size="sm" 
            />
        </x-aura::flex>

        <x-slot:footer>
            <x-aura::flex align="center" justify="end" class="w-full">
                <x-aura::button type="submit" variant="primary" size="sm">
                    <x-aura::icon name="save" size="xs" />
                    <span>Save</span>
                </x-aura::button>
            </x-aura::flex>
        </x-slot:footer>
    </form>
</x-aura::card>
