<div class="p-8">
    @dump($this->selectedDivision)
    @dump($this->selectedSubdivision)
    <div class="flex gap-4 mt-4">
        <select wire:model.live="selectedDivision" wire:change="resetSubdivisions()">
            <option value="">Select division...</option>
            @foreach ($divisions as $division)
                <option wire:key="division-{{ $division->id }}" value="{{ $division->id }}">{{ $division->name }}</option>
            @endforeach
        </select>

        <select wire:model.live="selectedSubdivision">
            <option value="">Select subdivision...</option>
            @foreach ($this->subdivisions() as $subdivision)
                <option wire:key="subdivision-{{ $division->id }}" value="{{ $subdivision->id }}">{{ $subdivision->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-4 flex gap-4">
        <button wire:click="setUser(1)" class="bg-sky-400 rounded p-2">Set User 1</button>
        <button wire:click="setUser(2)" class="bg-sky-400 rounded p-2">Set User 2</button>
        <button wire:click="setUser(3)" class="bg-sky-400 rounded p-2">Set User 3</button>
        <button wire:click="setUser(4)" class="bg-sky-400 rounded p-2">Set User 4</button>
        <button wire:click="setUser(5)" class="bg-sky-400 rounded p-2">Set User 5</button>
        <button wire:click="setUser(6)" class="bg-sky-400 rounded p-2">Set User 6</button>
    </div>
</div>
