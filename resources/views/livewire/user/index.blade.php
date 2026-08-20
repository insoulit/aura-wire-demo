<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('User Dashboard — User Panel | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="5xl" gap="8" class="pb-16">

    <!-- 1. Hero Banner Card -->
    <x-aura::card>

        <x-aura::flex align="center" gap="6" class="flex-col sm:flex-row">

            <x-aura::flex width="auto" class="shrink-0">

                <x-aura::avatar 
                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=160&auto=format&fit=crop&q=80" 
                    initials="AK" 
                    size="lg" 
                    status="online" 
                />

            </x-aura::flex>

            <x-aura::flex direction="col" gap="1" class="min-w-0">

                <x-aura::flex align="center" gap="2" :wrap="true">

                    <x-aura::badge variant="neutral" size="sm">
                        Welcome Back
                    </x-aura::badge>

                    <x-aura::badge variant="subtle" size="sm">
                        User Account
                    </x-aura::badge>

                    <x-aura::badge variant="neutral" size="sm">
                        Active
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::heading level="1" size="lg">
                    Welcome back, Alex Kovacs
                </x-aura::heading>

                <x-aura::text variant="subtle" size="sm">
                    Select a dedicated user module card below to update your account profile, manage security settings, or explore system portals.
                </x-aura::text>

            </x-aura::flex>

        </x-aura::flex>

    </x-aura::card>

    <!-- 2. Account & Security Module Cards Grid -->
    <x-aura::flex direction="col" gap="3.5">

        <x-aura::heading level="2" size="sm">
            Account and Security
        </x-aura::heading>

        <x-aura::grid cols="1" sm="2" lg="3" gap="4">

            <!-- 1. Profile Info -->
            <x-aura::card href="/user/profile" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="user" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        Account
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Profile Info
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Update your display name, bio description, and mobile contact number.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Edit details
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- 2. Profile Picture -->
            <x-aura::card href="/user/avatar" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="camera" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        Media
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Change Profile Picture
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Upload a new profile avatar image file and crop preview.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Upload photo
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- 3. Change Email -->
            <x-aura::card href="/user/email" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="mail" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Verification
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Change Email Address
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Update primary login email address and dispatch confirmation code.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Verify address
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- 4. Change Password & Security -->
            <x-aura::card href="/user/password" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="shield-check" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        Security
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Change Password and Security PIN
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Update login password credentials and configure 4 digit PIN code.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Manage security
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- 5. Workspace Settings -->
            <div class="sm:col-span-2 lg:col-span-2 h-full">

                <x-aura::card href="/user/setting" wire:navigate gap="4">

                    <x-aura::flex align="start" justify="between" gap="3">

                        <x-aura::icon name="sliders" size="lg" :container="true" />

                        <x-aura::badge variant="subtle" size="sm">
                            Preferences
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Account and Workspace Settings
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Configure system preferences, notification alerts, and theme preferences.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::text size="sm" weight="semibold">
                            Configure
                        </x-aura::text>

                        <x-aura::icon name="arrow-right" size="xs" />

                    </x-slot:footer>

                </x-aura::card>

            </div>

        </x-aura::grid>

    </x-aura::flex>

    <!-- 3. System Portals Module Cards -->
    <x-aura::flex direction="col" gap="3.5" class="pt-2">

        <x-aura::heading level="2" size="sm">
            System Portals
        </x-aura::heading>

        <x-aura::grid cols="1" sm="3" gap="4">

            <!-- Component Directory -->
            <x-aura::card href="/components" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="layers" size="lg" variant="dark" />

                    <x-aura::badge variant="subtle" size="sm">
                        30+ Ready
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Component Directory
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Explore and test all interactive Blade and Livewire UI components.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Browse docs
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- Guest Marketing Portal -->
            <x-aura::card href="/guest" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="globe" size="lg" variant="dark" />

                    <x-aura::badge variant="neutral" size="sm">
                        Public
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Guest Marketing Portal
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Preview public landing page layout, feature showcase, and hero section.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore portal
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- Admin Control Console -->
            <x-aura::card href="/admin" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="layout-dashboard" size="lg" variant="dark" />

                    <x-aura::badge variant="neutral" size="sm">
                        Admin
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Admin Control Console
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Access administrative management, system statistics, and user directory table.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Launch console
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</x-aura::container>
