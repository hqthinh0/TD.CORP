<header id="l-header" class="l-header" >
				<div class="wrp-container no-container">
					<div class="l-header__contact ">
						<p class="l-header__contact--p icon-phone txt-uppercase">Tư vấn báo giá hotline: 182201476</p>
					</div>
				</div>
				<div class="l-header__wrapper">
						
					<h1 id="sitelogo">
						<a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/logo.png')}}" alt="★★★" class="fluid-image"/></a>	
					</h1>
					<a class="nav-global-menu">
						<span class="b1" aria-hidden="true"></span>
						<span class="b2" aria-hidden="true"></span>
						<span class="b3" aria-hidden="true"></span>
					</a>
					<nav class="nav-global-wrap">
						<ul class="nav-global">
							<li class="{{ Request::url() == url('/') ? 'active' : '' }}">
								<a href="{{ url('/') }}" class="nav-item">Trang Chủ</a>
							</li>
						   <li class="{{ Request::url() == route('about.page.company') ? 'active' : '' }}">
								<a href="{{ route('about.page.company') }}" class="nav-item">Giới thiệu</a>
							</li>
						   <li class="{{ Request::url() == route('construction.page.company') ? 'active' : '' }}">
								<a href="{{ route('construction.page.company') }}" class="nav-item">Thi công</a>
							</li>
							      <li class="{{ Request::url() == route('services.page.services') ? 'active' : '' }}">
								<a href="{{ route('services.page.services') }}" class="nav-item">dịch vụ</a>
							</li>
						 	<li class="{{ Request::url() == route('models.page.models') ? 'active' : '' }}">
								<a href="{{ route('models.page.models') }}" class="nav-item">Nhà mẫu</a>
							</li>
						    <li class="{{ Request::url() == route('estimate.page.estimate') ? 'active' : '' }}">
								<a href="{{ route('estimate.page.estimate') }}" class="nav-item">Báo giá</a>
							</li>
							<!-- <li class="">
								<a href="./recruitment/" class="nav-item">Tuyển dụng</a>
							</li> -->
							<li class="{{ Request::url() == route('contact.page.contact') ? 'active' : '' }}">
								<a href="{{route('contact.page.contact')}}" class="nav-item">liên hệ</a>
							</li>
						
						</ul>

					</nav>
				</div>
			</header>
		