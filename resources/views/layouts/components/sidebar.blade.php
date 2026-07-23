<aside class="w-60 shrink-0 hidden lg:block border-r border-zinc-200 dark:border-zinc-800/80 pr-6 space-y-6 text-sm sticky top-20 self-start max-h-[calc(100vh-6rem)] overflow-y-auto">
    <!-- Getting Started -->
    <div class="space-y-2">
        <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Getting Started</h3>
        <ul class="space-y-1 font-medium">
            <li>
                <a href="/components" class="flex items-center gap-2 px-3 py-1.5 rounded-lg {{ request()->is('components') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    Overview
                </a>
            </li>
        </ul>
    </div>

    <!-- Actions & Buttons -->
    <div class="space-y-2">
        <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Actions</h3>
        <ul class="space-y-1 font-medium">
            <li><a href="/components/button" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/button') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Button</a></li>
            <li><a href="/components/button-group" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/button-group') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Button Group</a></li>
            <li><a href="/components/dropdown" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/dropdown') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Dropdown</a></li>
        </ul>
    </div>

    <!-- Form Controls -->
    <div class="space-y-2">
        <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Form Controls</h3>
        <ul class="space-y-1 font-medium">
            <li><a href="/components/input" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/input') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Input</a></li>
            <li><a href="/components/textarea" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/textarea') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Textarea</a></li>
            <li><a href="/components/select" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/select') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Select</a></li>
            <li><a href="/components/checkbox" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/checkbox') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Checkbox</a></li>
            <li><a href="/components/radio" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/radio') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Radio</a></li>
            <li><a href="/components/switch" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/switch') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Switch</a></li>
            <li><a href="/components/field" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/field') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Field & Label</a></li>
            <li><a href="/components/error" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/error') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Error</a></li>
        </ul>
    </div>

    <!-- Data Display -->
    <div class="space-y-2">
        <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Data Display</h3>
        <ul class="space-y-1 font-medium">
            <li><a href="/components/avatar" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/avatar') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Avatar</a></li>
            <li><a href="/components/badge" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/badge') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Badge</a></li>
            <li><a href="/components/card" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/card') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Card</a></li>
            <li><a href="/components/separator" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/separator') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Separator</a></li>
            <li><a href="/components/table" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/table') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Table</a></li>
        </ul>
    </div>

    <!-- Navigation -->
    <div class="space-y-2">
        <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Navigation</h3>
        <ul class="space-y-1 font-medium">
            <li><a href="/components/navbar" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/navbar') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Navbar</a></li>
            <li><a href="/components/sidebar" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/sidebar') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Sidebar</a></li>
            <li><a href="/components/tabs" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/tabs') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Tabs</a></li>
        </ul>
    </div>

    <!-- Overlays -->
    <div class="space-y-2">
        <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Overlays & Feedback</h3>
        <ul class="space-y-1 font-medium">
            <li><a href="/components/modal" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/modal') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Modal</a></li>
            <li><a href="/components/toast" class="block px-3 py-1.5 rounded-lg {{ request()->is('components/toast') ? 'bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-semibold border border-indigo-500/20' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/50' }}">Toast</a></li>
        </ul>
    </div>
</aside>
