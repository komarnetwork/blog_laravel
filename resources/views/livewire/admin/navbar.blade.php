<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
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

    <!-- Navbar Marketplace-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="bg-light shadow-sm navbar-sticky">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a
              class="navbar-brand d-none d-sm-block flex-shrink-0 me-4 order-lg-1"
              href=""
              ><img src="{{ ('zilla/img/logo-dark.png') }}" width="142" alt="Cartzilla" /></a
            ><a class="navbar-brand d-sm-none me-2 order-lg-1" href=""
              ><img src="{{ ('zilla/img/logo-icon.png') }}" width="74" alt="Cartzilla"
            /></a>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse"
              >
                <span class="navbar-toggler-icon"></span></button
              ><a
                class="navbar-tool d-none d-lg-flex"
                href="javascript:void(0)"
                data-bs-toggle="collapse"
                data-bs-target="#searchBox"
                role="button"
                aria-expanded="false"
                aria-controls="searchBox"
                ><span class="navbar-tool-tooltip">Search</span>
                <div class="navbar-tool-icon-box">
                  <i class="navbar-tool-icon ci-search"></i></div></a
              ><a
                class="navbar-tool d-none d-lg-flex"
                href="dashboard-favorites.html"
                ><span class="navbar-tool-tooltip">Favorites</span>
                <div class="navbar-tool-icon-box">
                  <i class="navbar-tool-icon ci-heart"></i></div
              ></a>
              <div class="navbar-tool dropdown ms-2">
                <a
                  class="navbar-tool-icon-box border dropdown-toggle"
                  href="dashboard-sales.html"
                  ><img
                    src="{{ ('zilla/img/marketplace/account/avatar-sm.png') }}"
                    width="32"
                    alt="Createx Studio" /></a
                ><a class="navbar-tool-text ms-n1" href="dashboard-sales.html"
                  ><small>Createx Std.</small>$1,375.00</a
                >
                <div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 14rem">
                    <h6 class="dropdown-header">Account</h6>
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="dashboard-settings.html"
                      ><i class="ci-settings opacity-60 me-2"></i>Settings</a
                    ><a
                      class="dropdown-item d-flex align-items-center"
                      href="dashboard-purchases.html"
                      ><i class="ci-basket opacity-60 me-2"></i>Purchases</a
                    ><a
                      class="dropdown-item d-flex align-items-center"
                      href="dashboard-favorites.html"
                      ><i class="ci-heart opacity-60 me-2"></i>Favorites<span
                        class="fs-xs text-muted ms-auto"
                        >4</span
                      ></a
                    >
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Seller Dashboard</h6>
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="dashboard-sales.html"
                      ><i class="ci-dollar opacity-60 me-2"></i>Sales<span
                        class="fs-xs text-muted ms-auto"
                        >$1,375.00</span
                      ></a
                    ><a
                      class="dropdown-item d-flex align-items-center"
                      href="dashboard-products.html"
                      ><i class="ci-package opacity-60 me-2"></i>Products<span
                        class="fs-xs text-muted ms-auto"
                        >5</span
                      ></a
                    ><a
                      class="dropdown-item d-flex align-items-center"
                      href="dashboard-add-new-product.html"
                      ><i class="ci-cloud-upload opacity-60 me-2"></i>Add New
                      Product</a
                    ><a
                      class="dropdown-item d-flex align-items-center"
                      href="dashboard-payouts.html"
                      ><i class="ci-currency-exchange opacity-60 me-2"></i
                      >Payouts</a
                    >
                    <div class="dropdown-divider"></div>
                    <a
                      class="dropdown-item d-flex align-items-center"
                      href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                      ><i class="ci-sign-out opacity-60 me-2"></i>{{ __('Logout') }}</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </div>
                </div>
              </div>
              <div class="navbar-tool ms-4">
                <a
                  class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                  href="marketplace-cart.html"
                  ><span class="navbar-tool-label">3</span
                  ><i class="navbar-tool-icon ci-cart"></i
                ></a>
              </div>
            </div>
            <div
              class="collapse navbar-collapse me-auto order-lg-2"
              id="navbarCollapse"
            >
              <!-- Search-->
              <div class="input-group d-lg-none my-3">
                <i
                  class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"
                ></i>
                <input
                  class="form-control rounded-start"
                  type="text"
                  placeholder="Search marketplace"
                />
              </div>
              <!-- Categories dropdown-->
              <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle ps-lg-0"
                    href="#"
                    data-bs-toggle="dropdown"
                    ><i class="ci-menu align-middle mt-n1 me-2"></i>Categories</a
                  >
                  <ul class="dropdown-menu py-1">
                    <li class="dropdown">
                      <a
                        class="dropdown-item dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                        >Photos</a
                      >
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium">
                          <a href="marketplace-category.html"
                            >All Photos<i class="ci-arrow-right fs-xs ms-1"></i
                          ></a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Abstract</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Animals</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Architecture</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Beauty &amp; Fashion</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Business</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Education</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Food &amp; Drink</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Holidays</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Industrial</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >People</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Sports</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Technology</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a
                        class="dropdown-item dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                        >Graphics</a
                      >
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium">
                          <a href="#"
                            >All Graphics<i class="ci-arrow-right fs-xs ms-1"></i
                          ></a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Icons</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Illustartions</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Patterns</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Textures</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Web Elements</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a
                        class="dropdown-item dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                        >UI Design</a
                      >
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium">
                          <a href="marketplace-category.html"
                            >All UI Design<i class="ci-arrow-right fs-xs ms-1"></i
                          ></a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >PSD Templates</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Sketch Templates</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Adobe XD Templates</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Figma Templates</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a
                        class="dropdown-item dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                        >Web Themes</a
                      >
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium">
                          <a href="marketplace-category.html"
                            >All Web Themes<i
                              class="ci-arrow-right fs-xs ms-1"
                            ></i
                          ></a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >WordPress Themes</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Bootstrap Themes</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >eCommerce Templates</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Muse Templates</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Plugins</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a
                        class="dropdown-item dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                        >Fonts</a
                      >
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium">
                          <a href="marketplace-category.html"
                            >All Fonts<i class="ci-arrow-right fs-xs ms-1"></i
                          ></a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Blackletter</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Display</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Non Western</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Sans Serif</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Script</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Serif</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Slab Serif</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Symbols</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a
                        class="dropdown-item dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                        >Add-Ons</a
                      >
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium">
                          <a href="marketplace-category.html"
                            >All Add-Ons<i class="ci-arrow-right fs-xs ms-1"></i
                          ></a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Photoshop Add-Ons</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Illustrator Add-Ons</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Sketch Plugins</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Procreate Brushes</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >InDesign Palettes</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Lightroom Presets</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="marketplace-category.html"
                            >Other Software</a
                          >
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- Primary menu-->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="">Back to main demo</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Search collapse-->
        <div class="search-box collapse" id="searchBox">
          <div class="card pt-2 pb-4 border-0 rounded-0">
            <div class="container">
              <div class="input-group">
                <i
                  class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"
                ></i>
                <input
                  class="form-control rounded-start"
                  type="text"
                  placeholder="Search marketplace"
                />
              </div>
            </div>
          </div>
        </div>
      </header>
</div>
