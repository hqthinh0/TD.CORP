<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Trang Chủ</span>
      </a>
    </li>
    <li class="nav-item nav-category">Nhập Dữ Liệu</li>

    <!-- SLIDER SHOWW START -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#slideshow" aria-expanded="false" aria-controls="slideshow">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Trình Chiếu</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="slideshow">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link text" href="{{route('slideshow.route')}}">Thêm Mới</a></li>
          <li class="nav-item"> <a class="nav-link text" href="{{route('slideshow.route.all')}}">Tất Cả</a></li>
        </ul>
      </div>
    </li>


     <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#About" aria-expanded="false"
        aria-controls="About">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Trang Giới Thiệu</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="About">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link text" href="{{route('about.page')}}">Thêm Mới</a></li>
          <li class="nav-item"><a class="nav-link text" href="{{route('about.page.all')}}">Tất Cả</a></li>
        </ul>
      </div>
    </li>
      <!-- SLIDER SHOWW END -->
     <!-- Construction START -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Construction</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('construction.route')}}">Construction Update</a></li>
        </ul>
      </div>
    </li> -->
     <!-- Construction END -->
       <!-- CustomerReview start -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Đánh Giá Của Khách Hàng</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link text" href="{{route('customerreview.route')}}">Thêm Mới</a></li>
           <li class="nav-item"><a class="nav-link text" href="{{route('route.CustomerReview.all')}}">Tất Cả</a></li>
        </ul>
      </div>
    </li>
   <!-- CustomerReview End -->

      <!-- partners start -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#partners" aria-expanded="false"
        aria-controls="partners">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Đối Tác</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="partners">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link text" href="{{route('partner.route')}}">Thêm Mới</a></li>
          <li class="nav-item"><a class="nav-link text" href="{{route('partner.route.all')}}">Tất Cả</a></li>
        </ul>
      </div>
    </li>
   <!-- partners End -->
    
   

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#Category" aria-expanded="false"
        aria-controls="Category">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Danh Mục</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Category">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link text" href="{{route('category.page.add')}}">Thêm Mới</a></li>
            <li class="nav-item"><a class="nav-link text" href="{{route('category.page.all')}}">Tất cả</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#subcategory" aria-expanded="false"
        aria-controls="subcategory">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Các Bài Viết Danh Mục</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="subcategory">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link text" href="{{route('subcategory.page.add')}}">Thêm Mới</a></li>
          <li class="nav-item"><a class="nav-link text" href="{{route('subcategory.page.all')}}">Tất cả</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#models" aria-expanded="false"
        aria-controls="models">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Nhà Mẫu</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="models">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link text" href="{{route('models.page.add')}}">Thêm Mới</a></li>
           <li class="nav-item"><a class="nav-link text" href="{{route('models.page.all')}}">Tất cả</a></li>
        </ul>
      </div>
    </li>

      <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false"
        aria-controls="services">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Dịch Vụ</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="services">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"><a class="nav-link text" href="{{route('services.page.add')}}">Thêm Mới</a></li>
          <li class="nav-item"><a class="nav-link text" href="{{route('services.page.all')}}">Tất cả</a></li>
        </ul>
      </div>
    </li>

      <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#estimate" aria-expanded="false"
        aria-controls="estimate">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Báo Giá</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="estimate">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link text" href="{{route('estimate.page.add')}}">Thêm Mới</a></li>
          <li class="nav-item"><a class="nav-link text" href="{{route('estimate.page.all')}}">Tất cả</a></li>
          
        </ul>
      </div>
    </li>



     <!-- Construction END -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pages/charts/chartjs.html">ChartJs</a></li>
        </ul>
      </div>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pages/tables/basic-table.html">Basic table</a></li>
        </ul>
      </div>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="menu-icon mdi mdi-layers-outline"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pages/icons/mdi.html">Mdi icons</a></li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item nav-category">pages</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-account-circle-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html"> Login </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item nav-category">help</li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('document.page.document')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>