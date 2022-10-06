@extends('padrao')
@section('content')
<section>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/carro1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/G63.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/carro4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section class="cards">
<div class="card" style="width: 18rem;">
  <img src="/img/MercedesBenzLogo(1).png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sobre Mercedes</h5>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <a href="#" class="btn btn-primary">Botão Logo</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="/img/amgLogo(1).avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Sobre AMG</h5>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <a href="#" class="btn btn-primary">Botão AMG</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="/img/petronasLogo.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Petronas</h5>
    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <a href="#" class="btn btn-primary">Botão Petronas</a>
  </div>
</div>
</section>
@endsection()