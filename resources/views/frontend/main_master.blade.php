<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="format-detection" content="telephone=no" />
	<title>@yield('pageTitle')</title>
	<meta name="description" content="Công Ty TNHH TD.CORD xây Dựng mái ấm gia đình việt, Chuyên cung cấp các dịch vụ Thiết kế kiến Trúc, Thiết Kế Nội Thất, Thi Công Trọn Gói, Sữa Chữa Cải Tạo Nhà Ở, Bảo Hành Nhà Ở Và Khuyến Mãi, Thi Công Nhà Ở Rẻ Nhất, Chuyên Nhà Phố, Biệt Thự, Nội Thất, Nhà Cấp Bốn "/>
	<meta property="og:locale" content="vi_VN">
	<meta name="keywords" content="Thiết kế kiến Trúc, Thiết Kế Nội Thất, Thi Công Trọn Gói, Sữa Chữa Cải Tạo Nhà Ở, Bảo Hành Nhà Ở Và Khuyến Mãi, Thi Công Nhà Ở Rẻ Nhất, Chuyên Nhà Phố, Biệt Thự, Nội Thất, Nhà Cấp Bốn, Bảo hành và luôn bảo mật tuyệt đối." />
	<meta property="og:title" content="@yield('pageTitle')" />
	<meta property="og:description"	content="Công Ty TNHH TD.CORD xây Dựng mái ấm gia đình việt, Chuyên cung cấp các dịch vụ Thiết kế kiến Trúc, Thiết Kế Nội Thất, Thi Công Trọn Gói, Sữa Chữa Cải Tạo Nhà Ở, Bảo Hành Nhà Ở Và Khuyến Mãi, Thi Công Nhà Ở Rẻ Nhất, Chuyên Nhà Phố, Biệt Thự, Nội Thất, Nhà Cấp Bốn"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="★★★" />
	<meta property="og:image" content="{{ asset('frontend/assets/images/ogp.png')}}" />
	<meta property="og:site_name" content="TD.CORP" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CGC6DSF9BK"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-CGC6DSF9BK');
	</script>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KBWHK64W');</script>
</head>

	<body>
		<div id="l-document">
			@include('frontend.body.header')

            @yield('main')

            @include('frontend.body.footer')
	 </div>
</div><!-- /#document -->
<!-- <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script> -->
<script type="text/javascript" src="{{ asset('frontend/assets/js/components/jquery.min.js')}}"charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/components/jquery-ui.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/components/autoConfirm.js')}}"  charset="UTF-8"></script>
<script src="//www.google.com/recaptcha/api.js" async defer charset="UTF-8"></script>
<script type="module" src="{{ asset('frontend/assets/js/all.js')}}" ></script>
</body>
</html>
