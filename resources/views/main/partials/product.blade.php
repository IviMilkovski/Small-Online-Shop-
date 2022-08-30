<div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="{{asset('assets/img/'. $product->image)}}" alt="{{$product->name}}">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li><a class="btn btn-info text-white mt-2" href="{{ route('product', ["product" => $product->id]) }}"><i class="far fa-eye"></i></a></li>
                   </ul>
            </div>
        </div>
        <div class="card-body">
            <a href="" class="h3 text-decoration-none">{{$product->name}}</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
            </ul>
            @foreach($product->prices as $price)
            <p class="text-center mb-0">${{$price->price}}</p>
            @endforeach
        </div>
    </div>
</div>
