<?php

namespace App\Http\Livewire\Players;

use Livewire\Component;
use App\Models\Player;

class Create extends Component
{
    public $name;
    public $age;
    public $nacionality;
    public $victories;
    public $defeats;
    public $team;

    protected $rules = [
        'name' => 'string|required|min:3',
        'age' => 'integer|required',
        'nacionality' => 'string|required|min:3',
    ];

    public function submit()
    {
        $this->validate();

        Player::Create([
            'name' => $this->name,
            'age' => $this->age,
            'nacionality' => $this->nacionality,
        ]);

        $this->reset();
    }

    public function render()
    {
        $players = Player::all();
        return view('livewire.players.create', compact('players'));
    }
}
