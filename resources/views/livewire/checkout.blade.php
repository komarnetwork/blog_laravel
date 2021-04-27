@section('title', 'Checkout')

<div>
   {{-- If your happiness depends on money, you will never be happy with yourself. --}}
   {{-- Breadcrumb --}}
   <div class="page-title-overlap bg-secondary pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
         <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb breadcrumb-grey flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap">Keranjang</li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
               </ol>
            </nav>
         </div>
         <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-grey mb-2">Checkout</h1>
         </div>
      </div>
   </div>

   {{-- <div class="row">
      <div class="col-md-12">
         @if(session()->has('message'))
         <div class="alert alert-danger">
            {{ session('message') }}
</div>
@endif
</div>
</div> --}}

{{-- Content --}}
<div class="container">
   <div class="bg-light shadow-lg rounded-3">

      <!-- Tabs-->
      <ul class="nav nav-tabs nav-justified" role="tablist">
         <li class="nav-item"><a class="nav-link py-4 px-sm-4" id="#general" href="{{ route('keranjang') }}" role="tab"><i class="ci-bag"></i> Keranjang</a></li>
         <li class="nav-item"><a class="nav-link py-4 px-sm-4 active" href="{{ route('checkout') }}" data-bs-toggle="tab" role="tab"><i class="ci-card"></i> Checkout </a></li>

      </ul>

      <div class="px-4 pt-lg-3 pb-3 mb-5">
         <div class="tab-content px-lg-3">

            <!-- Order tab-->
            <div class="tab-pane fade show active" id="general" role="tabpanel">
               <div class="row">
                  <!-- Product gallery-->
                  <div class="col-lg-7 pe-lg-0">

                     <!-- Item-->
                     {{-- @forelse ($pesanan_details as $pesanan_detail) --}}

                     {{-- @empty --}}
                     <div class="d-sm-flex justify-content-between align-items-center mt-3 mb-4 pb-3 border-bottom">
                        <div class="d-block d-sm-flex align-items-center text-center text-sm-start">

                           <!-- Success card -->
                           <div class="card text-danger border-danger">
                              <div class="card-header border-danger"> <i class="ci-loudspeaker"></i> Informasi Pembayaran</div>
                              <div class="card-body">
                                 <h5 class="card-title text-grey">Untuk pembayaran silahkan di transfer ke rekening dibawah ini :
                                    <br>*Wajib konfirmasi dan kirim bukti transfer ke nomor WhatsApp kami untuk di proses
                                 </h5>
                                 <h6 class="card-title text-grey"><strong>An : Hidayat Maulana</strong></h6>

                                 <div class="input-group mb-3">
                                    <span class="input-group-text fw-medium"><img src="{{ url('assets/bca.png') }}" alt="Bank BCA" width="60"></span>
                                    <span class="input-group-text fw-medium form-control">740-1383-879</span>

                                    {{-- <input class="form-control" placeholder="First name" disabled> --}}
                                 </div>

                                 <div class="input-group mb-3">
                                    <span class="input-group-text fw-medium"><img src="{{ url('assets/mandiri.png') }}" alt="Bank BCA" width="60"></span>
                                    <span class="input-group-text fw-medium form-control">00-600-1011-9067</span>
                                    {{-- <input class="form-control" placeholder="First name" disabled> --}}
                                 </div>
                              </div>



                              <!-- Horizontal card layout -->

                           </div>


                        </div>

                        {{-- <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                           <label class="form-label" for="quantity1">Quantity</label>
                           <input class="form-control" type="number" id="quantity1" value="1" min="1">
                           <button class="btn btn-link px-0 text-danger" type="button"><i class="ci-close-circle me-2"></i><span class="fs-sm">Remove</span></button>
                           <div class="fs-lg text-accent pt-2"><small>Rp. </small>1.500</div>
                        </div> --}}
                     </div>
                     {{-- @endforelse --}}
                     {{--
               @if(!empty($pesanan))

               @endif --}}
                  </div>



                  <!-- Product details-->
                  <div class="col-lg-5 pt-4 pt-lg-0 ">
                     <div class="rounded-3 bg-secondary px-3 px-sm-4 py-4 pb-3">

                        {{-- <div class="mt-2">
                        @if($product->is_ready == 1)
                        <span class="badge bg-info btn-sm badge-shadow" style="font-size: 15px"><i class="ci-security-check"></i> Ready Stock</span>
                        @else
                        <span class="badge bg-danger btn-sm badge-shadow" style="font-size: 15px"><i class="ci-security-close"></i> Stock Kosong</span>
                        @endif
                        </div> --}}

                        <!-- Header and footer -->
                        <div class="card text-center">
                           <div class="card-header h5"> <i class="ci-delivery">
                              </i> Informasi Pengiriman</div>
                           <div class="card-body">

                              <form wire:submit.prevent="checkout">
                                 <div class="form-floating mb-3">
                                    <input class="form-control @error('nohp') is-invalid @enderror" wire:model="nohp" type="number" value="{{ old('nohp') }}" id="fl-text" required autocomplete="name" autofocus placeholder="Nomor Hanphone Penerima">
                                    <label for="fl-text">Nomor Handphone Penerima</label>
                                 </div>
   
                                 <div class="form-floating mb-4">
                                    <textarea wire:model="alamat" class="form-control @error('nama') is-invalid @enderror" style="height: 120px;" type="text" id="fl-textarea" required autocomplete="name" autofocus placeholder="Your message"></textarea>
                                    <label for="fl-textarea">Alamat Lengkap Penerima</label>
                                 </div>
   
                                 <h5 class="card-title">Total Yang Harus dibayarkan :</h5>
   
                                 <div class="input-group mb-4">
                                    <span class="input-group-text fw-medium"><i class="ci-cashier"></i></span>
   
                                    <span class="input-group-text fw-medium form-control">Rp. {{ number_format($total_harga)}}</span>
                                    {{-- <input class="form-control" placeholder="First name" disabled> --}}
                                 </div>
   
                                 <div class="card-footer">
                                    <div class="row">
                                       <div class="col" style="margin-bottom:-65px">
                                          <div class="d-flex justify-content-center align-items-center mb-4">
                                             <div class="w-50 me-3 mb-3">
                                                {{-- @foreach ($products as $product) --}}
                                                <a href="https://api.whatsapp.com/send/?phone=628111961139&text=Halo+Bunda+Florist%2C+Saya+Ingin+Order+Bunga..&app_absent=0" onclick="getWA()" class="me-2 my-2" ;>
                                                   {{-- @endforeach --}}
                                                   <button class="btn btn-success btn-shadow d-block w-100" type="button"><i class="ci-viber fs-lg me-2"></i>
                                                      <span class='d-none d-sm-inline'>Via </span>WhatsApp</button>
                                                </a>
                                             </div>
   
                                             <div class="w-50 mb-3">
                                                <a class="me-2 my-2">
                                                   <button class="btn btn-primary btn-shadow d-block w-100"  href="{{ route('checkout') }}" type="submit"><i class="ci-card fs-lg me-2"></i>Checkout</button>
                                                </a>
                                             </div>
                                          </div>
   
                                       </div>
                                    </div>
                                 </div>
                              </form>


                           </div>


                           <div class="card-footer fs-sm">
                              {{-- Submit Add To Cart --}}
                              <div class="row">
                                 <div class="col">


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
                           </div>
                        </div>



                     </div>
                  </div>
               </div>
            </div>


            <!-- Tech specs tab-->
            <div class="tab-pane fade" id="specs" role="tabpanel">

               <form class="needs-validation px-3 px-sm-4 px-xl-5 pt-sm-1 pb-4 pb-sm-5" novalidate>
                  <div class="row pb-4 pt-3">
                     <div class="col-sm-6 mb-4">
                        <label for="fd-name" class="form-label">Your Name<sup class="text-danger ms-1">*</sup></label>
                        <input class="form-control" type="text" required id="fd-phone">
                        <div class="invalid-feedback">Please enter your phone number!</div>
                     </div>
                  </div>

                  <div class="col-sm-6 mb-4">
                     <div class="fs-sm fw-medium mb-3">Drop-off options</div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dropoff" checked id="hand-to-me">
                        <label class="form-check-label" for="hand-to-me">Hand it to me</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dropoff" id="at-door">
                        <label class="form-check-label" for="at-door">Leave it at my door</label>
                     </div>
                  </div>
               </form>

            </div>

         </div>
      </div>
   </div>


</div>