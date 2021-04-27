@section('title', 'Product Kategori')
<div>
    {{-- Be like water. --}}
    <div class="bg-secondary pt-4 pb-5">
    <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
        <div class="d-lg-flex justify-content-between pb-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-grey flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{ route('products') }}">Product</a>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $liga->nama }}</a>
                </li>
            </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-grey mb-0">Category {{ $title }}</h1>
        </div>
        </div>
    </div>
    </div>

    <div class="container pb-5 mb-2 mb-md-4">
        <!-- Toolbar-->
        <div class="bg-light shadow-lg rounded-3 mt-n5 mb-4">
          <div class="d-flex align-items-center">
            <!-- Search-->
            <div class="input-group py-2"><i class="ci-search position-absolute top-50 start-0 translate-middle-y fs-md ms-3"></i>
              <input wire:model="search" class="form-control border-0 shadow-none" type="text" placeholder="Search all product category...">
            </div>
            <!-- Pagination-->
            {{-- <div class="d-none d-md-flex align-items-center border-start ps-4"><span class="fs-md text-nowrap me-4">Pages&nbsp; 1 / 5</span>
                <a class="nav-link-style p-4 border-start" href="#"><span class="d-inline-block py-1">
                    <i class="ci-arrow-left"></i></span></a><a class="nav-link-style p-4 border-start" href="#">
                        <span class="d-inline-block py-1"><i class="ci-arrow-right"></i></span></a></div> --}}
          </div>
        </div>
        <!-- Products grid-->
        <div class="row pt-3 mx-n2">

         

        <!-- Product-->
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
                <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="ci-heart"></i></button>
                    <div class="product-card-actions">
                        <a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="{{ route('products.detail', [Str::slug($product->slug)]) }}">
                            <i class="ci-eye"></i></a>
                    <!-- Modal Popup Qucik Detail-->
                    {{-- <a href="#quick-view-category" data-bs-toggle="modal">
                    <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-eye"></i></button>
                    </a> --}}
                    </div>

                    <a class="product-thumb-overlay" href="{{ route('products.detail', [Str::slug($product->slug)]) }}"></a>
                    <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" alt="{{ $product->nama }}">
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                        <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="{{ route('home') }}">Bunda Florist </a>
                        </div>
                        <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i>
                        </div>
                    </div>
                    <h2 class="product-title fs-sm mb-2"><a href="{{ route('products.detail', [Str::slug($product->slug)]) }}">{{ $product->nama }}</a></h2>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">Rp. {{ number_format($product->harga) }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        </div>
        <hr class="my-3">
        <!-- Pagination-->
        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
            <ul class="pagination">
                {{ $products->links() }}
            </ul>
        </nav>
    </div>

</div>
