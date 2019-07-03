@extends('layouts.app')

@section('pageTitle', 'Hvem er vi | Rosengårdens Kiropraktik')

@section('content')
  <div class="container mt-5">
    <div class="row">
      <!-- Team Member 1 -->
      @component('components.card')
        @slot('img')
          https://source.unsplash.com/TMgQMXoglsM/500x350
        @endslot
        @slot('name')
          Mathilde Christensen
        @endslot
        @slot('profession')
          Kiropraktor
        @endslot
      @endcomponent
      <!-- Team Member 2 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Line Linesen</h5>
            <div class="card-text text-black-50">Kiropraktor</div>
          </div>
        </div>
      </div>
      <!-- Team Member 3 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Hans Hansen</h5>
            <div class="card-text text-black-50">Kiropraktor</div>
          </div>
        </div>
      </div>
      <!-- Team Member 4 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Helle Hellesen</h5>
            <div class="card-text text-black-50">Kiropraktor</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>

  <!-- Modal -->
  @component('components/modal')

  @endcomponent

@endsection
