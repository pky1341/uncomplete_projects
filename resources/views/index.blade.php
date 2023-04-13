@extends("base")
@section("title")
----Home---||---Page
@endsection
@section("body_content")
<!--start carouse-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://assets.ajio.com/cms/AJIO/WEB/22032023-UHP-D-Main-P6-Lifestyle-Upto60.jpg" class="d-block w-100 h-25" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://assets.ajio.com/cms/AJIO/WEB/22032023-UHP-D-Main-P2-LoveMoschinoEsprit-Upto80.jpg" class="d-block w-100 h-25" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://assets.ajio.com/cms/AJIO/WEB/22032023-UHP-D-Main-P3-ShirtsTshirts-DNMXTS-Under299.jpg" class="d-block w-100 h-25" alt="...">
    </div>
      <div class="carousel-item">
      <img src="https://assets.ajio.com/cms/AJIO/WEB/22032023-UHP-D-Main-P4-AlcisChkokko-Flat50extra25.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item">
      <img src="https://assets.ajio.com/cms/AJIO/WEB/22032023-UHP-D-Main-P5-PumaRedtape-Min60.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection 