<?php

namespace App\Livewire;

use App\Models\Division;
use App\Models\Subdivision;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DependentDropdown extends Component
{
    public $divisions = [];
    public $division_id = 0;
    public $subdivisions = [];
    public $subdivision_id = 0;

    public function updated()
    {
        $this->subdivisions = Subdivision::query()
            ->select("id", "name")
            ->where('division_id', '=', $this->division_id)
            ->get();
    }

    public function mount()
    {
        $this->divisions = Division::all();
        //$this->subdivisions = Subdivision::all();
    }

    public function resetSubdivisions()
    {
        $this->subdivision_id = 0;
    }

    public function setUser($id)
    {
        $user = User::findOrFail($id);

        $this->division_id = $user->division_id;
        $this->subdivision_id = $user->subdivision_id;
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.dependent-dropdown');
    }
}
