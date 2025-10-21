<div>
    <h1 class="text-3xl text-blue-700 font-bold border-blue-700 border-b-4 w-80 dark:text-gray-300">Registrar nueva moto</h1>
    <form>
        <div class="space-y-12 shadow-md p-1 mt-8">
            <div class="border-b border-gray-900/10 pb-8 bg-gray-100 p-2 rounded-2xl">
            <div class="mt-4 gap-x-6 gap-y-8">
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label for="username" class="block text-sm/6 font-medium text-gray-900">Marca</label>
                        <div class="mt-2 grid grid-cols-1">
                            <select wire:model="brand_id" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option>Seleccione una opción</option>
                                @foreach ($marcas as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                            <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>
                        @error('brand_id')
                            <span class="text-red-600 text-sm">*{{$message}}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Modelo</label>
                        <div class="mt-2">
                            <input type="text" wire:model="model" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                        @error('model')
                            <span class="text-red-600 text-sm">*{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <label for="about" class="block text-sm/6 font-medium text-gray-900">Descripción</label>
                    <div class="mt-2">
                        <textarea wire:model="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Foto de la moto</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                        <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true" class="mx-auto size-12 text-gray-300">
                            <path d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex text-sm/6 text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-600 hover:text-indigo-500">
                            <span>Subir imagen</span>
                            <input id="file-upload" type="file" name="file-upload" class="sr-only" />
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 mt-3 gap-3">
                    <div>
                        <label for="color" class="block text-sm/6 font-medium text-gray-900">Color</label>
                        <div class="mt-2 grid grid-cols-1">
                            <select wire:model="color" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option>Seleccione una opción</option>
                                <option>NEGRO</option>
                                <option>ROJO</option>
                                <option>BLANCO</option>
                                <option>AZUL</option>
                                <option>AMARILLO</option>
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                            <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>
                        @error('color')
                            <span class="text-red-600 text-sm">*{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="estado" class="block text-sm/6 font-medium text-gray-900">Estado</label>
                        <div class="mt-2">
                           <select wire:model="state" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option>Seleccione una opción</option>
                                <option>NUEVO</option>
                                <option>USADO</option>
                            </select>
                        </div>
                        @error('state')
                            <span class="text-red-600 text-sm">*{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="precio" class="block text-sm/6 font-medium text-gray-900">Precio</label>
                        <div class="mt-2">
                            <input wire:model="price"  type="text" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                        @error('price')
                            <span class="text-red-600 text-sm">*{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6 border-b border-gray-900/10 pb-12">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button wire:click="listar()" type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
        </div>
    </form>

</div>
