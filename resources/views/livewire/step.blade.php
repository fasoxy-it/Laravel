<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add Steps for ToDo</h2>
        <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"/>
    </div>

    @for($i = 0; $i < $steps; $i++)
        <div class="flex justify-center py-1">
            <input type="text" name="step" class="py-1 px-2 border rounded" placeholder="{{'Description Step ' . $i + 1}}">
        </div>
    @endfor

</div>
