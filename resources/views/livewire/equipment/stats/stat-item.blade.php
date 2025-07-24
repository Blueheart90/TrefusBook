<li class="flex items-center gap-2">
    <div class="bg-neutral rounded-lg p-1">
        <x-dynamic-component
            :component="'svgs.stats.' . $stat['icon']"
            :class="'size-6 ' . $stat['color']"
        />
    </div>
    <span>{{ $stat['title'] }}</span>
    <span>{{ $stat['value'] }}</span>
</li>
