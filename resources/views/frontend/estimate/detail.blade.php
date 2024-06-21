@extends('frontend.main_master')
@section('pageTitle', 'Báo Giá')
@section('main')



    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li><a href="{{ route('estimate.page.estimate') }}">Báo Giá</a></li>
                <li>{{ $ShowEstimateDetaild->estimates_title}}</li>
            </ul>
        </div>
    </div>
  
    <section class="details">
        <div class="wrp-container">
            <h2 class="hdg-lv2"> <span class="color-primary">{{ $ShowEstimateDetaild->estimates_title}}</span></h2>
            <p class="txt-lead">{{ $ShowEstimateDetaild->estimates_short}}</p>
            <div class="details--content"> 
                {!! $ShowEstimateDetaild->estimates_description !!}
            </div>
        </div>
    </section>
    


@endsection
