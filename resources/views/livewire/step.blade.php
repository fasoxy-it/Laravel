<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add Steps for ToDo</h2>
        <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"/>
    </div>

    @foreach($steps as $step)
        <div class="flex justify-center py-1" wire:key="{{$step}}">
            <input type="text" name="steps[]" class="py-1 px-2 border rounded" placeholder="{{'Description Step ' . $step + 1}}">
            <span wire:click="remove({{$step}})" class="fas fa-times text-red-400 p-2 cursor-pointer"/>
        </div>
    @endforeach

</div>
