<?php

namespace App\Http\Livewire\Teams;

use Livewire\Component;
use App\Models\Team;

class Ranking extends Component
{
    public $filter = 'points';
    public $teams;
    public $search;

    public function changeRanking()
    {
        if ($this->search)
            $this->teams = Team::all()->sortByDesc($this->filter)->where('country', $this->search);

        else
            $this->teams = Team::all()->sortByDesc($this->filter);
    }

    public function mount()
    {
        $this->teams = Team::all()->sortByDesc($this->filter);
    }

    public function render()
    {
        return view('livewire.teams.ranking')->layout('layouts.confia');
    }
}
