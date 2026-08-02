<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.user')] #[Title('User Panel — Dashboard | Aura Wire')] class extends Component {
    //
};

?>

<div class="max-w-3xl mx-auto space-y-10 pb-8">

    {{-- Diciao-Style Editorial Hero Section --}}
    <div class="relative w-full rounded-[2.5rem] bg-gradient-to-br from-zinc-100 via-white to-zinc-50 dark:from-zinc-900 dark:via-zinc-850 dark:to-zinc-800 border border-zinc-200/60 dark:border-zinc-700/50 overflow-hidden shadow-md">
        
        {{-- Decorative Blurs --}}
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-zinc-300/40 dark:bg-zinc-950/50 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-zinc-200/40 dark:bg-zinc-800/40 rounded-full blur-3xl pointer-events-none"></div>

        {{-- Main Hero Typography --}}
        <div class="relative z-10 px-8 pt-10 pb-12 sm:px-12 flex flex-col justify-center min-h-[260px] sm:min-h-[300px]">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/60 dark:bg-zinc-800/60 border border-zinc-200/80 dark:border-zinc-700/80 text-zinc-700 dark:text-zinc-300 text-xs font-bold mb-6 w-max backdrop-blur-sm shadow-sm">
                <span>👋</span>
                <span>Bentornato!</span>
            </div>

            <h2 class="text-5xl sm:text-6xl md:text-7xl font-black text-zinc-900 dark:text-white tracking-tighter leading-[0.9]">
                BENVENUTO,
            </h2>
            <div class="text-4xl sm:text-5xl md:text-6xl font-black tracking-tight leading-[0.9] -mt-2 sm:-mt-3 relative z-10">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-zinc-800 to-zinc-500 dark:from-white dark:to-zinc-400">ALEX KOVACS</span><span class="text-zinc-400 dark:text-zinc-600">.</span>
            </div>
            
            <p class="mt-6 text-zinc-600 dark:text-zinc-400 font-medium text-sm sm:text-base max-w-md leading-relaxed border-l-2 border-zinc-300 dark:border-zinc-700 pl-4">
                Select a user module card below to open its dedicated page.
            </p>
        </div>
    </div>

    {{-- Account & Profile Modules --}}
    <div>
        <h2 class="text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-6">Account &amp; Security Pages</h2>
        <div class="flex flex-col gap-4">
            {{-- Profile Details --}}
            <a href="/user/profile" class="group flex items-center gap-6 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border border-zinc-200/60 dark:border-zinc-800/60 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" wire:navigate>
                <div class="absolute inset-0 bg-gradient-to-r from-zinc-50 to-transparent dark:from-zinc-800/20 dark:to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10 w-14 h-14 shrink-0 bg-zinc-900 dark:bg-white rounded-full flex items-center justify-center group-hover:scale-105 group-hover:shadow-md transition-all duration-300">
                    <svg class="w-7 h-7 text-white dark:text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                
                <div class="relative z-10 flex-1">
                    <h3 class="text-lg sm:text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-1">Profile Info</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">Update your display name, bio, and mobile contact number.</p>
                </div>
                
                <div class="relative z-10 shrink-0 hidden sm:block">
                    <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

            {{-- Change Profile Picture --}}
            <a href="/user/avatar" class="group flex items-center gap-6 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border border-zinc-200/60 dark:border-zinc-800/60 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" wire:navigate>
                <div class="absolute inset-0 bg-gradient-to-r from-zinc-50 to-transparent dark:from-zinc-800/20 dark:to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10 w-14 h-14 shrink-0 bg-zinc-900 dark:bg-white rounded-full flex items-center justify-center group-hover:scale-105 group-hover:shadow-md transition-all duration-300">
                    <svg class="w-7 h-7 text-white dark:text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                
                <div class="relative z-10 flex-1">
                    <h3 class="text-lg sm:text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-1">Change Profile Picture</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">Upload a new profile avatar image and crop preview.</p>
                </div>
                
                <div class="relative z-10 shrink-0 hidden sm:block">
                    <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

            {{-- Change Email Address --}}
            <a href="/user/email" class="group flex items-center gap-6 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border border-zinc-200/60 dark:border-zinc-800/60 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" wire:navigate>
                <div class="absolute inset-0 bg-gradient-to-r from-zinc-50 to-transparent dark:from-zinc-800/20 dark:to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10 w-14 h-14 shrink-0 bg-zinc-900 dark:bg-white rounded-full flex items-center justify-center group-hover:scale-105 group-hover:shadow-md transition-all duration-300">
                    <svg class="w-7 h-7 text-white dark:text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                
                <div class="relative z-10 flex-1">
                    <h3 class="text-lg sm:text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-1">Change Email</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">Update primary account login email and send verification code.</p>
                </div>
                
                <div class="relative z-10 shrink-0 hidden sm:block">
                    <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

            {{-- Change Password & Security --}}
            <a href="/user/password" class="group flex items-center gap-6 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border border-zinc-200/60 dark:border-zinc-800/60 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" wire:navigate>
                <div class="absolute inset-0 bg-gradient-to-r from-zinc-50 to-transparent dark:from-zinc-800/20 dark:to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10 w-14 h-14 shrink-0 bg-zinc-900 dark:bg-white rounded-full flex items-center justify-center group-hover:scale-105 group-hover:shadow-md transition-all duration-300">
                    <svg class="w-7 h-7 text-white dark:text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                
                <div class="relative z-10 flex-1">
                    <h3 class="text-lg sm:text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-1">Change Password &amp; PIN</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">Update login credentials, toggle 2FA &amp; configure 4-digit PIN code.</p>
                </div>
                
                <div class="relative z-10 shrink-0 hidden sm:block">
                    <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        </div>
    </div>

    {{-- System Portals & Directory Section --}}
    <div>
        <h2 class="text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-6">System Portals &amp; Library</h2>
        <div class="flex flex-col gap-4">
            {{-- Component Directory --}}
            <a href="/components" class="group flex items-center gap-6 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border border-zinc-200/60 dark:border-zinc-800/60 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" wire:navigate>
                <div class="absolute inset-0 bg-gradient-to-r from-zinc-50 to-transparent dark:from-zinc-800/20 dark:to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10 w-14 h-14 shrink-0 bg-zinc-900 dark:bg-white rounded-full flex items-center justify-center group-hover:scale-105 group-hover:shadow-md transition-all duration-300">
                    <svg class="w-7 h-7 text-white dark:text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 01-2-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                
                <div class="relative z-10 flex-1">
                    <h3 class="text-lg sm:text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-1">Component Directory</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">Explore and test all 47 interactive Blade &amp; Livewire UI components.</p>
                </div>
                
                <div class="relative z-10 shrink-0 hidden sm:block">
                    <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

            {{-- Guest Marketing Portal --}}
            <a href="/guest" class="group flex items-center gap-6 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border border-zinc-200/60 dark:border-zinc-800/60 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" wire:navigate>
                <div class="absolute inset-0 bg-gradient-to-r from-zinc-50 to-transparent dark:from-zinc-800/20 dark:to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10 w-14 h-14 shrink-0 bg-zinc-900 dark:bg-white rounded-full flex items-center justify-center group-hover:scale-105 group-hover:shadow-md transition-all duration-300">
                    <svg class="w-7 h-7 text-white dark:text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                
                <div class="relative z-10 flex-1">
                    <h3 class="text-lg sm:text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-1">Guest Marketing Portal</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">Preview public landing page layout, feature showcase &amp; hero section.</p>
                </div>
                
                <div class="relative z-10 shrink-0 hidden sm:block">
                    <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

            {{-- Admin Control Console --}}
            <a href="/admin" class="group flex items-center gap-6 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border border-zinc-200/60 dark:border-zinc-800/60 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" wire:navigate>
                <div class="absolute inset-0 bg-gradient-to-r from-zinc-50 to-transparent dark:from-zinc-800/20 dark:to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10 w-14 h-14 shrink-0 bg-zinc-900 dark:bg-white rounded-full flex items-center justify-center group-hover:scale-105 group-hover:shadow-md transition-all duration-300">
                    <svg class="w-7 h-7 text-white dark:text-zinc-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                
                <div class="relative z-10 flex-1">
                    <h3 class="text-lg sm:text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-1">Admin Control Console</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">Access administrative management, system statistics &amp; user directory.</p>
                </div>
                
                <div class="relative z-10 shrink-0 hidden sm:block">
                    <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:text-zinc-900 dark:group-hover:text-white group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>
