<div>

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
                  <a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="dashboard-sales.html"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-sm text-muted ms-auto">$1,375.00</span></a>
                </li>
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-products.html"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto">5</span></a>
                </li>
                <li class="border-bottom mb-0">
                  <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ url('addproduct') }}"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New
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
            <h2 class="h3 py-2 text-center text-sm-start">
              Your sales / earnings
            </h2>
            <div class="row mx-n2 pt-2">
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                  <h3 class="fs-sm text-muted">Earnings (before taxes)</h3>
                  <p class="h2 mb-2">$1,690.<small>50</small></p>
                  <p class="fs-ms text-muted mb-0">
                    Sales 8/1/2021 - 8/15/2021
                  </p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                  <h3 class="fs-sm text-muted">Your balance</h3>
                  <p class="h2 mb-2">$1,375.<small>00</small></p>
                  <p class="fs-ms text-muted mb-0">To be paid on 8/15/2021</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                  <h3 class="fs-sm text-muted">Lifetime earnings</h3>
                  <p class="h2 mb-2">$9,156.<small>74</small></p>
                  <p class="fs-ms text-muted mb-0">Based on list price</p>
                </div>
              </div>
            </div>
            <div class="row mx-n2">
              <div class="col-lg-8 px-2">
                <div class="card mb-4">
                  <div class="card-body">
                    <h3 class="fs-sm pb-3 mb-3 border-bottom">
                      Sales value, USD
                      <span class="fw-normal fs-xs text-muted"
                        >(Past 2 weeks)</span
                      >
                    </h3>
                    <div
                      class="ct-chart ct-perfect-fourth"
                      data-line-chart='{"labels": ["22 Jul", "", "24 Jul", "", "26 Jul", "", "28 Jul", "", "30 Jul", "", "01 Aug", "", "03 Aug", "", "05 Aug"], "series": [[0, 100, 200, 150, 50, 0, 0, 50, 0, 50, 50, 50, 0, 100, 0]]}'
                    ></div>
                  </div>
                </div>
                <div class="card mb-4 mb-lg-2">
                  <div class="card-body">
                    <h3 class="fs-sm pb-3 mb-3 border-bottom">
                      Order count
                      <span class="fw-normal fs-xs text-muted"
                        >(Past 2 weeks)</span
                      >
                    </h3>
                    <div
                      class="ct-chart ct-perfect-fourth"
                      data-line-chart='{"labels": ["22 Jul", "", "24 Jul", "", "26 Jul", "", "28 Jul", "", "30 Jul", "", "01 Aug", "", "03 Aug", "", "05 Aug"], "series": [[0, 2, 4, 3, 1, 0, 0, 1, 0, 1, 1, 1, 0, 2, 0]]}'
                      data-options='{"axisY": {"onlyInteger": true}}'
                    ></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 px-2">
                <div class="card">
                  <div class="card-body">
                    <h3 class="fs-sm pb-3 mb-0 border-bottom">
                      Your top countries
                    </h3>
                    <div
                      class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom"
                    >
                      <div class="d-flex align-items-start py-1">
                        <img
                          src="{{ asset('zilla/img/marketplace/account/flags/usa.png') }}"
                          width="20"
                          alt="USA"
                        />
                        <div class="ps-1">United States</div>
                      </div>
                      <span>$452</span>
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom"
                    >
                      <div class="d-flex align-items-start py-1">
                        <img
                          src="{{ asset('zilla/img/marketplace/account/flags/sweden.png') }}"
                          width="20"
                          alt="Sweden"
                        />
                        <div class="ps-1">Sweden</div>
                      </div>
                      <span>$318</span>
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom"
                    >
                      <div class="d-flex align-items-start py-1">
                        <img
                          src="{{ asset('zilla/img/marketplace/account/flags/india.png') }}"
                          width="20"
                          alt="India"
                        />
                        <div class="ps-1">India</div>
                      </div>
                      <span>$106</span>
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom"
                    >
                      <div class="d-flex align-items-start py-1">
                        <img
                          src="{{ asset('zilla/img/marketplace/account/flags/france.png') }}"
                          width="20"
                          alt="France"
                        />
                        <div class="ps-1">France</div>
                      </div>
                      <span>$82</span>
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom"
                    >
                      <div class="d-flex align-items-start py-1">
                        <img
                          src="{{ asset('zilla/img/marketplace/account/flags/argentina.png') }}"
                          width="20"
                          alt="Argentina"
                        />
                        <div class="ps-1">Argentina</div>
                      </div>
                      <span>$40</span>
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center fs-sm pt-2"
                    >
                      <div class="d-flex align-items-start py-1">
                        <img
                          src="{{ asset('zilla/img/marketplace/account/flags/south-africa.png') }}"
                          width="20"
                          alt="South Africa"
                        />
                        <div class="ps-1">South Africa</div>
                      </div>
                      <span>$17</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>

</div>