<?php

namespace App\Http\Livewire;

use App\Models\OrderItem;
use Livewire\Component;

class OrderItemStore extends Component
{
    public $item,$item_id, $category_id, $item_name, $item_price, $description, $quantity;
    public $session_id, $total_price, $image, $user_address;
    
    protected $rules = [
        'item_id' => 'required',
        'category_id' => 'required',
        'item_name'=> 'required', 
        'item_price' => 'required',
        'description' => 'required',
        'quantity' => 'required',
        'session_id' => 'required',
        'total_price' => 'required',
        'image' => 'required',
        'user_address' => 'required'
    ];

    public function orderItemStore()
    {
        $validatedData = $this->validate();
   
        //dd($validatedData);
        $user_address = implode(',', $validatedData['user_address']);
      
        OrderItem::create([
            'item_id' => $validatedData['item_id'],
            'category_id' => $validatedData['category_id'],
            'item_name' => $validatedData['item_name'],
            'item_price' => $validatedData['item_price'],
            'description' => $validatedData['description'],
            'quantity' => $validatedData['quantity'],
            'session_id' => $validatedData['session_id'],
            'total_price' => $validatedData['total_price'],
            'image' => $validatedData['image'],
            'user_address' =>  $user_address,
        ]);
    }

    

    public function render()
    {
        return view('livewire.order-item-store');
    }
}
