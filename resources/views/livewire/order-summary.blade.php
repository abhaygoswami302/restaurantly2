<div class="col-sm-12">
    <div class="row" wire:poll wire:transition="slide-in">
        @foreach ($orderItemsSummary as $orderSummary)
            <div class="col-sm-6">
                <h6>{{ $orderSummary->item_name }} : </h6>
            </div>
            <div class="col-sm-6">
                <h5>${{ $orderSummary->item_price }}</h5>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12">
        <hr>
        </div>
        <div class="col-sm-6 py-2">
            <h6>Total Price : </h6>
        </div>
        <div class="col-sm-6 py-2">
            <h4 style="color: #cda45e">${{ $total }} Only</h4>
        </div>
    </div>
</div>