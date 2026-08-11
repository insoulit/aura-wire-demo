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
}" class="relative inline-flex items-center h-9 rounded-lg bg-zinc-200/80 dark:bg-zinc-900 p-1 border border-zinc-300 dark:border-zinc-800 text-zinc-600 dark:text-zinc-400">
    <button @click="setTheme('light')" :class="theme === 'light' ? 'bg-white text-zinc-900 shadow-xs' : 'hover:text-zinc-900 dark:hover:text-white'" class="h-7 w-7 inline-flex items-center justify-center rounded-md transition-all cursor-pointer" title="Light Mode" type="button">
        <x-aura::icon name="sun" size="sm" />
    </button>
    <button @click="setTheme('dark')" :class="theme === 'dark' ? 'bg-zinc-800 text-white shadow-xs' : 'hover:text-zinc-900 dark:hover:text-white'" class="h-7 w-7 inline-flex items-center justify-center rounded-md transition-all cursor-pointer" title="Dark Mode" type="button">
        <x-aura::icon name="moon" size="sm" />
    </button>
    <button @click="setTheme('system')" :class="theme === 'system' ? 'bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white shadow-xs' : 'hover:text-zinc-900 dark:hover:text-white'" class="h-7 w-7 inline-flex items-center justify-center rounded-md transition-all cursor-pointer" title="System Preference" type="button">
        <x-aura::icon name="monitor" size="sm" />
    </button>
</div>
