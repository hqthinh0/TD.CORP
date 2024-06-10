@extends('frontend.main_master')
@section('main')
<div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li>Liên Hệ</li>
            </ul>
        </div>
    </div>
    	<section class="sec-base sec-complete">
			<div class="wrp-container">

				<h3 class="sec-complete__title hdg-lv3 hdg-lv3--v2">Đã Gởi Email</h3>
				<p>
					Cảm ơn bạn rất nhiều vì đã liên hệ với chúng tôi.<br>Chúng tôi sẽ liên hệ với bạn ngay khi chúng tôi xác nhận thông tin chi tiết.<br><br>Một email trả lời tự động sẽ được gửi đến địa chỉ email bạn đã nhập.<br>Nếu bạn không nhận được email sau một thời gian, địa chỉ email bạn nhập có thể không chính xác hoặc có thể nó đã bị đưa vào thư mục thư rác.<br>Nếu bạn vội, chúng tôi cũng nhận tư vấn qua điện thoại.<br>Xin vui lòng liên hệ với chúng tôi theo số 052-757-3255.<br>

				</p>
	
				<p class="button button-finish">
					<a href="{{route('contact.page.contact')}}" class="frm-btn"><span>quay lại đầu trang</span></a>
				</p>
				
			</div>
		</section>
      


@endsection
