
@extends('frontend.main_master')
@section('main')

@php 
    $models = App\Models\Models::all();
@endphp
    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li>Nhà Mẫu</li>
            </ul>
        </div>
    </div>


   

    <section class="sec-model">
            <div class="wrp-container">
                <h2 class="hdg-lv2"> <span class="color-primary">Mẫu Nhà</span></h2>
                <div class="box model">
                    <div class="grid-row box-grid">
                         @foreach($models as $item)
                        <div class="grid-col--3 js-animation slideInUp" data-delay="0.2">
                            <div class="box-category box-category__img">
                                <a href="{{ route('models.page.detail',str_replace(' ', '-', $item->models_title)) }}" class="box-category__href">
                                    <div class="box-category__img">
                                        <figure class="box-image">
                                            <img src=" {{$item->models_images}} " alt="" >
                                        </figure>
                                    </div>
                                    <h3 class="hdg-lv4 hdg-lv4--center txt-capitalize"> <span class="color-primary">{{$item->models_title}}</span></h3>
                                </a>
                            </div>
                        </div>
                        
                    @endforeach
   
 
                 

                    </div>
                </div>
            </div>
        </section>
    




@endsection


