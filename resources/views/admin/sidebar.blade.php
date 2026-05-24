   <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
            
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

  <a class="sidebar-brand brand-logo" href="{{ url('/dashboard') }}">
    <h3 style="color:white; font-weight:bold; margin:0;">
        DAILY THREADS
    </h3>
  </a>

</div>
        <ul class="nav">
          
          <li class="nav-item nav-category">
            <span class="nav-link">Admin Panel</span>
          </li>
          <li class="nav-item menu-items">
           <a class="nav-link" href="{{ url('/dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('product') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add New Products</span>
            </a>
          </li>

           <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('showproduct') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Show All Products</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('showorder') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Show All Orders</span>
            </a>
          </li>

        </ul>
      </nav>