@extends('frontend.main_master')
@section('main')



    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li><a href="{{ route('estimate.page.estimate') }}">Báo Giá</a></li>
                <li>{{ $ShowEstimateDetaild->estimate_title}}</li>
            </ul>
        </div>
    </div>
  
    <section class="details">
        <div class="wrp-container">
            <h2 class="hdg-lv2"> <span class="color-primary">{{ $ShowEstimateDetaild->estimate_title}}</span></h2>
            <p class="txt-lead">{{ $ShowEstimateDetaild->estimate_short}}</p>
            <div class="details--content"> 
                {!! $ShowEstimateDetaild->estimate_description !!}
            </div>
        </div>
    </section>
    


@endsection
