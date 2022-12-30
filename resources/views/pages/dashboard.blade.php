@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="dashboardtitle pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">DASHBOARD </h1>           
    </div>
    <div class="w-full px-4 mb-">
<button type="button" class="py-2.5 px-20 mr-10 mb-10 text-base font-Bold text-white focus:outline-none bg-transparent rounded-full border border-white hover:bg-green2 hover:text-black focus:z-10 focus:ring-2 focus:ring-white">Tahun</button>
<button type="button" class="py-2.5 px-20 mr-10 mb-10 text-base font-Bold text-white focus:outline-none bg-transparent rounded-full border border-white hover:bg-green2 hover:text-black focus:z-10 focus:ring-2 focus:ring-white">Tahun</button>
<button type="button" class="py-2.5 px-20 mr-10 mb-10 text-base font-Bold text-white focus:outline-none bg-transparent rounded-full border border-white hover:bg-green2 hover:text-black focus:z-10 focus:ring-2 focus:ring-white">Tahun</button>
<button type="button" class="py-2.5 px-20 mr-10 mb-10 text-base font-Bold text-white focus:outline-none bg-transparent rounded-full border border-white hover:bg-green2 hover:text-black focus:z-10 focus:ring-2 focus:ring-white">Tahun</button>
<button type="button" class="py-2.5 px-20  mb-10 text-base font-Bold text-black focus:outline-none bg-green2 rounded-full border border-white hover:bg-transparent hover:text-white focus:z-10 focus:ring-2 focus:ring-white">Tahun</button>
    </div>
    <div class="" id="mapid">
    </div>
    <script>
var map = L.map('mapid').setView([1.084149, 104.027813], 10);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>
    </div>
</section>
{{-- end title page --}}
{{-- section  dashboard  --}}
<section class="dashboard pb-32">
    <div class="container">
    <div class="flex flex-wrap">
    <div class="w-full px-4 mb-10 lg:w-1/3">
     <div class="mt-10">
      <table class=" mt-2 w-full table-auto bg-white text-black text-left border">
  <thead>
    <tr>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Berdasarkan Provinsi</th>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <tr class="border-b">
      <td>Kalimantan Barat </td>
      <td>323</td>
    </tr>
    <tr class="border-b">
      <td>Sulawesi Selatan</td>
      <td>316</td>
    </tr>
    <tr class="border-b">
      <td>Kalimantan Tengah</td>
      <td>269</td>
    </tr>
    <tr class="border-b">
      <td>Sulawesi Tengah Tengah</td>
      <td>208</td>
    </tr>
    <tr class="border-b">
      <td>Total</td>
      <td>3426</td>
    </tr>
  </tbody>
</table>
    </div>
    
    </div>
    <div class="w-full px-4 mb-10 lg:w-1/3">
     <div class="mt-10">
        <div class="mb-3"></div>
      <table class="w-full table-auto bg-white text-black text-left border">
  <thead>
    <tr class="border-b">
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Berdasarkan Jenis</th>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Jumlah</th>
      <th class="bg-green2 text-left text-white font-extrabold font-Inter">Luas</th>
    </tr>
  </thead>
  <tbody>
    <tr class="border-b">
      <td>PS</td>
      <td>2.601</td>
      <td>3 JUTA</td>
    </tr>
    <tr class="border-b">
      <td>HUTAN ADAT</td>
      <td>763</td>
      <td>8 JUTA</td>
    </tr>
    <tr class="border-b">
      <td>TORA</td>
      <td>62</td>
      <td>157.407</td>
    </tr>
    <tr class="border-b">
    </tr>
    <tr class="border-b">
      <td>Total</td>
      <td>3426</td>
      <td>11 JUTA</td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    <div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
     <div class="mt-10 bg-white">
    <div class="divide-y-2 text-black">
    <h4 class="text-xl mb-2 p-2">Data Terbaru</h4>
    <hr>
    </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Hutan Adat Kasepuhan CIbarani </h2>
            <h3 class="text-black">Jenis : HA</h3>
            <h3 class="text-black">Luas : 644 Ha, Tahapan : Usulan</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Hutan Adat Kasepuhan CIbarani </h2>
            <h3 class="text-black">Jenis : HA</h3>
            <h3 class="text-black">Luas : 644 Ha, Tahapan : Usulan</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Hutan Adat Kasepuhan CIbarani </h2>
            <h3 class="text-black">Jenis : HA</h3>
            <h3 class="text-black">Luas : 644 Ha, Tahapan : Usulan</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Hutan Adat Kasepuhan CIbarani </h2>
            <h3 class="text-black">Jenis : HA</h3>
            <h3 class="text-black">Luas : 644 Ha, Tahapan : Usulan</h3>
          </div>
        </div>
        <div class=" flex sm:flex-row flex-col items-center sm:justify-start justify-center  sm:text-left p-1">
          <img alt="team" class="" src="{{ asset('images/indonesia_grey.png.png') }}">
          <div class="flex-grow sm:pl-8">
            <h2 class="font-bold text-lg text-black">Hutan Adat Kasepuhan CIbarani </h2>
            <h3 class="text-black">Jenis : HA</h3>
            <h3 class="text-black">Luas : 644 Ha, Tahapan : Usulan</h3>
          </div>
        </div>
      </div>
      
     </div>
     <div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
             <div class="mt-10 ">
    <div class="divide text-black ">
    <h4 class="text-base mb-2 p-2 font-bold text-white">GRAFIK DATA WILAYAH KELOLA PERBULAN</h4>
    <hr>
    <img src="{{ asset('images/grafik.png') }}" alt="" class="mt-3">
    </div>
    </div>
        </div>
     <div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
             <div class="mt-10 ">
    <div class="divide text-black ">
    <h4 class="text-base font-bold text-white mb-2 p-2">STATUS TAHAPAN</h4>
    <hr > 
    <img src="{{ asset('images/chart.png') }}" alt="" class="">
    </div>
    </div>
        </div>
     <div class="w-full px-4 lg:w-1/3 overflow-y-auto relative">
        <h2>tes</h2>
        </div>
       </div>
   
    </section>
{{-- end section  artikel --}}

@endsection