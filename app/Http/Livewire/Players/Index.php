<?php

namespace App\Http\Livewire\Players;

use Livewire\Component;
use App\Models\Player;

class Index extends Component
{
    public $player_id;
    public $name;
    public $age;
    public $nacionality;
    public $victories;
    public $defeats;
    public $team;

    public $view = false;
    public $edit = false;

    protected $rules = [
        'name' => 'string|required|min:3',
        'age' => 'integer|required',
        'nacionality' => 'string|required|min:3',
    ];


    public function storePlayer()
    {
        $this->validate();

        Player::Create([
            'name' => $this->name,
            'age' => $this->age,
            'nacionality' => $this->nacionality,
            'victories' => $this->victories,
            'defeats' => $this->defeats,
        ]);

        $this->reset();
    }

    public function resetInputs()
    {
        $this->view = false;
        $this->edit = false;

        $this->reset();
    }

    public function view($id)
    {
        $this->view = true;
        $player = Player::findOrFail($id);
        $this->player_id = $id;
        $this->name = $player->name;
        $this->age = $player->age;
        $this->nacionality = $player->nacionality;
        $this->team = $player->team;
        $this->victories = $player->victories;
        $this->defeats = $player->defeats;
    }

    public function create()
    {
        $this->validate();

        Player::create([
            'name' => $this->name,
            'age' => $this->age,
            'nacionality' => $this->nacionality,
            'team' => $this->team,
            'victories' => $this->victories,
            'defeats' => $this->defeats,
        ]);

        $this->dispatchBrowserEvent('closemodal');
        $this->resetInputs();
    }

    public function edit($id)
    {
        $this->view = false;
        $this->edit = true;
        $player = Player::findOrFail($id);
        $this->player_id = $id;
        $this->name = $player->name;
        $this->age = $player->age;
        $this->nacionality = $player->nacionality;
        $this->team = $player->team;
        $this->victories = $player->victories;
        $this->defeats = $player->defeats;
    }

    public function update()
    {
        $this->validate();

        $player = Player::find($this->player_id);
        $player->update([
            'name' => $this->name,
            'age' => $this->age,
            'nacionality' => $this->nacionality,
            'team' => $this->team,
            'victories' => $this->victories,
            'defeats' => $this->defeats,
        ]);

        $this->dispatchBrowserEvent('closemodal');
    }

    public function delete($id)
    {
        $record = Player::where('id', $id);
        $record->delete();
    }

    public function render()
    {
        $players = Player::all();
        return view('livewire.players.index', compact('players'))->layout('layouts.confia');
    }
}
