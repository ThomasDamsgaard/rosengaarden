@extends('layouts.app')

@section('pageTitle', 'Forside | Rosengårdens Kiropraktik')

@section('content')
  <header class="masthead mb-3">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <div class="col-sm-4 offset-sm-4">
          <h4 class="font-weight-light" style="margin: 0px;">Rosengårdens</h4>
          <hr style="background-color: #C75B3A; height: 1px; margin: 0.25rem;">
          <h1>Kiropraktik</h1>
        </div>

        <p class="lead">Velkommen hos kiropraktorer og fysioterapeuter ved Rosengårdscenteret</p>
        <a href="#content" class=" frontpage-btn btn btn-light" role="button">Læs mere</a>
      </div>
    </div>
  </div>
</header>
<div class="container" id="content">
  <div class="row mb-md-5 mb-3">
    <div class="col-md-8 offset-md-2">
      <p class="lead text-center">
        Vores mål er at hjælpe dig med at optimere dit helbred og velbefindende.
      </p>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <h6><b>Specialister i bevægeapparatet</b></h6>
          <p>Som kiropraktorer og fysioterapeuter er vi specialister i kroppens bevægeapparat og uddannede til at få led og muskler til at fungere, bedst muligt.</p>
          <h6><b>Tværfagligt team</b></h6>
          <p> Vi er et tværfagligt team, som er parat til at hjælpe dig, uanset om problemet allerede er opstået og du har behov for behandling, eller blot ønsker en undersøgelse eller gode råd og vejledning.</p>
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
  {{-- <hr>
    <div class="row mt-md-5 mt-3">
      <div class="col-md-4 mb-3">
        <p class="lead" style="margin-bottom: 0px;">Telefontider:</p>
        <ul style="list-style: none; padding: 0;">
          <li>Mandag 8.00 - 18.00</li>
          <li>Tirsdag 7.30 - 18.00</li>
          <li>Onsdag 7.30 - 14.00</li>
          <li>Torsdag 8.00 - 18.00</li>
          <li>Fredag 7.30 - 15.00</li>
        </ul>
        <p>Med forbehold for ændringer ved kurser, under ferier og lignende.</p>
      </div>
      <div class="col-md-4 mb-3">
        <p class="lead" style="margin-bottom: 0px;">Kiropraktorvagt</p>
        <p>
          I weekender og helligdage kan vagthavende kiropraktor i region syd kontaktes på følgende telefon nr:<br>
          Vagtkreds Fyn: 7020 3642<br>
          Vagtkreds Jylland: 7020 3634<br>
          Der er telefontid mellem kl 9 og 10.<br>
          Mere info på regionens hjemmeside via følgende <a href="https://www.regionsyddanmark.dk/wm362773">link</a>.
        </p>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card">
          <div class="card-header">
            Seneste blogindlæg
          </div>
          <div class="card-body">
            <ul class="list-group">
              @forelse ($posts as $post)
                <a href="{{ url('/blog/' . $post->slug)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                  <h5 class="mb-1">{{ str_limit($post->title, 15) }}</h5>
                  <div class="d-flex w-100 justify-content-between">
                    <p class="mb-1">{{ str_limit($post->subtitle, 10) }}</p>
                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                  </div>
                </a>
              @empty
                <h6>Ingen blogindlæg endnu</h6>
              @endforelse
            </ul>
          </div>
        </div>
      </div>

    </div> --}}
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
  })();
  </script>
@endsection
