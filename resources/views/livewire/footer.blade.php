<div>
    {{-- The Master doesn't talk, he acts. --}}
    <footer class="bg-secondary pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links pb-2 mb-4">
              <h3 class="widget-title">Kontak Kami</h3>
              <ul class="widget-list">
                <div class="col-md-6 col-sm-6 mb-4">
                  <!-- Widget: Contact details -->
                  <div class="widget">
                    <ul class="widget-list">
                      <li class="d-flex pt-2 pb-3 border-bottom">
                        <i class="ci-viber fs-lg mt-2 text-success" style="font-size: 5.25rem;"></i>
                        <div class="ps-3">
                          <span class="fs-ms text-muted">WhatsApp</span>
                         
                            <a class="d-block text-heading fs-sm" href="https://api.whatsapp.com/send/?phone=628111961139&text=Halo+Bunda+Florist%2C+Saya+Ingin+Order+Bunga&app_absent=0" onclick="getWA()";>+62 811-1961-139</a>
                          
                        </div>
                      </li>
                      <li class="d-flex pt-2">
                        <i class="ci-mail fs-lg mt-2 text-primary"></i>
                        <div class="ps-3">
                          <span class="fs-ms text-muted">Email Kami</span>
                          <a class="d-block text-heading fs-sm" href="mailto:email@example.com">cs@bundaflorist.id</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links pb-2 mb-4">
              <h3 class="widget-title">Product Kami</h3>
              <ul class="widget-list">

                @foreach ($ligas as $liga)                    
                <li class="widget-list-item">
                  <a href="{{ route('products.liga', [Str::slug($liga->slug)]) }}" class="widget-list-link">{{ $liga->nama }}</a>
                </li>                
                @endforeach

              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title pb-1">Dapatkan Potongan Harga</h3>
              <form class="input-group flex-nowrap">
                <i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="email" placeholder="Your email" required>
                <button class="btn btn-primary" type="submit">Dapatkan Diskon*</button>
              </form>
              <div class="form-text">*Ikuti untuk mendapatkan product terbaru kami, kamu akan mendapatkan harga diskon</div>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="me-2 mb-2">
                  <a class="btn-market btn-apple" href="#" role="button">
                    <span class="btn-market-subtitle">Download on the</span>
                    <span class="btn-market-title">App Store</span>
                  </a>
                </div>
                <div class="mb-2">
                  <a class="btn-market btn-google" href="#" role="button">
                    <span class="btn-market-subtitle">Download on the</span>
                    <span class="btn-market-title">Google Play</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
      <div class="pt-5" style="background-color: #ecf2f7;">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base mb-1">Pengiriman Cepat</h6>
                  <p class="mb-0 fs-ms text-muted">Free ongkir sampai 20Km</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <i class="ci-dollar-circle text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base mb-1">Harga Terjangkau</h6>
                  <p class="mb-0 fs-ms text-muted">Kami memiliki harga terjangkau</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base mb-1">24/7 Dukungan Pelanggan</h6>
                  <p class="mb-0 fs-ms text-muted">Melayani 24/7 dukungan pelanggan</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base mb-1">Transaksi Aman Terpercaya</h6>
                  <p class="mb-0 fs-ms text-muted">Pembayaran aman dan terpercaya</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-5">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-start mb-4">
              <div class="text-nowrap mb-4">
                <a class="d-inline-block align-middle mt-n1 me-3" href="#">
                  <h3 style="color: rgb(245, 98, 30)">Bunda <span style="color: rgba(0, 0, 0, 0.801)">Florist</span> </h3>
                </a>
                <p>Kami Adalah Distributor Papan Bunga,<br> Karangan Bunga, Hand Bucket dsb<br>
                  Segera Dapatkan Penawaran Terbaik Dari Kami.</p>
                
              </div>
              <div class="widget widget-links">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item me-4">
                    <a href="#" class="widget-list-link">Outlets</a>
                  </li>
                  <li class="widget-list-item me-4">
                    <a href="#" class="widget-list-link">Affiliates</a>
                  </li>
                  <li class="widget-list-item me-4">
                    <a href="#" class="widget-list-link">Support</a>
                  </li>
                  <li class="widget-list-item me-4">
                    <a href="#" class="widget-list-link">Privacy</a>
                  </li>
                  <li class="widget-list-itemme-4">
                    <a href="#" class="widget-list-link">Terms of use</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-end mb-4">
              <div class="mb-3">
                <a class="btn-social bs-outline bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a>
                <a class="btn-social bs-outline bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a>
                <a class="btn-social bs-outline bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a>
                <a class="btn-social bs-outline bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a>
                <a class="btn-social bs-outline bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a>
              </div>
              <img class="d-inline-block" width="80" src="{{ url('assets/bca.png') }}" alt="Pembayaran"/>
              <img class="d-inline-block" width="80" src="{{ url('assets/mandiri.png') }}" alt="Pembayaran"/>
    
            </div>
          </div>
          <div class="pb-4 fs-xs text-muted text-center text-md-start">© All rights reserved. Made by <a class="text-muted" href="#">Komarudin</a></div>
        </div>
      </div>

    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="https://api.whatsapp.com/send/?phone=628111961139&text=Halo+Bunda+Florist..+Saya+Ingin+Pesan+Bunga&app_absent=0" onclick="getWA()";>
            <span class="handheld-toolbar-icon"><i class="ci-viber"></i></span>
            <span class="handheld-toolbar-label">WhatsApp</span>
        </a>
        
        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        onclick="window.scrollTo(0, 0)">
        <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Menu</span></a>

        <a class="d-table-cell handheld-toolbar-item" href="{{ route('keranjang') }}">
        <span class="handheld-toolbar-icon"><i class="ci-cart"></i>
            @if($jumlah_pesanan !==0)
            <span class="badge bg-primary rounded-pill ms-1">{{ $jumlah_pesanan }}</span>
            @endif
        </span>

        @if(!empty($pesanan))
        <span class="handheld-toolbar-label">Rp. {{ number_format($pesanan->total_harga) }}</span>
        @else
        <span class="handheld-toolbar-label">Keranjang</span>
        @endif
        </a>
    </div>
    </div>

    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon ci-arrow-up"></i>
    </a>
</div>
