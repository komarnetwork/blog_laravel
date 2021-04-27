<div>
   {{-- Success is as dangerous as failure. --}}
   <!-- Page Title (Light)-->
   <div class="bg-secondary py-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
         <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap"><a href="#">Blog</a>
                  </li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">Single post</li>
               </ol>
            </nav>
         </div>
         <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">Single post with sidebar</h1>
         </div>
      </div>
   </div>

   <div class="container pb-5 mb-2 mb-md-4">
      <!-- Featured posts carousel-->
      <div class="featured-posts-carousel tns-carousel pt-5">
         <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;700&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;991&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 30}}}">
            <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Sep 10</span><img src="{{ asset('zilla/img/blog/featured/01.jpg') }}" alt="Featured post"></a>
               <div class="d-flex justify-content-between mb-2 pt-1">
                  <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">Healthy Food - New Way of Living</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>13</a>
               </div>
               <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                     <div class="blog-entry-author-ava"><img src="{{ asset('zilla/img/blog/meta/04.jpg') }}" alt="Olivia Reyes"></div>Olivia Reyes
                  </a><span class="blog-entry-meta-divider"></span>
                  <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Lifestyle</a>, <a href='#' class='blog-entry-meta-link'>Nutrition</a></div>
               </div>
            </article>
            <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Aug 27</span><img src="{{ asset('zilla/img/blog/featured/02.jpg') }}" alt="Featured post"></a>
               <div class="d-flex justify-content-between mb-2 pt-1">
                  <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">Online Payment Security Tips for Shoppers</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>9</a>
               </div>
               <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                     <div class="blog-entry-author-ava"><img src="{{ asset('zilla/img/blog/meta/05.jpg') }}" alt="Rafael Marquez"></div>Rafael Marquez
                  </a><span class="blog-entry-meta-divider"></span>
                  <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Online shpopping</a></div>
               </div>
            </article>
            <article><a class="blog-entry-thumb mb-3" href="blog-single-sidebar.html"><span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>Aug 16</span><img src="{{ asset('zilla/img/blog/featured/03.jpg') }}" alt="Featured post"></a>
               <div class="d-flex justify-content-between mb-2 pt-1">
                  <h2 class="h5 blog-entry-title mb-0"><a href="blog-single-sidebar.html">We Launched New Store in San Francisco!</a></h2><a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>23</a>
               </div>
               <div class="d-flex align-items-center fs-sm"><a class="blog-entry-meta-link" href="#">
                     <div class="blog-entry-author-ava"><img src="{{ asset('zilla/img/blog/meta/03.jpg') }}" alt="Paul Woodred"></div>Paul Woodred
                  </a><span class="blog-entry-meta-divider"></span>
                  <div class="fs-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
               </div>
            </article>
         </div>
      </div>
      <hr class="mt-5">
      <div class="row pt-5 mt-md-2">
         <!-- Entries grid-->
         <section class="col-lg-8">
            <div class="masonry-grid" data-columns="2">


               <!-- Entry-->
               @foreach ($data as $post_terbaru)
               <article class="masonry-grid-item">
                  <div class="card"><a class="blog-entry-thumb" href=""><img class="card-img-thumb" src="{{ $post_terbaru->gambar }}" style="width:600px!important; max-height: 300px!important;" quality="60" format="webp" alt="Post"></a>
                     <div class="card-body">
                        <h3 class="h6 blog-entry-title mb-1"><a href=""><span class="badge bg-primary">{{ $post_terbaru->category->name }}</span></a></h3>
                        <h2 class="h6 blog-entry-title"><a href="">{{ $post_terbaru->judul }}</a></h2>
                        <p class="fs-sm">{{ $post_terbaru->content }}</p><a class="btn-tag me-2 mb-2" href="#">Shopping</a><a class="btn-tag me-2 mb-2" href="#">Fashion</a>
                     </div>
                     <div class="card-footer d-flex align-items-center fs-xs"><a class="blog-entry-meta-link" href="#">
                           <div class="blog-entry-author-ava"><img src="{{ asset('zilla/img/blog/meta/05.jpg') }}" alt="{{ $post_terbaru->users->name }}"></div>{{ $post_terbaru->users->name }}
                        </a>
                        <div class="ms-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">{{ $post_terbaru->created_at->diffForHumans() }}</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single-sidebar.html#comments"><i class="ci-message"></i>19</a></div>
                     </div>
                  </div>
               </article>
               @endforeach


            </div>
            <hr class="mb-4">
            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
               <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
               </ul>
               <ul class="pagination">
                  <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                  <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                  <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                  <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                  <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                  <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
               </ul>
               <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
               </ul>
            </nav>
         </section>
         <aside class="col-lg-4">
            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse offcanvas-end border-start ms-lg-auto" id="blog-sidebar" style="max-width: 22rem;">
               <div class="offcanvas-cap align-items-center shadow-sm">
                  <h2 class="h5 mb-0">Sidebar</h2>
                  <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               </div>
               <div class="offcanvas-body py-grid-gutter py-lg-1 px-lg-4" data-simplebar data-simplebar-auto-hide="true">
                  <!-- Categories-->
                  <div class="widget widget-links mb-grid-gutter pb-grid-gutter border-bottom mx-lg-2">
                     <h3 class="widget-title">Blog categories</h3>
                     <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Online shopping</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                        <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion</span><span class="fs-xs text-muted ms-3">25</span></a></li>
                        <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Personal finance</span><span class="fs-xs text-muted ms-3">13</span></a></li>
                        <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Travel &amp; vacation</span><span class="fs-xs text-muted ms-3">7</span></a></li>
                        <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Lifestyle</span><span class="fs-xs text-muted ms-3">34</span></a></li>
                        <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Technology</span><span class="fs-xs text-muted ms-3">6</span></a></li>
                     </ul>
                  </div>
                  <!-- Trending posts-->
                  <div class="widget mb-grid-gutter pb-grid-gutter border-bottom mx-lg-2">
                     <h3 class="widget-title">Trending posts</h3>
                     <div class="d-flex align-items-center mb-3"><a class="flex-shrink-0" href="blog-single.html"><img class="rounded" src="{{ asset('zilla/img/blog/widget/01.jpg') }}" width="64" alt="Post image"></a>
                        <div class="ps-3">
                           <h6 class="blog-entry-title fs-sm mb-0"><a href="blog-single.html">Retro Cameras are Trending. Why so Popular?</a></h6><span class="fs-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Andy Williams</a></span>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-3"><a class="flex-shrink-0" href="blog-single.html"><img class="rounded" src="{{ asset('zilla/img/blog/widget/02.jpg') }}" width="64" alt="Post image"></a>
                        <div class="ps-3">
                           <h6 class="blog-entry-title fs-sm mb-0"><a href="blog-single.html">New Trends in Suburban Fashion</a></h6><span class="fs-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Susan Mayer</a></span>
                        </div>
                     </div>
                     <div class="d-flex align-items-center"><a class="flex-shrink-0" href="blog-single.html"><img class="rounded" src="{{ asset('zilla/img/blog/widget/03.jpg') }}" width="64" alt="Post image"></a>
                        <div class="ps-3">
                           <h6 class="blog-entry-title fs-sm mb-0"><a href="blog-single.html">Augmented Reality - Game Changing Technology</a></h6><span class="fs-ms text-muted">by <a href='#' class='blog-entry-meta-link'>John Doe</a></span>
                        </div>
                     </div>
                  </div>
                  <!-- Popular tags-->
                  <div class="widget pb-grid-gutter mx-lg-2">
                     <h3 class="widget-title">Popular tags</h3><a class="btn-tag me-2 mb-2" href="#">#fashion</a><a class="btn-tag me-2 mb-2" href="#">#gadgets</a><a class="btn-tag me-2 mb-2" href="#">#online shopping</a><a class="btn-tag me-2 mb-2" href="#">#top brands</a><a class="btn-tag me-2 mb-2" href="#">#travel</a><a class="btn-tag me-2 mb-2" href="#">#cartzilla news</a><a class="btn-tag me-2 mb-2" href="#">#personal finance</a><a class="btn-tag me-2 mb-2" href="#">#tips &amp; tricks</a>
                  </div>
                  <!-- Promo banner-->
                  <div class="bg-size-cover bg-position-center rounded-3 py-5 mx-lg-2" style="background-image: url(zilla/img/blog/banner-bg.jpg);">
                     <div class="py-5 px-4 text-center">
                        <h5 class="mb-2">Your Add Banner Here</h5>
                        <p class="fs-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                     </div>
                  </div>
               </div>
            </div>
         </aside>
      </div>
   </div>
</div>

@section('javascript')
<script src="{{ asset('zilla/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('zilla/vendor/shufflejs/dist/shuffle.min.js') }}"></script>
@endsection