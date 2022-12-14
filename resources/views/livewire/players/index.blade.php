<div>

    <div class="p-5 h-screen bg-gray-100">

        <div x-data="{ open: false }" x-on:closemodal.window="open = false">
            <button x-on:click="open = !open"
                class="my-2 bg-blue-500 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded"
                wire:click="resetInputs()">
                Adicionar novo jogador
            </button>
            <div x-show="open">
                @if ($view)
                    @include('livewire.players.view')
                @elseif ($edit)
                    @include('livewire.players.edit')
                @else
                    @include('livewire.players.create')
                @endif
            </div>

            <div>

                <div class="overflow-auto rounded-lg shadow">
                    <table class="w-full cursor-pointer">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Nome</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left w-35">Idade</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($players as $player)
                                <tr class="bg-white border-b transition durante-300 ease-in-out hover:bg-gray-100 ">

                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $player->name }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $player->age }}
                                    </td>

                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex">
                                            <button
                                                class="bg-emerald-400 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-l" x-on:click="open = !open" wire:click="view({{ $player->id }})">
                                                Visualizar
                                            </button>
                                            <button
                                                class="ml-2 bg-blue-500 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-r"
                                                wire:click="edit({{ $player->id }})" x-on:click="open=!open">
                                                Editar
                                            </button>
                                            <button
                                                class="ml-2 bg-red-500 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-r"
                                                onclick="return confirm('Tem certeza que deseja remover {{ addslashes($player->name) }}?') || event.stopImmediatePropagation()" wire:click.prevente="delete({{ $player->id }})">
                                                Excluir
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
