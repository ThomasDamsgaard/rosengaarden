@extends('layouts.app')

@section('pageTitle', 'Forside | Rosengårdens Kiropraktik')

@section('css')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  @if (Route::is('frontpage'))
    <style>
    .button_container span {
      background: #fff;
      }
    </style>
  @endif
@endsection

@section('content')
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center" style="z-index: 300;">
        <div class="col-sm-8 offset-sm-2 mb-3 mb-lg-0">

          <h4 style="color: #fff;" class="font-weight-light" style="margin: 0px;">Rosengården</h4>
          <hr style="background-color: #C75B3A; height: 1px; margin: 0.25rem;">
          <h1 style="color: #fff;">Kiropraktik</h1>
          <p style="color: #fff;">Du finder os nemt på Tagtækkervej 8, lige ved Rosengårdcenterets blå indgang.</p>

        </div>

        {{-- <p class="lead mb-5">Velkommen hos kiropraktorerne ved Rosengårdcentret</p> --}}
        {{-- <a href="#content" class=" frontpage-btn btn btn-light" role="button"><i style="color: black;" class="fas fa-arrow-circle-down fa-lg"></i></a> --}}

        <div class="col-12">
            <div class="row d-md-none">
              <div class="col-md-6 mb-3 mb-md-0">
                @switch(Carbon\Carbon::now()->dayOfWeek)
                  @case(0)
                    <p style="color: #fff;">Telefontid imorgen fra kl 8.00</p>
                    @break;
                  @case(1)
                    <p style="color: #fff;">Telefontid kl 8.00 - 18.00</p>
                    @break;
                  @case(2)
                    <p style="color: #fff;">Telefontid kl 7.30 - 18.00</p>
                    @break;
                  @case(3)
                    <p style="color: #fff;">Telefontid kl 7.30 - 17.30</p>
                    @break;
                  @case(4)
                    <p style="color: #fff;">Telefontid kl 8.00 - 18.00</p>
                    @break;
                  @case(5)
                    <p style="color: #fff;">Telefontid kl 7.30 - 15.00</p>
                    @break;
                  @case(6)
                    <p style="color: #fff;">Telefontid mandag fra kl 8.00</p>
                    @break;
                @endswitch
                <br>
                <i class="fas fa-phone" style="color: #fff;"></i> <p style="color: #fff;">66 15 97 87</p>
              </div>
              <div class="col-md-6">
                <i class="fas fa-map-marked-alt" style="color: #fff;"></i> <p style="color: #fff;">Tagtækkervej 8, 7.sal</p>
                <p style="color: #fff;">5230 Odense M</p>
              </div>
            </div>
        </div>


      </div>
    </div>
  </div>
  <div id="bg-image" class="background cover active" style="background-image: url({{ asset('img/bg.jpg') }} no-repeat center center)";></div>
  {{-- <div class="background cover" style="background-image: url({{ asset('img/bg2.jpg') }});"></div> --}}
  {{-- <div class="background cover" style="background-image: url({{ asset('img/bg3.jpg') }});"></div> --}}
  <div class="background-overlay"></div>
</header>
<div class="container" id="content">
  <div class="row mb-md-5 mb-3">

    <div class="col-md-8 offset-md-2 mb-10 mb-lg-3">
      {{-- <div class="card"> --}}
      <div class="card" style="margin-top: -71px; z-index: 300;">

        <p class="mt-3 mb-0 lead text-center">
          Vores mål er at hjælpe dig med at optimere dit helbred og velbefindende.
        </p>
        <hr>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <h6><b>Specialister i bevægeapparatet</b></h6>
              <p>Som kiropraktorer og fysioterapeuter er vi specialister i kroppens bevægeapparat og uddannede til at få led og muskler til at fungere, bedst muligt.</p>
              <h6><b>Tværfagligt team</b></h6>
              <p> Vi er et tværfagligt team, som er parat til at hjælpe dig, uanset om problemet allerede er opstået og har behov for behandling, eller blot ønsker en undersøgelse eller gode råd og vejledning.</p>
            </div>
            <div class="col-md-6">
              <h6><b>Henvisning og sygesikring</b></h6>
              <p>Du behøver ingen henvisning fra din egen læge ved kiropraktorbesøg, vi har overenskomst med sygesikringen og der ydes tilskud fra Sygeforsikringen Danmark.</p>
              <h6><b>Kiropraktorvagt</b></h6>
              <p>
                I weekender og helligdage er der mulighed for at kontakte vagthavende kiropraktor i Region Syd for behandling.<br>
                Mere info på regionens <a href="https://www.regionsyddanmark.dk/wm362773">hjemmeside</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')

  <script type="text/javascript">
  // (function() {
  //   'use strict'
  //   const cats = [
  //     "https://www.petfinder.com/wp-content/uploads/2013/09/cat-black-superstitious-fcs-cat-myths-162286659.jpg",
  //     "https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_March_2010-1.jpg"
  //   ]
  //
  //   const node = document.getElementById("bg-image");
  //
  //   const cycleImages = (images, container, step) => {
  //       images.forEach((image, index) => (
  //       setTimeout(() => {
  //         console.log(container);
  //
  //           container.style.backgroundImage = `url(${image})`
  //       }, step * (index + 1))
  //     ))
  //     setTimeout(() => cycleImages(images, container, step), step * images.length)
  //   }

    // cycleImages(cats, node, 5000);

    // window.onscroll = function() {
    //   const navbar = document.querySelector('.fixed-top');
    //   // const footer = document.querySelector('.fixed-bottom');
    //   if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
    //     navbar.classList.add('scrolled');
    //     // footer.classList.add('scrolled')
    //   } else {
    //     navbar.classList.remove('scrolled');
    //     // footer.classList.remove('scrolled');
    //   }
    // }

    // const mobileNav = document.querySelector('.button_container');
    // const overlay = document.querySelector('#overlay');
    // mobileNav.addEventListener('click', function(e) {
    //   mobileNav.classList.toggle('active');
    //   overlay.classList.toggle('open');
    // });
  // })();
  </script>

@endsection
