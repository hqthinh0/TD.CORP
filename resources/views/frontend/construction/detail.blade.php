@extends('frontend.main_master')
@section('pageTitle', 'Thi Công')
@section('main')



    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li><a href="{{ route('construction.page.company') }}">Thi Công</a></li>
                <li>{{ $ShowdetailPage->subcategory_title}}</li>
            </ul>
        </div>
    </div>
  
     <section class="details">
            <div class="wrp-container">
                <h2 class="hdg-lv2"> <span class="color-primary">{{ $ShowdetailPage->subcategory_title}}</span></h2>
                <h3 class="hdg-lv3 hdg-lv3--line "> <span class="color-primary">Công trình của {{ $ShowdetailPage->subcategory_name}}</span></h3>
                <div class="details--content"> 
                    {!! $ShowdetailPage->description !!}
                </div>

                
            </div>
        </section>
      


@endsection
