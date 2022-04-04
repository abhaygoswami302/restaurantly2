<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ItemList extends Component
{
    public $orderItems, $newList = [];

    public $listeners = [
        'itemStored' => 'handleItemStored'
    ];

    public function handleItemStored($item_id)
    {
        //dd(Session::getId());
        $this->newList = OrderItem::where('item_id', '=', $item_id)
                                    ->where('session_id', '=', Session::getId())
                                    ->get();
    }


    public function mount()
    {
        $this->orderItems = OrderItem::where('session_id', '=', Session::getId())->get();
        
    }

    
    public function render()
    {
        return view('livewire.item-list');
    }
}
