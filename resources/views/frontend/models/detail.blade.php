@extends('frontend.main_master')
@section('pageTitle', 'Nhà Mẫu')
@section('main')



    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li><a href="{{ route('models.page.models') }}">Nhà Mẫu</a></li>
                <li>{{ $ShowModelsPage->models_title}}</li>
            </ul>
        </div>
    </div>
  
     <section class="details">
            <div class="wrp-container">
                <h2 class="hdg-lv2"> <span class="color-primary">{{ $ShowModelsPage->models_title}}</span></h2>
                <div class="details--content"> 
                    {!! $ShowModelsPage->models_description !!}
                </div>

                
            </div>
        </section>
      


@endsection
