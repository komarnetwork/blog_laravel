<div class="container">
    {{-- Be like water. --}}
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>{{ $title }}</h2>
        </div>
        <!-- Search -->
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search . . ."
                    aria-label="Search" aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <section class="products mb-5">
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-6 col-md-3 mb-4">
                <div class="card border-success">
                    <div class="card-body text-center">

                        <a href="{{ route('products.detail', [Str::slug($product->slug)]) }}"><img
                                src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                        </a>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h6><strong>{{ $product->nama }}</strong> </h6>
                                <h6>Rp. {{ number_format($product->harga) }}</h6>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', [Str::slug($product->slug)]) }}"
                                    class="btn btn-success btn-block"><i class="fas fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col">
                {{ $products->links() }}

                {{-- livewire v2 --}}
                {{-- {{ $products->links('product-index') }} --}}
            </div>
        </div>
    </section>

</div>
