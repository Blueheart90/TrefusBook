<div
    @click="$dispatch('show-item-modal', { category: '{{ $category }}', name: '{{ $name }}' })"
    class="bg-base-100 rounded-lg border border-neutral-200 p-2"
    style="width: {{ $size }}px; height: {{ $size }}px"
>
    <img
        class="size-full object-cover opacity-45 grayscale"
        src="{{ asset('storage/assets/items/' . $bgImage) }}"
        alt=""
    />
</div>
