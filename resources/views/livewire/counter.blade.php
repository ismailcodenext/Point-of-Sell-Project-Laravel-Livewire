<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>

    <button wire:click.prevent="addNew"
            class="btn btn-primary  btn-sm px-2"><i class="fa fa-plus-circle mr-2"></i> Add New User
    </button>
</div>

