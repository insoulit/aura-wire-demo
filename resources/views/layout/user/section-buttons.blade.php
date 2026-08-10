@php
    $workspaceSections = [
        [
            'title' => 'Overview Dashboard',
            'desc' => 'Workspace metrics, active project milestones, team seats & activity timeline.',
            'url' => '/dashboard',
            'active' => request()->is('dashboard'),
            'icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>',
        ],
    ];

    $accountSections = [
        [
            'title' => 'Profile & Settings',
            'desc' => 'Configure your personal avatar, bio, 2FA security toggle & 4-digit PIN code.',
            'url' => '/user/setting',
            'active' => request()->is('user/setting*'),
            'icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>',
        ],
    ];
@endphp

<div class="space-y-8 mb-10">
    {{-- Workspace Modules Section --}}
    <div>
        <h2 class="text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-4 flex items-center justify-between">
            <span>Workspace Overview</span>
            <span class="text-xs font-normal text-zinc-500">1 Module</span>
        </h2>

        <div class="flex flex-col gap-4">
            @foreach($workspaceSections as $section)
                <a href="{{ $section['url'] }}" 
                   class="group flex items-center gap-5 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border transition-all duration-300 relative overflow-hidden
                          {{ $section['active'] 
                              ? 'border-zinc-900 dark:border-white shadow-lg ring-2 ring-zinc-900/10 dark:ring-white/10 bg-zinc-100/50 dark:bg-zinc-800/50' 
                              : 'border-zinc-200/80 dark:border-zinc-800/80 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md' }}">
                    
                    <div class="relative z-10 w-14 h-14 shrink-0 rounded-full flex items-center justify-center transition-all duration-300
                                {{ $section['active'] ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 shadow-md' : 'bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 group-hover:scale-105' }}">
                        {!! $section['icon'] !!}
                    </div>

                    <div class="relative z-10 flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <h3 class="text-base sm:text-lg font-black text-zinc-900 dark:text-white tracking-tight group-hover:underline transition-colors">
                                {{ $section['title'] }}
                            </h3>
                            @if($section['active'])
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-zinc-900 text-white dark:bg-white dark:text-zinc-900">Active</span>
                            @endif
                        </div>
                        <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">
                            {{ $section['desc'] }}
                        </p>
                    </div>

                    <div class="relative z-10 shrink-0 hidden sm:block">
                        <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:underline group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{-- Account & Settings Section --}}
    <div>
        <h2 class="text-xl font-black text-zinc-900 dark:text-white tracking-tight mb-4 flex items-center justify-between">
            <span>Account &amp; Security</span>
            <span class="text-xs font-normal text-zinc-500">1 Module</span>
        </h2>

        <div class="flex flex-col gap-4">
            @foreach($accountSections as $section)
                <a href="{{ $section['url'] }}" 
                   class="group flex items-center gap-5 bg-white dark:bg-zinc-900 rounded-3xl p-5 sm:p-6 border transition-all duration-300 relative overflow-hidden
                          {{ $section['active'] 
                              ? 'border-zinc-900 dark:border-white shadow-lg ring-2 ring-zinc-900/10 dark:ring-white/10 bg-zinc-100/50 dark:bg-zinc-800/50' 
                              : 'border-zinc-200/80 dark:border-zinc-800/80 hover:border-zinc-300 dark:hover:border-zinc-700 shadow-sm hover:shadow-md' }}">
                    
                    <div class="relative z-10 w-14 h-14 shrink-0 rounded-full flex items-center justify-center transition-all duration-300
                                {{ $section['active'] ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 shadow-md' : 'bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 group-hover:scale-105' }}">
                        {!! $section['icon'] !!}
                    </div>

                    <div class="relative z-10 flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <h3 class="text-base sm:text-lg font-black text-zinc-900 dark:text-white tracking-tight group-hover:underline transition-colors">
                                {{ $section['title'] }}
                            </h3>
                            @if($section['active'])
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-zinc-900 text-white dark:bg-white dark:text-zinc-900">Active</span>
                            @endif
                        </div>
                        <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 font-medium leading-relaxed">
                            {{ $section['desc'] }}
                        </p>
                    </div>

                    <div class="relative z-10 shrink-0 hidden sm:block">
                        <svg class="w-6 h-6 text-zinc-400 dark:text-zinc-600 group-hover:underline group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
