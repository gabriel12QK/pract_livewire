
<div style="text-align: center">
    <input type="text" wire:model="numero">
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    <button wire:click="resetear">reset</button>
    <h1>{{ $numero }}</h1>
    
</div>
