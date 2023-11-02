<?php

namespace App\Livewire;

use App\Models\Division;
use App\Models\Subdivision;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DependentDropdown extends Component
{
    public ?User $user;

    public $selectedDivision = null;
    public $selectedSubdivision = null;

    public function mount()
    {
        $this->user = new User();
    }

    #[Computed]
    public function subdivisions()
    {
        return Subdivision::query()
            ->select("id", "name")
            ->where('division_id', '=', $this->selectedDivision)
            ->get();
    }

    public function resetSubdivisions()
    {
        $this->selectedSubdivision = null;
    }

    public function setUser($id)
    {
        $this->user = User::findOrFail($id);

        $this->selectedDivision = $this->user->division_id;
        $this->selectedSubdivision = $this->user->subdivision_id;
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $divisions = Division::all();

        return view('livewire.dependent-dropdown', compact('divisions'));
    }
}
