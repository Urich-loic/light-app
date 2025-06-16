<div>
    <h1 class="text-3xl"> &#128161; {{$brightness}} %</h1>
    <div class="progress my-4 h-[30px]" role="progressbar" aria-label="Basic example" aria-valuenow="{{$brightness}}" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width:{{$brightness}}%"></div>
    </div>
    <div>
        <button class="btn btn-danger" wire:click="off">Off</button>
        <button class="btn btn-secondary " @if($brightness == 10)disabled @endif wire:click="minus">-</button>
        <button class="btn btn-secondary" @if($brightness == 100) disabled @endif >+</button>
        <button class="btn btn-primary" wire:click="allume">On</button>
    </div>
</div>
