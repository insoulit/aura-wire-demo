<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.user')] 
#[Title('Profile & Account Settings — User Panel | Aura Wire')] 
class extends Component {
    public string $firstName = 'Alex';
    public string $lastName = 'Kovacs';
    public string $email = 'alex.kovacs@example.com';
    public string $timezone = 'CET';
    public string $bio = 'Senior Full Stack Developer specializing in Laravel, Livewire, and Tailwind CSS design systems.';
    public bool $twoFactor = true;
    public bool $saved = false;

    public function save()
    {
        $this->saved = true;
    }
};

?>

<div class="max-w-2xl mx-auto space-y-6 py-4">

    <!-- Top Header -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-4 space-y-1">
        <div class="flex items-center justify-between gap-4">
            <x-aura::heading level="1" size="lg">Account &amp; Workspace Settings</x-aura::heading>
            <x-aura::button variant="secondary" size="sm" href="/dashboard" wire:navigate class="shrink-0">
                <x-aura::icon name="arrow-left" class="w-4 h-4 mr-1.5 shrink-0 inline-block text-zinc-900 dark:text-white" />
                <span>Back</span>
            </x-aura::button>
        </div>
        <x-aura::subheading size="xs" class="text-zinc-500 dark:text-zinc-400">
            Manage your personal profile, 2FA security, notification preferences, and team defaults.
        </x-aura::subheading>
    </div>

    @if($saved)
        <x-aura::banner variant="success" dismissible="true">
            Account &amp; workspace settings updated successfully!
        </x-aura::banner>
    @endif

    <!-- Main Settings Form Card -->
    <x-aura::card>
        <div class="flex items-center justify-between pb-6 mb-6 border-b border-zinc-100 dark:border-zinc-800">
            <div class="flex items-center gap-4">
                <x-aura::avatar initials="AK" size="lg" />
                <div>
                    <x-aura::heading level="2" size="sm">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs">alex.kovacs@example.com</x-aura::text>
                </div>
            </div>
            <x-aura::badge variant="positive" size="sm">Active Account</x-aura::badge>
        </div>

        <form wire:submit="save" class="space-y-6">
            <!-- Inputs Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <x-aura::field label="First Name" required>
                    <x-aura::input wire:model="firstName" placeholder="Enter first name" required />
                </x-aura::field>

                <x-aura::field label="Last Name" required>
                    <x-aura::input wire:model="lastName" placeholder="Enter last name" required />
                </x-aura::field>

                <x-aura::field label="Email Address" required hint="Used for login &amp; security alerts">
                    <x-aura::input type="email" wire:model="email" placeholder="email@example.com" required />
                </x-aura::field>

                <x-aura::field label="Timezone &amp; Region">
                    <x-aura::select wire:model="timezone">
                        <option value="UTC">UTC (Coordinated Universal Time)</option>
                        <option value="EST">EST (Eastern Standard Time)</option>
                        <option value="CET">CET (Central European Time)</option>
                    </x-aura::select>
                </x-aura::field>
            </div>

            <!-- Bio Textarea -->
            <x-aura::field label="Bio &amp; Summary" hint="Brief summary shown on team project lead cards">
                <x-aura::textarea wire:model="bio" rows="3" placeholder="Tell us about your role and expertise..." />
            </x-aura::field>

            <!-- 2FA Security Switch -->
            <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/40 border border-zinc-200 dark:border-zinc-700/60">
                <x-aura::switch wire:model="twoFactor" label="Two-Factor Authentication (2FA)" description="Require an authentication code when signing into your workspace." />
            </div>

            <!-- Notifications Checkboxes -->
            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 space-y-3">
                <x-aura::heading level="2" size="xs">Notification Preferences</x-aura::heading>
                <div class="space-y-3">
                    <x-aura::checkbox label="Project Activity Summaries" description="Receive a weekly digest of project progress and team updates." checked />
                    <x-aura::checkbox label="Security &amp; Sign-in Alerts" description="Get immediate email notifications when new devices log into your account." checked />
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-end">
                <x-aura::button variant="primary" size="md" type="submit">Save All Settings</x-aura::button>
            </div>
        </form>
    </x-aura::card>

</div>
