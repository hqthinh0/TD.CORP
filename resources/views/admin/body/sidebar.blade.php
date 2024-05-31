<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">UI Elements</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item nav-category">Forms and Datas</li>

    <!-- SLIDER SHOWW START -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#slideshow" aria-expanded="false" aria-controls="slideshow">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">slide Show</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="slideshow">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('slideshow.route')}}">slide Show update</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('slideshow.route.all')}}">slide Show all</a></li>
        </ul>
      </div>
    </li>
      <!-- SLIDER SHOWW END -->
     <!-- Construction START -->
    <li class="nav-item">
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
    </li>
     <!-- Construction END -->
       <!-- CustomerReview start -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Customer Review</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('customerreview.route')}}">Customer Review</a></li>
           <li class="nav-item"><a class="nav-link" href="{{route('route.CustomerReview.all')}}">all</a></li>
        </ul>
      </div>
    </li>
   <!-- CustomerReview End -->

      <!-- partners start -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#partners" aria-expanded="false"
        aria-controls="partners">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">partners</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="partners">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('partner.route')}}">partners</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('partner.route.all')}}">all</a></li>
        </ul>
      </div>
    </li>
   <!-- partners End -->
    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#About" aria-expanded="false"
        aria-controls="About">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">About Page Setup</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="About">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('about.page')}}">About Page</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('about.page.all')}}">all</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#Category" aria-expanded="false"
        aria-controls="Category">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Category</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Category">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('category.page.all')}}">all category</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('category.page.add')}}">add category</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#subcategory" aria-expanded="false"
        aria-controls="subcategory">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Sub Category</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="subcategory">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('subcategory.page.all')}}">all sub category</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('subcategory.page.add')}}">add sub category</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#models" aria-expanded="false"
        aria-controls="models">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">models</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="models">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('models.page.all')}}">models  all </a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('models.page.add')}}">models  add</a></li>
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
      <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>