@extends('layouts.front')



    @section('banner')
        {{--  <!--================Home Banner Area =================-->
<style>
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 400px;
        background-color: rgba(0, 0, 0, 0.5); /* Couche sombre avec 50% d'opacité */
        z-index: 1;
        margin-top: 100px;

    }

    .hero-content {
        position: relative;
        z-index: 2; /* Assure que le texte et le bouton sont au-dessus de l'overlay */
        margin-bottom: 300px;
        margin-top: 5px;
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
    .div{
        margin-top: 100px;
        margin-bottom: 50px;
    }
</style>

<section class="home_banner_area mb-40" style="background: url({{ asset('assets/images/banner/banner1.jpg') }}) no-repeat; background-size: contain; height:385px;">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="overlay"></div>
                <div class="col-lg-12 hero-content text-center">
                    <p class="sub text-uppercase">Découvrez notre sélection de produits exclusifs pour tous vos besoins.</p>
                    <h4>Que ce soit pour vous faire plaisir ou pour vous offir, nos produit sauront vous séduire.</h4>
                    <a class="main_btn mt-40 res" href="/accueil">Retour à l'accueil</a>
                    <a href="https://wa.me/message/UXEX2B6YYAUFK1" class="main_btn mt-40 mx-3 res">Discuter d'un produit</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->  --}}

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
        background: url({{ asset('assets/images/banner/banner1.jpg') }}) no-repeat center;
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

    /* Overlay */
    {{--  .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    /* Hero Content */
    .hero-content {
      position: relative;
      z-index: 2;
      color: #ffffff;
      margin-bottom: 30px;
      margin-top: 20px;
    }

    .hero-content p {
      font-size: 20px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 15px;
      color: #25D366;
    }

    .hero-content h4 {
      font-size: 18px;
      font-weight: 400;
      color: #d1d1d1;
      margin-bottom: 30px;
      line-height: 1.5;
    }

    /* Buttons */
    .main_btn {
      padding: 12px 30px;
      background-color: #25D366;
      color: #fff;
      border-radius: 30px;
      font-weight: 500;
      font-size: 14px;
      text-transform: uppercase;
      border: none;
      transition: background-color 0.6s ease-in-out;
    }

    .main_btn:hover {
      background-color: transparent;
      border: 1px solid #25D366;
    }

    .res {
      font-size: 12px;
      padding: 8px 20px;
      background-color: #25D366;
      border-radius: 20px;
    }

    .res:hover {
      background-color: transparent;
      border: 1px solid #25D366;
    }

    /* Banner Background */
    .home_banner_area {
      position: relative;
      padding-top: 135px;
      overflow: hidden;
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
    }  --}}
  </style>


<!--================Home Banner Area =================-->
<section class="home_banner_area mb-40">

        <div class="overlay"></div>
        <div class="col-lg-12 col-md-12 col-12 hero-content text-center">
          <p class="sub text-uppercase">Procurez-vous des parcelles sécurisées à des coûts raisonnables chez nous.</p>
          <h4>Possibilité de paiement échelonné sur une période de trois mois à deux ans.</h4>
          <div class="d-flex justify-content-center flex-wrap">
            <a class="main_btn mt-40 res" href="/accueil">Retour à l'accueil</a>
            <a href="https://wa.me/message/UXEX2B6YYAUFK1" class="main_btn mt-40 mx-3 res">Discuter d'un produit</a>
          </div>
        </div>

</section>
<!--================ End Home Banner Area =================-->

    @endsection


@section('content')
    <main>

        <!-- section -->
        <section class="my-lg-7 my-4">
            <div class="container">
                <!-- row -->
                <div class="row align-items-center mb-6">
                    <div class="col-lg-10 col-10">
                        <!-- heading -->
                        <h3 class="align-items-center d-flex mb-0 h4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-star text-primary"
                            >
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <span class="ms-3">Nos Parcelles</span>
                        </h3>
                    </div>

                </div>

                <div class=" w-100 mt-40 div">
                    <div class="left_dorp">
                        {{--  <div class="container w-100 form-group">
                            <form action="{{ route('getSol') }}" class="mb-40" method="GET" id="categoryForm">
                                <div class="row col-12 mb-40">
                                    <div class="col-4">
                                        <select name="categorie_id" class="form-select" id="categorySelect">
                                             <option value="">Tout les sites</option>
                                            @foreach ($categories as $category)
                                              <option value="{{ $category->id }}" {{ request('categorie_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" name="min_price" placeholder="Prix minimum" id="min_price" value="{{ request('min_price') ?? '' }}" class="form-control zin">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="keyword" placeholder="Mots clés" id="keyword" value="{{ request('keyword') ?? '' }}" class="form-control zin">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-success">Filtrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>  --}}

                        <div class="container w-100 form-group mb-3">
                            <form action="{{ route('getSol') }}" class="mb-40" method="GET" id="categoryForm">
                                <div class="row g-3">
                                    <!-- Categorie -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <select name="categorie_id" class="form-select" id="categorySelect">
                                            <option value="">Tous les sites</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ request('categorie_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Prix minimum -->
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <input type="number" name="min_price" placeholder="Prix minimum" id="min_price" value="{{ request('min_price') ?? '' }}" class="form-control zin">
                                    </div>

                                    <!-- Mots clés -->
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <input type="text" name="keyword" placeholder="Mots clés" id="keyword" value="{{ request('keyword') ?? '' }}" class="form-control zin">
                                    </div>

                                    <!-- Bouton Filtrer -->
                                    <div class="col-lg-2 col-md-6 col-12 text-center">
                                        <button type="submit" class="btn btn-success w-100">Filtrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                  </div>
                <!-- slider -->
                <div class="container mt-28">
                    <div class="row d-flex flex-wrap">
                        @if ($products->isEmpty())
                            <div class="alert alert-success alert-dismissible fade m-2 show" role="alert">
                                Aucun produit ne correspond à vos critères de recherche.
                                <button class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @else
                        <!-- item -->
                        @foreach($products as $value)
                            <div class="col-md-3 mb-4">
                                <!-- item -->
                                <div class="card card-product" style="height: 450px">
                                    <div class="card-body">
                                        <!-- badge -->
                                        <div class="text-center position-relative">
                                            <!-- img -->
                                            <a href="#!"><img src="{{ $value->image ? asset('assets/uploads/articles_images/'.$value->image) : asset('assets/uploads/articles_images/defaut.jpg') }}" style="height: 250px" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                            <!-- action btn -->
                                            <!-- action btn -->
                                        </div>
                                        <!-- title -->
                                        <div class="">
                                            <h4 style="text-align: center;">{{ $value->name }} </h4>
                                            <p> Superficie: {{ $value->area }} m² <br> Site: {{ $value->site->name }}</p>
                                        </div>

                                        <!-- price -->
                                        <input type="hidden" value="{{ $value->id }}" class="prod_id">
                                        <input type="hidden" value="1" class="qty-input">
                                            <input type="hidden" value="{{ $value->prixVenteArticle }}" class="prix">
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span style="color : green">{{ $value->promo_price}} FCFA</span><br>
                                                <span style="color: red; text-decoration:line-through">{{ $value ->normal_price  }} FCFA</span>
                                            </div>
                                            <!-- btn -->
                                            <div>
                                                <a href="https://wa.me/message/UXEX2B6YYAUFK1" class="btn btn-primary btn-sm">
                                                Discutons
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="mt-3">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>

        </section>
        <!-- section -->

            <div class="container">
                <div class="row align-items-center">
                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 border-end-lg p-md-4 px-xl-12 text-center">
                            <div>
                                <!-- text -->
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-clock text-primary" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Nombres Total de Sites</h3>
                                @if($categories->count()>0)

                                <h3 class="fs-5 mb-3">{{$categories->count()}}</h3>
                                @else
                                <h3 class="fs-5 mb-3">0</h3>
                                @endif
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 border-end-lg p-md-4 px-xl-12 text-center">
                            <div>
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-gift text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"
                                        />
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Nombres Total de Parcelles</h3>
                                @if( $products->count()>0)

                                <h3 class="fs-5 mb-3">{{$products->count()}}</h3>
                                @else
                                <h3 class="fs-5 mb-3">0</h3>
                                @endif
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 p-md-4 px-xl-12 text-center">
                            <div>
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-box-seam text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"
                                        />
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Nombres total de Commandes</h3>

                                <h3 class="fs-5 mb-3">5</h3>

                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
