<?php

use function Livewire\Volt\layout;
use function Livewire\Volt\title;

layout('layouts.user');
title('Profile & Account Settings — User Panel | Aura Wire');

?>

<div class="space-y-8 w-full">
    <!-- Header Section -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-5 flex items-center justify-between">
        <div>
            <x-aura::heading level="1" size="lg">Account &amp; Profile Settings</x-aura::heading>
            <x-aura::subheading class="mt-1">
                Manage your personal profile, security configuration, two-factor authentication, and notifications.
            </x-aura::subheading>
        </div>
        <x-aura::button variant="outline" size="sm" href="/dashboard">&larr; Dashboard</x-aura::button>
    </div>

    <!-- Settings Section Button Group -->
    <div class="flex items-center gap-2">
        <x-aura::button.group>
            <x-aura::button variant="primary" size="sm">Profile Details</x-aura::button>
            <x-aura::button variant="secondary" size="sm">Security &amp; PIN</x-aura::button>
            <x-aura::button variant="secondary" size="sm">Notifications</x-aura::button>
            <x-aura::button variant="secondary" size="sm">API Keys</x-aura::button>
        </x-aura::button.group>
    </div>

    <!-- Form Section 1: Personal Profile Details -->
    <x-aura::card title="Personal Profile Information">
        <div class="space-y-6">
            <!-- Profile Avatar Upload Block -->
            <div class="flex flex-col sm:flex-row sm:items-center gap-6 pb-6 border-b border-zinc-200/60 dark:border-zinc-800/60">
                <x-aura::avatar initials="AK" size="xl"  />
                <div class="space-y-2 flex-1">
                    <x-aura::file-upload label="Change Avatar Image" hint="PNG, JPG, or SVG up to 2MB" />
                </div>
            </div>

            <!-- Inputs Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-aura::field label="First Name" required="true">
                    <x-aura::input value="Alex" placeholder="Enter first name" />
                </x-aura::field>

                <x-aura::field label="Last Name" required="true">
                    <x-aura::input value="Kovacs" placeholder="Enter last name" />
                </x-aura::field>

                <x-aura::field label="Email Address" required="true" hint="Used for login and security alerts">
                    <x-aura::input type="email" value="alex.kovacs@example.com" placeholder="email@example.com" />
                </x-aura::field>

                <x-aura::field label="Timezone & Region">
                    <x-aura::select>
                        <option value="UTC">UTC (Coordinated Universal Time)</option>
                        <option value="EST">EST (Eastern Standard Time)</option>
                        <option value="CET" selected>CET (Central European Time)</option>
                    </x-aura::select>
                </x-aura::field>
            </div>

            <!-- Bio Textarea -->
            <x-aura::field label="Bio &amp; Summary" hint="Brief summary shown on team project lead cards">
                <x-aura::textarea rows="3" placeholder="Tell us about your role and expertise...">Senior Full Stack Developer specializing in Laravel, Livewire, and Tailwind CSS design systems.</x-aura::textarea>
            </x-aura::field>
        </div>

        <x-slot name="footer">
            <div class="flex items-center justify-end gap-3">
                <x-aura::button variant="secondary" size="sm">Cancel</x-aura::button>
                <x-aura::button variant="primary" size="sm">Save Profile Changes</x-aura::button>
            </div>
        </x-slot>
    </x-aura::card>

    <!-- Form Section 2: Security & PIN Code Configuration -->
    <x-aura::card title="Security & Authentication">
        <div class="space-y-6">
            <div class="flex items-center justify-between p-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/40 border border-zinc-200 dark:border-zinc-700/60">
                <div>
                    <x-aura::heading level="4" size="xs">Two-Factor Authentication (2FA)</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs" class="mt-0.5">Require an authentication code when signing into your workspace.</x-aura::text>
                </div>
                <x-aura::switch checked="true" />
            </div>

            <!-- PIN Code Field -->
            <div class="space-y-2">
                <x-aura::field label="Security PIN Code" hint="Enter a 4-digit security PIN for sensitive operations">
                    <x-aura::pin-code length="4" />
                </x-aura::field>
            </div>
        </div>

        <x-slot name="footer">
            <div class="flex items-center justify-between">
                <x-aura::text variant="subtle" size="xs">Last password change: 14 days ago</x-aura::text>
                <x-aura::button variant="outline" size="sm">Update Security PIN</x-aura::button>
            </div>
        </x-slot>
    </x-aura::card>

    <!-- Form Section 3: Notification Preferences -->
    <x-aura::card title="Email & Notification Preferences">
        <div class="space-y-4">
            <x-aura::checkbox label="Project Activity Summaries" description="Receive a weekly digest of project progress and team updates." checked="true" />
            <x-aura::checkbox label="Security & Sign-in Alerts" description="Get immediate email notifications when new devices log into your account." checked="true" />
            <x-aura::checkbox label="Marketing & Product Releases" description="Be notified when new component packages or features are released." />
        </div>
    </x-aura::card>
</div>
