@extends('layouts.app')

@section('pageTitle', 'Spørgeskemaer | Rosengårdens Kiropraktik')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 mt-6 mt-lg-3">
        <div class="card">
          <div class="card-header" style="background-color: #fff;">
            <h5 style=" margin-bottom: 0;">
              <b>Spørgeskemaer - klik på det du skal bruge for at downloade det.</b>
            </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <a href="/pdf/skema_voksen.pdf" download>Skema - voksen.</a><br>
                <a href="/pdf/skema_spædbarn.pdf" download>Skema - spædbarn.</a><br>
                <a href="/pdf/skema_1_aar.pdf" download>Skema - 1. år.</a><br>
                <a href="/pdf/skema_2_aar.pdf" download>Skema - 2. år.</a><br>
                <a href="/pdf/skema_3_aar.pdf" download>Skema - 3. år.</a><br>
                <a href="/pdf/skema_4_aar.pdf" download>Skema - 4. år.</a><br>
                <a href="/pdf/skema_5_aar.pdf" download>Skema - 5. år.</a><br>

                <a href="/pdf/skema_voksen_engelsk.pdf" download>Questionnaire - adult.</a><br>
                <a href="/pdf/skema_spædbarn_engelsk.pdf" download>Questionnaire - infant.</a>


              </div>
              <div class="col-md-6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
