@extends('frontend.main_master')
@section('pageTitle', 'Giới Thiệu')
@section('main')

@php 
    $aboutpage = App\Models\About::all();
@endphp
    <div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="/">Trang Chủ</a></li>
                <li>Giới Thiệu</li>
            </ul>
        </div>
    </div>

    @foreach($aboutpage as $item)
        {!! $item->description !!}
    @endforeach



@endsection
