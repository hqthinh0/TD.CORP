@extends('frontend.main_master')
@section('pageTitle', 'Liên Hệ')
@section('main')
<div class="wrp-container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li>Liên Hệ</li>
            </ul>
        </div>
    </div>
    	<section class="sec-base">
		<div class="wrp-container">
			<div class="contact-title">
				<h3 class="hdg-lv3"> <span class="color-primary">Mẫu Yêu Cầu</span></h3>
				<p><span class="txt--red">*</span>các trường hợp bắt buộc<br />vui lòng nhập theo chi tiết yêu cầu của bạn</p>
			</div>
			<div class="contact-title hide">
					<h3 class="hdg-lv3"> <span class="color-primary">Mẫu Yêu Cầu</span></h3>
				<p>
					Vui lòng kiểm tra xem thông tin bạn nhập có đúng không.<br />Nếu nội dung không có vấn đề gì vui lòng nhấn nút "Gửi".
				</p>
			</div>
			<div class="grid-row box-contact-wrp">
				<div class="grid-col--8 box-contact__col">
					<form method="post"	action="{{route('contact.message')}}"	class="autoConfirm mt0"	enctype="multipart/form-data"	name="contact_frm"	id="contact_frm"	>
						@csrf
					<div id="contact_frm_confilm">
							<div id="mail_input">
								<table class="mb20 frm-tbl--v2">
										<tr>
										<th>Chủ đề Yêu cầu <span class="txt--red"> *</span></th>
										<td>
											<input	size="150"	type="text"	name="subject"	id="txtTel"	class="frm-base-input js_validate"/>
											<p class="error_message" id="error_txtTel"></p>
										</td>
									</tr>
									<tr>
										<th>Họ và tên<span class="txt--red"> *</span></th>
										<td>
											<input size="20" type="text" name="name" id="txtName" class="frm-base-input js_validate" />
											<p class="error_message" id="error_txtName"></p>
										</td>
									</tr>
									<tr>
										<th>Email<span class="txt--red"> *</span></th>
										<td>
											<input size="30" type="text" name="email" id="txtEmail" class="frm-base-input js_validate"
											/><br />
											<p class="error_message" id="error_txtEmail"></p>
										</td>
									</tr>
									
									<tr>
										<th>Số Điện Thoại <span class="txt--red"> *</span></th>
										<td>
											<input	size="30" type="text" name="phone" id="txtTel" class="frm-base-input js_validate"	/>
											<p class="error_message" id="error_txtTel"></p>
										</td>
									</tr>
									<tr>
										<th>Chi Tiết Yêu cầu<span class="txt--red"> *</span></th>
										<td>
											<textarea
												name="message"
												id="txtComment"
												cols="50"
												rows="5"
												class="frm-base-input frm-base-textarea js_validate"
											></textarea>
											<p class="error_message" id="error_txtComment"></p>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div id="mail-btn" class="txt_c contact-btn hide">
							<div class="txt_c">
								<input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
								<div class="wrp-button">
									<button
										id="back"
										name="back"
										class="autoConfirmBack frm-btn frm-btn__back"
										name="send"
										onclick="javascript: return DisplayInput();"
									>
										<span>Quay Lại</span>
									</button>
									<button id="submit_btn" class="submit_btn frm-btn" ntype="submit" disabled>
										<span>Gởi đi</span>
									</button>
								</div>
							</div>
						</div>
						<table class="frm-tbl--v2 contact-btn">
							<tr class="tbl-txt_c">
								<th></th>
								<td>
									<div class="txt_c">
										<button
											id="confirm_btn"
											class="confirm_btn frm-btn frm-btn--v2"
											name="config"
											onClick="return ConfirmClick_Contact();"
										>
											<span>gởi yêu cầu</span>
										</button>
									</div>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="grid-col--4 box-contact__col">
					<div class="box-contact__inner">
						<div class="box-contact__info">
							<div class="box-contact__row">
								<h3 class="hdg-lv3">Liên hệ trực tiếp với chúng tôi</h3>
								<h4 class="hdg-lv4 txt-capitalize"> <span class="color-primary">Công Ty TNHH XD TM Trang Trí Nội Thất  TD.CORP</span></h4>
								<p></p>
								<ul class="lst-list lst">
									<li>Mã số thuế: 0312218097</li>
									<li>Địa chỉ: 98/19 Thích Quảng Đức, Phường 5, Quận Phú Nhuận, TPHCM</li>
									<li>văn phòng : 55 Thành Mỹ, Phường 8, Quận Tân Bình, TP HCM</li>
									<li>hotline: 182201476</li>
									<li>Email: quocminhconstruction@gmail.com </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2143519350466!2d106.72012065376866!3d10.79488835329883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292717f681ab%3A0xf3ab2cb239d4e8e4!2sLandmark%206!5e0!3m2!1svi!2s!4v1719202157008!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>


      


@endsection
