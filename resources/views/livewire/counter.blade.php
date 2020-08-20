<div>
    {{$counter}}
    <p>Hydrate: {{$hydrate}}</p>
    {{-- keydown=wire:keydown , submit=wire:submit ,click=wire:click--}}
    <input type="text" wire:keydown.arrow-up="increment" wire:keydown.arrow-down="decrement" wire:model="step">
    <button wire:click="increment">++</button> | <button wire:click="decrement">--</button>
</div>
