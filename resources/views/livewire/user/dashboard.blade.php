<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.user')] 
#[Title('User Dashboard — User Panel | Aura Wire')] 
class extends Component {};

?>

<div class="max-w-3xl mx-auto space-y-8 pb-8">

    {{-- Hero Banner Card built with Package Components --}}
    <x-aura::card class="relative overflow-hidden bg-gradient-to-br from-zinc-100 via-white to-zinc-50 dark:from-zinc-900 dark:via-zinc-900 dark:to-zinc-950 border-zinc-200/80 dark:border-zinc-800/80 shadow-md">
        {{-- Decorative Blurs --}}
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-zinc-500/10 dark:bg-zinc-800/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 p-4 sm:p-6 space-y-4">
            <div class="flex items-center gap-2">
                <x-aura::badge variant="neutral">👋 Welcome Back</x-aura::badge>
                <x-aura::badge variant="subtle">User Account</x-aura::badge>
            </div>

            <div>
                <x-aura::heading level="1" size="2xl" class="tracking-tight font-extrabold">
                    Welcome back, Alex Kovacs
                </x-aura::heading>
                <x-aura::subheading class="mt-2 text-zinc-600 dark:text-zinc-400">
                    Select a dedicated user module card below to update your account profile, manage security settings, or explore system portals.
                </x-aura::subheading>
            </div>
        </div>
    </x-aura::card>

    {{-- Account & Security Module Cards --}}
    <div class="space-y-4">
        <x-aura::heading level="2" size="md">Account &amp; Security Pages</x-aura::heading>

        <div class="flex flex-col gap-4">
            {{-- 1. Profile Info --}}
            <a href="/user/profile" class="block group" wire:navigate>
                <x-aura::card class="hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all duration-300 shadow-xs">
                    <div class="flex items-center gap-5">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs shrink-0 group-hover:scale-105 transition-transform">
                            <x-aura::icon name="user" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <x-aura::heading level="3" size="sm" class="group-hover:underline transition-colors">
                                    Profile Info
                                </x-aura::heading>
                                <x-aura::badge variant="neutral" class="text-[10px]">Account</x-aura::badge>
                            </div>
                            <x-aura::text variant="subtle" size="sm">
                                Update your display name, bio description, and mobile contact number.
                            </x-aura::text>
                        </div>
                        <x-aura::icon name="chevron-right" class="w-4 h-4 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all shrink-0" />
                    </div>
                </x-aura::card>
            </a>

            {{-- 2. Profile Picture --}}
            <a href="/user/avatar" class="block group" wire:navigate>
                <x-aura::card class="hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all duration-300 shadow-xs">
                    <div class="flex items-center gap-5">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs shrink-0 group-hover:scale-105 transition-transform">
                            <x-aura::icon name="camera" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <x-aura::heading level="3" size="sm" class="group-hover:underline transition-colors">
                                    Change Profile Picture
                                </x-aura::heading>
                                <x-aura::badge variant="neutral" class="text-[10px]">Media</x-aura::badge>
                            </div>
                            <x-aura::text variant="subtle" size="sm">
                                Upload a new profile avatar image file and crop preview.
                            </x-aura::text>
                        </div>
                        <x-aura::icon name="chevron-right" class="w-4 h-4 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all shrink-0" />
                    </div>
                </x-aura::card>
            </a>

            {{-- 3. Change Email --}}
            <a href="/user/email" class="block group" wire:navigate>
                <x-aura::card class="hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all duration-300 shadow-xs">
                    <div class="flex items-center gap-5">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs shrink-0 group-hover:scale-105 transition-transform">
                            <x-aura::icon name="mail" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <x-aura::heading level="3" size="sm" class="group-hover:underline transition-colors">
                                    Change Email Address
                                </x-aura::heading>
                                <x-aura::badge variant="subtle" class="text-[10px]">Verification</x-aura::badge>
                            </div>
                            <x-aura::text variant="subtle" size="sm">
                                Update primary login email address and dispatch confirmation code.
                            </x-aura::text>
                        </div>
                        <x-aura::icon name="chevron-right" class="w-4 h-4 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all shrink-0" />
                    </div>
                </x-aura::card>
            </a>

            {{-- 4. Change Password & Security --}}
            <a href="/user/password" class="block group" wire:navigate>
                <x-aura::card class="hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all duration-300 shadow-xs">
                    <div class="flex items-center gap-5">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs shrink-0 group-hover:scale-105 transition-transform">
                            <x-aura::icon name="shield-check" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <x-aura::heading level="3" size="sm" class="group-hover:underline transition-colors">
                                    Change Password &amp; Security PIN
                                </x-aura::heading>
                                <x-aura::badge variant="neutral" class="text-[10px]">Security</x-aura::badge>
                            </div>
                            <x-aura::text variant="subtle" size="sm">
                                Update login password credentials and configure 4-digit PIN code.
                            </x-aura::text>
                        </div>
                        <x-aura::icon name="chevron-right" class="w-4 h-4 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all shrink-0" />
                    </div>
                </x-aura::card>
            </a>
        </div>
    </div>

    {{-- System Portals & Directory Module Cards --}}
    <div class="space-y-4">
        <x-aura::heading level="2" size="md">System Portals &amp; Directory</x-aura::heading>

        <div class="flex flex-col gap-4">
            {{-- Component Directory --}}
            <a href="/components" class="block group" wire:navigate>
                <x-aura::card class="hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all duration-300 shadow-xs">
                    <div class="flex items-center gap-5">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs shrink-0 group-hover:scale-105 transition-transform">
                            <x-aura::icon name="layers" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <x-aura::heading level="3" size="sm" class="group-hover:underline transition-colors">
                                    Component Directory
                                </x-aura::heading>
                                <x-aura::badge variant="subtle" class="text-[10px]">30+ Ready</x-aura::badge>
                            </div>
                            <x-aura::text variant="subtle" size="sm">
                                Explore and test all 47 interactive Blade &amp; Livewire UI components.
                            </x-aura::text>
                        </div>
                        <x-aura::icon name="chevron-right" class="w-4 h-4 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all shrink-0" />
                    </div>
                </x-aura::card>
            </a>

            {{-- Guest Marketing Portal --}}
            <a href="/guest" class="block group" wire:navigate>
                <x-aura::card class="hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all duration-300 shadow-xs">
                    <div class="flex items-center gap-5">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs shrink-0 group-hover:scale-105 transition-transform">
                            <x-aura::icon name="globe" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <x-aura::heading level="3" size="sm" class="group-hover:underline transition-colors">
                                    Guest Marketing Portal
                                </x-aura::heading>
                                <x-aura::badge variant="neutral" class="text-[10px]">Public</x-aura::badge>
                            </div>
                            <x-aura::text variant="subtle" size="sm">
                                Preview public landing page layout, feature showcase, and hero section.
                            </x-aura::text>
                        </div>
                        <x-aura::icon name="chevron-right" class="w-4 h-4 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all shrink-0" />
                    </div>
                </x-aura::card>
            </a>

            {{-- Admin Control Console --}}
            <a href="/admin" class="block group" wire:navigate>
                <x-aura::card class="hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all duration-300 shadow-xs">
                    <div class="flex items-center gap-5">
                        <div class="w-10 h-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center border border-transparent shadow-2xs shrink-0 group-hover:scale-105 transition-transform">
                            <x-aura::icon name="layout-dashboard" class="w-5 h-5" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <x-aura::heading level="3" size="sm" class="group-hover:underline transition-colors">
                                    Admin Control Console
                                </x-aura::heading>
                                <x-aura::badge variant="neutral" class="text-[10px]">Admin</x-aura::badge>
                            </div>
                            <x-aura::text variant="subtle" size="sm">
                                Access administrative management, system statistics, and user directory table.
                            </x-aura::text>
                        </div>
                        <x-aura::icon name="chevron-right" class="w-4 h-4 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all shrink-0" />
                    </div>
                </x-aura::card>
            </a>
        </div>
    </div>
</div>
