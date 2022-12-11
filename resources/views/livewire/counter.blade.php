<div class="pt-4">
    <select wire:model="greeting" class="rounded-md border-4 border-lime-500">
        <option>Hello</option>
        <option>GoodBye</option>
        <option>Adios</option>
    </select>
    <input class="rounded-md border-4 border-lime-500" wire:model="name" type="text">
    <input class="rounded-md border-4 border-lime-500" wire:model="loud" type="checkbox">

    <h2>{{ $greeting }} {{ $name }} @if($loud) ! @endif</h2>
</div>
