@extends('layouts.app')

@section('pageTitle', 'Information | Rosengårdens Kiropraktik')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-md-2 mt-3 mb-5">
      <div class="card">
        <div class="card-header" style="background-color: #fff;">
          <h5 style=" margin-bottom: 0;">
            <b>Information</b>
            <span style="font-size: 0.9rem;"> - Klik for at se mere</span>
          </h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2">
                  <div class="icon">
                    <i class="far fa-clock"></i>
                  </div>
                </div>
                <div class="col-10">
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
                <div class="col-2">
                  <div class="icon">
                    <i class="fas fa-file-medical"></i>
                  </div>
                </div>
                <div class="col-10">
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
                <div class="col-2">
                  <div class="icon">
                    <i class="fas fa-link"></i>
                  </div>
                </div>
                <div class="col-10">
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
                <div class="col-2">
                  <div class="icon">
                    <i class="fas fa-coins"></i>
                  </div>
                </div>
                <div class="col-10">
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
@endsection
