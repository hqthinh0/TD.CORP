@extends('frontend.main_master')
@section('pageTitle', 'Công Ty TNHH TD.CORP')
@section('main')

@php
  $SliderShow = App\Models\SliderShow::all();
  $CustomReview = App\Models\CustomerReview::all();
  $partner = App\Models\partner::all();
  $category = App\Models\Category::all();
  $services = App\Models\Service::all();
@endphp

<div id="l-main">
	<section class="slide-banner">
		<div class="slider">
				@foreach($SliderShow as $item)
			<div class="slider__nav slick-slider">
				<figure class="js-fullbg slider__bg">
					<img class="slider__bg--img fluid-image" src="{{ asset($item->multi_Images) }}" />
				</figure>
			</div>
			@endforeach
		</div>
	</section>    

	<section class="mission">
		<div class="wrp-container">
			<h2 class="hdg-lv2 hdg-lv2--center fadeInUp" > <span class="color-primary">Sứ Mệnh - mục tiêu</span> <img src="{{ asset('frontend/assets/images/line_h2.png')}}" /></h2>

			<ul class="lst lst-list fadeInUp" >
				<li><span>Công ty TDCORP</span> xin gửi lời cảm ơn  sâu sắc đến Quý Khách hàng đã và đang quan tâm, tin tưởng và sử dụng dịch vụ thiết kế - thi công xây dựng nhà của chúng tôi.</li>
				<li><span>TDCORP </span> đã có kinh nghiệm và hoạt động được  8 năm, với đội ngũ Kiến trúc sư, kĩ sư, họa viện tận tâm phục vụ với nhiều năm kinh nghiệm trong lĩnh vực thiết kế kiến trúc, thiết kế ngoại thất, thiết kế nội thất, thi công công trình dân dụng và công nghiệp khác. Chính vì lẽ đó TDCORP chúng tôi ngay từ hoạt động đã vạch cho khách hàng</li>
				<li><span>TDCORP </span>luôn luôn đặt cái tâm lên hàng đầu, mang lại sản phẩm đẹp và tốt nhất cho khách hàng.</li>
				<li><span>TDCORP </span>Phấn đấu trở thành nhà thầu uy tín tại Miền Nam và Miền Trung</li>
			</ul>
		</div>
	</section>
	
	<section class="category--index">
		<div class="wrp-container">
			<h2 class="hdg-lv2 hdg-lv2--center fadeInUp"> <span class="color-primary">Công trình đã thi công</span><img src="{{ asset('frontend/assets/images/line_h2.png')}}" /></h2>
			<div class="box category">
				<div class="grid-row box-grid">
					@foreach($category as $item)
						<div class="grid-col--3 js-animation slideInUp" data-delay="0.2">
							<div class="box-category">
								  <a href="{{ url('construction/#'.$item->hastag) }}" class="box-category__href">
									<div class="box-category__img">
										<figure class="box-image">
											<img src="{{ asset($item->category_image) }}" alt="" class="fluid-image" >
										</figure>
									</div>
									<h4 class="hdg-lv4 hdg-lv4--center"> <span class="color-seconds">{{$item->category_name}}</span></h4>
								</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

		<section class="service">
			<div class="wrp-container">
			<h2 class="hdg-lv2 hdg-lv2--center fadeInUp"> <span class="color-primary">Dịch vụ</span><img src="{{ asset('frontend/assets/images/line_h2.png')}}" /></h2>
			<div class="box service">
				<div class="grid-row box-grid">
					
					@foreach($services as $item)
					<div class="grid-col--4 js-animation slideInUp" data-delay="0.2">
						<div class="box-category">
							<a href="{{ route('services.page.detail',str_replace(' ', '-', $item->service_title)) }}" class="box-category__href">
								<div class="box-category__img">
									<figure class="box-image">
										<img  src="{{asset($item->service_images)}}" alt="" >
									</figure>
								</div>
								<h4 class="hdg-lv4 hdg-lv4--center txt-capitalize"> <span class="color-primary">{{$item->service_title}}</span></h4>
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

	<section class="exp js-animation slideInUp">
		<div class="wrp-container">
		<h2 class="hdg-lv2 hdg-lv2--center"> <span class="color-primary">Kinh Nghiệm của chúng tôi</span><img src="{{ asset('frontend/assets/images/line_h2.png')}}" /></h2>
			<div class="box experience">
				<div class="grid-row box-grid">
					<div class="grid-col--3 js-animation slideInUp" data-delay="0.2">
						<div class="box-category" id="counter">
							<div class="experience__item">
								<div class="experience__item--img">
									<figure>
										<img src="{{ asset('frontend/assets/images/icon_01.png')}}" alt="" class="fluid-image">
									</figure>
								</div>
								<div class="experience__item--count counter" data-count-start="0" data-count-end="542" data-speed="10" data-target="542" data-symbol="+">0</div>
								<div class="experience__item--name">Xây Dựng</div>
							</div>
						</div>
					</div>
					<div class="grid-col--3 js-animation slideInUp" data-delay="0.3">
						<div class="box-category">
							<div class="experience__item ">
								<div class="experience__item--img">
									<figure>
										<img src="{{ asset('frontend/assets/images/icon_02.png')}}"  alt="" class="fluid-image">
									</figure>
								</div>

								<div class="experience__item--count counter" data-count-start="0" data-count-end="1294" data-speed="10" data-target="1294" data-symbol="+">0</div>
								<div class="experience__item--name">Khách Hàng</div>
							</div>
						</div>
					</div>
					<div class="grid-col--3 js-animation slideInUp" data-delay="0.4">
						<div class="box-category">
							<div class="experience__item  ">
								<div class="experience__item--img">
									<figure>
										<img src="{{ asset('frontend/assets/images/icon_03.png')}}" alt="" class="fluid-image">
									</figure>
								</div>
								<div class="experience__item--count counter" data-count-start="0" data-count-end="1182" data-speed="10" data-target="1182" data-symbol="+">0</div>
								<div class="experience__item--name">Sửa Chữa</div>
							</div>
						</div>
					</div>
					<div class="grid-col--3 js-animation slideInUp" data-delay="0.5">
						<div class="box-category">
							<div class="experience__item ">
								<div class="experience__item--img">
									<figure>
										<img src="{{ asset('frontend/assets/images/icon_04.png')}}" alt="" class="fluid-image">
									</figure>
								</div>
								<div class="experience__item--count counter" data-count-start="0" data-count-end="98" data-speed="50" data-target="98" data-symbol="%">0</div>
								<div class="experience__item--name">Hài Lòng</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="rate js-animation slideInUp">
		<div class="wrp-container">
			<h2 class="hdg-lv2 hdg-lv2--center"> <span class="color-primary">đánh giá của khách hàng</span><img src="{{ asset('frontend/assets/images/line_h2.png')}}" /></h2>
			<div class="box feedback">
				@foreach($CustomReview as $item)
				<div class="box__item ">
					<p class="txt-lead">{{$item->description}}</p>
					<div class="box__info">
						<div class="grid-row feedback--grid">
							<div class="box__info--images">
								<img src="{{ asset($item->customer_img)}}"  alt="">
							</div>
							<div class="box__info--content">
								<p class="box__info--name">{{$item->name}}</p>
								<p class="box__info--adress">T{{$item->address}}</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<section class="partner fadeInUp">
		<div class="wrp-container">
			<h2 class="hdg-lv2 hdg-lv2--center"> <span class="color-primary">Đối tác của chúng tôi</span><img src="{{ asset('frontend/assets/images/line_h2.png')}}" /></h2>
			<div class="box business grid-row ">
				
				@foreach($partner as $item)
				<div class="box__item">
					<div class="box__item--img">
						<img src="{{ asset($item->partners_Images) }}"  alt="" class=fluid-image>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
		
</div>
<!-- /#main -->
<!-- /#container -->

@endsection
