@extends('layouts.app')

@section('pageTitle', 'Kontakt Info | Rosengårdens Kiropraktik')

@section('content')
<div class="container">
  {{-- <div class="row"> --}}
    <div class="col-12">
      <p class="lead">Kontakt - Her finder du os</p>
      <p>
        Rosengården Kiropraktik<br>
        Tagtækkervej 8, 7. sal.<br>
        5230 Odense M
      </p>
      <p>
        <a target="_blank" href="https://www.google.com/maps/place/Tagtækkervej+8,+5230+Odense/@55.3846517,10.4205812,17z/data=!3m1!4b1!4m5!3m4!1s0x464d203e93c2c827:0x3fb88a9f4ab46ada!8m2!3d55.3846487!4d10.4227699">
          Klik her for at se placering på kort
        </a>
      </p>
      <p>
        Bemærk at der er handicapvenlig adgang, samt at der både er mulighed for at benytte elevator og trapper for at nå klinikken.
        <br>
        Der er mulighed for at benytte handicapvenligt toilet og vi har puslerum til vore små patienter.
        <br>
        Der er mulighed for gratis parkering på forsiden af bygningen. Husk at stille P-skiven og parker indenfor stregerne!
        <br>
        Hvis du benytter bybussen, så har Odense Bytrafik flere linjer, der standser i området. Klik her for at komme til www.bybussen.dk
        <br>
        Du kan kontakte klinikken på telefon 66 15 97 87 eller info@rosengaardenkiropraktik.dk
      </p>
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
  {{-- </div> --}}
</div>
@endsection
