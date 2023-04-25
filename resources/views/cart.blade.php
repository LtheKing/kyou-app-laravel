@extends ('layout.nocarousel')
@section('content')

<body onload="onLoadFunction()">

</body>
<div class="container">
    <div class="row">
        @php
        $i = 
        [
            (object)[
            'itemName' => 'anime blue',
            'price' => 200000
            ],
            (object)[
            'itemName' => 'anime red',
            'price' => 100000
            ]

        ];
        @endphp

        <div class="col-8 mx-auto mt-3">
            <h1>Shopping Cart</h1>
            <hr class="mt-1 mb-3" />
            @if(count($i) < 1)
                <div class="text-center mt-5">
                    <h3>Keranjang km kosong, ayo belanja !</h3>
                </div>
            @endif

            @foreach($i as $a => $key)
                <div class="card border-light mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="icons/anime-icon-1.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$key->itemName}}</h5>
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
                    <h1>Total Price</h1>
                    <h2>IDR 1.000.000</h2>
                    @if(count($i) < 1)
                        <button class="btn btn-warning" disabled=true target="_blank" id="btn-checkout"
                            href="https://wa.me/628985254713/?text=I'm%20interested%20in%20your%20car%20for%20sale">CHECKOUT</button>
                    @else 
                        <button class="btn btn-warning" target="_blank" id="btn-checkout"
                            href="https://wa.me/628985254713/?text=I'm%20interested%20in%20your%20car%20for%20sale">CHECKOUT</button>
                    @endif
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

<script>
    function onLoadFunction() {
        //alert('checked');
    }

</script>

@endsection
