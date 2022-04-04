<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ItemList extends Component
{
    public $orderItems, $newList;

    public $listeners = [
        'itemStored' => 'handleItemStored'
    ];

    public function handleItemStored()
    {
        //dd(Session::getId());
        $this->orderItems = OrderItem::where('session_id', '=', Session::getId())
                                    ->latest()->get();
    }


    public function mount()
    {
        $this->orderItems = OrderItem::where('session_id', '=', Session::getId())->latest()->get();
      
    }

    
    public function render()
    {
        $this->orderItems = OrderItem::where('session_id', '=', Session::getId())->latest()->get();

        return view('livewire.item-list', ['orderItems' => $this->orderItems]);
    }
}
