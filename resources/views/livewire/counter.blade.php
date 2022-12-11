<div>
    <select wire:model="greeting">
        <option>Hello</option>
        <option>GoodBye</option>
        <option>Adios</option>
    </select>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">

    <h2>{{ $greeting }} {{ $name }} @if($loud) ! @endif</h2>
</div>
