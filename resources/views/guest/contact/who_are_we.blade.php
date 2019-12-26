@extends('layouts.app')

@section('pageTitle', 'Hvem er vi | Rosengårdens Kiropraktik')

@section('content')
  <div class="container">

    <!-- Row -->
    <div class="row">
      <div class="col-12 mt-6 mt-lg-3">
        <div class="row">
          <!-- Team Member 1 -->
          @component('components.card')
            @slot('id')
              1
            @endslot
            @slot('img')
              {{ asset('img/staff/mathilde.jpg')}}
            @endslot
            @slot('name')
              Mathilde Christensen
            @endslot
            @slot('profession')
              Kiropraktor og medejer
            @endslot
          @endcomponent
          <!-- Team Member 1 -->

          <!-- Team Member 2 -->
          @component('components.card')
            @slot('id')
              2
            @endslot
            @slot('img')
              {{ asset('img/staff/grethe.jpg')}}
            @endslot
            @slot('name')
              Grethe Thøstesen
            @endslot
            @slot('profession')
              Kiropraktor og medejer
            @endslot
          @endcomponent
          <!-- Team Member 2 -->

          <!-- Team Member 3 -->
          @component('components.card')
            @slot('id')
              3
            @endslot
            @slot('img')
              {{ asset('img/staff/john.jpg')}}
            @endslot
            @slot('name')
              John Sandsberg
            @endslot
            @slot('profession')
              Kiropraktor og medejer
            @endslot
          @endcomponent
          <!-- Team Member 3 -->

          <!-- Team Member 4 -->
          @component('components.card')
            @slot('id')
              4
            @endslot
            @slot('img')
              {{ asset('img/staff/thomas.jpg')}}
            @endslot
            @slot('name')
              Thomas Damsgaard
            @endslot
            @slot('profession')
              Kiropraktor
            @endslot
          @endcomponent
          <!-- Team Member 4 -->



          <!-- Team Member 6 -->
          @component('components.card')
            @slot('id')
              6
            @endslot
            @slot('img')
              {{ asset('img/staff/berit.jpg')}}
            @endslot
            @slot('name')
              Berit Jensen
            @endslot
            @slot('profession')
              Sekretær og massør
            @endslot
          @endcomponent
          <!-- Team Member 6 -->

          <!-- Team Member 7 -->
          @component('components.card')
            @slot('id')
              7
            @endslot
            @slot('img')
              {{ asset('img/staff/lise.jpg')}}
            @endslot
            @slot('name')
              Lise Sindberg
            @endslot
            @slot('profession')
              Sekretær og Bogholder
            @endslot
          @endcomponent
          <!-- Team Member 7 -->

          <!-- Team Member 7 -->
          @component('components.card')
            @slot('id')
              7
            @endslot
            @slot('img')
              {{ asset('img/staff/alice.jpg')}}
            @endslot
            @slot('name')
              Alice Jensen
            @endslot
            @slot('profession')
              Sekretær
            @endslot
          @endcomponent
          <!-- Team Member 7 -->

          <!-- Team Member 8 -->
          @component('components.card')
            @slot('id')
              8
            @endslot
            @slot('img')
              {{ asset('img/staff/ulrikka.jpg')}}
            @endslot
            @slot('name')
              Ulrikka Nissen
            @endslot
            @slot('profession')
              Sekretær
            @endslot
          @endcomponent
          <!-- Team Member 8 -->

          <!-- Team Member 9 -->
          @component('components.card')
            @slot('id')
              9
            @endslot
            @slot('img')
              {{ asset('img/staff/amanda.jpg')}}
            @endslot
            @slot('name')
              Amanda Traidl
            @endslot
            @slot('profession')
              Studentermedhjælper
            @endslot
          @endcomponent
          <!-- Team Member 9 -->

          <!-- Team Member 5 -->
          @component('components.card')
            @slot('id')
              5
            @endslot
            @slot('img')
              {{ asset('img/staff/annkristin.jpg')}}
            @endslot
            @slot('name')
              Ann-Kristin Kristiansen
            @endslot
            @slot('profession')
              Fysioterapeut
            @endslot
          @endcomponent
          <!-- Team Member 5 -->
        </div>

      </div>

    <!-- Row -->
  </div>

  <!-- Modals -->
  @component('components.staff_modal')
    @slot('id')
      1
    @endslot
    @slot('name')
      Mathilde Christensen
    @endslot

    <p>Kiropraktor</p>
    <p>Uddannet ved Syddansk Universitet i Odense 2011.</p>
    <p>Uddannet ART full body level 1 2017.</p>
    <p>Deltager løbende i efteruddannelse.</p>
    Besøg Mathilde Christensen på <a href="https://dk.linkedin.com/in/mathilde-christensen-9217a4175">LinkedIn</a>

  @endcomponent

  @component('components.staff_modal')
    @slot('id')
      2
    @endslot
    @slot('name')
      Grethe Thøstesen
    @endslot

    <p>Kiropraktor og børnekiropraktor.</p>
    <p>Uddannet ved Palmer College of Chiropractic, USA.</p>
    <p>Ekstern lærer ved Syddansk Universitet Odense.</p>
    <p>MSc APP Chiropractic Paediatrics fra Bournemouth Universitetet England 2012.</p>
    <p>Medlem af Sundhedsvæsenets Disciplinærnævn.</p>
    <p>Deltager løbende i efteruddannelse.</p>
  @endcomponent

  @component('components.staff_modal')
    @slot('id')
      3
    @endslot
    @slot('name')
      John Sandsberg
    @endslot

    <p>Uddannet ved Syddansk Universitet Odense 2003.</p>
    <p>Ekstern lektor ved Syddansk Universitet Odense 2005-2016.</p>
    <p>Deltager løbende i efteruddannelse.</p>
    <p>Besøg John Sandsberg på <a href="https://dk.linkedin.com/in/john-sandsberg-3b90013a">LinkedIn</a></p>
  @endcomponent

  @component('components.staff_modal')
    @slot('id')
      4
    @endslot
    @slot('name')
      Thomas Damsgaard
    @endslot

    <p>Uddannet ved Syddansk Universitet Odense 2019.</p>
    <p>Bacheloruddannelse i Idræt og Sundhed fra Syddansk Universitet i 2014.</p>
    <p>Tidligere fysisk træner i Odense Boldklub.</p>
    <p>Deltager løbende i efteruddannelse.</p>

  @endcomponent

  @component('components.staff_modal')
    @slot('id')
      5
    @endslot
    @slot('name')
      Ann-Kristin Kristiansen
    @endslot

    <p>Fysioterapeut</p>
    <p>Uddannet ved Odense Fysioterapi Skole Juni 2008. </p>
    <p>Kursus i IMS akupunktur 2012. </p>
    <p>
      Jeg har 6 års erfaring i behandling og genoptræning af
      idrætsskader, diskusprolaps i nakke/ryg, hovedpine,
      muskelspændinger i nakke/ryg/lænd/hofte/ben,
      iskiasproblemer samt generelle skader/gener i
      bevægeapparatet (nakke, skulder, lænd, hofte, knæ og fod).
    </p>
    <p>Jeg tilbyder:</p>
    <ul>
      <li>Manuel terapi/dybdegående massage</li>
      <li>Akupunktur</li>
      <li>Individuel/personlig træning</li>
    </ul>
  @endcomponent

    @component('components.staff_modal')
      @slot('id')
        6
      @endslot
      @slot('name')
        Berit Abildgaard Jensen
      @endslot

      <p>Lægeeksamineret massør 2017</p>
      <p>I gang med den sundhedsfaglige grunduddannelse, for at blive RAB godkendt massør.</p>
      <p>Har kurser indenfor blandt andet:</p>
      <ul>
        <li>Skadeterapi</li>
        <li>Muskelterapi</li>
        <li>Muskulær Zoneterapi</li>
        <li>Cupping</li>
      </ul>
    @endcomponent

@endsection
