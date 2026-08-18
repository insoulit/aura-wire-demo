<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('User Dashboard — User Panel | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="8" class="max-w-5xl mx-auto pb-16">

    <!-- 1. Hero Banner Card -->
    <x-aura::card>
        <div class="flex flex-col sm:flex-row sm:items-center gap-5 sm:gap-6">
            <div class="relative shrink-0">
                <x-aura::avatar 
                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=160&auto=format&fit=crop&q=80" 
                    initials="AK" 
                    size="lg" 
                    status="online" 
                />
            </div>
            <x-aura::flex direction="col" gap="1" class="min-w-0">
                <x-aura::flex align="center" gap="2" :wrap="true">
                    <x-aura::badge variant="neutral" size="sm">👋 Welcome Back</x-aura::badge>
                    <x-aura::badge variant="subtle" size="sm">User Account</x-aura::badge>
                    <x-aura::badge variant="positive" size="sm">Active</x-aura::badge>
                </x-aura::flex>
                <x-aura::heading level="1" size="lg">
                    Welcome back, Alex Kovacs
                </x-aura::heading>
                <x-aura::text variant="subtle" size="sm">
                    Select a dedicated user module card below to update your account profile, manage security settings, or explore system portals.
                </x-aura::text>
            </x-aura::flex>
        </div>
    </x-aura::card>

    <!-- 2. Account & Security Module Cards Grid (Compact 3-Col Layout) -->
    <x-aura::flex direction="col" gap="3.5">
        <div>
            <x-aura::heading level="2" size="sm">Account &amp; Security</x-aura::heading>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 items-stretch">
            <!-- 1. Profile Info -->
            <x-aura::card href="/user/profile" wire:navigate>
                <div class="flex-1 flex flex-col justify-between gap-4">
                    <x-aura::flex align="start" justify="between" gap="3">
                        <div class="w-11 h-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white group-hover:border-white dark:group-hover:border-zinc-900 shrink-0 group-hover:scale-105 transition-all duration-200">
                            <x-aura::icon name="user" size="sm" />
                        </div>
                        <x-aura::badge variant="neutral" size="sm">Account</x-aura::badge>
                    </x-aura::flex>
                    <x-aura::flex direction="col" gap="1" class="flex-1">
                        <x-aura::heading level="3" size="sm">
                            Profile Info
                        </x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Update your display name, bio description, and mobile contact number.
                        </x-aura::text>
                    </x-aura::flex>
                    <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                        <span>Edit details</span>
                        <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                            <x-aura::icon name="arrow-right" size="xs" />
                        </div>
                    </div>
                </div>
            </x-aura::card>

            <!-- 2. Profile Picture -->
            <x-aura::card href="/user/avatar" wire:navigate>
                <div class="flex-1 flex flex-col justify-between gap-4">
                    <x-aura::flex align="start" justify="between" gap="3">
                        <div class="w-11 h-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white group-hover:border-white dark:group-hover:border-zinc-900 shrink-0 group-hover:scale-105 transition-all duration-200">
                            <x-aura::icon name="camera" size="sm" />
                        </div>
                        <x-aura::badge variant="neutral" size="sm">Media</x-aura::badge>
                    </x-aura::flex>
                    <x-aura::flex direction="col" gap="1" class="flex-1">
                        <x-aura::heading level="3" size="sm">
                            Change Profile Picture
                        </x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Upload a new profile avatar image file and crop preview.
                        </x-aura::text>
                    </x-aura::flex>
                    <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                        <span>Upload photo</span>
                        <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                            <x-aura::icon name="arrow-right" size="xs" />
                        </div>
                    </div>
                </div>
            </x-aura::card>

            <!-- 3. Change Email -->
            <x-aura::card href="/user/email" wire:navigate>
                <div class="flex-1 flex flex-col justify-between gap-4">
                    <x-aura::flex align="start" justify="between" gap="3">
                        <div class="w-11 h-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white group-hover:border-white dark:group-hover:border-zinc-900 shrink-0 group-hover:scale-105 transition-all duration-200">
                            <x-aura::icon name="mail" size="sm" />
                        </div>
                        <x-aura::badge variant="subtle" size="sm">Verification</x-aura::badge>
                    </x-aura::flex>
                    <x-aura::flex direction="col" gap="1" class="flex-1">
                        <x-aura::heading level="3" size="sm">
                            Change Email Address
                        </x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Update primary login email address and dispatch confirmation code.
                        </x-aura::text>
                    </x-aura::flex>
                    <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                        <span>Verify address</span>
                        <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                            <x-aura::icon name="arrow-right" size="xs" />
                        </div>
                    </div>
                </div>
            </x-aura::card>

            <!-- 4. Change Password & Security -->
            <x-aura::card href="/user/password" wire:navigate>
                <div class="flex-1 flex flex-col justify-between gap-4">
                    <x-aura::flex align="start" justify="between" gap="3">
                        <div class="w-11 h-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white group-hover:border-white dark:group-hover:border-zinc-900 shrink-0 group-hover:scale-105 transition-all duration-200">
                            <x-aura::icon name="shield-check" size="sm" />
                        </div>
                        <x-aura::badge variant="neutral" size="sm">Security</x-aura::badge>
                    </x-aura::flex>
                    <x-aura::flex direction="col" gap="1" class="flex-1">
                        <x-aura::heading level="3" size="sm">
                            Change Password &amp; Security PIN
                        </x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Update login password credentials and configure 4 digit PIN code.
                        </x-aura::text>
                    </x-aura::flex>
                    <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                        <span>Manage security</span>
                        <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                            <x-aura::icon name="arrow-right" size="xs" />
                        </div>
                    </div>
                </div>
            </x-aura::card>

            <!-- 5. Workspace Settings (Takes remaining width on grid) -->
            <div class="sm:col-span-2 lg:col-span-2 h-full">
                <x-aura::card href="/user/setting" wire:navigate>
                    <div class="flex-1 flex flex-col justify-between gap-4">
                        <x-aura::flex align="start" justify="between" gap="3">
                            <div class="w-11 h-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white group-hover:border-white dark:group-hover:border-zinc-900 shrink-0 group-hover:scale-105 transition-all duration-200">
                                <x-aura::icon name="sliders" size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Preferences</x-aura::badge>
                        </x-aura::flex>
                        <x-aura::flex direction="col" gap="1" class="flex-1">
                            <x-aura::heading level="3" size="sm">
                                Account &amp; Workspace Settings
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Configure system preferences, notification alerts, and theme preferences.
                            </x-aura::text>
                        </x-aura::flex>
                        <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                            <span>Configure</span>
                            <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                                <x-aura::icon name="arrow-right" size="xs" />
                            </div>
                        </div>
                    </div>
                </x-aura::card>
            </div>
        </div>
    </x-aura::flex>

    <!-- 3. System Portals Module Cards (3-Column Grid) -->
    <x-aura::flex direction="col" gap="3.5" class="pt-2">
        <div>
            <x-aura::heading level="2" size="sm">System Portals</x-aura::heading>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-stretch">
            <!-- Component Directory -->
            <x-aura::card href="/components" wire:navigate>
                <div class="flex-1 flex flex-col justify-between gap-4">
                    <x-aura::flex align="start" justify="between" gap="3">
                        <div class="w-11 h-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white flex items-center justify-center shrink-0 group-hover:scale-105 transition-all duration-200">
                            <x-aura::icon name="layers" size="sm" />
                        </div>
                        <x-aura::badge variant="subtle" size="sm">30+ Ready</x-aura::badge>
                    </x-aura::flex>
                    <x-aura::flex direction="col" gap="1" class="flex-1">
                        <x-aura::heading level="3" size="sm">
                            Component Directory
                        </x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Explore and test all interactive Blade &amp; Livewire UI components.
                        </x-aura::text>
                    </x-aura::flex>
                    <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                        <span>Browse docs</span>
                        <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                            <x-aura::icon name="arrow-right" size="xs" />
                        </div>
                    </div>
                </div>
            </x-aura::card>

            <!-- Guest Marketing Portal -->
            <x-aura::card href="/guest" wire:navigate>
                <div class="flex-1 flex flex-col justify-between gap-4">
                    <x-aura::flex align="start" justify="between" gap="3">
                        <div class="w-11 h-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white flex items-center justify-center shrink-0 group-hover:scale-105 transition-all duration-200">
                            <x-aura::icon name="globe" size="sm" />
                        </div>
                        <x-aura::badge variant="neutral" size="sm">Public</x-aura::badge>
                    </x-aura::flex>
                    <x-aura::flex direction="col" gap="1" class="flex-1">
                        <x-aura::heading level="3" size="sm">
                            Guest Marketing Portal
                        </x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Preview public landing page layout, feature showcase, and hero section.
                        </x-aura::text>
                    </x-aura::flex>
                    <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                        <span>Explore portal</span>
                        <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                            <x-aura::icon name="arrow-right" size="xs" />
                        </div>
                    </div>
                </div>
            </x-aura::card>

            <!-- Admin Control Console -->
            <x-aura::card href="/admin" wire:navigate>
                <div class="flex-1 flex flex-col justify-between gap-4">
                    <x-aura::flex align="start" justify="between" gap="3">
                        <div class="w-11 h-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 group-hover:bg-white group-hover:text-zinc-900 dark:group-hover:bg-zinc-900 dark:group-hover:text-white flex items-center justify-center shrink-0 group-hover:scale-105 transition-all duration-200">
                            <x-aura::icon name="layout-dashboard" size="sm" />
                        </div>
                        <x-aura::badge variant="neutral" size="sm">Admin</x-aura::badge>
                    </x-aura::flex>
                    <x-aura::flex direction="col" gap="1" class="flex-1">
                        <x-aura::heading level="3" size="sm">
                            Admin Control Console
                        </x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Access administrative management, system statistics, and user directory table.
                        </x-aura::text>
                    </x-aura::flex>
                    <div class="pt-2 flex items-center justify-between text-xs font-semibold text-zinc-900 dark:text-zinc-100 group-hover:text-white dark:group-hover:text-zinc-900 border-t border-zinc-100 dark:border-zinc-800/60 group-hover:border-white/20 dark:group-hover:border-zinc-900/20 transition-colors duration-200">
                        <span>Launch console</span>
                        <div class="w-6 h-6 rounded-full bg-zinc-50 dark:bg-zinc-800/80 group-hover:bg-white dark:group-hover:bg-zinc-900 group-hover:text-zinc-900 dark:group-hover:text-white flex items-center justify-center text-zinc-400 group-hover:translate-x-0.5 transition-all duration-200">
                            <x-aura::icon name="arrow-right" size="xs" />
                        </div>
                    </div>
                </div>
            </x-aura::card>
        </div>
    </x-aura::flex>

</x-aura::flex>
