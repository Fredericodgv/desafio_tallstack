<?php

namespace App\Http\Livewire\Players;

use Livewire\Component;
use App\Models\Player;

class Index extends Component
{
    public function render()
    {
        $players = Player::all();
        return view('livewire.players.index', compact('players'));
    }
}
