<div id="{{ $id }}" class="col-xl-3 col-md-4 mb-4" data-toggle="modal" data-target="#staff-modal{{ $id }}" style="cursor: pointer;">
  <div class="card border-0 shadow">
    <img src="{{ $img }}" class="card-img-top img-fluid" alt="">
    <div class="card-body text-center">
      <h5 class="card-title mb-0">{{ $name }}</h5>
      <hr style="background-color: #C75B3A; height: 1px; margin: 0.25rem;">
      <div class="card-text text-black-50 mb-2">{{ $profession }}</div>
      <button type="button" class="btn btn-sm btn-rosengaarden">Læs mere</button>
    </div>
  </div>
</div>
