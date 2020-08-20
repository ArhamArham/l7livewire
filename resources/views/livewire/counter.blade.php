<div>
    {{$counter}}
    <p>Hydrate: {{$hydrate}}</p>
    {{-- keydown=wire:keydown , submit=wire:submit ,click=wire:click--}}
    <input type="text" wire:keydown.arrow-up="increment({{$step}})" wire:keydown.arrow-down="decrement({{$step}})" wire:model="step">
    <button wire:click="increment({{$step}})">++</button> | <button wire:click="decrement({{$step}})">--</button>
{{--    @for($ia=1; $ia<=10; $ia++)--}}
        @livewire('hello-world')
{{--    @endfor--}}
</div>
