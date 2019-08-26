@extends('layouts.app')

@section('pageTitle', 'Information | Rosengårdens Kiropraktik')

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
            <b>Information</b>
            <span style="font-size: 0.9rem;"> - Klik på ikoner for at se mere</span>
          </h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#missing" style="cursor: pointer;">
                  <div class="icon">
                    <i class="far fa-clock"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#missing" style="cursor: pointer;">
                  <h6><b>Udeblivelse</b></h6>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-2"></div>
                <div class="col-10">
                  <p>
                    Se gebyrsats for udeblivelser.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#journal" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-file-medical"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#journal" style="cursor: pointer;">
                  <h6><b>Journalindsigt</b></h6>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-2"></div>
                <div class="col-10">
                  <p>Du kan få indsigt i din journal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#links" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-link"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#links" style="cursor: pointer;">
                  <h6><b>Links</b></h6>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-2"></div>
                <div class="col-10">
                  <p>Nyttige links om kiropraktik</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#prices" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-coins"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#prices" style="cursor: pointer;">
                  <h6><b>Priser</b></h6>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-2"></div>
                <div class="col-10">
                  <p>Overenskomstbaserede priser</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@component('components.modal')
  @slot('id')
    missing
  @endslot
  @slot('title')
    Udeblivelse
  @endslot
  <p>
    Ved at melde afbud i god tid undgår vi at afvise patienter med et akut behov. Det giver os desuden mulighed for at flytte patienter frem og derved holde ventetiderne nede.
  </p>
  <p>
    Der bliver derfor opkrævet et gebyr for ubegrundet udeblivelse. Priserne følger gældende Landsoverenskomst mellem Dansk Kiropraktor Forening og Regionernes Lønnings- og takstnævn.
  </p>
  For aktuelle priser klik <a href="https://www.danskkiropraktorforening.dk/behandling/priser-og-tilskud" target="_blank">her</a>.<br>
  OBS! Inde på denne side hos DKF skal du klikke på linket der hedder:<br>
  Nøjagtige priser for almen kiropraktik pr. "dato"<br>
  Priser for udeblivelse står i bunden.
@endcomponent

@component('components.modal')
  @slot('id')
    journal
  @endslot
  @slot('title')
    Journalindsigt
  @endslot
  <p>
    Det er altid muligt at få indsigt i egen journal.
  </p>
  <p>
    Hvis journaludskrift ønskes skal du blot rette henvendelse til sekretæren eller din kiropraktor/fysioterapeut
  </p>
@endcomponent

@component('components.modal')
  @slot('id')
    links
  @endslot
  @slot('title')
    Links
  @endslot
      <a href="http://danskkiropraktorforening.dk" target="_blank" class="list-group-item list-group-item-action">Dansk Kiropraktorforening</a>
      <a href="https://www.sdu.dk/da/Uddannelse/Bachelor/Klinisk_biomekanik" target="_blank" class="list-group-item list-group-item-action">Kiropraktor Uddannelsen, SDU Odense</a>
      <a href="http://nikkb.dk" target="_blank" class="list-group-item list-group-item-action">Nordisk Institut For Kiropraktik Og Klinisk Biomekanik</a>
      <a href="https://www.gigtforeningen.dk/et-sundt-liv/motion-og-traening/oevelser/" target="_blank" class="list-group-item list-group-item-action">Gigtforeningen - Øvelser</a>
      <a href="http://www.kiropraktorguide.dk" target="_blank" class="list-group-item list-group-item-action">Kiropraktor Guide</a>
      <a href="https://pebl.dk" target="_blank" class="list-group-item list-group-item-action">Patienterstatningen</a>
      <a href="https://stps.dk" target="_blank" class="list-group-item list-group-item-action">Styrelsen For Patientsikkerhed</a>
      <a href="https://stps.dk/da/rapporter-en-utilsigtet-haendelse" target="_blank" class="list-group-item list-group-item-action">Rapporter en utilsigtet hændelse</a>
      <a href="https://www.sdu.dk/da/kolik" target="_blank" class="list-group-item list-group-item-action">Kolikstudie SDU</a>
      <a href="https://www.linkedin.com/in/john-sandsberg-3b90013a/" target="_blank" class="list-group-item list-group-item-action">John Sandsberg - LinkedIn</a>
      <a href="https://www.linkedin.com/in/mathilde-christensen-9217a4175/" target="_blank" class="list-group-item list-group-item-action">Mathilde Christensen - LinkedIn</a>
@endcomponent

@component('components.modal')
  @slot('id')
    prices
  @endslot
  @slot('title')
    Priser og pakkeforløb
  @endslot
  <h5>Priser</h5>
  <p>
    Vores priser er baseret på en overenskomst imellem Dansk Kiropraktor Forening og Regionernes Lønnings- og Takstnævn.
  </p>
  <p>
    Klik her for at se Dansk Kiropraktor Forenings <a href="https://www.danskkiropraktorforening.dk/behandling/priser-og-tilskud/">priser</a>.<br>
    OBS! Inde på denne side hos DKF skal du klikke på linket der hedder:
    Nøjagtige priser for almen kiropraktik pr. "dato"
  </p>
  <h5>Pakkeforløb til diskusprolaps og spinalstenose</h5>
  <p>
    I 2017 blev der i samarbejde mellem Danske regioner og Dansk Kiropraktor Forening indført pakkeforløb med forhøjet tilskud. Disse pakkeforløb følger en fast struktur, som er en del af pakken. Det offentlige betaler 60% af første konsultation og 40% af de øvrige. Til sammenligning udgør tilskuddet til de almene kiropraktor konsultationer 18-20%.<br>
    Det kræver ikke lægehenvisning at blive tildelt et pakkeforløb.
  </p>
  <p>
    Se gældende priser på Dansk Kiropraktor Forenings hjemmeside, følg <a href="https://www.danskkiropraktorforening.dk/behandling/priser-og-tilskud/">linket</a><br>
    OBS: Inde på denne side hos DKF skal du klikke på linket der hedder:<br>
    Nøjagtige priser for pakkeforløb pr. "dato"
  </p>
@endcomponent

@endsection
