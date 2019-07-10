@extends('layouts.app')

@section('pageTitle', 'Links | Rosengårdens Kiropraktik')

@section('css')
  <style media="screen">
  .card {
    box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.18);
  }
  </style>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1 mt-3 mb-5">

      {{-- <div class="card mb-1" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="..." class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Links
            </div>
            <div class="card-body">
              <div class="list-group">
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
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
