<div>
    <input wire:model="Num1" type="text">
    <input wire:model="Num2" type="text">
    <h1> Sum = {{$sum}}</h1> <br/>
    <button wire:click="onAdd">Sum</button>
</div>

<div>
    <livewire:mini-math/>
    @livewireScripts
</div>
