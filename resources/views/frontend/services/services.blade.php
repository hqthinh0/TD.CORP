@extends('frontend.main_master')
@section('main')

@php 
    $services = App\Models\Service::all();
@endphp
<div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li>Dịch Vụ</li>
            </ul>
        </div>
    </div>
      
      <section class="service--page">
            <div class="service">
                <div class="wrp-container">
                    <h2 class="hdg-lv2"> <span class="color-primary">Dịch vụ</span></h2>

                     @foreach($services as $item)
                    <div class="service__box js-animation slideInUp" data-delay="0.2">
                        <div class="grid-row service--grid">
                            <div class="grid-col--3">
                                <div class=" box-category__img">
                                    <figure class="box-image">
                                        <img src="{{asset($item->service_images)}} " alt="" >
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-col--9">
                                <div class="service__box--content">
                                     <a href="{{ route('services.page.detail',str_replace(' ', '-', $item->service_title)) }}"><h4 class="hdg-lv4 txt-capitalize"> <span class="color-primary">{{$item->service_title}}</span></h4></a>
                                    <p>{{$item->service_short}}</p>
                                    <a href="{{ route('services.page.detail',str_replace(' ', '-', $item->service_title)) }}" class="btn btn-info txt-capitalize">xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </section>


@endsection
