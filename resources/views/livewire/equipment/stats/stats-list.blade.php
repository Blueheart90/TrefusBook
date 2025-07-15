<div>
    <h3>Lista de estadísticas</h3>

    <div class="flex flex-col gap-1">
        @foreach ($stats as $stat)
            <livewire:equipment.stats.stat-item :stat="$stat" />
        @endforeach
    </div>
</div>
