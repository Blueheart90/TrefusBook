<ul class="bg-base-100 border-base-300 space-y-1 rounded-lg border p-4">
    <li>
        <span>Nivel</span>
        <x-mary-input type="number" name="nivel" id="nivel" min="1" max="200" />
    </li>
    @foreach ($stats as $stat)
        <livewire:equipment.stats.stat-item :stat="$stat" />
    @endforeach
</ul>
