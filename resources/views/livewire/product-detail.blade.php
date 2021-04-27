@section('title', 'Product Detail')
@section('css')
{{-- Css Tambahan --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endsection


<div>
    {{-- Breadcrumb --}}
    <div class="page-title-overlap bg-secondary pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-grey flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{ route('products') }}">Product</a>
                </li>
                <li class="breadcrumb-item text-nowrap">{{ $product->jenis }}</li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Detail</li>
                </ol>
            </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-grey mb-2">{{ $product->nama }}</h1>
            <div>
                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                </div><span class="d-inline-block fs-sm text-grey opacity-70 align-middle mt-1 ms-1">74 Reviews</span>
            </div>
            </div>
        </div>
    </div>
    
    <!-- Quick View Modal-->
         
   {{-- <div class="modal-quick-view modal fade" id="quick-view-category" tabindex="-1">
    <div class="modal-dialog modal-xl">
        @foreach($products as $product)
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title product-title"><a href="shop-single-v2.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Go to product page">Smartwatch Youth Edition<i class="ci-arrow-right fs-lg ms-2"></i></a></h4>
             <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <div class="row">
                 <!-- Product gallery-->
                 <div class="col-lg-7 pe-lg-0">
                    
                    <div class="product-gallery">
                      <div class="product-gallery-preview order-sm-2">
                        <div class="product-gallery-preview-item active" id="first">
                            <img class="image-zoom" src="{{ url('assets/jersey') }}/{{ $product->gambar }}" data-zoom="{{ url('assets/jersey') }}/{{ $product->gambar }}" alt="{{ $product->nama }}">
                          <div class="image-zoom-pane"></div>
                        </div>                          
                      </div>
                      
                    </div>
                    
                  </div>
                <!-- Product details-->
                <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                   <div class="product-details ms-auto pb-3">
                      <div class="mb-2">
                         <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                         </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 Reviews</span>
                        </div>
                        <div class="h3 fw-normal text-accent mb-3 me-1">Rp. {{ number_format($product->harga) }}
                            <div class="mt-2">
                                @if($product->is_ready == 1)
                                <span class="badge bg-success btn-sm badge-shadow" style="font-size: 15px"><i class="ci-security-check"></i>Ready Stock</span>
                                @else
                                <span class="badge bg-danger btn-sm badge-shadow" style="font-size: 15px"><i class="ci-security-close"></i>Stock Kosong</span>
                                @endif
                            </div>
                        </div>


        
                      <div class="d-flex mb-4">
                         <div class="w-100 me-3">
                            <button class="btn btn-success btn-shadow d-block w-100" type="button"><i class="ci-viber fs-lg me-2"></i>
                                <span class='d-none d-sm-inline'>Pesan Via </span>WhatsApp</button>
                         </div>

                         <div class="w-100">
                            <button class="btn btn-primary btn-shadow d-block w-100 @if($product->is_ready
                                !==1) disabled @endif" type="submit"><i class="ci-cart fs-lg me-2"></i>Keranjang</button>
                         </div>
                      </div>
                      <h5 class="h6 mb-3 py-2 border-bottom"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Product info</h5>
                      <h6 class="fs-sm mb-2">General</h6>
                      <ul class="fs-sm pb-2">
                         <li><span class="text-muted">Model: </span>Amazfit Smartwatch</li>
                         <li><span class="text-muted">Gender: </span>Unisex</li>
                         <li><span class="text-muted">OS campitibility: </span>Android / iOS</li>
                      </ul>
                      <h6 class="fs-sm mb-2">Physical specs</h6>
                      <ul class="fs-sm pb-2">
                         <li><span class="text-muted">Shape: </span>Rectangular</li>
                         <li><span class="text-muted">Body material: </span>Plastics / Ceramics</li>
                         <li><span class="text-muted">Band material: </span>Silicone</li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
       @endforeach
    </div>
    </div> --}}

 

    {{-- Content --}}
    <div class="container">
        <div class="bg-light shadow-lg rounded-3">
            <!-- Tabs-->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link py-4 px-sm-4 active" href="#general" data-bs-toggle="tab" role="tab">Informasi <span class='d-none d-sm-inline'>Umum</span></a></li>
              <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#specs" data-bs-toggle="tab" role="tab"><span class='d-none d-sm-inline'>Spesifikasi</span> Detail</a></li>
              <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#reviews" data-bs-toggle="tab" role="tab">Ulasan <span class="fs-sm opacity-60">(35)</span></a></li>
            </ul>
            <div class="px-4 pt-lg-3 pb-3 mb-5">
              <div class="tab-content px-lg-3">
                <!-- Informasi Umum tab-->

                  
                  <div class="tab-pane fade show active" id="general" role="tabpanel">
                    <div class="row">
                      <!-- Product gallery-->
                      <div class="col-lg-7 pe-lg-0">
                        <div class="product-gallery">
                          <div class="product-gallery-preview order-sm-2">
                            <div class="product-gallery-preview-item active" id="first">
                                <img class="image-zoom" src="{{ url('assets/jersey') }}/{{ $product->gambar }}" data-zoom="{{ url('assets/jersey') }}/{{ $product->gambar }}" alt="{{ $product->nama }}">
                              <div class="image-zoom-pane"></div>
                            </div>                          
                          </div>
                          
                        </div>
                      </div>
                      <!-- Product details-->
                      <div class="col-lg-5 pt-4 pt-lg-0">
                        <div class="product-details ms-auto pb-3">
  
                          {{-- Nama Product --}}
                          <div class="d-flex align-item-center pt-2 pb-1">
                          <h2 class="h3 text-dark">{{ $product->nama }}</h2>
                          </div>
  
                          <div class="h3 fw-normal text-accent mb-3 me-1">Rp. {{ number_format($product->harga) }}
                              <div class="mt-2">
                                  @if($product->is_ready == 1)
                                  <span class="badge bg-info btn-sm badge-shadow" style="font-size: 15px"><i class="ci-security-check"></i> Ready Stock</span>
                                  @else
                                  <span class="badge bg-danger btn-sm badge-shadow" style="font-size: 15px"><i class="ci-security-close"></i> Stock Kosong</span>
                                  @endif
                              </div>
                          </div>                       
                          
                          <form wire:submit.prevent="masukkanKeranjang">
                            @csrf
                              {{-- Submit Add To Cart --}}
                              <div class="d-flex mb-4">
                              <div class="w-100 me-3">

                                  <a href="https://api.whatsapp.com/send/?phone=628111961139&text=Halo+Bunda+Florist..+Saya+Ingin+Pesan+{{ $product->nama }},+Rp.+{{ number_format($product->harga) }},+{{ $product->jumlah_pesanan }}+{{ route('products.detail', [Str::slug($product->slug)]) }}&app_absent=0" onclick="getWA()";>
                                    <button class="btn btn-success btn-shadow d-block w-100" type="button"><i class="ci-viber fs-lg me-2"></i>
                                      <span class='d-none d-sm-inline'>Pesan Via </span>WhatsApp</button>
                                  </a>

                              </div>

                              <div class="w-100">
                                  <button class="btn btn-primary btn-shadow d-block w-100 @if($product->is_ready
                                      !==1) disabled @endif" type="submit"><i class="ci-cart fs-lg me-2"></i>Keranjang</button>
                              </div>
                              </div>
      
                              <!-- Product panels-->
                      <div class="accordion mb-4" id="productPanels">

                        
                          <div class="accordion-item">
                            <h3 class="accordion-header"><a class="accordion-button" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions">
                              <i class="ci-document text-muted lead align-middle mt-n1 me-2"></i>Form Pesan Online</a></h3>
                            <div class="accordion-collapse collapse show" id="shippingOptions" data-bs-parent="#productPanels">
                              <div class="accordion-body fs-sm">
                                <div class="d-flex justify-content-between form-floating pb-2">
                                  <select class="form-select @error('jumlah_pesanan') is-invalid @enderror" id="jumlah_pesanan" type="number" 
                                    wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" min="1" required autocomplete="name" autofocus>
                                    
                                    <option selected>Masukan Jumlah</option>
                                    <option value="1" {{($jumlah_pesanan === '1') ? 'Selected' : ''}}>1</option>
                                    <option value="2" {{($jumlah_pesanan === '2') ? 'Selected' : ''}}>2</option>
                                    <option value="3" {{($jumlah_pesanan === '3') ? 'Selected' : ''}}>3</option>
                                    {{-- <option value="2" @if(old('jumlah_pesanan', $jumlah_pesanan) === '2')  'selected' @endif>2</option>
                                    <option value="3" @if(old('jumlah_pesanan', $jumlah_pesanan) === '3')  'selected' @endif>3</option> --}}
    
                                  </select>
                                  <label for="jumlah_pesanan">Jumlah Pesanan</label>
                                </div>
    
                                <div class="d-flex justify-content-between form-floating py-2">
                                  <input class="form-control @error('nama_ucapan') is-invalid @enderror" type="text" id="nama_ucapan" 
                                  wire:model="nama_ucapan" value="{{ old('nama_ucapan') }}" autocomplete="name" required autofocus placeholder="Nama Ucapan">
                                  <label for="nama_ucapan">Nama Ucapan</label>
                                </div>
    
                                <div class="d-flex justify-content-between form-floating pt-2 mb-2">
                                  <input class="form-control @error('nomor_pemesan') is-invalid @enderror" type="number" id="nomor_pemesan" 
                                  wire:model="nomor_pemesan" value="{{ old('nomor_pemesan') }}" autocomplete="name" required autofocus placeholder="Nomor Pemesan">
                                  <label for="nomor_pemesan">Nomor Pemesan</label>
                                </div>
    
                                <div class="d-flex justify-content-between form-floating pt-2">
                                  <input class="form-control @error('tanggal_kirim') is-invalid @enderror" type="date" id="tanggal_kirim" 
                                  wire:model="tanggal_kirim" value="{{ old('tanggal_kirim') }}" autocomplete="name" required autofocus placeholder="Tanggal Kirim">
                                  <label for="tanggal_kirim">Tanggal Kirim</label>
                                </div>
    
                              </div>
                            </div>
                          </div>
                        </form>
                        
                        <div class="accordion-item">
                          <h3 class="accordion-header"><a class="accordion-button collapsed" href="#localStore" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="localStore">
                            <i class="ci-delivery text-muted fs-lg align-middle mt-n1 me-2"></i>Pengiriman</a></h3>
                          <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                            <div class="accordion-body">
                              
                              <div class="d-flex justify-content-between border-bottom pb-2">
                                <div>
                                  <div class="fw-semibold text-dark">Dalam Satu Kecamatan</div>
                                  <div class="fs-sm text-muted">3 - 4 jam</div>
                                </div>
                                <div>Free Ongkir</div>
                              </div>

                              <div class="d-flex justify-content-between border-bottom py-2">
                                <div>
                                  <div class="fw-semibold text-dark">Dalam Satu Kota</div>
                                  <div class="fs-sm text-muted">4 - 5 jam</div>
                                </div>
                                <div>Free Ongkir</div>
                              </div>

                              <div class="d-flex justify-content-between py-2">
                                <div>
                                  <div class="fw-semibold text-dark">Diluar Kota </div>
                                  <div class="fs-sm text-muted">5 - 6 jam</div>
                                </div>
                                <div>Syarat dan Ketentuan Berlaku</div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                          
                          
                          <!-- Sharing-->
                          <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label>
                          <a class="btn-share btn-twitter me-2 my-2" href="#">
                              <i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#">
                              <i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#">
                              <i class="ci-facebook"></i>Facebook</a>
                        </div>
                      </div>
                    </div>
                  </div>


                <!-- Tech specs tab-->
                <div class="tab-pane fade" id="specs" role="tabpanel">
                  <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
                    <div class="d-flex align-items-center me-md-3"><img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" width="90" alt="{{ $product->nama }}">
                      <div class="ps-3">
                        <h6 class="fs-base mb-2">{{ $product->nama }}</h6>
                        <div class="h4 fw-normal text-accent">Rp. {{ number_format($product->harga) }}</div>
                      </div>
                    </div>
                    
                  </div>
                  <!-- Specs table-->
                  <div class="row pt-2">
                    <div class="col-lg-5 col-sm-6">
                      <h3 class="h6">General specs</h3>
                      <ul class="list-unstyled fs-sm pb-2">
                        <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Dimensions:</span><span>150 x 200 cm</span></li>
                        <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Weight:</span><span>10 kg</span></li>
                      </ul>
                    </div>
                    <div class="col-lg-5 col-sm-6 offset-lg-1">
                      <h3 class="h6">Functions</h3>
                      <ul class="list-unstyled fs-sm pb-2">
                        <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Phone calls:</span><span>Incoming call notification</span></li>
                        <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Monitoring:</span><span>Heart rate / Physical activity</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Reviews tab-->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                  <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
                    <div class="d-flex align-items-center me-md-3"><img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" width="90" alt="{{ $product->nama }}">
                      <div class="ps-3">
                        <h6 class="fs-base mb-2">{{ $product->nama }}</h6>
                        <div class="h4 fw-normal text-accent">Rp. {{ number_format($product->harga) }}</div>
                      </div>
                    </div>
                  </div>
                  <!-- Reviews-->
                  <div class="row pt-2 pb-3">
                    <div class="col-lg-4 col-md-5">
                      <h3 class="h3 mb-4">35 Ulasan</h3>
                      <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i>
                        <i class="ci-star-filled fs-sm text-accent me-1"></i>
                        <i class="ci-star-filled fs-sm text-accent me-1"></i>
                        <i class="ci-star-filled fs-sm text-accent me-1"></i>
                        <i class="ci-star fs-sm text-muted me-1"></i>
                        </div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                      <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Bintang Dari Customer</p>
                    </div>
                    {{-- Progress Bar --}}
                    <div class="col-lg-8 col-md-7">
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">31</span>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">1</span>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">1</span>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">1</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">1</span>
                      </div>
                    </div>
                  </div>
                  <hr class="mt-4 mb-3">
                  <div class="row py-4">
                    <!-- Reviews list-->
                    <div class="col-md-7">
                      <div class="d-flex justify-content-end pb-4">
                        <div class="d-flex flex-nowrap align-items-center">
                          <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                          <select class="form-select form-select-sm" id="sort-reviews">
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>Popular</option>
                            <option>High rating</option>
                            <option>Low rating</option>
                          </select>
                        </div>
                      </div>
                      <!-- Review-->
                      <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                          <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="{{ asset('zilla/img/shop/reviews/01.jpg') }}" width="50" alt="Rahmat Dermawan">
                            <div class="ps-3">
                              <h6 class="fs-sm mb-0">Rahmat Dermawan</h6><span class="fs-ms text-muted">Jan 28, 2021</span>
                            </div>
                          </div>
                          <div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                        {{-- Isi Ulasan --}}
                        <p class="fs-md mb-2">Product di bunda florist memang berkualitas</p>

                        <div class="text-nowrap">
                          <button class="btn-like" type="button">15</button>
                          <button class="btn-dislike" type="button">3</button>
                        </div>
                      </div>

                      <!-- Review-->
                      <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                          <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="{{ asset('zilla/img/shop/reviews/02.jpg') }}" width="50" alt="Anggi">
                            <div class="ps-3">
                              <h6 class="fs-sm mb-0">Anggi</h6><span class="fs-ms text-muted">Jan 15, 2021</span>
                            </div>
                          </div>
                          <div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                        {{-- Isi Ulasan --}}
                        <p class="fs-md mb-2">Pelayanan cepat, fast respond terimakasih bunda</p>

                        <div class="text-nowrap">
                          <button class="btn-like" type="button">20</button>
                          <button class="btn-dislike" type="button">2</button>
                        </div>
                      </div>

                      <!-- Review-->
                      <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                          <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="{{ asset('zilla/img/shop/reviews/03.jpg') }}" width="50" alt="Agus">
                            <div class="ps-3">
                              <h6 class="fs-sm mb-0">Agus</h6><span class="fs-ms text-muted">Jan 10, 2021</span>
                            </div>
                          </div>
                          <div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                          </div>
                        </div>
                        {{-- Isi Ulasan --}}
                        <p class="fs-md mb-2">wah product nya murah ...</p>

                        <div class="text-nowrap">
                          <button class="btn-like" type="button">18</button>
                          <button class="btn-dislike" type="button">2</button>
                        </div>
                      </div>
                      
                      <div class="text-center">
                        <button class="btn btn-outline-accent" type="button"><i class="ci-reload me-2"></i>Review Selengkapnya</button>
                      </div>
                    </div>

                    
                    <!-- Leave review form-->
                    <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                      @if(Auth::user())
                      <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                        <h3 class="h4 pb-2">Write a review</h3>
                        <form class="needs-validation" method="post" novalidate>
                          @csrf
                          <div class="mb-3">
                            <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" required id="review-name">
                            <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
                            <input class="form-control" type="email" required id="review-email">
                            <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                            <select class="form-select" required id="review-rating">
                              <option value="">Choose rating</option>
                              <option value="5">5 stars</option>
                              <option value="4">4 stars</option>
                              <option value="3">3 stars</option>
                              <option value="2">2 stars</option>
                              <option value="1">1 star</option>
                            </select>
                            <div class="invalid-feedback">Please choose rating!</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="6" required id="review-text"></textarea>
                            <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                          </div>
                          
                          <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                        </form>
                      </div>
                      @else
                      <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                        <h3 class="h4 pb-2">Write a review</h3>
                        <form class="needs-validation" method="post" novalidate>
                          @csrf
                          <div class="mb-3">
                            <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" required id="review-name" disabled>
                            <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
                            <input class="form-control" type="email" required id="review-email" disabled>
                            <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                            <select class="form-select" required id="review-rating" disabled>
                              <option value="">Choose rating</option>
                              <option value="5">5 stars</option>
                              <option value="4">4 stars</option>
                              <option value="3">3 stars</option>
                              <option value="2">2 stars</option>
                              <option value="1">1 star</option>
                            </select>
                            <div class="invalid-feedback">Please choose rating!</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="6" required id="review-text" disabled></textarea>
                            <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                          </div>
                          
                          <button class="btn btn-primary btn-shadow d-block w-100" type="submit" disabled>Submit a Review</button>
                        </form>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

</div>