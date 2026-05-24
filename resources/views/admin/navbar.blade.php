
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href=""><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search">
                </form>
              </li>
            </ul>
           
              </li>
            <li>
              <li class="nav-item dropdown border-left">
  
  <a class="nav-link dropdown-toggle d-flex align-items-center"
     href="#"
     id="userDropdown"
     data-bs-toggle="dropdown"
     aria-expanded="false">

      <span class="me-2 text-white">
          {{ Auth::user()->name }}
      </span>

      <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
           class="rounded-circle"
           width="30"
           height="30">

  </a>

  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
       aria-labelledby="userDropdown">

      <h6 class="p-3 mb-0">Manage Account</h6>

      <!-- LOGOUT -->
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
                  class="dropdown-item preview-item"
                  style="border:none; background:none; width:100%; text-align:left;">

              <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                  </div>
              </div>

              <div class="preview-item-content">
                  <p class="preview-subject mb-1">Log Out</p>
              </div>

          </button>
      </form>

  </div>
</li>

            </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>