<div>

   <!-- Hero (Banners + Slider)-->
   <section class="bg-secondary py-4 pt-md-5">
      <div class="container py-xl-2">
         <div class="row">
            <!-- Slider     -->
            <div class="col-xl-9 pt-xl-4 order-xl-2">
               <div class="tns-carousel">
                  <div class="tns-carousel-inner"
                     data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: false}">
                     <div>
                        <div class="row align-items-center">
                           <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                 src="zilla/img/home/hero-slider/slider1.png" alt="Bunga Diskon" width="500px" height="auto" quality="60" format="webp">
                           </div>
                           <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                              <h2 class="fw-light pb-1 from-bottom color-slider1">Diskon 10%</h2>
                              <h1 class="display-4 from-bottom delay-1 color-slider1-blue">Bunda
                                 Florist</h1>
                              <h5 class="fw-light pb-3 from-bottom delay-2">Pilihan bunga terbaik
                                 untuk anda</h5>
                              <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                    class="btn btn-primary btn-shadow" href="">Shop Now<i
                                       class="ci-arrow-right ms-2 me-n1"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="row align-items-center">
                           <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                 src="{{ asset('zilla/img/home/hero-slider/slider2.png') }}" width="500px" height="auto" quality="60" format="webp" alt="Hand Bucket"></div>
                           <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                              <h2 class="fw-light pb-1 from-start">Hand Bucket</h2>
                              <h1 class="display-4 from-start delay-1 text-uppercase  font-nautilus">
                                 Order Online</h1>
                              <h5 class="fw-light pb-3 from-start delay-2">Bucket Bunga Berkualitas
                              </h5>
                              <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                    class="btn btn-primary btn-shadow" href="">Shop Now<i
                                       class="ci-arrow-right ms-2 me-n1"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="row align-items-center">
                           <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                 src="{{ asset('zilla/img/home/hero-slider/slider3.png') }}" width="500px" height="auto" quality="60" format="webp" alt="slider3"></div>
                           <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                              <h2 class="fw-light pb-1 scale-up">Layanan Kami</h2>
                              <h1 class="display-4 scale-up delay-1">Pelayanan Prioritas </h1>
                              <h5 class="fw-light pb-3 scale-up delay-2">Kepuasan customer adalah
                                 prioritas kami</h5>
                              <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                    class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now<i
                                       class="ci-arrow-right ms-2 me-n1"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Banner group-->
            <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
               <div class="table-responsive" data-simplebar>
                  <div class="d-flex d-xl-block">
                     @foreach($krans as $krans)
                     <a class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                        href="{{ route('products.liga', [Str::slug($krans->slug)]) }}" style="min-width: 16rem;">
                        @endforeach
                        <img src="{{ asset('zilla/img/home/banners/banner2.png') }}" width="125" height="auto" quality="60" format="webp" alt="bunda florist">
                        <div class="py-4 px-2">
                           <h5 class="mb-2"><span class="fw-light">Krans</span><br>Duka <span
                                 class="fw-light">Cita</span><br>Berkualitas</h5>
                           <div class="text-info fs-sm">Order Sekarang<i class="ci-arrow-right fs-xs ms-1"></i></div>
                        </div>
                     </a>

                     @foreach($bucket as $bucket)
                     <a class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                        href="{{ route('products.liga', [Str::slug($bucket->slug)]) }}" style="min-width: 16rem;">
                        @endforeach
                        <img src="{{ asset('zilla/img/home/banners/banner1.png') }}" width="125" height="auto" quality="60" format="webp" alt="bunda florist">
                        <div class="py-4 px-2">
                           <h5 class="mb-2"><span class="fw-light"></span>Bucket<br><span class="fw-light">Bunga
                              </span>Premium</h5>
                           <div class="text-warning fs-sm">Order Sekarang<i class="ci-arrow-right fs-xs ms-1"></i></div>
                        </div>
                     </a>
                     
                     @foreach($papan_bunga as $papan)
                     <a class="d-flex align-items-center bg-faded-success rounded-3 pt-2 ps-2 mb-4"
                        href="{{ route('products.liga', [Str::slug($papan->slug)]) }}" style="min-width: 16rem;">
                        @endforeach
                        <img src="{{ asset('zilla/img/home/banners/banner3.png') }}" width="125" height="auto" quality="60" format="webp" alt="bunda florist">
                        <div class="py-4 px-2">
                           <h5 class="mb-2"><span class="fw-light">Papan</span><br>Bunga <span
                                 class="fw-light">Termurah</span></h5>
                           <div class="text-success fs-sm">Order Sekarang<i class="ci-arrow-right fs-xs ms-1"></i></div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Products grid (Trending products)-->
   <section class="container pt-4">
      <!-- Heading-->
      <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
         <h2 class="h3 mb-0 pt-3 me-2">Products Terlaris</h2>
         <div class="pt-3">
            <a class="btn btn-outline-accent btn-sm" href="{{ route('products') }}">Lihat Semua
               <i class="ci-arrow-right ms-1 me-n1"></i></a>
         </div>
      </div>

      <div class="tns-carousel tns-controls-static tns-controls-outside mb-5">
         <div class="tns-carousel-inner"
            data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">

            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 px-4 pb-5" style="padding-bottom: 70px">
               <div class="card product-card"><span class="badge bg-primary badge-shadow">Dijual</span>
                  <div class="product-card-actions d-flex align-items-center">
                     <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Add to wishlist"><i class="ci-heart"></i></button>
                  </div>
                  <a class="card-img-top d-block overflow-hidden"
                     href="{{ route('products.detail', [Str::slug($product->slug)]) }}">
                     <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" alt="{{ $product->nama }}" quality="60" format="webp" alt="category page"></a>

                  {{-- @foreach ($ligas as $liga) --}}
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1">{{ $product->jenis }}</a>
                     {{-- @endforeach --}}
                     <h3 class="product-title fs-sm"><a
                           href="{{ route('products.detail', [Str::slug($product->slug)]) }}">{{ $product->nama }}</a>
                     </h3>
                     <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">Rp.
                              {{ number_format($product->harga) }}</span></div>
                        <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i>
                           <i class="star-rating-icon ci-star-filled active"></i>
                           <i class="star-rating-icon ci-star-filled active"></i>
                           <i class="star-rating-icon ci-star-filled active"></i>
                           <i class="star-rating-icon ci-star-filled "></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body card-body-hidden align-items-center">

                     <!-- Detail Product Page -->
                     <a href="{{ route('products.detail', [Str::slug($product->slug)]) }}">
                        <button type="button" class="btn btn-primary btn-sm btn-shadow d-block w-100" style="padding:2px 43px;"
                           data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lihat Detail">
                           <i class="ci-eye align-middle me-1"></i>
                        </button>
                     </a>
                     <!-- Modal Popup Qucik Detail-->
                     {{-- <a href="#quick-view-category" data-bs-toggle="modal">
                        <button type="button" class="btn btn-success btn-sm btn-shadow" style="padding:2px 43px;">
                           <i class="ci-eye align-middle me-1"></i>
                        </button>
                     </a> --}}

                  </div>
               </div>
               <hr class="d-sm-none">
            </div>
            @endforeach

         </div>
      </div>
   </section>

   <!-- Promo banner-->
   <section class="container mt-3 mb-grid-gutter">
      <div class="bg-faded-info rounded-3 py-1">
         <div class="row align-items-center">
            <div class="col-md-5">
               <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Terbatas</span>
                  <h3 class="mt-4 mb-1 text-body fw-light">All new</h3>
                  <h2 class="mb-1">Hand Bucket Premium</h2>
                  <p class="h5 text-body fw-light">ada diskon terbatas. Segera!</p>
                  <div class="countdown py-2 h4" data-countdown="07/01/2021 07:00:00 PM">
                     <div class="countdown-days"><span class="countdown-value"></span><span
                           class="countdown-label text-muted">d</span></div>
                     <div class="countdown-hours"><span class="countdown-value"></span><span
                           class="countdown-label text-muted">h</span></div>
                     <div class="countdown-minutes"><span class="countdown-value"></span><span
                           class="countdown-label text-muted">m</span></div>
                     <div class="countdown-seconds"><span class="countdown-value"></span><span
                           class="countdown-label text-muted">s</span></div>
                  </div><a class="btn btn-accent" href="#">View offers<i class="ci-arrow-right fs-ms ms-1"></i></a>
               </div>
            </div>
            <div class="col-md-7" ><img src="{{ asset('zilla/img/home/banners/special.png') }}" height="1500px" quality="60" format="webp" alt="special offer"></div>
         </div>
      </div>
   </section>

   <!-- Brands carousel-->
   <section class="container mb-5">
      <div class="tns-carousel border-end">
         <div class="tns-carousel-inner"
            data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">

            @foreach ($ligas as $liga)
            <div>
               <a class="d-block bg-white border py-4 py-sm-5 px-2"
                  href="{{ route('products.liga', [Str::slug($liga->slug)]) }}" style="margin-right: -.0625rem;">
                  <img class="d-block mx-auto" src="{{ url('assets/liga') }}/{{ $liga->gambar }}" width="165px" height="auto"
                  quality="60" format="webp" alt="bunda florist"></a>
            </div>
            @endforeach

         </div>
      </div>
   </section>

</div>