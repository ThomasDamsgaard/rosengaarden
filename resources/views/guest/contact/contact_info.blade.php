@extends('layouts.app')

@section('pageTitle', 'Kontakt Info | Rosengårdens Kiropraktik')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 mt-6">
      <div class="card">
        <div class="card-header" style="background-color: #fff;">
          <h5 style=" margin-bottom: 0;">
            <b>Kontakt - Her finder du os</b>
          </h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 align-self-center text-center mb-3">
              <h6 class="mb-3">
                Rosengården Kiropraktik<br>
                Tagtækkervej 8, 7. sal.<br>
                5230 Odense M
              </h6>
              <a data-toggle="modal" data-target="#contact_modal" style="cursor: pointer;">
                Se telefontider og mail
              </a>
            </div>
            <div class="col-md-6 mb-3">
              <a target="_blank" href="https://www.google.com/maps/place/Tagtækkervej+8,+5230+Odense/@55.3846517,10.4205812,17z/data=!3m1!4b1!4m5!3m4!1s0x464d203e93c2c827:0x3fb88a9f4ab46ada!8m2!3d55.3846487!4d10.4227699">
                <img class="img-fluid" src="{{ url('/img/location.png')}}" alt="Kort">
                <p class="top-right">Google Maps</p>
              </a>
            </div>
          </div>
          <hr class="d-none d-lg-block">
          <div class="row">
            <div class="col-lg-6">
              <h6><b>Børne- og handicapvenligt</b></h6>
              <p>
                Bemærk at der er handicapvenlig adgang, samt at der både er mulighed for at benytte elevator og trapper for at nå klinikken.
                <br>
                Der er mulighed for at benytte handicapvenligt toilet og vi har puslerum til vore små patienter.
              </p>
            </div>
            <div class="col-lg-6">
              <h6><b>Parkering og offentlig transport</b></h6>
              <p>
                Der er gratis parkering på forsiden af bygningen. Husk at stille P-skiven og parker indenfor stregerne!<br>
                Hvis du benytter bybussen, så har <a href="https://www.fynbus.dk">Fynbus</a> flere linjer, der standser i området.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Telefontider og mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <p>
              Du kan kontakte klinikken på telefon 66 15 97 87 eller info@rosengaardenkiropraktik.dk
            </p>
            <p>
              Med forbehold for ændringer ved kurser, under ferier og lignende.
            </p>
          </div>
          <div class="col-md-6">
            <p>Telefontider:</br>
              Mandag 8.00 - 18.00</br>
              Tirsdag 7.30 - 18.00</br>
              Onsdag 7.30 - 14.00</br>
              Torsdag 8.00 - 18.00</br>
              Fredag 7.30 - 15.00
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Luk</button>
      </div>
    </div>
  </div>
</div>

@endsection
