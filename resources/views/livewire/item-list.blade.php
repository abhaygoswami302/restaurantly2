<div class="row-fluid">
                                 
    <div class="col-lg-12 col-md-10 mb-4">
        <div class="cover-container">
            <h4 style="color: #cda45e">Your Order List</h4>
            <!-- START PANEL -->
        
            @foreach ($orderItems as $item)
                
                <div class="cover-item" style="background-image: url({{ asset($item->image) }})" >
                    <form action="#" method="POST">
                        <button  class="p-0 m-0" style="background: transparent;border:none"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item">
                            <i class="bi bi-dash px-2 my-4" 
                            style="background:#b47200;color:white;border:1px solid transparent;border-radius:5%;">
                            </i>
                        </button>
                    </form>
                </div>
            @endforeach
            
            @foreach ($newList as $item)
                {{ $item }}
                <div class="cover-item" style="background-image: url()" >
                    <form action="#" method="POST">
                        <button  class="p-0 m-0" style="background: transparent;border:none"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item">
                            <i class="bi bi-dash px-2 my-4" 
                            style="background:#b47200;color:white;border:1px solid transparent;border-radius:5%;">
                            </i>
                        </button>
                    </form>
                </div>
            @endforeach
           

        </div>
    </div>
</div>