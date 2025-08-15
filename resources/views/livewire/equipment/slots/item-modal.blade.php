<div
    x-data="{ showModal: @entangle('showModal') }"
    x-show="showModal"
    x-cloak
    @keydown.escape.window="showModal = false"
    class="bg-neutral/70 fixed inset-0 z-50 flex items-center justify-center border border-red-400"
    x-transition:enter="transition duration-300 ease-out"
    x-transition:enter-start="opacity-0 "
    x-transition:enter-end="translate-y-0 transform opacity-100"
    x-transition:leave="transition duration-200 ease-in"
    x-transition:leave-end="opacity-0"
>
    <div
        class="bg-base-100 flex max-h-[90vh] w-full max-w-[70%] flex-col rounded-2xl border border-neutral-200 p-6"
        @click.away="showModal = false"
    >
        <div class="flex gap-4">
            <x-mary-input
                label="{{ 'Buscar ' . $name }}"
                wire:model.live.debounce.400ms="search"
                placeholder="{{ 'Buscar ' . $name }}"
                icon="o-magnifying-glass"
                clearable
                inline
            />
            <x-mary-input
                class="w-18"
                wire:model.live.debounce.400ms="levelStart"
                placeholder="Lvl min"
                type="number"
                min="1"
                max="200"
            />
            <x-mary-input
                class="w-18"
                wire:model.live.debounce.400ms="levelEnd"
                placeholder="Lvl max"
                type="number"
                min="1"
                max="200"
            />
            <div class="flex items-center gap-2">
                <span>Orden:</span>
                <x-mary-button
                    class="btn-base"
                    wire:click="toggleOrder"
                    :icon="$order ? 'o-arrow-up' : 'o-arrow-down'"
                    :label="$order ? 'Asc' : 'Desc'"
                />
            </div>
            <x-mary-button
                class="btn-neutral"
                wire:click="search"
                icon="o-magnifying-glass"
            >
                Buscar
            </x-mary-button>
        </div>
        <div class="mt-4 flex-1 overflow-y-auto pr-2">
            @if (count($items) > 0)
                <div
                    class="mt-4 grid grid-cols-1 gap-4 pb-4 md:grid-cols-2 lg:grid-cols-3"
                >
                    @foreach ($items as $item)
                        <div
                            class="card bg-base-200 cursor-pointer shadow-md transition-shadow hover:shadow-lg"
                        >
                            <article class="card-body h-full">
                                <header
                                    class="flex items-center justify-between"
                                >
                                    <div>
                                        <h3 class="card-title text-neutral">
                                            {{ $item->name }} -
                                            {{ $item->id }}
                                        </h3>
                                        <div class="flex flex-col gap-2">
                                            <div
                                                class="flex items-center gap-2"
                                            >
                                                <span
                                                    class="badge badge-soft badge-secondary"
                                                >
                                                    {{ $item->category->name }}
                                                </span>
                                                <span
                                                    class="badge badge-neutral"
                                                >
                                                    Lvl {{ $item->level }}
                                                </span>
                                            </div>
                                            @if ($item->cloth?->name)
                                                <span
                                                    class="badge badge-soft badge-primary"
                                                >
                                                    {{ $item->cloth->name }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <figure class="avatar shrink-0">
                                        <div
                                            class="border-base-100 bg-base-300 w-18 rounded-xl border-2 p-2"
                                        >
                                            <img
                                                class="size-full object-cover"
                                                src="{{ asset('storage/assets/items/' . $item->picture . '.webp') }}"
                                                alt=""
                                            />
                                        </div>
                                    </figure>
                                </header>

                                <main class="flex-1">
                                    @foreach ($item->effects as $effect)
                                        <div
                                            class="flex items-center gap-1 text-sm"
                                            :class="{
                                        'text-neutral': {{ $effect->min_value > 0 ? 'true' : 'false' }},
                                        'text-error': {{ $effect->min_value <= 0 ? 'true' : 'false' }}
                                    }"
                                        >
                                            @if ($effect->min_value == $effect->max_value)
                                                <span>
                                                    {{ $effect->min_value }}
                                                </span>
                                            @else
                                                <span>
                                                    {{ $effect->min_value }} a
                                                    {{ $effect->max_value }}
                                                </span>
                                            @endif
                                            <span class="capitalize">
                                                {{ $effect->effectType->display_name }}
                                            </span>
                                        </div>
                                    @endforeach
                                </main>
                                <footer class="flex items-end justify-end">
                                    <x-mary-button class="btn-neutral">
                                        Equipar
                                    </x-mary-button>
                                </footer>
                            </article>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="py-8 text-center">
                    <p class="text-lg opacity-75">No se encontraron ítems</p>
                </div>
            @endif
        </div>
    </div>
</div>
