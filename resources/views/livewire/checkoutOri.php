<div class="container">
   {{-- If your happiness depends on money, you will never be happy with yourself. --}}
   <div class="row mb-2">
      <div class="col">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
               <li class="breadcrumb-item"><a href="{{ route('keranjang') }}" class="text-dark">Keranjang</a></li>
               <li class="breadcrumb-item active" aria-current="page">Check Out</li>
            </ol>
         </nav>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <a href="{{ route('keranjang') }}" class="btn btn-sm btn-success"><i class="fas fa-arrow-left"></i>
            Kembali</a>
      </div>
   </div>

   <div class="row">
      <div class="col-md-12">
         @if(session()->has('message'))
         <div class="alert alert-danger">
            {{ session('message') }}
         </div>
         @endif
      </div>
   </div>

   <div class="row mt-4">
      <div class="col-md-6 mb-4">
         <div class="card border-primary shadow">
            <div class="card-body">
               <h4>Informasi Pembayaran</h4>
               <hr>
               <p>Total Harga yang harus dibayarkan sebesar : <strong style="font-size: large;"> Rp.
                     {{ number_format($total_harga)}}</strong> <br>
                  <strong>FREE ONGKIR</strong>
               </p>
               <p>Untuk pembayaran silahkan di transfer ke rekening dibawah ini : <br>
                  *Wajib konfirmasi dan kirim bukti transfer ke nomor WhatsApp kami untuk di proses</p>
               <div class="media mb-4">
                  <img class="mr-3" src="{{ url('assets/bca.png') }}" alt="Bank BCA" width="60">
                  <div class="media-body">
                     <h5 class="mt-0"><strong>BANK BCA</strong> </h5>
                     No. Rekening <strong> 740-1383-879 </strong> A/N <strong> Hidayat Maulana </strong>
                  </div>
               </div>

               <div class="media">
                  <img class="mr-3" src="{{ url('assets/mandiri.png') }}" alt="Bank Mandiri" width="60">
                  <div class="media-body">
                     <h5 class="mt-0"><strong>BANK MANDIRI</strong></h5>
                     No. Rekening <strong> 00-600-1011-9067 </strong> A/N <strong> Hidayat Maulana
                     </strong>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <h4>Informasi Pengiriman</h4>
         <hr>
         <form wire:submit.prevent="checkout">

            <div class="form-group">
               <label for="">No. HP Penerima</label>
               <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" wire:model="nohp" value="{{ old('nohp') }}" required autocomplete="name" autofocus>

               @error('nohp')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>

            <div class="form-group">
               <label for="">Alamat Tujuan</label>
               <textarea wire:model="alamat" class="form-control @error('nama') is-invalid @enderror" required></textarea>

               @error('alamat')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>

            <button type="submit" class="btn btn-success btn-block"> <i class="fas fa-arrow-right"></i> Checkout
            </button>
         </form>
      </div>
   </div>

</div>