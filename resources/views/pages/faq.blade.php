@extends('layouts.main')


@section('container')

{{-- Header title page  --}}
<section class="lapor pt-36">
    <div class="container">
    <div class="max-w-xl mx-auto text-center mt-10 ">
      <h1 class="font-bold text-3xl font-Inter text-green2 md:text-3xl lg:text-5xl mb-14">FREQUENTLY ASKED QUESTIONS
 </h1>         
    </div>
    </div>
</section>
{{-- end title page --}}
{{-- section  form lapor  --}}
<section class="artikel pb-96">
    <div class="container">
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Apa yang dimaksud Pantau Lingkungan?</h4> 
            <button type="button" id="btn1" class="btn1 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest1" class="container">
            <p class="font-semibold text-white text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quisquam!</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Apa tujuan dan manfaat dari Platform Pantau Lingkungan?</h4> 
            <button type="button" class="btn2 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest2" class="container">
            <p class="font-semibold text-white text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus impedit suscipit cum atque! Veniam in, facilis ut tenetur repellendus saepe dolor quae? Dolor eum vel corporis! Reprehenderit vero dolore provident.</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Bagaimana cara mengakses peta ancaman?</h4> 
            <button type="button" class="btn3 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest3" class="container">
            <p class="font-semibold text-white text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem obcaecati tempore tenetur sint, architecto soluta aut placeat explicabo. Numquam accusamus molestiae sapiente architecto. Excepturi, praesentium!</p>
            </div>
            </div>
        </div>
        <div class="w-full px-4 mb-8 mt-5 ">
            <div class="w-full px-4 bg-primary py-3 block">
            <h4 class="text-lg font-semibold text-white inline-block">Bagaimana cara mengakses data izin usaha pertambangan?</h4> 
            <button type="button" class="btn4 text-white   hover:focus:ring-2 hover:focus:outline-primary hover:focus:ring-primary font-medium rounded-lg text-sm text-center inline-flex float-right items-center mr-2"><img src="{{ asset('images/options.png') }}" alt="options">
            </button>
            <div id="quest4" class="container">
            <p class="font-semibold text-white text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat dolore asperiores aperiam similique ipsa atque, sapiente deserunt hic pariatur libero ullam impedit quam maxime repellendus, quasi dolorum reiciendis. Iusto harum dolores fugit. Deleniti eius, iusto iste vitae aliquam dolores ab id, recusandae velit earum enim perferendis debitis adipisci asperiores tenetur!</p>
            </div>
            </div>
        </div>
       
    </div>
   
    </section>
{{-- end section  form lapor     --}}
<script>
$(document).ready(function(){
    $('#quest1').hide();
    $('#quest2').hide();
    $('#quest3').hide();
    $('#quest4').hide();

    $(".btn1").click(function(){
        $("#quest1").toggle();
    });
    $(".btn2").click(function(){
        $("#quest2").toggle();
    });
    $(".btn3").click(function(){
        $("#quest3").toggle();
    });
    $(".btn4").click(function(){
        $("#quest4").toggle();
    });
});
</script>
@endsection