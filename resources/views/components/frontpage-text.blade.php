<div class="row h-100 align-items-center">
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
