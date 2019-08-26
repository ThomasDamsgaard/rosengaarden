@extends('layouts.app')

@section('pageTitle', 'Forside | Rosengårdens Kiropraktik')

@section('css')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style media="screen">

</style>
@endsection

@section('content')
  <header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <div class="col-sm-4 offset-sm-4">
          <h4 class="font-weight-light" style="margin: 0px;">Rosengården</h4>
          <hr style="background-color: #C75B3A; height: 1px; margin: 0.25rem;">
          <h1>Kiropraktik</h1>
        </div>

        <p class="lead">Velkommen hos kiropraktorer og fysioterapeuter ved Rosengårdscenteret</p>
        {{-- <a href="#content" class=" frontpage-btn btn btn-light" role="button"><i style="color: black;" class="fas fa-arrow-circle-down fa-lg"></i></a> --}}

      </div>
    </div>
  </div>
</header>
<div class="container" id="content">
  <div class="row mb-md-5 mb-3">

    <div class="col-md-8 offset-md-2 mb-10 mb-lg-3">
      <div class="card" style="margin-top: -71px;">
        <div class="mouse-scroll d-none d-lg-block" style="margin-top: -90px;">
      		{{-- <div class="mouse">
      			<div class="wheel"></div>
      		</div> --}}
      		<div>
      			<span class="m-scroll-arrows arrow"></span>
      		</div>
        </div>

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
  (function() {
    'use strict'
    window.onscroll = function() {
      const navbar = document.querySelector('.fixed-top');
      const footer = document.querySelector('.fixed-bottom');
      if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        navbar.classList.add('scrolled');
        footer.classList.add('scrolled')
      } else {
        navbar.classList.remove('scrolled');
        footer.classList.remove('scrolled');
      }
    }

    // const mobileNav = document.querySelector('.button_container');
    // const overlay = document.querySelector('#overlay');
    // mobileNav.addEventListener('click', function(e) {
    //   mobileNav.classList.toggle('active');
    //   overlay.classList.toggle('open');
    // });
  })();
  </script>

@endsection
