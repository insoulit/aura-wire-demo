<div x-data="{
    theme: localStorage.getItem('theme') || 'system',
    init() {
        this.applyTheme(this.theme);
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (this.theme === 'system') {
                this.applyTheme('system');
            }
        });
    },
    setTheme(val) {
        this.theme = val;
        this.applyTheme(val);
    },
    applyTheme(val) {
        if (val === 'system') {
            localStorage.removeItem('theme');
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        } else {
            localStorage.setItem('theme', val);
            if (val === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }
}" class="relative inline-flex items-center rounded-lg bg-zinc-200/80 dark:bg-zinc-900 p-1 border border-zinc-300 dark:border-zinc-800 text-zinc-600 dark:text-zinc-400">
    <button @click="setTheme('light')" :class="theme === 'light' ? 'bg-white text-zinc-900 shadow-sm' : 'hover:text-zinc-900 dark:hover:text-white'" class="p-1.5 rounded-md transition-all" title="Light Mode" type="button">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
    </button>
    <button @click="setTheme('dark')" :class="theme === 'dark' ? 'bg-zinc-800 text-white shadow-sm' : 'hover:text-zinc-900 dark:hover:text-white'" class="p-1.5 rounded-md transition-all" title="Dark Mode" type="button">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
    </button>
    <button @click="setTheme('system')" :class="theme === 'system' ? 'bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white shadow-sm' : 'hover:text-zinc-900 dark:hover:text-white'" class="p-1.5 rounded-md transition-all" title="System Preference" type="button">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
    </button>
</div>
