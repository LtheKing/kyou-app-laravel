@extends('layout.mainlayout')
@section('content')

<div class="container mt-3 mb-3">
    <div class="row">

        <div class="col">
            <div class="row">
                <div class="col mt-3" onclick="selectProduct(1);" style="cursor: pointer;">
                    <div class="card">
                        <img src="icons/anime-icon-1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="btn btn-warning">Late Pre-Order</div>
                            <h5 class="card-title">[WRY! SALE] [Limited Production] Nendoroid ...</h5>
                            <p class="card-text">Release April 2023</p>
                            <p class="card-text">IDR 600.000</p>
                        </div>
                    </div>
                </div>

                <div class="col mt-3" onclick="selectProduct(2);" style="cursor: pointer;">
                    <div class="card">
                        <img src="icons/anime-icon-2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="btn btn-warning">Late Pre-Order</div>
                            <h5 class="card-title">[WRY! SALE] [Limited Production] Nendoroid ...</h5>
                            <p class="card-text">Release April 2023</p>
                            <p class="card-text">IDR 600.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col mt-3" onclick="selectProduct(3);" style="cursor: pointer;">
                    <div class="card">
                        <img src="icons/anime-icon-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="btn btn-warning">Late Pre-Order</div>
                            <h5 class="card-title">[WRY! SALE] [Limited Production] Nendoroid ...</h5>
                            <p class="card-text">Release April 2023</p>
                            <p class="card-text">IDR 600.000</p>
                        </div>
                    </div>
                </div>
        
                <div class="col mt-3" onclick="selectProduct(4);" style="cursor: pointer;">
                    <div class="card">
                        <img src="icons/anime-icon-1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="btn btn-warning">Late Pre-Order</div>
                            <h5 class="card-title">[WRY! SALE] [Limited Production] Nendoroid ...</h5>
                            <p class="card-text">Release April 2023</p>
                            <p class="card-text">IDR 600.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col mt-3" onclick="selectProduct(5);" style="cursor: pointer;">
                    <div class="card">
                        <img src="icons/anime-icon-2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="btn btn-warning">Late Pre-Order</div>
                            <h5 class="card-title">[WRY! SALE] [Limited Production] Nendoroid ...</h5>
                            <p class="card-text">Release April 2023</p>
                            <p class="card-text">IDR 600.000</p>
                        </div>
                    </div>
                </div>
        
                <div class="col mt-3" onclick="selectProduct(6);" style="cursor: pointer;" >
                    <div class="card">
                        <img src="icons/anime-icon-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="btn btn-warning">Late Pre-Order</div>
                            <h5 class="card-title">[WRY! SALE] [Limited Production] Nendoroid ...</h5>
                            <p class="card-text">Release April 2023</p>
                            <p class="card-text">IDR 600.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

    </div>

</div>

<script>
    function selectProduct(e) {
        alert('selected item id : ' + e);
    }
</script>

@endsection