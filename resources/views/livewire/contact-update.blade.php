<div>
    <form action="" class="mt-1" wire:submit.prevent="updateContact">
        @csrf
        <input type="hidden" name="id" wire:model="contactId">
        <div class="row g-1">
            <div class="row">
                <div class="col">
                    <input type="text" name="name" id="name" class="form-control" wire:model="name" placeholder="name">
                </div>
                <div class="col">
                    <input type="text" name="phone" id="phone" class="form-control" wire:model="phone" placeholder="phone">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
