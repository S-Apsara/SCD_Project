<x-web-layout>
    
<div class="container-fluid bg-img p-page">
            <div class="row w-full text-center pp-div-1">
                <div class="h1 me-auto mb-5 col-12 md:pt-0 pt-16">All Products</div>
                <div class="row w-full flex justify-center">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/moisturiser.webp")}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title h4">Moisturiser</div>
                            <div class="card-subtitle p">Hydrating</div>    
                            <div class="card-subtitle p">$220</div>
                        </div>
                        <a href="./order" class="btn btn-outline-success product_buy_btn">Buy Now</a>
                        <a href="./productdetails" class="btn btn-outline-success product_buy_btn">Details</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/sunscreen.webp")}}" alt="" class="card-img-top" >
                        <div class="card-body">
                            <div class="card-title h4">Sun-Screen</div>
                            <div class="card-subtitle p">Gold sunblock with spf 60+</div>
                                <div class="card-subtitle p">$200</div>
                        </div>
                        <a href="./order" class="btn btn-outline-success product_buy_btn">Buy Now</a>
                        <a href="./productdetails" class="btn btn-outline-success product_buy_btn">Details</a>
                    </div>
                    </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/quenchh.jpeg")}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title h4">Clear Serum</div>
                            <div class="card-subtitle p">Removes acne scars</div>
                            <div class="card-subtitle p">$250</div>
                        </div>
                        <a href="./order" class="btn btn-outline-success product_buy_btn">Buy Now</a>
                        <a href="./productdetails" class="btn btn-outline-success product_buy_btn">Details</a>
                    </div>
                    </div>
                    </div>
            </div>
        </div>
</x-web-layout>