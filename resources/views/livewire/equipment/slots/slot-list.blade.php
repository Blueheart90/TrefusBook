<div class="flex gap-4">
    <livewire:equipment.slots.dofus-slots />

    <div class="grid grid-cols-[repeat(5,_90px)] grid-rows-6 gap-4">
        <div>
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Amuleto']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-2">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Escudo']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-3">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Anillo']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-4">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Cinturon']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-5">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Botas']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Prismarita']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div
            class="col-span-3 col-start-2 row-span-5 row-start-1 flex items-center justify-center"
        >
            <figure>
                <img
                    src="{{ asset('storage/assets/races/' . '9-0.png') }}"
                    alt=""
                />
            </figure>
        </div>
        <div class="col-start-2 row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Dofus Dolmanax']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-3 row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Idolo']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-4 row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Dofus Omega']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-1">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Arma']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-2">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Sombrero']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-3">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Capa']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-4">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Mascota']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-5">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Montura']['img'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Prismarita']['img'] }}"
                item=""
                equipped=""
            />
        </div>
    </div>
</div>
