@extends('layouts.app')

@section('pageTitle', 'Børnekiropraktik | Rosengårdens Kiropraktik')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 mt-6 mt-lg-3">
      <div class="card">
        <div class="card-header" style="background-color: #fff;">
          <h5 style=" margin-bottom: 0;">
            <b>Børnekiropraktik</b>
            <span style="font-size: 0.9rem;"> - Klik på ikoner for at læse mere</span>
          </h5>
        </div>
        <div class="card-body">
          <p>
            Børn kan såvel som voksne få små låsninger af leddene (biomekaniske dysfunktioner) i bevægeapparatet. Som helt små kan årsagen være en vanskelig fødsel, fødsel ved kejsersnit eller langvarig skæv stilling i den sidste del af svangerskabet.
          </p>

          <p>
            Senere kan det være fastlåsninger forårsaget af slag eller fald i forbindelse med leg eller sport. Børn har andre proportioner end voksne og er i forskellige faser i knogle udviklingen, derfor er behandling af børn en anderledes og meget blidere behandling end for voksne.
          </p>

          <p>
            Først bliver barnet grundigt undersøgt. Hvis der findes en fastlåsning foreslås en kiropraktisk behandling. Vi har tæt samarbejde med børnefysioterapeuter, børneergoterapeuter og sundhedsplejersker og indgår ofte i et team omkring barnet.
          </p>

          <div class="row mb-3">
            <div class="col-md-6 mb-3">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#colic" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-child"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#colic" style="cursor: pointer;">
                  <h6><b>Kolik</b></h6>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#nurse" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-child"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#nurse" style="cursor: pointer;">
                  <h6><b>Sutte/Ammeproblemer</b></h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6 mb-3">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#tongue" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-child"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#tongue" style="cursor: pointer;">
                  <h6><b>Tungebånd</b></h6>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#back" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-child"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#back" style="cursor: pointer;">
                  <h6><b>Rygundersøgelse</b></h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6 mb-3">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#kiss" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-child"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#kiss" style="cursor: pointer;">
                  <h6><b>KISS syndrom</b></h6>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#kidd" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-child"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#kidd" style="cursor: pointer;">
                  <h6><b>KIDD Syndrom</b></h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-2" data-toggle="modal" data-target="#skaev" style="cursor: pointer;">
                  <div class="icon">
                    <i class="fas fa-child"></i>
                  </div>
                </div>
                <div class="col-10" data-toggle="modal" data-target="#skaev" style="cursor: pointer;">
                  <h6><b>Skævt Baghoved</b></h6>
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
    colic
  @endslot
  @slot('title')
    Kolik
  @endslot
  <p>
    Kolik anvendes når et barn græder utrøsteligt i flere timer i døgnet. Oftest hen på eftermiddagen og om aftenen. Barnet virker anspændt og trækker ofte benene op mod maven og knytter hænderne, eller retter sig stift ud.
  </p>
  <p>
    Barnet kan også være motorisk uroligt, og have svært ved at falde til ro. Have dårlig og afbrudt søvn. Problemer med at finde ro til at amme.
  </p>
  <p>
    Undersøgelser har vist, at nedsat bevægelighed i rygsøjlens led kan være årsag til symptomerne.
  </p>
  <p>
    Nedsat bevægelse i rygsøjlens led kan gøre at barnet foretrækker at dreje hovedet til samme side, og at de ikke bryder sig om at få tøj af og på, specielt over hovedet.
  </p>
  <p>
    Finder kiropraktoren en nedsat bevægelighed i rygsøjlen har kiropraktisk behandling vist sig at være effektivt overfor symptomerne.
  </p>
  <p>
    Spædbarnskolik og uro kan have andre årsager, derfor bliver dit barn grundigt undersøgt før der tages stilling til en eventuel behandling.
  </p>
  <p>
    Behandling af spædbørn er designet specielt til dem, og udføres med lette tryk.
  </p>
  <hr>
  <p>
    Kolikprojektet er endelig afsluttet og offentliggjort. 
  </p>
  <p>
    Vi var en af fire klinikker som deltog i projektet, vi vil derfor gerne sende en stor tak til de forældre og spædbørn som deltog.
  </p>
  <p>
    Kiropraktor Grethe Thøstesen
  </p>
  <p>
    Her kan du læse pressemeddelelsen:
  </p>
  <h1>Ny forskning: Spædbørn græder mindre efter kiropraktisk behandling</h1>
  <p>12.5.2021 11:57:32 CEST | <a href="https://via.ritzau.dk/nyhedsrum/dansk-kiropraktor-forening?publisherId=13559992">Dansk Kiropraktor Forening</a></p>
  <h5>Stort forskningsprojekt på Syddansk Universitet viser, at spædbørn der lider af kolik får reduceret deres gråd, når de modtager kiropraktisk behandling. Børn der græder meget, får den største effekt.</h5>
  <p>
    Spædbørnskolik er et stort problem for de familier der oplever det. Det nyfødte barn græder i timevis dagligt og kan ikke finde hvile. Hidtil har lægens råd til forældrene været at trøste barnet bedst muligt, og vente til det går over. Men mange forældre hverken kan eller vil ikke bare vente. Derfor har en forskningsgruppe på Syddansk Universitet (SDU) sat sig for at undersøge effekten af kiropraktisk behandling af ’kolik-børn’.
  </p>
  <p>
    - Studiet har vist at spædbørn der lider af kolik i gennemsnit får reduceret deres gråd med ca en halv time mere om dagen, når de modtager kiropraktisk behandling, end hvis de ikke gør. Det er ikke statistisk signifikant, men kigger man mere detaljeret på resultaterne, står det klart, at det især er de børn, der græder meget, der har mest gavn af behandlingen. Børn der græder 9 timer om dagen, får omtrent halveret deres grådtimer, mens de børn der græder mindst oplever en lavere effekt, siger Lise Hestbæk, Professor på SDU.
  </p>
  <h5>Ingen bivirkninger</h5>
<p>
  Det er uklart, hvad der afstedkommer kolik - både mave-tarmproblemer og muskel-ledsmerter er mistænkt. Det er bestemt heller ikke umuligt, at det vi kalder kolik kan udløses af forskellige faktorer og således være flere forskellige lidelser. Blandt andet derfor findes der heller ikke én løsning.
</p>
<p>
  - Det er positivt, at vi ser, at der er en god effekt af behandlingen for de børn, der har det værst. Behandlingen har endvidere vist sig at være bivirkningsfri for alle de involverede børn, hvilke bør kunne berolige mange. Men resultatet viser også, at der stadig er meget vi ikke ved om kolik og hvilken behandling, der virker på hvilke børn, siger Lise Hestbæk.
</p>
<h5>Om studiet</h5>
<p>
  Næsten 200 spædbørn i alderen 2-14 uger har deltaget i studiet. De græder eller ’beklager sig’ i mindst 3 timer om dagen, 3 dage om ugen og har gjort det i mindst 2 uger – men er derudover vurderet sunde og raske. Altså børn som af uforklarlige årsager ikke har det godt – det vi kalder kolik.
</p>
<p>
  Forskningsprojektet er afviklet således at forældrene har modtaget information og rådgivning. Herefter har forældrene forladt kiropraktorens konsultation og halvdelen af børnene er blevet behandlet, mens den anden halvdel ikke er blevet behandlet. Efterfølgende har forældrene rapporteret på barnets reaktion – uden at vide om deres barn er blevet behandlet eller ej.
</p>
<p>
  Der er ikke indberettet bivirkninger for de behandlede børn.
</p>
<p>Her kan du læse artiklerne:</p>
<a href="/pdf/Identifying_potential_treatment_effect.pdf" download>Kolik - Effekt modifikation</a><br>
<a href="/pdf/The_effect_of_chiropractic_care_on_infantile_colic.pdf" download>Holm et. al. - 2021</a>

@endcomponent

@component('components.modal')
  @slot('id')
    nurse
  @endslot
  @slot('title')
    Sutte/Ammeproblemer
  @endslot
  <p>
    Ammeproblemer kan have mange årsager.
  </p>
  <p>
    Kiropraktorens rolle er, at undersøge om barnet har fysiske problemer, som kan være medvirkende til en dårlig suttefunktion.
  </p>
  <p>
    De fysiske problemer kan komme fra nakken, kæben, tungen, og synkerefleksen.
  </p>
  <p>
    Har barnet et biomekanisk problem i et af de ovenfor nævnte områder, er der en mulighed for, at problemet med amningen kan afhjælpes med kiropraktisk behandling.
  </p>
@endcomponent

@component('components.modal')
  @slot('id')
    tongue
  @endslot
  @slot('title')
    Tungebånd
  @endslot
  <p>
    Stramt tungebånd kan være en af årsagerne til at amningen ikke fungerer, problemerne opstår hvis barnet ikke får rigtig fat om brystet, eller ikke kan danne et effektivt vacum. Der bliver talt meget om forreste og bagerste tungebånd. I virkeligheden er der kun et tungebånd og der refereres til hhv. den forreste og bagerste del af tungebåndet. "Misforståelsen" er opstået i oversættelsen fra Engelsk.
  </p>
  <p>
    Tungebåndets forreste og bagerste del har forskellige funktioner, og stramhed vil derfor påvirke tungens funktion forskelligt. Hvis den forreste del er stram vil barnet ikke kunne få tungen forbi underlæben. Hvis den bagerste del er stram vil barnet ikke kunne løfte tungen op mod ganen.
  </p>
  <p>
    I Danmark tales der overordnet kun om den forreste del af tungebåndet og stramt tungebånd undersøges ved at se om barnet kan få tungen forbi underlæben. Det er kun forreste del der klippes i Danmark. De danske øre, næse, hals læger vurderer at der ikke er tilstrækkelig forskning/evidens bag effekten af et klip af den bagerste del at tungebåndet. I f.eks. Holland, England og Tyskland undersøges både den bagerste og forreste del og det er således muligt at få klippet begge.
  </p>
  <p>
    Det er ikke muligt at løsne et tungebånd ved hjælp af stræk eller udspændingsøvelser. Tilgengæld ser vi i klinikken en stor sammenhæng mellem kæbespændinger og tungefunktion. Vi har rigtig god effekt med afhjælpning af amme- og spise-problematikker ved at løsne kæbespændinger på både spædbørn, større børn og voksne.
  </p>
@endcomponent

@component('components.modal')
  @slot('id')
    back
  @endslot
  @slot('title')
    Rygundersøgelse
  @endslot
  <p>
    Børn kan såvel som voksne få ondt i bevægeapparatet. Dette skyldes ofte slag og fald, men kan desværre også skyldes manglende fysisk aktivitet og ensidig stilling i skolen eller foran en computer/tablet.
  </p>
  <p>
    Når musklerne bliver brugt uhensigtsmæssig giver det funktionelle forandringer af led og muskler, som kan give sig udslag i uens benlængde, ulige skulderhøjde, rygskævhed eller uharmoniske bevægemønstre.
  </p>
  <p>
    Her på klinikken bliver barnet undersøgt for funktionelle problemer i muskler og led, ikke blot i ryggen, men også andre relevante led, som kan være knæ og ankler. Bliver der fundet funktionelle funktionsfortyrrelser foreslås en behandling, ofte i forbindelse med øvelser og anden rådgivning.
  </p>
  <p>
    Behandlingen er tilpasset børn, og er derfor anderledes end for voksne.
  </p>
@endcomponent

@component('components.modal')
  @slot('id')
    kiss
  @endslot
  @slot('title')
    KISS Syndrom
  @endslot
  <p>
    KISS syndrom betyder på engelsk: Kinematic Imbalance due to Suboccipital Strain, oversat til dansk betyder det Kranie-nakkeleds induceret Symmetri forstyrrelse.
  </p>
  <p>
    Betegnelsen kommer oprindelig fra Tyskland, hvor ortopæden Gutmann observerede spædbørn med asymmetri af kroppen, og fandt en sammenhæng med funktionsforstyrrelse af nakken. En manuel læge ved navn Biedermann behandlede disse børn med god effekt og indførte betegnelsen KISS syndrom i Tyskland ca.1990.
  </p>
  <p>
    Betegnelsen er kendt af en del børeneergo- og fysioterapeuter, samt sundhedsplejersker, men er ikke en anerkendt diagnose i Danmark.
  </p>
  <h4>KISS I</h4>
  <p>
    Er en asymmetri hvor barnet favoriserer, at se til den ene side og samtidig laver det en stor C kurve med kroppen, både når det sidder og ligger. Ofte har det, foruden det skæve baghoved og C kurven af kroppen, problemer med at ligge på maven, problemer med at falde til ro og problemer med at finde ro til at amme.
  </p>
  <h4>KISS II</h4>
  <p>
    Her favoriserer barnet ofte at bøje nakken bagover, det kan ofte sagtens ligge på maven, men kan ikke ligge i arm, og vil have svært ved at kigge på mor når det ammer, det vrider sig bagover, og har som KISS I ofte uro, og kan være både overspændt og underspændt i kroppen.
  </p>
  <p>
    Hos os bliver barnet grundigt undersøgt, og hvis vi finder en funktionsforstyrrelse af nakken, kan vi hjælpe. Barnet bliver behandlet med teknikker, som er specielt designet til babyer, med lette tryk.
  </p>
@endcomponent

@component('components.modal')
  @slot('id')
    kidd
  @endslot
  @slot('title')
    KIDD og KISS Syndrom
  @endslot
  <h4>KIDD</h4>
  <p>
    KIDD syndrom på engelsk kaldet KISS induceret Dysgnosia and Dyspraxia, som omsat til dansk  betyder Kranie-nakkeleds induceret DYSPRAKSI (vanskelighed ved at udføre kombinerede muskelbevægelser/ problemer med at automatisere bevægelser/ klodsethed) og DYSGNOSI (nedsat evne til at bearbejde sanseindtryk).
  </p>
  <p>
    Et ubehandlet KISS syndrom kan hen ad vejen være en del af KIDD syndromet. Børn udvikler sig med forskellig hastighed, og er rigtig gode til at kompensere, derfor opdages de første tegn på KIDD syndrom først ved 4 års alderen.
  </p>
  <p>
    Tegn på KIDD syndrom kan blandt andet være:
    <ul>
      <li>- Uro i kroppen</li>
      <li>- Problemer med balancen, gå på line, stå på et ben</li>
      <li>- Asymmetrisk løb</li>
      <li>- Koordinations problemer</li>
    </ul>
  </p>
  <p>
    KIDD syndrom er som KISS syndrom en betegnelse som fortrinsvis bruges i Tyskland og Norge.
  </p>
  
@endcomponent

@component('components.modal')
  @slot('id')
    skaev
  @endslot
  @slot('title')
    Skævt Baghoved
  @endslot
  <p>
    Skæve baghoveder er blevet et tiltagende problem siden 1992, hvor man indførte nye retningslinjer som betød, at spædbørn kun måtte sove på ryggen, for at undgå vuggedød. Man har på den måde nedsat antallet af tilfælde med 40 %. Til gengæld har vi fået flere tilfælde med skæve/flade baghoveder. Hvis barnet har en favorit side, er kraniet så blødt, at det hurtigt bliver fladt på den side det drejer hovedet til.
  </p>
  <p>
    Der kan være flere grunde til at et barn favoriserer en side, lige fra at det bliver ensidigt stimuleret, f. eks af lyset. Det kan være en medfødt kort halsmuskel eller andre medfødte problematikker. Men ofte er årsagen en mekanisk nedsat bevægelse i nakken, som kan løsnes af en kiropraktor.
  </p>
  <p>
    Når barnet kommer på klinikken bliver det grundigt undersøgt for at finde årsagen til den nedsatte bevægelse. Viser det sig at der er nedsat bevægelse i nakken, har vi mulighed for at afhjælpe problemet. Ofte er det i samarbejde med en børneergo- eller fysioterapeut.
  </p>
  <p>
    Selve behandlingen er designet til spædbørn, og udføres med små tryk.
  </p>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UzNI-eH8U48" allowfullscreen></iframe>
  </div>
  <h5 class="mt-3">Artikler</h5>
  <ul>
    <li>
      <a href="#">Artikel af Grethe Thøstesen: Lejringsbetinget plagiocephalia - et moderne dilemma. Kiropraktoren Oktober 2013</a>
    </li>
    <li>
      Dudek- Shriber, L. and Zelazny, s., 2007. "The effect of prone positioning on the quality and acquisition of developmental milestone in four-month-old-infants." Pediatric Physical therapy, 19 (1), pp 48-55
    </li>
    <li>
      Knudsen, B., Christensen, K., Baagøe, S., Ho ppe, P., Juhl, C., Buus, L., Jacobsen, T.L. 2011: "Lejringsbetinget skæve hoveder hos spædbørn kan forebygges." Ugeskrift for Læger vol. 173 no.9 pp 644-648.
    </li>
    <li>
      Kennedy, E., Majnemer, A., Farmer, J.P., Barr, R.G.,, Platt, R.W. 2009. "Motor development of infants with positional plagiocephaly." Physical & Occupational Therapy in Pediatrics. vol. 29 (3) pp 222- 35
    </li>
    <li>
      Öhman, A., Nilsson, S., Lagerkvist, A., Beckung, E. 2009. "Are infants with torticollis at risk of a delay in early motor milestones compared with control group of healthy infants?" Developmental medicine and child neurology: vol. 51, Is 7, pp 545-550.
    </li>
    <li>
      van Vlimmeren, L. A. , van der Graaf, Y. , Boere-Boonekamp, M. M. , . L’Hoir, M. P., Helders, P. J. M., Engelbert, R. H. H. . 2007. "Risk Factors for Deformational Plagiocephaly at Birth and at 7 Weeks of Age: A Prospective Cohort Study." Pediatrics Vol. 119 No 2 pp 408-418.
    </li>
  </ul>

@endcomponent
@endsection
