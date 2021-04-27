@section('css')
{{-- Css Tambahan --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endsection
<div>

    <!-- Custom page title-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{ route('products') }}">Product</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $product->jenis }}</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-2">{{ $product->nama }}</h1>
            <div>
              <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
              </div><span class="d-inline-block fs-sm text-white opacity-70 align-middle mt-1 ms-1">74 Reviews</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="bg-light shadow-lg rounded-3">
          <!-- Tabs-->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link py-4 px-sm-4 active" href="#general" data-bs-toggle="tab" role="tab">Info <span class='d-none d-sm-inline'>Product</span></a></li>
            <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#specs" data-bs-toggle="tab" role="tab"><span class='d-none d-sm-inline'>Ukuran</span> Product</a></li>
            <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#reviews" data-bs-toggle="tab" role="tab">Ulasan <span class="fs-sm opacity-60">(74)</span></a></li>
          </ul>
          <div class="px-4 pt-lg-3 pb-3 mb-5">
            <div class="tab-content px-lg-3">
              <!-- General info tab-->
              <form wire:submit.prevent="masukkanKeranjang">
                <div class="tab-pane fade show active" id="general" role="tabpanel">
                    <div class="row">
                      <!-- Product gallery-->
                      <div class="col-lg-7 pe-lg-0">
                        <div class="product-gallery">
                          <div class="product-gallery-preview order-sm-2">
                            <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="{{ url('assets/jersey') }}/{{ $product->gambar }}" data-zoom="{{ url('assets/jersey') }}/{{ $product->gambar }}" alt="{{ $product->nama }}">
                              <div class="image-zoom-pane"></div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-- Product details-->
                      <div class="col-lg-5 pt-4 pt-lg-0">
                        <div class="product-details ms-auto pb-3">
                          <div class="h3 fw-normal text-accent mb-3 me-1">Rp. {{ number_format($product->harga) }}</div>                      
                          <div class="position-relative me-n4 mb-3">
                            @if($product->is_ready == 1)
                            <div class="product-badge product-available mt-n1 mb-2"><i class="ci-security-check"></i>Ready Stock</div>
                            @else
                            <div class="product-badge product-available bg-danger mt-n1 mb-2"><i class="ci-security-check"></i>Stock Kosong</div>
                            @endif
                        </div>

                        <div class="d-flex align-items-center pt-4 pb-4">
                            {{-- <select class="form-select @error('jumlah_pesanan') is-invalid @enderror me-3" id="jumlah_pesanan" type="number" wire:model="jumlah_pesanan" required autocomplete="name" autofocus style="width: 5rem;">
                              <option id="jumlah_pesanan" type="number" wire:model="jumlah_pesanan" required autocomplete="name" autofocus value="{{ old('jumlah_pesanan') }}">1</option>
                              <option id="jumlah_pesanan" type="number" wire:model="jumlah_pesanan" required autocomplete="name" autofocus value="{{ old('jumlah_pesanan') }}">2</option>
                              <option id="jumlah_pesanan" type="number" wire:model="jumlah_pesanan" required autocomplete="name" autofocus value="{{ old('jumlah_pesanan') }}">3</option>
                            </select> --}}
                            <div class="d-flex mb-3">
                                <h6> Jumlah :
                                <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror mt-2" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="name" autofocus>
                                </h6>
                                @error('jumlah_pesanan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit" @if($product->is_ready
                            !==1) disabled @endif><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>

                        </div>
                          

                                <div class="d-flex mb-3">
                                    <h6> Nama Ucapan :
                                    <input id="nama_ucapan" type="text" class="form-control @error('nama_ucapan') is-invalid @enderror mt-2" wire:model="nama_ucapan" value="{{ old('nama_ucapan') }}" required autocomplete="name" autofocus>
                                    </h6>
                                    @error('nama_ucapan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                
                                <div class="d-flex mb-3">
                                    <h6> Nomor Pemesan :
                                    <input id="nomor_pemesan" type="number" class="form-control @error('nomor_pemesan') is-invalid @enderror mt-2" wire:model="nomor_pemesan" value="{{ old('nomor_pemesan') }}" required autocomplete="name" autofocus>
                                    </h6>
                                    @error('nomor_pemesan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="d-flex mb-3">
                                    <h6> Nomor Pemesan :
                                    <input id="tanggal_kirim" type="date" class="form-control @error('tanggal_kirim') is-invalid @enderror mt-2" wire:model="tanggal_kirim" value="{{ old('tanggal_kirim') }}" required autocomplete="name" autofocus>
                                    </h6>
                                    @error('tanggal_kirim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        

                          <div class="d-flex mb-4">
                            <div class="w-100 me-3">
                              <button class="btn btn-success d-block w-100" type="button"><i class="ci-viber fs-lg me-2"></i><span class='d-none d-sm-inline'>  </span>Pesan Via WhatsApp</button>
                            </div>
                            
                          </div>
                          <!-- Product panels-->
                          <div class="accordion mb-4" id="productPanels">
                            <div class="accordion-item">
                              <h3 class="accordion-header"><a class="accordion-button" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>Shipping options</a></h3>
                              <div class="accordion-collapse collapse show" id="shippingOptions" data-bs-parent="#productPanels">
                                <div class="accordion-body fs-sm">
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
                                  <div class="d-flex justify-content-between border-bottom py-2">
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
                          <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="ci-facebook"></i>Facebook</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
              <!-- Tech specs tab-->
              <div class="tab-pane fade" id="specs" role="tabpanel">
                <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
                  <div class="d-flex align-items-center me-md-3"><img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" width="90" alt="Product thumb">
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
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Model:</span><span>Amazfit Smartwatch</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Gender:</span><span>Unisex</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Smartphone app:</span><span>Amazfit Watch</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">OS campitibility:</span><span>Android / iOS</span></li>
                    </ul>
                    <h3 class="h6">Physical specs</h3>
                    <ul class="list-unstyled fs-sm pb-2">
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Shape:</span><span>Rectangular</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Body material:</span><span>Plastics / Ceramics</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Band material:</span><span>Silicone</span></li>
                    </ul>
                    <h3 class="h6">Display</h3>
                    <ul class="list-unstyled fs-sm pb-2">
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Display type:</span><span>Color</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Display size:</span><span>1.28"</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Screen resolution:</span><span>176 x 176</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Touch screen:</span><span>No</span></li>
                    </ul>
                  </div>
                  <div class="col-lg-5 col-sm-6 offset-lg-1">
                    <h3 class="h6">Functions</h3>
                    <ul class="list-unstyled fs-sm pb-2">
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Phone calls:</span><span>Incoming call notification</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Monitoring:</span><span>Heart rate / Physical activity</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">GPS support:</span><span>Yes</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Sensors:</span><span>Heart rate, Gyroscope, Geomagnetic, Light sensor</span></li>
                    </ul>
                    <h3 class="h6">Battery</h3>
                    <ul class="list-unstyled fs-sm pb-2">
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Battery:</span><span>Li-Pol</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Battery capacity:</span><span>190 mAh</span></li>
                    </ul>
                    <h3 class="h6">Dimensions</h3>
                    <ul class="list-unstyled fs-sm pb-2">
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Dimensions:</span><span>195 x 20 mm</span></li>
                      <li class="d-flex justify-content-between pb-2 border-bottom"><span class="text-muted">Weight:</span><span>32 g</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Reviews tab-->
              <div class="tab-pane fade" id="reviews" role="tabpanel">
                <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
                  <div class="d-flex align-items-center me-md-3"><img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" width="90" alt="Product thumb">
                    <div class="ps-3">
                      <h6 class="fs-base mb-2">{{ $product->nama }}</h6>
                      <div class="h4 fw-normal text-accent">Rp. {{ number_format($product->harga) }}</div>
                    </div>
                  </div>
                  
                </div>
                <!-- Reviews-->
                <div class="row pt-2 pb-3">
                  <div class="col-lg-4 col-md-5">
                    <h2 class="h3 mb-4">74 Reviews</h2>
                    <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                    <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">43</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">16</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">9</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">4</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">2</span>
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
                        <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="{{ asset('zilla/img/shop/reviews/01.jpg') }}" width="50" alt="Rafael Marquez">
                          <div class="ps-3">
                            <h6 class="fs-sm mb-0">Rafael Marquez</h6><span class="fs-ms text-muted">June 28, 2019</span>
                          </div>
                        </div>
                        <div>
                          <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                          </div>
                          <div class="fs-ms text-muted">83% of users found this review helpful</div>
                        </div>
                      </div>
                      <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                      <ul class="list-unstyled fs-ms pt-1">
                        <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                        <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                      </ul>
                      <div class="text-nowrap">
                        <button class="btn-like" type="button">15</button>
                        <button class="btn-dislike" type="button">3</button>
                      </div>
                    </div>
                    
                    
                  </div>
                  <!-- Leave review form-->
                  <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                    <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                      <h3 class="h4 pb-2">Write a review</h3>
                      <form class="needs-validation" method="post" novalidate>
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
                        <div class="mb-3">
                          <label class="form-label" for="review-pros">Pros</label>
                          <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="review-cons">Cons</label>
                          <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</div>