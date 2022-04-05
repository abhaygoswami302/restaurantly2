<form wire:submit.prevent="orderItemStore" enctype="multipart/form-data">
    @csrf
    <input type="hidden" wire:model="item_id" name="item_id" value="{{ $item_id }}">
    <input type="hidden" wire:model="category_id" name="category_id" value="{{ $category_id }}">
    <input type="hidden" wire:model="item_name" name="item_name" value="{{ $item_name }}">
    <input type="hidden" wire:model="item_price" name="item_price" value="{{ $item_price }}">
    <input type="hidden" wire:model="description" name="description" value="{{ $description }}">
    <input type="hidden" wire:model="quantity" name="quantity" value="1">
    <input type="hidden" wire:model="session_id" name="session_id" value="{{ Session::getId() }}">
    <input type="hidden" wire:model="total_price" name="total_price" value="{{ $item_price }}">
    <input type="hidden" wire:model="image" name="image" value="{{ $image }}">
    <input type="hidden" wire:model="user_address" name="user_address" value="">

    <button type="submit" wire:click="$emit('itemStored')" class="p-0 m-0"
     style="background: transparent;border:none;float: right;" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Item To Order">
        <i class="bi bi-bookmark" style="font-size: 18px;cursor: pointer;color:white"></i>
    </button>                                                                

</form>