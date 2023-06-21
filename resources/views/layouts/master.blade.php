<!doctype html>
<html lang="eng">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/slick.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css') }}">
<title>Race Africa</title>
<link rel="stylesheet" href="{{asset('assets/css/A.bootstrap.min.css%2bowl.carousel.min.css%2bslicknav.css%2bflaticon.css%2bgijgo.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.css%2bslick.cs') }}" />
<link rel="stylesheet" href="{{asset('assets/css/A.style.css.pagespeed.cf.pn9YGtjreM.css') }}">
<script nonce="e23ff9c8-09a3-4f75-b8d6-4a5d32fdfa09">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>


<link rel="icon" type="image/png" style="width:200px" href="{{asset('assets/img/favicon.png') }}">
</head>

<!--<div class="preloader">
<div class="loader">
<div class="shadow"></div>
<div class="box"></div>
</div>
</div>-->
<body>

<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<img  style="width:100%" src="{{asset('assets/img/favicon.png') }}" alt="">
</div>
</div>
</div>
</div>


<div class="navbar-area" >
<div class="luvion-responsive-nav">
<div class="container">
<div class="luvion-responsive-menu">
<div class="logo">
<a href="{{url('/')}}">
<img  style="width: 150px; height: 100px;"  src="{{asset('assets/img/logo.png') }}" alt="logo">

</a>
</div>
</div>
</div>
</div>
<div class="luvion-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a clashs="navbar-brand" href="{{url('/')}}">
<img style="width: 150px; height: 100px;" src="{{asset('assets/img/logo.png') }}" alt="logo">

</a>


<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"  >
<ul class="navbar-nav">
<li class="nav-item"><a href="{{url('/')}}" class="nav-link active">Home</a>
</li>
<li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About Us</a></li>
<li class="nav-item"><a href="{{url('/ralf')}}" class="nav-link">RALF</a>
</li>
<li class="nav-item"><a href="{{url('/iffa')}}" class="nav-link">IFFA Submmit</a>
</li>
<li class="nav-item"><a href="{{('https://racelearning.net/') }}" class="nav-link">Race Learning</a>
</li>
<!--<li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
<li class="nav-item"><a href="#" class="nav-link">Blog <i class="fas fa-chevron-down"></i></a>
<ul class="dropdown-menu">
<li class="nav-item"><a href="blog-1.html" class="nav-link">Blog Grid</a></li>
<li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Right Sidebar</a></li>
<li class="nav-item"><a href="single-blog.html" class="nav-link">Blog Details</a></li>
</ul>
</li>-->

</ul>
<!--<div class="others-options">
<a href="login.html" class="login-btn"><i class="flaticon-user"></i> Log In</a>
</div>-->
</div>
</nav>
</div>
</div>
</div>
<div >
	@yield('content')
	
</div>


</body>
</html>