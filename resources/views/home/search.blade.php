@extends('layout')

@section('content')

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{ route('home') }}">Home</a>
                <span class="breadcrumb-item active">Search</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-4">
            <!-- Price Start -->
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by price</span></h5>
            <div class="bg-light p-4 mb-30">
                <form action="{{ route('filter-search') }}">
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input" id="price-all" name="price" value="all" onclick="this.form.submit()" @if(isset($price) && $price=='all' ) checked @endif>
                        <label class="custom-control-label" for="price-all">All Price</label>
                        <span class="badge border font-weight-normal" style="width:15%"> @if(isset($price) && $price == 'all') {{ $response->total() }} @else ... @endif</span>
                    </div>
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input" id="price-1" name="price" value="1" onclick="this.form.submit()" @if(isset($price) && $price=='1' ) checked @endif>
                        <label class="custom-control-label" for="price-1">$0 - $100</label>
                        <span class="badge border font-weight-normal" style="width:15%"> @if (isset($price) && $price == 1){{ $response->total() }} @else ... @endif</span>
                    </div>
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input" id="price-2" name="price" value="2" onclick="this.form.submit()" @if(isset($price) && $price=='2' ) checked @endif>
                        <label class="custom-control-label" for="price-2">$100 - $200</label>
                        <span class="badge border font-weight-normal" style="width:15%"> @if ( isset($price) && $price == 2) {{ $response->total() }} @else ... @endif</span>
                    </div>
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input" id="price-3" name="price" value="3" onclick="this.form.submit()" @if(isset($price) && $price=='3' ) checked @endif>
                        <label class="custom-control-label" for="price-3">$200 - $300</label>
                        <span class="badge border font-weight-normal" style="width:15%"> @if (isset($price) && $price == 3) {{ $response->total() }} @else ... @endif</span>
                    </div>
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input" id="price-4" name="price" value="4" onclick="this.form.submit()" @if(isset($price) && $price=='4' ) checked @endif>
                        <label class="custom-control-label" for="price-4">$300 - $400</label>
                        <span class="badge border font-weight-normal" style="width:15%"> @if (isset($price) && $price == 4) {{ $response->total() }} @else ... @endif</span>
                    </div>
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between">
                        <input type="radio" class="custom-control-input" id="price-5" name="price" value="5" onclick="this.form.submit()" @if(isset($price) && $price=='5' ) checked @endif>
                        <label class="custom-control-label" for="price-5">$400 - $500</label>
                        <span class="badge border font-weight-normal" style="width:15%"> @if (isset($price) && $price == 5) {{ $response->total() }} @else ... @endif</span>
                    </div>
            </div>

            <!-- Price End -->

            <!-- Name Start -->
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by name</span></h5>
            <div class="bg-light p-4 mb-30">
                <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                    <input type="radio" class="custom-control-input" id="size-1" name="name" value="AtoZ" onclick="this.form.submit()" @if(isset($name) && $name=='AtoZ' ) checked @endif>
                    <label class="custom-control-label" for="size-1">A->Z</label>
                    <span class="badge border font-weight-normal" style="width:15%"> @if (isset($name) && $name == 'AtoZ') {{ $response->total() }} @else ... @endif</span>
                </div>
                <div class="custom-control custom-radio d-flex align-items-center justify-content-between">
                    <input type="radio" class="custom-control-input" id="size-2" name="name" value="ZtoA" onclick="this.form.submit()" @if(isset($name) && $name=='ZtoA' ) checked @endif>
                    <label class="custom-control-label" for="size-2">Z->A</label>
                    <span class="badge border font-weight-normal" style="width:15%"> @if (isset($name) && $name == 'ZtoA') {{ $response->total() }} @else ... @endif</span>
                </div>
                </form>
            </div>
            <!-- Name End -->
        </div>
        <!-- Shop Sidebar End -->

        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                            <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="ml-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($price) || isset($name))
                @foreach($response as $product)
                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ $product->img }}" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="{{ route('home-show-page', $product->id) }}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="{{ route('home-show-page', $product->id) }}">{{ $product->name }}</a>
                            <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 200px; margin: 0 auto;">{{$product -> description}}</p>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>${{ $product->price }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @if(isset($products))
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ $product->img }}" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="{{ route('home-show-page', $product->id) }}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="{{ route('home-show-page', $product->id) }}">{{ $product->name }}</a>
                            <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 200px; margin: 0 auto;">{{$product -> description}}</p>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>${{ $product->price }}</h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @endif
                <!--  -->
                <div class="col-12 d-flex justify-content-center">
                    <nav>
                        @if(isset($response) && $response >= '6')
                        {{ $response->links('pagination::bootstrap-4') }}
                        @else
                        {{ $products->links('pagination::bootstrap-4') }}
                        @endif  
                    </nav>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->
@endsection