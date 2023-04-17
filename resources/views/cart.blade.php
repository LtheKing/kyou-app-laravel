@extends('layout.nocarousel')
@section('content')

<div class="container">


    <div class="row">
        @php
        $i = [0,1,2];
        @endphp

        <div class="col-8 mx-auto mt-3">
            <h1>Shopping Cart</h1>
            <hr class="mt-1 mb-3" />
            @foreach($i as $a)
            <div class="card border-light mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="icons/anime-icon-1.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">[WRY! SALE] [Limited Production] Nendoroid ...</h5>
                            <p class="card-text">Release April 2023</p>
                            <p class="card-text">IDR 600.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-1 mb-3" />
            @endforeach
        </div>

        <div class="col-4 border border-2 rounded mt-3" style="height: 200px;" id="checkout-card">
            <div class="text-center mt-4">
                <h2>Total Price</h2>
                <h1>IDR 1.000.000</h1>
                <button class=" btn btn-warning">CHECKOUT</button>
            </div>
        </div>
        <!-- MAIN ROW -->
    </div>

</div>

<style>
@media (max-width: 1024px) {
    #checkout-card {
        /* display: flex;
        padding: 16px !important;
        border-radius: 0px !important; */
        position: fixed;
        top: initial;
        bottom: 0px;
        z-index: 64;
    }
}
</style>

@endsection
