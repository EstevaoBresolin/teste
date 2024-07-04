@extends('layouts.app')

@section('content')
    <h1>index Jogos</h1>
    <!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img class="aa" src="{{ asset('images/img1.jpg') }}" alt="Example Image"></div>
    <div class="swiper-slide"><img class="aa" src="{{ asset('images/img2.jpg') }}" alt="Example Image"></div>
    <div class="swiper-slide"><img class="aa" src="{{ asset('images/img3.jpg') }}" alt="Example Image"></div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>

</div>

<div class="section1">
    <div class="section1-text">
        <h3>Lorem ipsum dolor sit Ullam dores voluptatem veniam consequuntur, consequatur facilis.</h3>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellat! Explicabo, quibusdam sapiente. Itaque, fugit suscipit quasi sapiente optio neque dicta beatae? Magnam, neque in. Quae fugiat quam provident est!</p>
    </div>

    <div class="section1-infos"> 
        <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 512.074 512.074" style="enable-background:new 0 0 512.074 512.074;" xml:space="preserve" width="512" height="512">
        <g>
            <path d="M490.727,21.379C473.083,3.489,447.355-3.846,422.93,2.051L96.786,70.595C34.85,79.76-7.929,137.399,1.236,199.334   c3.563,24.079,14.782,46.372,31.997,63.581l34.965,34.987c1.637,1.615,2.552,3.823,2.539,6.123v64.512   c0.047,40.134,32.57,72.657,72.704,72.704h64.512c2.303,0,4.513,0.913,6.144,2.539l34.965,34.965   c21.142,21.282,49.895,33.259,79.893,33.28c12.383-0.01,24.683-2.035,36.416-5.995c40.491-13.447,69.914-48.61,76.011-90.837   l68.544-325.12C516.084,65.391,508.789,39.291,490.727,21.379z M66.599,167c5.798-17.913,21.444-30.848,40.128-33.173   c0.754-0.1,1.5-0.228,2.24-0.384L393.17,73.71L134.738,331.992v-27.968c0.047-19.294-7.637-37.803-21.333-51.392l-34.923-34.965   C65.031,204.511,60.399,184.765,66.599,167z M378.535,403.118c-0.171,0.747-0.277,1.493-0.384,2.24   c-3.705,27.023-28.614,45.926-55.637,42.221c-10.676-1.464-20.581-6.379-28.203-13.997l-34.944-34.944   c-13.596-13.7-32.112-21.383-51.413-21.333h-27.968l258.368-258.432L378.535,403.118z"/>
        </g>
        </svg>
            <p class="title">TITLE</p>
            <p class="text">Texto Texto Texto Texto Texto Texto Texto TextoTexto</p>
        </div>
        <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="32px" height="32px"><path d="M14.5,0h-5A5.506,5.506,0,0,0,4,5.5v13A5.506,5.506,0,0,0,9.5,24h5A5.506,5.506,0,0,0,20,18.5V5.5A5.506,5.506,0,0,0,14.5,0Zm-5,3h5A2.5,2.5,0,0,1,17,5.5V18H7V5.5A2.5,2.5,0,0,1,9.5,3ZM12,22h0a1,1,0,0,1-1-1h0a1,1,0,0,1,1-1h0a1,1,0,0,1,1,1h0A1,1,0,0,1,12,22Z"/></svg>
            <p class="title">TITLE</p>
            <p class="text">Texto Texto Texto Texto Texto Texto Texto TextoTexto</p>
        </div>
        <div class="card">
        <svg id="Layer_1" viewBox="0 0 24 24" width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m4 10h3v3h-3zm5 3h3v-3h-3zm-5 5h3v-3h-3zm5 0h3v-3h-3zm-5-10h3v-3h-3zm5 0h3v-3h-3zm15 .5v15.5h-24v-20.5a3.5 3.5 0 0 1 3.5-3.5h9a3.5 3.5 0 0 1 3.5 3.5v1.5h4.5a3.5 3.5 0 0 1 3.5 3.5zm-11-5a.5.5 0 0 0 -.5-.5h-9a.5.5 0 0 0 -.5.5v17.5h10zm8 5a.5.5 0 0 0 -.5-.5h-4.5v13h5zm-4 4.5h3v-3h-3zm0 5h3v-3h-3z"/></svg>
            <p class="title">TITLE</p>
            <p class="text">Texto Texto Texto Texto Texto Texto Texto TextoTexto</p>
        </div>
    </div>
</div>

<script>

    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    });

</script>

<style>

    .swiper {

        width: 100%;
        height: 400px;
        padding: 2.5rem 0;

        margin-top:1rem;
        margin-bottom:3rem

    }

    .aa{
        width: 100vw;
        /* max-width: 750px; */
    }

    .section1-text{
        text-align:center;
        margin-bottom:1rem;
    }
    .section1-infos{
        width: 100%;
        background-color: #384c85;
        display:flex;
        flex-direction: column;
        gap: 1rem;
        padding: 3rem;
        margin-bottom: 3rem;
        margin-top:2rem;
    }

    .section1-infos{
        padding:3rem;
        display:flex;
        flex-direction: row;
        gap: 3rem;
        justify-content:center;
    }

    .card{
        display:flex;
        flex-direction: column;
        gap:1rem;
        border: 1px solid #051a59;
        justify-content:center;
        align-items:center;
        padding:1rem;
        max-width:310px;
    }

</style>

@endsection