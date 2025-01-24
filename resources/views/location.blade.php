
@extends('layouts.front')

@section('banner')
<!--================Home Banner Area =================-->
<style>
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Couche sombre */
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2; /* Place le contenu au-dessus de l'overlay */
        color: #ffffff; /* Texte blanc */
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .hero-content p {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
        color: #25D366;
    }

    .hero-content h4 {
        font-size: 28px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .main_btn {
        padding: 10px 30px;
        background-color: #25D366;
        color: #fff;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        border: none;
        transition: all 0.3s ease-in-out;
        margin: 5px;
    }

    .main_btn:hover {
        background-color: transparent;
        color: #25D366;
        border: 1px solid #25D366;
    }

    .home_banner_area {
        height: 500px;
        background: url({{ asset('assets/images/banner/banner-bg.png') }}) no-repeat center;
        background-size: cover;
        position: relative;
    }
/* Responsive Styles */
@media screen and (max-width: 768px) {
    .hero-content p {
      font-size: 16px;
    }

    .hero-content h4 {
      font-size: 14px;
    }

    .main_btn {
      font-size: 12px;
      padding: 8px 20px;
    }

    .res {
      padding: 5px 15px;
      font-size: 10px;
    }

    .home_banner_area {
      height: 300px;
    }
  }

  @media screen and (max-width: 480px) {
    .hero-content p {
      font-size: 14px;
    }

    .hero-content h4 {
      font-size: 12px;
    }

    .main_btn {
      font-size: 10px;
      padding: 6px 15px;
    }

    .res {
      padding: 4px 10px;
      font-size: 9px;
    }

    .home_banner_area {
      height: 250px;
    }
  }

</style>

<section class="home_banner_area">
    <div class="overlay"></div>
    <div class="col-lg-12 col-md-12 col-12 hero-content">
        <p>Procurez-vous des parcelles sécurisées à des coûts raisonnables chez nous</p>
        <h4>Possibilité de paiement échelonné sur une période de trois mois à deux ans.</h4>
        <div class="d-flex justify-content-center flex-wrap">
            <a class="main_btn" href="/accueil">Retour à l'accueil</a>
            <a class="main_btn" href="https://wa.me/message/UXEX2B6YYAUFK1">Discuter d'un produit</a>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->
@endsection

@section('content')
<main>
    <section class="mt-5">
        <div class="container">
            <!-- Header Section -->

            <!-- Empty State -->
            {{--  <div class="text-center mt-5">
                <h5>Aucune donnée disponible pour le moment</h5>
            </div>  --}}
            <section class="new_product_area py-5">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                      <div class="main_title">
                         <h2><span>Nos chambres</span></h2>
                        {{--}}<p>Quelques nouveaux produits à la mode en ce moment</p>  --}}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="new_product p-3 border">
                        {{--  <h5 class="text-uppercase">Collection de 2024</h5>
                        <h3 class="text-uppercase">T-shirt pour hommes</h3>  --}}
                        <div class="product-img mb-3">
                          <img class="img-fluid w-100" src="{{ asset('assets/uploads/articles_images/chambre1.jpeg') }}" alt="Image de chambre">
                        </div>
                        {{--  <h4>1270 FCFA</h4>
                        <a href="#" class="btn btn-primary mt-3">Ajouter au panier</a>  --}}
                      </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="single-product border p-3">
                            <div class="product-img">
                              <img class="img-fluid w-100" src="{{ asset('assets/uploads/articles_images/chambre2.jpeg') }}" alt="Image de chambre">
                            </div>
                            <div class="product-btm mt-3">
                              <a href="#" class="d-block">
                                {{--  <h4>Produit Nike à la mode</h4>  --}}
                              </a>
                              <div class="mt-3">
                                {{--  <span class="text-primary mr-2">2200 FCFA</span>
                                <del class="text-muted">3500 FCFA</del>  --}}
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="single-product border p-3">
                            <div class="product-img">
                              <img class="img-fluid w-100" src="{{ asset('assets/uploads/articles_images/chambre3.jpeg') }}" alt="Image de chambre">
                            </div>
                            <div class="product-btm mt-3">
                              <a href="#" class="d-block">
                                {{--  <h4>Jean pour hommes</h4>  --}}
                              </a>
                              <div class="mt-3">
                                {{--  <span class="text-primary mr-2">250 FCFA</span>
                                <del class="text-muted">3500 FCFA</del>  --}}
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="single-product border p-3">
                            <div class="product-img">
                              <img class="img-fluid w-100" src="{{ asset('assets/uploads/articles_images/chambre4.jpeg') }}" alt="Image de chambre">
                            </div>
                            <div class="product-btm mt-3">
                              <a href="#" class="d-block">
                                {{--  <h4>Produit de dernière génération</h4>  --}}
                              </a>
                              <div class="mt-3">
                                {{--  <span class="text-primary mr-2">2500 FCFA</span>
                                <del class="text-muted">3500 FCFA</del>  --}}
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-product border p-3">
                            <div class="product-img">
                              <img class="img-fluid w-100" src="{{ asset('assets/uploads/articles_images/chambre5.jpeg') }}" alt="Image de chambre">
                            </div>
                            <div class="product-btm mt-3">
                              <a href="#" class="d-block">
                                {{--  <h4>Jean pour hommes</h4>  --}}
                              </a>
                              <div class="mt-3">
                                {{--  <span class="text-primary mr-2">25.00 FCFA</span>
                                <del class="text-muted">35.00 FCFA</del>  --}}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

        </div>
    </section>
</main>
@endsection


{{--  @extends('layouts.front')



    @section('banner')
        <!--================Home Banner Area =================-->
<style>
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 85%;
        background-color: rgba(0, 0, 0, 0.5); /* Couche sombre avec 50% d'opacité */
        z-index: 1;
        margin-top: 100px;
    }

    .hero-content {
        position: relative;
        z-index: 2; /* Assure que le texte et le bouton sont au-dessus de l'overlay */
        margin-bottom: 300px;
        margin-top: 85px;
        color: #ffffff; /* Texte blanc pour contraste */
        height: 500px;
    }

    .hero-content p {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
        color: #25D366; /* Couleur bleue discrète */
    }
    .hero-content h3 {
    font-size: 50px;
    font-weight: 700;
    line-height: 1.2;
    color: #ffffff; /* Texte blanc */
    margin-bottom: 20px;
  }

  .hero-content h4 {
    font-size: 22px;
    font-weight: 400;
    color: #d1d1d1; /* Gris clair pour un contraste léger */
    margin-bottom: 30px;
  }

  .main_btn {
    padding: 15px 40px;
    background-color: #25D366; /* Couleur bleue douce */
    color: #fff;
    border-radius: 30px;
    font-weight: 500;
    font-size: 16px;
    text-transform: uppercase;
    border: none;
    transition: background-color 0.6s ease-in-out;
  }

  .main_btn:hover {
    background-color: transparent; /* Teinte plus foncée de bleu lors du survol */
    border: 1px solid #25D366;
  }

  .res {
    font-size: 14px;
    padding: 10px 25px;
    background-color: #25D366;
    border-radius: 20px;
  }

  .res:hover {
    background-color: transparent;
    border: 1px solid #25D366;
  }



    .home_banner_area {
        padding-top: 135px; /* Crée un espace suffisant sous le Navbar */
    }

    @media screen and (max-width:768px) {
        .res {
            padding: 2px 3px 0px 0px;
            font-size: 12px;
        }
    }
    /* .div{
        margin-top: 100px;
        margin-bottom: 50px;
    } */
</style>

<section class="home_banner_area mb-0" style="background: url({{ asset('assets/images/banner/banner-bg.png') }}) no-repeat center; background-size: cover; height:500px;">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="overlay"></div>
                <div class="col-lg-12 hero-content text-center">
                    <p class="sub text-uppercase">Découvrez nos chambres et biens immobiliers.</p>
                    <h4>SEVEN SERVICES IMMOBILIERS PLUS, le leader de l'immobilier</h4>
                    <a class="main_btn mt-40 res" href="/accueil">Retour à l'accueil</a>
                    <a href="https://wa.me/message/UXEX2B6YYAUFK1" class="main_btn mt-40 mx-3 res">Discuter d'un produit</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->



    @endsection

    @section ('content')
    <main>
    <section class=" mt-80">
        <div class="container">
             <!-- row -->
            <div class="row align-items-center mb-6">
                <div class="col-lg-10 col-10">
                    <!-- heading -->
                    <h3 class="align-items-center d-flex mb-0 h4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-star text-primary">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        <span class="ms-3">Nos parcelles en promotions</span>
                    </h3>
                </div>
            </div>
<h5 class="text-center
mt-90"> Aucun données disponible pour le moment
</h5>
</section>
</main>
    @endsection  --}}

{{-- @extends('layouts.front')


@section('banner')

    <!--================Home Banner Area =================-->
<style>
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 85%;
        background-color: rgba(0, 0, 0, 0.5); /* Couche sombre avec 50% d'opacité */
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2; /* Assure que le texte et le bouton sont au-dessus de l'overlay */
        margin-bottom: 300px;
        margin-top: 150px;
        color: #ffffff; /* Texte blanc pour contraste */
    }

    .hero-content p {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
        color: #25D366; /* Couleur bleue discrète */
    }

    .hero-content h3 {
        font-size: 50px;
        font-weight: 700;
        line-height: 1.2;
        color: #ffffff; /* Texte blanc */
        margin-bottom: 20px;
    }

    .hero-content h4 {
        font-size: 20px;
        font-weight: 400;
        color: #d1d1d1; /* Gris clair pour un contraste léger */
        margin-bottom: 30px;
    }

    .main_btn {
        padding: 15px 40px;
        background-color: #25D366; /* Couleur bleue douce */
        color: #fff;
        border-radius: 30px;
        font-weight: 500;
        font-size: 16px;
        text-transform: uppercase;
        border: none;
        transition: background-color 0.6s ease-in-out;
    }

    .main_btn:hover {
        background-color: transparent; /* Teinte plus foncée de bleu lors du survol */
        border: 1px solid #25D366;
    }

    .res {
        font-size: 14px;
        padding: 10px 25px;
        background-color: #25D366;
        border-radius: 20px;
    }

    .res:hover {
        background-color: transparent;
        border: 1px solid #25D366;
    }

    .home_banner_area {
        position: relative;
        height: 500px; /* Hauteur du banner */
        overflow: hidden;
        background: url('assets/images/banner/banner-bg.png') no-repeat;
        background-size: contain;
    }

    @media screen and (max-width:768px) {
        .res {
            padding: 2px 3px 0px 0px;
            font-size: 12px;
        }
    }


  </style>

  <section class="home_banner_area ">

    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="overlay"></div>
                <div class="col-lg-12 hero-content text-center">
                    <p class="sub text-uppercase">Découvrez nos chambres et biens immobiliers.</p>
                    <h4>SEVEN SERVICES IMMOBILIERS PLUS, le leader de l'immobilier</h4>
                    <a class="main_btn mt-40 res" href="/parcelle">Voir nos chambres</a>
                    <a href="https://wa.me/message/UXEX2B6YYAUFK1" class="main_btn mt-40 mx-3 res">Discuter d'un produit</a>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->


@endsection

@section('content')

 <center>Aucune données disponibles pour le moment.</center>

@endsection --}}
