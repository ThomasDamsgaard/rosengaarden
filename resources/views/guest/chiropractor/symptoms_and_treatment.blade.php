@extends('layouts.app')

@section('pageTitle', 'Symptomer og Behandling | Rosengårdens Kiropraktik')

@section('css')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-md-2 mt-6 mb-5">
        <div class="card">
          <div class="card-header" style="background-color: #fff;">
            <h5 style=" margin-bottom: 0;">
              <b>Symptomer og behandling</b>
            </h5>
          </div>
          <div class="card-body">
            <p>
              Kiropraktorer er specielt uddannet i kroppens bevægeapparat,
              og bedst uddannede når det handler om at få led, knogler og
              muskler til at fungere som de skal.
            </p>

            <p>
              Alle fortjener den bedste mulighed for at få en velfungerende
              krop - derfor er ingen alder, for ung eller for gammel,
              handicappet eller gravid en hindring for at blive undersøgt
              eller modtage behandling.
            </p>
            <p class="mb-4">
              Vi tager imod alle, som ønsker en undersøgelse
              med henblik på forebyggelse eller bedre funktion
              af kroppen eller som har smerter/problemer,
              som stammer fra led, knogler, sener og muskler.<br>
              For eksempel:
            </p>
            <div class="row">
              <div class="col-md-6">
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Hovedpine</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Nakkesmerter</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Arm og Skuldersmerter</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Musearm</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Brystsmerter</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Tennis og Golfalbue</p></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Lændesmerter</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Iskias</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Diskusprolaps</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Rygskævhed</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Knæproblemer</p></li>
                  <li><span class="fa-li"><i class="fas fa-check icon"></i></span><p class="pt-1">Ankel og Fodproblemer</p></li>
                </ul>
              </div>
            </div>
            <p>
              Se <a href="http://www.kiropraktorguide.dk">kiropraktorguide.dk</a> for at læse mere om symptomer, årsager og gode råd.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
