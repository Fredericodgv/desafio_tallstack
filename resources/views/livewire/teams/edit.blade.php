<!-- Main modal -->
<div x-show="open">
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center"
        :class="{ 'block': open, 'hidden': !open }">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Adicionar Time
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="defaultModal">
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 flex items-center">

                    <form wire:submit.prevent="submit" class="space-y-8 divide-y divide-gray-200">
                        <div class="col-span-3">
                            <label for="name">Nome</label>
                            <input type="text" id="name" autocomplete="name" wire:model="name">
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label for="country">País</label>
                            <input type="text" id="country" autocomplete="country" wire:model="country">
                            @error('country')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="points">Pontuação</label>
                            <input type="number" id="points" wire:model="points">
                            @error('points')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="victories">Vitórias</label>
                            <input type="number" id="victories" wire:model="victories">
                            @error('victories')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="defeats">Derrotas</label>
                            <input type="number" id="defeats" wire:model="defeats">
                            @error('defeats')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>

                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="defaultModal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        wire:click.prevent="update">Salvar</button>
                    <button x-on:click="open = !open" data-modal-toggle="defaultModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
                </div>
            </div>
        </div>
    </div>




</div>
