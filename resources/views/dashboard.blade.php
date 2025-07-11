<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            <ol>
                <li>
                    <span>Nivel</span>
                    <input
                        type="number"
                        name="nivel"
                        id="nivel"
                        min="1"
                        max="200"
                    />
                </li>
                <li>Nivel</li>
                <li>Nivel</li>
            </ol>
            <livewire:equipment.stats.stats-list />
            <livewire:equipment.stats.stat-item
                title="Curas"
                value="10"
                icon="curas"
            />
        </div>
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700"
            ></div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700"
            >
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"
                />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700"
            >
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"
                />
            </div>
        </div>
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700"
        >
            <x-placeholder-pattern
                class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"
            />
        </div>
    </div>
</x-layouts.app>
