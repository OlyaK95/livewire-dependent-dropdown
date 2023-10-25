<div class="p-8">
    <div class="flex gap-4">
        <select wire:model.live="division_id" wire:change="resetSubdivisions()">
            <option value="0">Select division...</option>
            @foreach ($divisions as $division)
                <option value="{{ $division->id }}">{{ $division->name }}</option>
            @endforeach
        </select>

        <select wire:model.blur="subdivision_id">
            <option value="0">Select subdivision...</option>
            @foreach ($subdivisions as $subdivision)
                <option value="{{ $subdivision->id }}">{{ $subdivision->name }}</option>
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
