@extends('frontend.main_master')
@section('pageTitle', 'Thi Công')
@section('main')

@php 
    $categories = App\Models\Category::all();
    $subcategories = App\Models\Subcategory::latest()->get();
@endphp
    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li>Thi Công</li>
            </ul>
        </div>
    </div>


    @foreach($categories as $item)

       <section class="sec-construction" id="{{ $item->hastag }}">
            <div class="wrp-container">
            <h2 class="hdg-lv2"> <span class="color-primary">{{$item->category_name}}</span></h2>
			<div class="box construction">
			    <div class="grid-row box-grid">
                    @foreach($subcategories as $subItem)
                    @if($item->id == $subItem->category_id)
					<div class="grid-col--3 js-animation slideInUp" data-delay="0.2">
						<div class="box-category">
								<a href="{{ route('construction.page.detail',str_replace(' ', '-', $subItem->subcategory_title)) }}" class="box-category__href">
								<div class="box-category__img">
								       <figure class="box-image">
                                            @php
                                                $image_url = str_replace($item->hastag, '', $subItem->subcategory_images);
                                            @endphp
                                            <img src="{{ asset($image_url) }}" alt="" class="fluid-image">
                                        </figure>
								</div>
								<h3 class="hdg-lv3 hdg-lv3--small txt-capitalize"> <span class="color-primary">{{  $subItem->subcategory_title }}</span></h3>
							</a>
							<div class="construction__info">
								<p class="icon icon_user txt-info txt-capitalize">Chủ đầu tư: {{ $subItem->subcategory_name}}</p>
								<p class="icon icon_area txt-info txt-capitalize"> Diện tích: {{ $subItem->subcategory_area}}m <sup>2</sup></p>
								<p class="icon icon_map txt-info txt-capitalize">Địa chỉ: {{ $subItem->subcategory_map}}</p>
								<p class="icon icon_building txt-info txt-capitalize">Số tầng: {{ $subItem->subcategory_building}} tầng</p>
							</div>
						</div>
					</div>
                    @endif
                    @endforeach
			    </div>
		    </div>
        </section>
    @endforeach

@endsection
<script>
    window.addEventListener('load', function () {
        // Hàm lấy phần hash từ URL
        function getHashParameter() {
            return window.location.hash ? window.location.hash.substring(1) : null;
        }

        // Lấy giá trị hash từ URL
        const section = getHashParameter();

        // Cuộn tới phần tương ứng nếu hash tồn tại
        if (section) {
            const targetSection = document.getElementById(section);
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Cuộn lên thêm 110px
                $("html, body").animate({ scrollTop: $(location.hash).offset().top - 110 }, 1500);
            }
        }
    });
</script>