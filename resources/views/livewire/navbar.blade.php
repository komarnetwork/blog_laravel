<div>
   <!-- Sign in / sign up modal-->
   <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header bg-secondary">
               <ul class="nav nav-tabs card-header-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>{{ __('Login') }}</a></li>
                  <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>{{ __('Register') }}</a></li>
               </ul>
               <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body tab-content py-4">
               <form method="POST" action="{{ route('login') }}" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                  @csrf
                  <div class="mb-3">
                     <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                     <input class="form-control @error('email') is-invalid @enderror" type="email" type="email" name="email" value="{{ old('email') }}" placeholder="cs@bundaflorist.id" required autocomplete="email" autofocus>
                     @error('email')
                     <div class="invalid-feedback">Harap Masukkan Email Yang Valid.</div>
                     @enderror
                  </div>

                  <div class="mb-3">
                     <label class="form-label" for="password">{{ __('Password') }}</label>
                     <div class="password-toggle">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                           <input class="password-toggle-check" type="checkbox">
                           {{-- @error('password') --}}
                           <span class="password-toggle-indicator"></span>
                           {{-- @enderror --}}
                        </label>
                     </div>
                  </div>

                  <div class="mb-3 d-flex flex-wrap justify-content-between">
                     <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                     </div>

                     @if (Route::has('password.request'))
                     <a class="fs-sm" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                     @endif
                  </div>

                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit">{{ __('Login') }}</button>
               </form>

               <form method="POST" action="{{ route('register') }}" class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                  @csrf

                  <div class="mb-3">
                     <label class="form-label" for="su-name">{{ __('Name') }}</label>
                     <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" required autocomplete="name" autofocus>
                     @error('name')
                     <div class="invalid-feedback">Harap Masukkan Nama Anda.</div>
                     @enderror
                  </div>
                  <div class="mb-3">
                     <label for="email">{{ __('E-Mail Address') }}</label>
                     <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="cs@bundaflorist.id" required autocomplete="email">
                     @error('email')
                     <div class="invalid-feedback">Please provide a valid email address.</div>
                     @enderror
                  </div>

                  <div class="mb-3">
                     <label class="form-label" for="password">{{ __('Password') }}</label>
                     <div class="password-toggle">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                           <input class="password-toggle-check" type="checkbox">
                           {{-- @error('password') --}}
                           <span class="password-toggle-indicator"></span>
                           {{-- @enderror --}}
                        </label>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                     <div class="password-toggle">
                        <input class="form-control" type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                           <input class="password-toggle-check" type="checkbox">
                           @error('password')
                           <span class="password-toggle-indicator"></span>
                           @enderror
                        </label>
                     </div>
                  </div>

                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit">{{ __('Register') }}</button>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- Navbar Electronics Store-->
   <header class="shadow-sm">
      <!-- Topbar-->
      <div class="topbar topbar-dark bg-dark">
         <div class="container">
            <div>
               <div class="topbar-text text-nowrap d-none d-md-inline-block border-start border-light ps-3">
                 <marquee class="font-weight-bold"  style="color:white; font-size:18px">
                  Toko Bunga Online 24 Jam Terlengkap Dan Pengiriman Seluruh Indonesia, Dapatkan Diskon Dengan Order Online</marquee> 
               </div>
            </div>
            
            <div class="d-none d-md-block ms-3 text-nowrap">             
                  
               <a class="topbar-link ms-3 border-start border-light ps-3 d-none d-md-inline-block" href="">
                  <i class="ci-location mt-n1"></i>Order tracking</a>

            </div>
         </div>
      </div>
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <div class="navbar-sticky bg-light">
         <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="{{ route('home') }}"><img src="{{ asset('assets/logo_cv.jfif') }}" width="142" alt="Bunda Florist"></a>
               <a class="navbar-brand d-sm-none me-2" href="{{ route('home')}}"><img src="{{ asset('zilla/img/logo_cv.png') }}" width="50" alt="Bunda Florist"></a>
               <!-- Search-->
               <div class="input-group d-none d-lg-flex flex-nowrap mx-4"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input wire:model="search" class="form-control rounded-start w-100" type="text" placeholder="Search for products" aria-label="Search">
                  
               </div>
               <!-- Toolbar-->
               <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Toggle
                        menu</span>
                     <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>                    
                  {{-- Jika Belum Login --}}
                  @guest
                     </a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                     <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                     <div class="navbar-tool-text ms-n3"><small style="font-size: 15px">Login</small>My Account</div>
                   </a>
                   {{-- Jika sudah login --}}
                   @else

                   <div class="navbar-tool dropdown ms-2"><a class="navbar-tool-icon-box border dropdown-toggle"><img src="{{ asset('zilla/img/marketplace/account/avatar-sm.png') }}" width="32" alt="{{ Auth::user()->name }}"></a>
                     @if(!empty($pesanan))
                     <a class="navbar-tool-text ms-n1"><small style="font-size: 15px">{{ Auth::user()->name }} </small> Rp. {{ number_format($pesanan->total_harga) }} </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <div style="min-width: 14rem;">
                           <h6 class="dropdown-header">Account</h6>
                           <a class="dropdown-item d-flex align-items-center" href="{{ route('history') }}"><i class="ci-delivery opacity-60 me-2"></i>History<span class="fs-xs text-muted ms-auto">Rp. {{ number_format($pesanan->total_harga) }}</span></a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><i class="ci-sign-out opacity-60 me-2"></i>{{ __('Logout') }}</a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </div>
                     </div>

                     @else
                     <a class="navbar-tool-text ms-n1"><small style="font-size: 15px">{{ Auth::user()->name }} </small> Pesanan Kosong </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <div style="min-width: 14rem;">
                           <h6 class="dropdown-header">Account</h6>
                           <a class="dropdown-item d-flex align-items-center" href="{{ route('history') }}"><i class="ci-delivery opacity-60 me-2"></i>History<span class="fs-xs text-muted ms-auto">Rp. 0</span></a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><i class="ci-sign-out opacity-60 me-2"></i>{{ __('Logout') }}</a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </div>
                     </div>
                     @endif
                  </div>

                  @endguest
                  <div class="navbar-tool dropdown ms-3">
                     <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ route('keranjang') }}">
                        <i class="navbar-tool-icon ci-cart"></i>
                        @if($jumlah_pesanan !==0)
                        <span class="navbar-tool-label">{{ $jumlah_pesanan }}</span>                        
                        @endif
                     </a>
                     <?php $no = 1 ?>
                     @if($jumlah_pesanan !== 0)
                     <a class="navbar-tool-text" href="{{ route('keranjang') }}"><small style="font-size: 15px"> Keranjang </small> Anda </a>
                     @else
                     <a class="navbar-tool-text" href="{{ route('keranjang') }}"><small style="font-size: 15px"> Keranjang </small> Kosong </a>
                     @endif
                     <!-- Cart dropdown-->
                     <div class="dropdown-menu dropdown-menu-end">
                        <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 21rem;">
                           <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                              @foreach ($pesanan_details as $pesanan_detail)
                              <div class=" pb-2 border-bottom">                                 
                                 <div class="d-flex align-items-center pt-2"><a class="d-block flex-shrink-0" href="{{ route('products') }}"><img src="{{ asset('assets/jersey') }}/{{ $pesanan_detail->product->gambar }}" width="64" alt="Product"></a>
                                    <div class="ps-2">
                                       <h6 class="widget-product-title"><a href="{{ route('products') }}"> {{ $pesanan_detail->product->nama }} </a></h6>
                                       <div class="widget-product-meta"><span class="text-accent me-2"> Rp. {{ number_format($pesanan_detail->product->harga) }} </span><span class="text-muted">x {{ $pesanan_detail->jumlah_pesanan }}</span>
                                          <button class="btn text-danger" type="button" wire:click="destroy({{ $pesanan_detail->id }})" aria-label="Remove"><span aria-hidden="true"><i class="ci-trash me-2 fs-base align-middle"></i></span></button>
                                       </div>
                                    </div>
                                 </div>                                     
                              </div>
                              
                              @endforeach
                              
                           </div>
                           <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                              
                              <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span> 
                              @if(!empty($pesanan))
                              <span>Rp. {{ number_format($pesanan->total_harga) }}</span>
                              @else
                              <span>Anda Belum Punya Pesanan</span>                              
                              @endif </div>                             
                              
                           </div>
                           @if(!empty($pesanan))                           
                           <a class="btn btn-primary btn-sm d-block w-100" href="{{ route('checkout') }}"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                           @else
                           <a class="btn btn-primary btn-sm d-block w-100 disabled" href=""><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                           @endif
                        </div>
                     </div>
                     {{-- @empty
                     <div class="widget-cart-item py-2 border-bottom">
                        <div class="d-flex align-items-center">
                           <div class="ps-2">
                              <h6 class="widget-product-title"><a href="#">Keranjang Kosong</a></h6>                              
                           </div>
                        </div>
                     </div> --}}
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  <!-- Search-->
                  <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                     <input class="form-control rounded-start" type="text" placeholder="Search for products">
                  </div>
                  
                  <!-- Primary menu-->
                  <ul class="navbar-nav">
                     <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}"><i class="ci-home"></i> Home </a>
                     </li>

                     <li class="nav-item"><a class="nav-link" href="{{ route('products') }}"><i class="ci-view-grid"></i> Semua Product </a>
                     </li>
                     
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="ci-package"></i> Papan Bunga</a>
                        <ul class="dropdown-menu">                        
                           @foreach($ligas as $liga)   
                           <li><a class="dropdown-item " href="{{ route('products.liga', [Str::slug($liga->slug)]) }}"> {{ $liga->nama }} </a></li>                           
                           @endforeach
                        </ul>
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="ci-package"></i> Hand Buket</a>
                        <ul class="dropdown-menu">                        
                           @foreach($hand_bucket as $bucket)
                           <li><a class="dropdown-item " href="{{ route('products.liga', [Str::slug($bucket->slug)]) }}"> {{ $bucket->nama }} </a></li>
                           @endforeach
                        </ul>
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="ci-package"></i> Krans Duka Cita</a>
                        <ul class="dropdown-menu">                        
                           @foreach($krans_dc as $dc)
                           <li><a class="dropdown-item " href="{{ route('products.liga', [Str::slug($dc->slug)]) }}"> {{ $dc->nama }} </a></li>                           
                           @endforeach
                        </ul>
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="ci-gift"></i> Parcel </a>
                        <ul class="dropdown-menu">                        
                           @foreach($parcel as $pcl)
                           <li><a class="dropdown-item " href="{{ route('products.liga', [Str::slug($pcl->slug)]) }}"> {{ $pcl->nama }} </a></li>                           
                           @endforeach
                        </ul>
                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </div>
   </header>
</div>