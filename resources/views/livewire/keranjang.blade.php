
@section('title', 'Keranjang')

@section('css')
{{-- Css Tambahan --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endsection


<div>
  {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  {{-- Breadcrumb --}}
  <div class="page-title-overlap bg-secondary pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-grey flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Keranjang</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 text-grey mb-2">Keranjang</h1>
      </div>
    </div>
  </div>

  {{-- Content --}}
  <div class="container">
    <div class="bg-light shadow-lg rounded-3">

      <!-- Tabs-->
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="nav-item"><a class="nav-link py-4 px-sm-4 active" href="#general" data-bs-toggle="tab" role="tab"><i class="ci-bag"></i> Informasi</a></li>
        <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="{{ route('checkout') }}" role="tab"><i class="ci-card"></i> Checkout </a></li>

      </ul>

      <div class="px-4 pt-lg-3 pb-3 mb-5">
        <div class="tab-content px-lg-3">

          <!-- Order tab-->
          <div class="tab-pane fade show active" id="general" role="tabpanel">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pe-lg-0">

                <!-- Item-->
                @forelse ($pesanan_details as $pesanan_detail)
                <div class="d-sm-flex justify-content-between align-items-center mt-3 mb-4 pb-3 border-bottom">
                  <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="#">
                      <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->product->gambar }}" width="120" alt="{{ $pesanan_detail->product->nama }}"></a>
                    <div class="pt-2">
                      <h3 class="product-title fs-base mb-2"><a href="{{ route('products') }}"><strong>{{ $pesanan_detail->product->nama }}</strong></a></h3>
                      {{-- <div class="fs-sm"><span class="text-muted me-2">Nama Ucapan :</span>{{ $pesanan_detail->nama_ucapan }}
                        </div>
                        <div class="fs-sm"><span class="text-muted me-2">Nomor Pemesan :</span>{{ $pesanan_detail->nomor_pemesan }}</div>
                        <div class="fs-sm"><span class="text-muted me-2">Tanggal Kirim :</span>{{ $pesanan_detail->tanggal_kirim }}</div>

                        <div class="fs-lg text-accent pt-2"><small>Rp. </small>{{ number_format($pesanan_detail->product->harga) }}</div> --}}
                    <ul class="list-unstyled fs-sm pb-2 border-bottom">
                      <li class="d-flex justify-content-between align-items-center"><span class="me-2">Nama Ucapan :</span><span class="text-end">{{ $pesanan_detail->nama_ucapan }}</span></li>
                      <li class="d-flex justify-content-between align-items-center"><span class="me-2">Nomor Pemesan :</span><span class="text-end">{{ $pesanan_detail->nomor_pemesan }}</span></li>
                      <li class="d-flex justify-content-between align-items-center"><span class="me-2">Tanggal Kirim :</span><span class="text-end">{{ $pesanan_detail->tanggal_kirim }}</span></li>
                    </ul>

                    <div class="widget-product-meta">
                      <span class="text-accent me-2"><small>Rp.</small> {{ number_format($pesanan_detail->product->harga) }}</span>
                    </div>

                  </div>
                  </div>

                  <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">

                    {{-- <label class="form-label" for="quantity1">  Quantity</label>
                            <input class="form-control" type="number" id="quantity1" value="{{ $pesanan_detail->jumlah_pesanan }}" min="1"> --}}

                    <div class="input-group mb-3">
                      <span class="input-group-text fw-medium"> <i class="ci-cart"></i></span>
                      <span class="input-group-text fw-medium form-control">{{ $pesanan_detail->jumlah_pesanan }}</span>
                    </div>


                    <button class="btn btn-link px-0 text-danger" type="button" wire:click="destroy({{ $pesanan_detail->id }})">
                      <i class="ci-close-circle me-2"></i><span class="fs-sm">Hapus</span></button>
                    <div class="fs-lg text-accent pt-2"><small>Rp. </small>{{ number_format($pesanan_detail->total_harga) }}</div>
                  </div>
                </div>
                @empty
                <div class="d-sm-flex justify-content-between align-items-center mt-3 mb-4 pb-3 border-bottom">
                  <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                    <!-- Accent alert -->
                    <div class="alert alert-primary" role="alert">
                      Keranjang Kosong! Harap pilih product terlebih dahulu. Kami menjual papan bunga, karangan bunga, hand buket, dsb
                      <br>
                      <div class="mt-2">
                        <a href="{{ route('products') }}"><button type="button" class="btn btn-outline-primary">Pilih Product</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforelse
              </div>

            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0 ">
              <div class="rounded-3 px-3 px-sm-4 py-4 pb-3">

                <!-- Header and footer -->
                <div class="card text-center">
                  <div class="card-header h5">Total Harga</div>

                    @if(!empty($pesanan))
                    <div class="card-body">
                      <div class="input-group mb-3">
                        <span class="input-group-text fw-medium">Sub Total</span>
                        <span class="input-group-text fw-medium form-control">{{ number_format($pesanan->total_harga) }}</span>
                        {{-- <input class="form-control" placeholder="First name" disabled> --}}
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text fw-medium">Kode Unik</span>
                        <span class="input-group-text fw-medium form-control">{{ number_format($pesanan->kode_unik) }}</span>
                        {{-- <input class="form-control" placeholder="First name" disabled> --}}
                      </div>

                      <h5 class="card-title">Total Yang Harus dibayarkan :</h5>

                      <div class="input-group">
                        <span class="input-group-text fw-medium"><i class="ci-cashier"></i></span>

                        <span class="input-group-text fw-medium form-control"> Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</span>
                        {{-- <input class="form-control" placeholder="First name" disabled> --}}
                      </div>
                    </div>
                    @else
                    <div class="card-body">
                      <div class="input-group mb-3">
                        <span class="input-group-text fw-medium">Sub Total</span>
                        <span class="input-group-text fw-medium form-control">Kosong</span>
                        {{-- <input class="form-control" placeholder="First name" disabled> --}}
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text fw-medium">Kode Unik</span>
                        <span class="input-group-text fw-medium form-control">xxx</span>
                        {{-- <input class="form-control" placeholder="First name" disabled> --}}
                      </div>

                      <h5 class="card-title">Total Yang Harus dibayarkan :</h5>

                      <div class="input-group">
                        <span class="input-group-text fw-medium"><i class="ci-cashier"></i></span>

                        <span class="input-group-text fw-medium form-control"> Kosong</span>
                        {{-- <input class="form-control" placeholder="First name" disabled> --}}
                      </div>
                    </div>
                    @endif

                  <div class="card-footer fs-sm ">
                    <form>
                      {{-- Submit Add To Cart --}}
                      <div class="row">
                        <div class="col">
                          <div class="d-flex justify-content-center align-items-center mb-4">
                            
                            <div class="w-100 me-2 mb-3">
                                {{-- <button class="btn btn-primary btn-shadow d-block w-100" href="{{ route('checkout') }}" type="submit"><i class="ci-card fs-lg me-2"></i>Checkout</button> --}}
                                <a class="btn btn-primary btn-shadow d-block" href="{{ route('checkout') }}"><i class="ci-card fs-lg me-2"></i>Checkout</a>
                            </div>

                          </div>

                          <div class="d-flex justify-content-center align-items-center mb-2">

                            <!-- Sharing-->
                            <label class="form-label d-inline-block align-middle my-2 me-3"><i class="ci-share-alt"></i></label>
                            <a class="btn-share btn-twitter me-2 my-2" href="#">
                              <i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#">
                              <i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#">
                              <i class="ci-facebook"></i>Facebook</a>
                          </div>

                        </div>
                      </div>
                    </form>
                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>


        <!-- Tech specs tab-->
        <div class="tab-pane fade" id="specs" role="tabpanel">

          <form class="needs-validation px-3 px-sm-4 px-xl-5 pt-sm-1 pb-4 pb-sm-5" novalidate>
            
          </form>

        </div>

      </div>
    </div>
  </div>
  {{-- End Content --}}
</div>

</div>

@push('javascript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@endpush