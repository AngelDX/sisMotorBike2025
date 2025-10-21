<div>
    <div class="text-2xl mb-6">
        <h1 class="text-3xl text-blue-700 font-bold border-blue-700 border-b-4 w-56 dark:text-gray-300">Lista de motos</h1></div>
    <div class="flex gap-3">
        <flux:input wire:model.live="search" icon="magnifying-glass" placeholder="Search orders" />
        <flux:modal.trigger name="edit-profile">
            <flux:button wire:click="create()" variant="primary" icon="plus" class="cursor-pointer">Agregar</flux:button>
        </flux:modal.trigger>
    </div>

    <div class="flex items-center justify-center">
        <table class="border-separate w-full border-spacing-y-2 text-sm">
            <thead class="bg-gray-500 text-gray-100">
                <tr>
                    <th class="th-class">ID</th>
                    <th class="th-class">Marca</th>
                    <th class="th-class">Modelo</th>
                    <th class="th-class">Color</th>
                    <th class="th-class">Estado</th>
                    <th class="th-class">Precio</th>
                    <th class="th-class">Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($motos as $item)
            <tr>
                <td class="td-class">{{$item->id}}</td>
                <td class="td-class">{{$item->brand_id}}</td>
                <td class="td-class">{{$item->model}}</td>
                <td class="td-class">{{$item->color}}</td>
                <td class="td-class">{{$item->state}}</td>
                <td class="td-class">{{$item->price}}</td>
                <td class="td-class">
                    <flux:button wire:click="edit()" icon="pencil-square" size="xs" class="cursor-pointer"></flux:button>
                    <flux:button wire:click="delete()"  variant="danger" icon="trash" size="xs" class="cursor-pointer"></flux:button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{-- {{$proveedores->links()}} --}}
    </div>
</div>
