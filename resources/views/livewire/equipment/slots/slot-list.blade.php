<div class="flex gap-4">
    <livewire:equipment.slots.dofus-slots />

    <div class="grid grid-cols-[repeat(5,_90px)] grid-rows-6 gap-4">
        <div>
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Amuleto']['img'] }}"
                category="{{ $slots['Amuleto']['category'] }}"
                name="{{ $slots['Amuleto']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-2">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Escudo']['img'] }}"
                category="{{ $slots['Escudo']['category'] }}"
                name="{{ $slots['Escudo']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-3">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Anillo']['img'] }}"
                category="{{ $slots['Anillo']['category'] }}"
                name="{{ $slots['Anillo']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-4">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Cinturon']['img'] }}"
                category="{{ $slots['Cinturon']['category'] }}"
                name="{{ $slots['Cinturon']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-5">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Botas']['img'] }}"
                category="{{ $slots['Botas']['category'] }}"
                name="{{ $slots['Botas']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-1 row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Prismarita']['img'] }}"
                category="{{ $slots['Prismarita']['category'] }}"
                name="{{ $slots['Prismarita']['name'] }}"
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
                category="{{ $slots['Dofus Dolmanax']['category'] }}"
                name="{{ $slots['Dofus Dolmanax']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-3 row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Idolo']['img'] }}"
                category="{{ $slots['Idolo']['category'] }}"
                name="{{ $slots['Idolo']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-4 row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Dofus Omega']['img'] }}"
                category="{{ $slots['Dofus Omega']['category'] }}"
                name="{{ $slots['Dofus Omega']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-1">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Arma']['img'] }}"
                category="{{ $slots['Arma']['category'] }}"
                name="{{ $slots['Arma']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-2">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Sombrero']['img'] }}"
                category="{{ $slots['Sombrero']['category'] }}"
                name="{{ $slots['Sombrero']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-3">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Capa']['img'] }}"
                category="{{ $slots['Capa']['category'] }}"
                name="{{ $slots['Capa']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-4">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Mascota']['img'] }}"
                category="{{ $slots['Mascota']['category'] }}"
                name="{{ $slots['Mascota']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="col-start-5 row-start-5">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Montura']['img'] }}"
                category="{{ $slots['Montura']['category'] }}"
                name="{{ $slots['Montura']['name'] }}"
                item=""
                equipped=""
            />
        </div>
        <div class="row-start-6">
            <livewire:equipment.slots.slot-item
                size="90"
                bgImage="{{ $slots['Prismarita']['img'] }}"
                category="{{ $slots['Prismarita']['category'] }}"
                name="{{ $slots['Prismarita']['name'] }}"
                item=""
                equipped=""
            />
        </div>
    </div>
    <livewire:equipment.slots.item-modal />
</div>
