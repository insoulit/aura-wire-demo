<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.admin')] 
#[Title('Admin Settings — Admin Panel | Aura Wire')] 
class extends Component {
    public string $siteName = 'Aura Wire Portal';
    public string $adminEmail = 'admin@example.com';
    public string $darkMode = 'class';
    public string $borderRadius = 'md';
    public bool $cacheAutomation = true;
    public bool $maintenanceMode = false;
    public bool $debugLogs = true;
    public bool $saved = false;

    public function save(): void
    {
        $this->validate([
            'siteName' => 'required|min:2',
            'adminEmail' => 'required|email',
            'darkMode' => 'required',
            'borderRadius' => 'required',
        ]);

        $this->saved = true;
    }
};

?>

<div class="w-full max-w-3xl mx-auto space-y-3">

    <!-- Top Header -->
    <div class="flex items-center justify-between gap-4 px-1">
        <div>
            <x-aura::kicker>Administration</x-aura::kicker>
            <x-aura::heading level="1" size="lg">Admin &amp; System Settings</x-aura::heading>
        </div>
    </div>

    @if ($saved)
        <div class="fixed bottom-5 right-5 z-50">
            <x-aura::toast variant="success" title="Settings Saved" description="System configuration updated successfully." />
        </div>
    @endif

    <!-- Settings Form -->
    <form wire:submit.prevent="save" class="space-y-4">
        
        <!-- General System Configuration Card -->
        <x-aura::card title="General System Configuration" description="Manage portal branding, administrator emails, and theme defaults.">
            <div class="space-y-5 pt-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Application Title" required hint="Portal title displayed in headers and emails.">
                        <x-aura::input wire:model="siteName" placeholder="Aura Wire Portal" size="sm" />
                    </x-aura::field>

                    <x-aura::field label="Admin Notification Email" required hint="Address for system notifications and alerts.">
                        <x-aura::input wire:model="adminEmail" type="email" placeholder="admin@example.com" size="sm" />
                    </x-aura::field>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Dark Mode Strategy" required hint="Theme detection strategy across components.">
                        <x-aura::select wire:model="darkMode" size="sm">
                            <option value="class">Class (HTML dark class)</option>
                            <option value="media">Media (System preference)</option>
                        </x-aura::select>
                    </x-aura::field>

                    <x-aura::field label="Default Border Radius" required hint="Global corner rounding applied to components.">
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

        <!-- System & Automation Card -->
        <x-aura::card title="System & Automation Controls">
            <div class="divide-y divide-zinc-100 dark:divide-zinc-800 text-xs">
                <div class="py-3 flex items-center justify-between gap-4">
                    <div>
                        <div class="font-semibold text-zinc-900 dark:text-white">View Cache Automation</div>
                        <div class="text-zinc-500">Automatically flush view cache when asset files are republished.</div>
                    </div>
                    <x-aura::switch wire:model="cacheAutomation" size="sm" />
                </div>

                <div class="py-3 flex items-center justify-between gap-4">
                    <div>
                        <div class="font-semibold text-zinc-900 dark:text-white">Detailed Debug Logs</div>
                        <div class="text-zinc-500">Write trace data to system log stream for diagnostic inspection.</div>
                    </div>
                    <x-aura::switch wire:model="debugLogs" size="sm" />
                </div>

                <div class="py-3 flex items-center justify-between gap-4">
                    <div>
                        <div class="font-semibold text-red-600 dark:text-red-400">Maintenance Mode</div>
                        <div class="text-zinc-500">Restrict non-admin access and display maintenance page.</div>
                    </div>
                    <x-aura::switch wire:model="maintenanceMode" size="sm" />
                </div>
            </div>

            <x-slot:footer>
                <div class="flex items-center justify-end w-full">
                    <x-aura::button type="submit" variant="primary" size="sm">
                        <x-aura::icon name="save" class="w-3.5 h-3.5 mr-1" />
                        <span>Save</span>
                    </x-aura::button>
                </div>
            </x-slot:footer>
        </x-aura::card>

    </form>

</div>
