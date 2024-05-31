@extends('frontend.main_master')
@section('main')



    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li><a href="{{ route('services.page.services') }}">Dịch Vụ</a></li>
                <li>{{ $ShowServicesPage->service_title}}</li>
            </ul>
        </div>
    </div>
  
     <section class="details">
            <div class="wrp-container">
                <h2 class="hdg-lv2"> <span class="color-primary">{{ $ShowServicesPage->service_title}}</span></h2>
                <p class="txt-lead">{{ $ShowServicesPage->service_short}}</p>
                <div class="details--content"> 
                    {!! $ShowServicesPage->service_description !!}
                </div>

                
            </div>
        </section>
      


@endsection
