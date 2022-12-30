<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style> @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap'); </style>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.6.1.js') }}"></script>
  @vite('resources/css/app.css')

  <title >Walhi | {{ $title }} </title>
</head>
<body class="bg-gradient-to-b from-emerald-300 via-primary to-emerald-300">
{{-- Navbar  start --}}
<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
<div class="container">
<div class="flex items-center justify-between relative">
  <div class="px-4">
    <a href="#" class="text-lg block py-6 "><img  src="{{  asset('images/logo/walhi-logo.png') }}" alt=""></a>
  </div>
  <div class="flex items-center px-4">
    <button id="hamburger" name="hamburger" type="button" class="block-absolute right-4 lg:hidden">
    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
    <span class="hamburger-line transition duration-300 ease-in-out"></span>
    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
    </button>
    <nav id="nav-menu" class="hidden absolute py-5 bg-green2 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
      <ul class="block lg:flex">
      <li class="group">
      <a href="/" class="text-base text-white py-2 mx-8 group-hover:text-blue-500 font-Inter  flex">BERANDA </a>
      </li>
      <li class="group">
      <a href="/plingkungan" class="text-base text-white py-2 mx-8 group-hover:text-blue-500 font-Inter flex">PANTAU LINGKUNGAN </a>
      </li>
      <li class="group">
      <a href="/dashboard" class="text-base text-white py-2 mx-8 group-hover:text-blue-500 font-Inter flex">DASHBOARD </a>
      </li>
      <li class="group">
      <a href="/artikel" class="text-base text-white py-2 mx-8 group-hover:text-blue-500 font-Inter flex">ARTIKEL </a>
      </li>
      <li class="group">
      <a href="/lapor" class="text-base text-white py-2 mx-8 group-hover:text-blue-500 font-Inter flex">LAPOR </a>
      </li>
      <li class="group">
      <a href="/faq" class="text-base text-white py-2 mx-8 group-hover:text-blue-500 font-Inter flex">FAQ </a>
      </li>
       
      </ul> 
      
    </nav>
  </div>
</div>
</div>
</header>
{{-- End Navbar --}}
@yield('container') 


{{-- Footer Start --}}
<footer class="pt-24 pb-12">
<div class="container">
  <div class="flex flex-wrap">
  <div class="w-full px-4 mb-12 text-white md:w-1/3 font-Inter">
    <img  class="bg-white rounded-full mb-5 hover:bg-blue-500"src="{{ asset('images/logo/WALHI.png') }}" alt="logo">
    <h2 class="font-bold text-2xl mb-5">WAHANA LINGKUNGAN HIDUP INDONESIA</h2>
    <p class="">Jln. Tegal Parang Utara No 14, Jakarta Selatan 12790. Indonesia</p>
  </div>
  <div class="w-full px-4 mb-12 md:w-1/3">
      <h2 class="font-bold text-2xl mb-5 text-green2">MENU</h2>
      <h3 class="font-bold text-xl mb-3 text-white hover:text-blue-500"><a href="/">BERANDA</a></h3>
      <h3 class="font-bold text-xl mb-3 text-white hover:text-blue-500"><a href="/plingkungan">PANTAU LINGKUNGAN</a></h3>
      <h3 class="font-bold text-xl mb-3 text-white hover:text-blue-500"><a href="/dashboard">DASHBOARD</a></h3>
      <h3 class="font-bold text-xl mb-3 text-white hover:text-blue-500"><a href="/artikel">ARTIKEL</a></h3>
      <h3 class="font-bold text-xl mb-3 text-white hover:text-blue-500"><a href="/lapor">LAPOR</a></h3>
      <h3 class="font-bold text-xl mb-3 text-white hover:text-blue-500"><a href="/faq">FAQ</a></h3>
  </div>
  <div class="w-full px-4 mb-12 md:w-1/3">
      <h2 class="font-bold text-2xl mb-5 text-green2">KONTAK KAMI</h2>
      <h3 class="font-bold text-base mb-8 text-white font-Inter">
      <img class="inline-block" src="{{ asset('images/logo/email-logo.png') }}" alt="email-logo"> informasi@walhi.or.id
      </h3>
      <h3 class="font-bold text-base mb-8 ml-5 text-white font-Inter">
      <img class="inline-block" src="{{ asset('images/logo/facebook-logo.png') }}" alt="facebook-logo"><span class="ml-5">WALHI</span>
      </h3>
      <h3 class="font-bold text-base mb-8 text-white font-Inter">
      <img class="inline-block" src="{{ asset('images/logo/twitter-logo.png') }}" alt="twitter-logo"> @ walhinasional
      </h3>
      <h3 class="font-bold text-base mb-8 text-white font-Inter">
      <img class="inline-block" src="{{ asset('images/logo/ig-logo.png') }}" alt="instagram-logo"> @ walhi.nasional
      </h3>
  </div>
  </div>
  <div class="w-full pt-10 ">
  <p class="font-medium text-white font-Inter text-center text-sm">
   Copyright &copy; 2022 Pantau Lingkungan
  </p>

</div>
</div>
</footer>
{{-- End Footer --}}

<script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
</body>
</html>