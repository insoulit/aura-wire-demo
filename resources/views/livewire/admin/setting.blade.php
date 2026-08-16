<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Admin Settings — Admin Panel | Aura Wire')] 
class extends Component {
    public string $siteName = 'Aura Wire Portal';
    public string $adminEmail = 'admin@example.com';
    public string $darkMode = 'class';
    public string $borderRadius = 'md';
    public bool $cacheAutomation = true;
    public bool $debugLogs = true;
    public bool $maintenanceMode = false;
    public bool $saved = false;

    public function save(): void
    {
        $this->validate([
            'siteName' => 'required|min:2|max:100',
            'adminEmail' => 'required|email',
            'darkMode' => 'required',
            'borderRadius' => 'required',
        ]);

        $this->saved = true;
    }
};

?>

<div class="w-full max-w-3xl mx-auto space-y-4 py-2">

    <!-- Top Header -->
    <div class="space-y-1">
        <x-aura::flex align="center" justify="between" gap="4">
            <div>
                <x-aura::kicker>Administration</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Admin Settings</x-aura::heading>
            </div>
            <div class="shrink-0">
                <x-aura::button variant="secondary" size="sm" href="/admin" wire:navigate icon="arrow-left">
                    <span>Back</span>
                </x-aura::button>
            </div>
        </x-aura::flex>
        <x-aura::subheading size="sm">
            Manage global portal identity, theme preferences, and automation controls.
        </x-aura::subheading>
    </div>

    @if ($saved)
        <x-aura::banner variant="dark" dismissible="true">
            Settings updated successfully!
        </x-aura::banner>
    @endif

    <!-- Settings Form -->
    <form wire:submit.prevent="save" class="space-y-4">

        <!-- 1. General Configuration Card -->
        <x-aura::card title="General Configuration" description="Manage portal title, administrator email, and visual theme tokens.">
            <div class="space-y-5 pt-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Application Title" required hint="Portal title displayed in headers and browser tabs." error="{{ $errors->first('siteName') }}">
                        <x-aura::input wire:model="siteName" placeholder="Aura Wire Portal" size="sm" />
                    </x-aura::field>

                    <x-aura::field label="Admin Notification Email" required hint="Primary address for system alerts and notices." error="{{ $errors->first('adminEmail') }}">
                        <x-aura::input wire:model="adminEmail" type="email" placeholder="admin@example.com" size="sm" />
                    </x-aura::field>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Dark Mode Strategy" required hint="Theme detection strategy across components." error="{{ $errors->first('darkMode') }}">
                        <x-aura::select wire:model="darkMode" size="sm">
                            <option value="class">Class (HTML dark class)</option>
                            <option value="media">Media (System preference)</option>
                        </x-aura::select>
                    </x-aura::field>

                    <x-aura::field label="Default Border Radius" required hint="Global corner rounding applied to components." error="{{ $errors->first('borderRadius') }}">
                        <x-aura::select wire:model="borderRadius" size="sm">
                            <option value="sm">Small (sm)</option>
                            <option value="md">Medium (md)</option>
                            <option value="lg">Large (lg)</option>
                            <option value="full">Full Pill</option>
                        </x-aura::select>
                    </x-aura::field>
                </div>
            </div>
        </x-aura::card>

        <!-- 2. System & Automation Controls Card -->
        <x-aura::card title="System & Automation Controls" description="Manage view cache invalidation, debug logs, and maintenance state.">
            <div class="space-y-1 pt-1">
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
                    description="Restrict non-admin access and display 503 maintenance page." 
                    size="sm" 
                />
            </div>

            <x-slot:footer>
                <x-aura::flex align="center" justify="end" class="w-full">
                    <x-aura::button type="submit" variant="primary" size="sm" icon="save">
                        <span>Save</span>
                    </x-aura::button>
                </x-aura::flex>
            </x-slot:footer>
        </x-aura::card>

    </form>

</div>
