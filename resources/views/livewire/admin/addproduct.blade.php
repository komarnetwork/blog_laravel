<div>
  {{-- Care about people's approval and you will be their prisoner. --}}
  <div class="container mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4 pe-xl-5">
          <!-- Account menu toggler (hidden on screens larger 992px)-->
          <div class="d-block d-lg-none p-4">
            <a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a>
          </div>
          <!-- Actual menu-->
          <div class="h-100 border-end mb-2">
            <div class="d-lg-block collapse" id="account-menu">
              <div class="bg-secondary p-4">
                <h3 class="fs-sm mb-0 text-muted">Account</h3>
              </div>
              <ul class="list-unstyled mb-0">
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-settings.html"><i class="ci-settings opacity-60 me-2"></i>Settings</a>
                </li>
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-purchases.html"><i class="ci-basket opacity-60 me-2"></i>Purchases</a>
                </li>
                <li class="mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-sm text-muted ms-auto">4</span></a>
                </li>
              </ul>
              <div class="bg-secondary p-4">
                <h3 class="fs-sm mb-0 text-muted">Seller Dashboard</h3>
              </div>
              <ul class="list-unstyled mb-0">
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('dashboard') }}"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-sm text-muted ms-auto">$1,375.00</span></a>
                </li>
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-products.html"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto">5</span></a>
                </li>
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3  active" href="{{ url('addproduct') }}"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New
                    Product</a>
                </li>
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-payouts.html"><i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a>
                </li>
                <li class="mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a>
                </li>
              </ul>
              <hr />
            </div>
          </div>
        </aside>

        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <!-- Title-->
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
              <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Product</h2>
              <div class="py-2">
                <select class="form-select me-2" id="unp-category">
                  <option>Select category</option>
                  <option>Photos</option>
                  <option>Graphics</option>
                  <option>UI Design</option>
                  <option>Web Themes</option>
                  <option>Fonts</option>
                  <option>Add-Ons</option>
                </select>
              </div>
            </div>
            <form wire:submit.prevent="createPost">
              @csrf
              <div class="mb-3 pb-2">

                <label class="form-label" for="unp-product-name">Product name</label>
                <input class="form-control" type="text" id="unp-product-name" wire:model.defer="state.alamat"  >
                <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
              </div>
              <div class="file-drop-area mb-3">
                <div class="file-drop-icon ci-cloud-upload"></div><span class="file-drop-message">Drag and drop here to upload product screenshot</span>
                <input class="file-drop-input" type="file" >
                <button class="file-drop-btn btn btn-primary btn-sm mb-2" type="button">Or select file</button>
                <div class="form-text">1000 x 800px ideal size for hi-res displays</div>
              </div>
              <div class="mb-3 py-2">
                <label class="form-label" for="unp-product-description">Product description</label>
                <textarea class="form-control" rows="6" id="unp-product-description"></textarea>
                <div class="bg-secondary p-3 fs-ms rounded-bottom"><span class="d-inline-block fw-medium me-2 my-1">Markdown supported:</span><em class="d-inline-block border-end pe-2 me-2 my-1">*Italic*</em><strong class="d-inline-block border-end pe-2 me-2 my-1">**Bold**</strong><span class="d-inline-block border-end pe-2 me-2 my-1">- List item</span><span class="d-inline-block border-end pe-2 me-2 my-1">##Heading##</span><span class="d-inline-block">--- Horizontal rule</span></div>
              </div>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="unp-standard-price">Standard license price</label>
                  <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                    <input class="form-control" type="text" id="unp-standard-price">
                  </div>
                  <div class="form-text">Average marketplace price for this category is $15.</div>
                </div>
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="unp-extended-price">Extended license price</label>
                  <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                    <input class="form-control" type="text" id="unp-extended-price">
                  </div>
                  <div class="form-text">Typically 10x of the Standard license price.</div>
                </div>
              </div>
              <div class="mb-3 py-2">
                <label class="form-label" for="unp-product-tags">Product tags</label>
                <textarea class="form-control" rows="4" id="unp-product-tags"></textarea>
                <div class="form-text">Up to 10 keywords that describe your item. Tags should all be in lowercase and separated by commas.</div>
              </div>
              <div class="mb-3 pb-2">
                <label class="form-label" for="unp-product-files">Product files for sale</label>
                <input class="form-control" type="file" id="unp-product-files">
                <div class="form-text">Maximum file size is 1GB</div>
              </div>
              <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Upload Product</button>
            </form>
          </div>
        </section>

      </div>
    </div>
  </div>

</div>