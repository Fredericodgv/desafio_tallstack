<?php

namespace App\Http\Livewire\Teams;


use Livewire\Component;
use App\Models\Team;

class Index extends Component
{
    public $team_id;
    public $name;
    public $country;
    public $points;
    public $victories;
    public $defeats;

    public $view = false;
    public $edit = false;

    protected $rules = [
        'name' => 'string|required|min:3',
        'country' => 'string|required|min:3',
    ];

    public function storeTeam()
    {
        $this->validate();

        Team::Create([
            'name' => $this->name,
            'country' => $this->country,
            'points' => $this->points,
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
        $team = Team::findOrFail($id);
        $this->team_id = $id;
        $this->name = $team->name;
        $this->country = $team->country;
        $this->points = $team->points;
        $this->victories = $team->victories;
        $this->defeats = $team->defeats;

    }

    public function create()
    {
        $this->validate();

        Team::create([
            'name' => $this->name,
            'country' => $this->country,
            'points' => $this->points,
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
        $team = Team::findOrFail($id);
        $this->team_id = $id;
        $this->name = $team->name;
        $this->country = $team->country;
        $this->points = $team->points;
        $this->victories = $team->victories;
        $this->defeats = $team->defeats;
    }

    public function update()
    {
        $this->validate();

        $player = team::find($this->team_id);
        $player->update([
            'name' => $this->name,
            'country' => $this->country,
            'points' => $this->points,
            'victories' => $this->victories,
            'defeats' => $this->defeats,
        ]);

        $this->dispatchBrowserEvent('closemodal');
    }

    public function delete($id)
    {
        $record = Team::where('id', $id);
        $record->delete();
    }

    public function render()
    {
        $teams = Team::all();
        return view('livewire.teams.index', compact('teams'))->layout('layouts.confia');
    }

    
}
