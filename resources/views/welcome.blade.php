@extends('layouts.app')

@section('pageTitle', 'Forside | Rosengårdens Kiropraktik')

@section('css')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  @if (Route::is('frontpage'))
    <style>
    .button_container span {
      /* background: #fff; */
      }

      .carousel-item {
        height: 78vh;
      }
    </style>
  @endif
@endsection

@section('content')
  <header>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('{{ asset('img/bg-1.jpg') }}')">

        {{-- @include('components.frontpage-text') --}}

        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/bg-2.jpg') }}')">

          {{-- @include('components.frontpage-text') --}}

        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/bg-3.jpg') }}')">

          {{-- @include('components.frontpage-text') --}}

        </div>

        <div class="carousel-item" style="background-image: url('{{ asset('img/bg-4.jpg') }}')">

          {{-- @include('components.frontpage-text') --}}

        </div>

        <div class="carousel-item" style="background-image: url('{{ asset('img/bg-5.jpg') }}')">

          {{-- @include('components.frontpage-text') --}}

        </div>
      </div>
    </div>
  </header>

{{-- <header class="masthead" style="background-image: url('https://rosengaardenkiropraktik.dk/img/bg-1.jpg');">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center" style="z-index: 300;">
        <div class="col-sm-8 offset-sm-2 mb-3 mb-lg-0">

          <h4 style="color: #fff;" class="font-weight-light" style="margin: 0px;">Rosengården</h4>
          <hr style="background-color: #C75B3A; height: 1px; margin: 0.25rem;">
          <h1 style="color: #fff;">Kiropraktik</h1>
          <p style="color: #fff;">Du finder os nemt på Tagtækkervej 8, lige ved Rosengårdcenterets blå indgang.</p>

        </div> --}}

        {{-- <p class="lead mb-5">Velkommen hos kiropraktorerne ved Rosengårdcentret</p>
        {{-- <a href="#content" class=" frontpage-btn btn btn-light" role="button"><i style="color: black;" class="fas fa-arrow-circle-down fa-lg"></i></a> --}}

        {{-- <div class="col-12">
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
  <div id="bg-image" class="background cover active fade" style="background-image: url({{ asset('img/bg-1.jpg') }} no-repeat center center)";></div>
  <div class="background-overlay"></div>
</header> --}}

<div class="container mt-3">
  <div class="row align-items-center">
    <div class="col-12 text-center" style="z-index: 300;">
      <div class="col-sm-8 offset-sm-2 mb-3 mb-lg-0">

        <h4 style="color: #000;" class="font-weight-light" style="margin: 0px;">Rosengården</h4>
        <hr style="background-color: #C75B3A; height: 1px; margin: 0.25rem;">
        <h1 style="color: #000;">Kiropraktik</h1>
        <p style="color: #000;">Du finder os nemt på Tagtækkervej 8, lige ved Rosengårdcenterets blå indgang.</p>

      </div>

      {{-- <p class="lead mb-5">Velkommen hos kiropraktorerne ved Rosengårdcentret</p>
      {{-- <a href="#content" class=" frontpage-btn btn btn-light" role="button"><i style="color: black;" class="fas fa-arrow-circle-down fa-lg"></i></a> --}}

      <div class="col-12">
          <div class="row d-md-none">
            <div class="col-md-6 mb-3 mb-md-0">
              @switch(Carbon\Carbon::now()->dayOfWeek)
                @case(0)
                  <p style="color: #000;">Telefontid imorgen fra kl 8.00</p>
                  @break;
                @case(1)
                  <p style="color: #000;">Telefontid kl 8.00 - 18.00</p>
                  @break;
                @case(2)
                  <p style="color: #000;">Telefontid kl 7.30 - 18.00</p>
                  @break;
                @case(3)
                  <p style="color: #000;">Telefontid kl 7.30 - 17.30</p>
                  @break;
                @case(4)
                  <p style="color: #000;">Telefontid kl 8.00 - 18.00</p>
                  @break;
                @case(5)
                  <p style="color: #000;">Telefontid kl 7.30 - 15.00</p>
                  @break;
                @case(6)
                  <p style="color: #000;">Telefontid mandag fra kl 8.00</p>
                  @break;
              @endswitch
              <br>
              <i class="fas fa-phone" style="color: #000;"></i> <p style="color: #000;">66 15 97 87</p>
            </div>
            <div class="col-md-6">
              <i class="fas fa-map-marked-alt" style="color: #000;"></i> <p style="color: #000;">Tagtækkervej 8, 7.sal</p>
              <p style="color: #000;">5230 Odense M</p>
            </div>
          </div>
      </div>


    </div>
  </div>
</div>

{{-- <div class="container" id="content">
  <div class="row mb-md-5 mb-3">

    <div class="col-md-8 offset-md-2 mb-10 mb-lg-3">
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
</div> --}}

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Vigtig Patient Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <li>
          <u>Vigtigt!</u> Sundhedsstyrelsens nye krav om at bære munbind i offentligt tilgængeligt rum træder i kraft fra den 29/10-20. <u>Vi beder derfor om at bære mundbind på klinikken</u>, behandlerne vil naturligvis gøre det samme.
        </li>
        <li>
          Vi er på arbejde, men vi tager smittefaren alvorligt og passer på hinanden og vores patienter.
        </li>
        <li>
          Alle kiropraktorklinikker følger retningslinjerne fra Sundhedsstyrelsen.
        </li>
        <li>
          På klinikken er der høj hygiejne-standard, vi holder afstand så vidt muligt, og byder jer velkommen med et smil frem for håndtryk.
        </li>
        <li>
          Vi forsøger at holde antallet af personer i klinikken nede, Derfor beder vi jer om;
          <ul>
            <li>- Ikke at komme i for god tid, evt. vente i bilen eller forhallen.</li>
            <li>- At der kun er 1 forældre til vores børnepatienter.</li>
            <li>- At en evt. chauffør ikke sidder i venteværelset, men i stedet går en tur, eller venter i bilen.</li>
          </ul>
        </li>
        <li>
          Der er håndsprit ved elevatoren i receptionen og på vores toiletter.
        </li>
        <li>
          Vi har fjernet blade, bøger og desværre også alt vores legetøj.
        </li>
        <li>
          De små ting til børnene er også gemt væk.
        </li>
        <li>
          Husk hvis du er syg, eller har symptomer på COVID-19 skal du ikke komme, men du er altid velkommen til at ringe, så vi kan hjælpe så godt som muligt
        </li>
        <li>
          Du kan følge med i den aktuelle situation på dette <a href="https://politi.dk/corona">link</a>
        </li>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
      </div> --}}
    </div>
  </div>
</div>
@endsection

@section('javascript')

  <script type="text/javascript">
    $('.carousel').carousel({
      interval: 5000
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#staticBackdrop').modal('show');
    });
  </script>

@endsection
