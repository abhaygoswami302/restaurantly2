<?php

namespace App\Http\Livewire;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class OrderSummary extends Component
{
    public $orderItemsSummary,  $total = 0;

    public $listeners = [
        'itemStored' => 'handleItemStored'
    ];

    public function handleItemStored()
    {
        $this->orderItemsSummary = OrderItem::where('session_id', '=', Session::getId())
                                            ->where('status', '=', 'pending')->latest()->get();
        foreach ($this->orderItemsSummary as $key => $orderItem) {
            $this->total = $this->total + $orderItem->item_price;
        }
    }


    public function mount()
    {
        $this->orderItemsSummary = OrderItem::where('session_id', '=', Session::getId())
                                            ->where('status', '=', 'pending')->latest()->get();

        foreach ($this->orderItemsSummary as $key => $orderItem) {
            $this->total = $this->total + $orderItem->item_price;
        }
    }

    
    public function render()
    {
        $this->orderItemsSummary = OrderItem::where('session_id', '=', Session::getId())
                                            ->where('status', '=', 'pending')->latest()->get();
   
        return view('livewire.order-summary', [
            'orderItemsSummary' => $this->orderItemsSummary, 
            'total' => $this->total
        ]);
    }
}
