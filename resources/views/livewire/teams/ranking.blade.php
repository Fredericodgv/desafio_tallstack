<div>

    <div class="p-5 h-screen bg-gray-100">

        <div x-data="{ open: false }" x-on:closemodal.window="open = false">
            <div class="flex justify-between mb-2">
                <select class="my-2 hover:bg-gray-400 text-black font-bold py-2 px-8 rounded"
                    wire:model="filter" wire:change="changeRanking">
                    <option selected value="points">Pontuação</option>
                    <option value="victories">Vitórias</option>
                    <option value="defeats">Derrotas</option>
                </select>

                <input class="rounded-3xl" type="search" wire:model="search" wire:change="changeRanking">

            </div>



            <div class="overflow-auto rounded-lg shadow">
                <table class="w-full cursor-pointer">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Nome</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left w-35">País</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left w-35">Pontuação</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left w-35">Vitórias</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left w-35">Derrotas</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($teams as $team)
                            <tr class="bg-white border-b transition durante-300 ease-in-out hover:bg-gray-100 ">
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $team->name }}
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $team->country }}
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $team->points }}
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $team->victories }}
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ $team->defeats }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
