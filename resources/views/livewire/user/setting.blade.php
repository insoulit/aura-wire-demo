<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
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

<x-aura::container size="2xl" gap="6" class="py-4">

    <!-- Top Header -->
    <x-aura::flex direction="col" gap="2">

        <x-aura::flex justify="between" gap="4">

            <x-aura::flex direction="col" gap="none">

                <x-aura::kicker>
                    User Account
                </x-aura::kicker>

                <x-aura::heading level="1" size="lg">
                    Account and Workspace Settings
                </x-aura::heading>

            </x-aura::flex>

            <x-aura::flex justify="end" gap="2">

                <x-aura::button variant="secondary" size="sm" href="/user" wire:navigate icon="arrow-left">
                    Back
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

        <x-aura::subheading size="sm">
            Manage your personal profile, 2FA security, notification preferences, and team defaults.
        </x-aura::subheading>

    </x-aura::flex>

    @if ($saved)

        <x-aura::banner variant="dark" dismissible="true">
            Account and workspace settings updated successfully!
        </x-aura::banner>

    @endif

    <!-- Main Settings Form Card -->
    <x-aura::card>

        <x-aura::flex align="center" justify="between" class="mb-6">

            <x-aura::flex align="center" gap="4">

                <x-aura::avatar initials="AK" size="lg" />

                <x-aura::flex direction="col" gap="none">

                    <x-aura::heading level="2" size="sm">
                        Alex Kovacs
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        alex.kovacs@example.com
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-aura::badge variant="neutral" size="sm">
                Active Account
            </x-aura::badge>

        </x-aura::flex>

        <form wire:submit="save">

            <x-aura::flex direction="col" gap="6">

                <!-- Inputs Grid -->
                <x-aura::grid cols="1" sm="2" gap="5">

                    <x-aura::field label="First Name" required>
                        <x-aura::input wire:model="firstName" placeholder="Enter first name" size="sm" required />
                    </x-aura::field>

                    <x-aura::field label="Last Name" required>
                        <x-aura::input wire:model="lastName" placeholder="Enter last name" size="sm" required />
                    </x-aura::field>

                    <x-aura::field label="Email Address" required hint="Used for login and security alerts">
                        <x-aura::input type="email" wire:model="email" placeholder="email@example.com" size="sm" required />
                    </x-aura::field>

                    <x-aura::field label="Timezone and Region">
                        <x-aura::select wire:model="timezone" size="sm">
                            <option value="UTC">UTC (Coordinated Universal Time)</option>
                            <option value="EST">EST (Eastern Standard Time)</option>
                            <option value="CET">CET (Central European Time)</option>
                        </x-aura::select>
                    </x-aura::field>

                </x-aura::grid>

                <!-- Bio Textarea -->
                <x-aura::field label="Bio and Summary" hint="Brief summary shown on team project lead cards">
                    <x-aura::textarea wire:model="bio" rows="3" placeholder="Tell us about your role and expertise..." />
                </x-aura::field>

                <!-- 2FA Security Switch -->
                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/40 border border-zinc-200 dark:border-zinc-700/60">
                    <x-aura::switch wire:model="twoFactor" label="Two Factor Authentication (2FA)" description="Require an authentication code when signing into your workspace." size="sm" />
                </div>

                <!-- Notifications Checkboxes -->
                <x-aura::flex direction="col" gap="3" class="pt-2">

                    <x-aura::heading level="2" size="xs">
                        Notification Preferences
                    </x-aura::heading>

                    <x-aura::flex direction="col" gap="3">
                        <x-aura::checkbox label="Project Activity Summaries" description="Receive a weekly digest of project progress and team updates." size="sm" checked />
                        <x-aura::checkbox label="Security and Sign in Alerts" description="Get immediate email notifications when new devices log into your account." size="sm" checked />
                    </x-aura::flex>

                </x-aura::flex>

                <!-- Submit Button -->
                <x-aura::flex align="center" justify="end" class="pt-2">

                    <x-aura::button variant="primary" size="sm" type="submit" icon="check">
                        Save
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::flex>

        </form>

    </x-aura::card>

</x-aura::container>
