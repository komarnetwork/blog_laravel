         @section('css')
         {{-- <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet"> --}}
         @endsection

<div class="container">


   {{-- SLIDER BANNER --}}
    <div id="carouselExampleIndicators" class="carousel slide banner" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="{{ url('assets/slider/sliderflorist.jpg') }}" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="{{ url('assets/slider/slider1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h3>Kepuasan Konsumen Adalah Prioritas Kami</h5>
                  <p">Order Sekarang dan Dapatkan Penawaran Terbaik Dari Kami</p>
            </div>
         </div>

         <div class="carousel-item">
            <img src="{{ url('assets/slider/slider2.jpg') }}" class="d-block w-100" alt="...">
         </div>
      </div>
      <a class="carousel-control-prev prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div> 

   {{-- PILIH KATEGORI BUNGA --}}
   <section class="pilih-liga mt-5">
      <h3><strong> Pilih Kategori Bunga </strong></h3>
      <div class="row mt-4">
         @foreach($ligas as $liga)
         <div class="col-6 col-md-3 mb-4">
            <a href="{{ route('products.liga', [Str::slug($liga->slug)]) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT BUNGA --}}
   <section class="products mt-5 mb-5">

      <div class="row">
         <div class="col-md-9 hijau">
            <h3> Best Products Bunga </h3>
         </div>
         <!-- Search -->
         <div class="col-md-3">
            <a href="{{ route('products') }}" class="btn btn-outline-success float-right"><i class="fas fa-eye"></i>
               Lihat Semua </a>
         </div>
      </div>

      <div class="row mt-3">
         <!-- Produk Bunga -->
         @foreach($products as $product)
         <div class="col-6 col-md-3 mb-4">
            <div class="card border-success">
               <div class="card-body text-center">
                  <a href="{{ route('products.detail', [Str::slug($product->slug)]) }}"><img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                  </a>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h6><strong>{{ $product->nama }}</strong> </h6>
                        <h6>Rp. {{ number_format($product->harga) }}</h6>
                     </div>
                  </div>

                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="{{ route('products.detail', [Str::slug($product->slug)]) }}" class="btn btn-success btn-block"><i class="fas fa-eye"></i> Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
</div>

   @section('javascript')
   @endsection
