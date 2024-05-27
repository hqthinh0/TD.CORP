<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="format-detection" content="telephone=no" />
	<title>★★★</title>
	<meta name="description" content="★★★"/>
	<meta name="keywords" content="★★★" />
	<meta property="og:title" content="★★★" />
	<meta	property="og:description"	content="★★★"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="★★★" />
	<meta property="og:image" content="http://www.shoenekeisan.net/assets/images/ogp.png" />
	<meta property="og:site_name" content="★★★" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css" />
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
