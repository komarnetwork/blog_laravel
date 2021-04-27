<div>
    {{-- Breadcrumb --}}
    <div class="page-title-overlap bg-secondary pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-grey flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item"><a class="text-nowrap">{{ Auth::user()->name }}</a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">History</li>
            </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-grey mb-2">Order Saya</h1>
        </div>
        </div>
    </div>
    
    {{-- Content --}}
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
          <!-- Sidebar-->
          <aside class="col-lg-3 pt-4 pt-lg-0 pe-xl-5">
            <div class="bg-white rounded-3 justify-content-center align-items-center shadow-lg pt-1 mb-5 mb-lg-0">
              <div class="d-md-flex justify-content-center text-center text-md-start p-4">
                <div class="d-md-flex align-items-center">
                  <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 6.375rem;">
                      <img class="rounded-circle" src="{{ asset('zilla/img/about/user-kosong.svg') }}" alt="{{ Auth::user()->name }}"></div>
                </div>
              </div>

              <div class="ps-md-3 mb-3 text-center">
                <h3 class="fs-base mb-0">{{ Auth::user()->name }}</h3><span class="text-accent fs-sm">{{ Auth::user()->email }}</span>
              </div>
              
              <div class="d-lg-block collapse" id="account-menu">
                <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                </div>

                <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-profile.html">
                  <i class="ci-bag opacity-60 me-2"></i>History</a></li>
                </ul>
                
              </div>
            </div>
          </aside>
          <!-- Content  -->
          <section class="col-lg-9">

            <!-- Toolbar -->
            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
              <a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="ci-sign-out me-2"></i>{{ __('Logout') }}</a>
            </div>

            {{-- TES --}}
            
            

          <!-- Orders list-->
          <div class="table-responsive fs-md mb-4">
            

            <table class="table table-hover table-striped mb-0 table-big">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Pemesan</th>
                  <th>Tanggal Pesanan</th>
                  <th>Pesanan</th>
                  <th>Tanggal Kirim</th>
                  <th>Status</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                @forelse ($pesanans as $pesanan)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pesanan->kode_pemesanan }}</td>
                    <td>{{ $pesanan->created_at }}</td>
                    
                    <td>
                      <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                      @foreach ($pesanan_details as $pesanan_detail)
                      <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->product->gambar }}"
                          class="img-fluid mb-2" width="50" height="auto">
                      {{ $pesanan_detail->product->nama }}
                      <br>
                      @endforeach
                    </td>

                    <td>
                      @if ($pesanan_detail->tanggal_kirim)
                      {{ $pesanan_detail->tanggal_kirim }}
                      @else
                      -
                      @endif
                    </td>

                    <td>
                      @if($pesanan->status == 1)
                      <span class="badge bg-danger m-0 text-uppercase">Belum Lunas</span>
                      @else
                        <span class="badge bg-success m-0 text-uppercase">Lunas</span>
                      @endif
                    </td>
                    <td>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</td>

                    @empty
                    <tr>                
                      <td colspan="8" class="text-center">Data Kosong</td>
                    </tr>
                  </tr>
                @endforelse
              </tbody>
            </table>
            
            <table class="table table-hover table-striped justify-content-center align-items-center table-small">
              <?php $no = 1 ?>
              @forelse ($pesanans as $pesanan)
              <tbody>
                <tr>
                  <td>No</td>
                  <td>{{ $no++ }}</td>
                </tr>
                <tr>
                  <td>Kode Pemesanan</td>
                  <td>{{ $pesanan->kode_pemesanan }}</td>
                </tr>
                <tr>
                  <td>Tanggal Pesanan</td>
                  <td>{{ $pesanan->created_at }}</td>
                </tr>

                <tr>
                  <td>Pesanan</td>
                  <td>
                    <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                    @foreach ($pesanan_details as $pesanan_detail)
                    <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->product->gambar }}"
                        class="img-fluid mb-2" width="50">
                    {{ $pesanan_detail->product->nama }}
                    <br>
                    @endforeach
                  </td>
                </tr>

                <tr>
                  <td>Tanggal Kirim</td>
                  <td>
                    @if ($pesanan_detail->tanggal_kirim)
                    {{ $pesanan_detail->tanggal_kirim }}
                    @else
                    -
                    @endif
                  </td>
                </tr>

                <tr>
                  <td>Status</td>
                  <td>
                    @if($pesanan->status == 1)
                    <span class="badge bg-danger m-0 text-uppercase">Belum Lunas</span>
                    @else
                      <span class="badge bg-success m-0 text-uppercase">Lunas</span>
                    @endif
                  </td>
                </tr>

                <tr>
                  <td>Total Harga</td>
                  <td>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</td>
                </tr>
              
                @empty
                <tr>
                  <td colspan="8" class="text-center">Data Kosong</td>
                  
                </tr>

              </tbody>
              @endforelse
            </table>

          </div>

            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
              <ul class="pagination">
              </ul>
            </nav>
          </section>
        </div>
    </div>
    {{-- End Content --}}
</div>
