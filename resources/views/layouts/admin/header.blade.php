<header class="border-b border-zinc-800/80 bg-zinc-900/60 backdrop-blur px-6 py-3.5 flex items-center justify-between">
    <div class="flex items-center gap-3">
        <span class="text-xs font-semibold uppercase tracking-wider text-red-400 bg-red-500/10 border border-red-500/20 px-2.5 py-1 rounded-full">
            Admin Panel
        </span>
    </div>

    <div class="flex items-center gap-4">
        <a href="{{ route('home') }}" class="text-xs text-zinc-400 hover:text-white transition-colors flex items-center gap-1.5 font-medium">
            <svg class="w-4 h-4 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            Home Page
        </a>
        <div class="h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center text-xs font-semibold ring-2 ring-red-500/30">
            AD
        </div>
    </div>
</header>
