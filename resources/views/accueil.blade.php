@extends('layouts.front')

@section('banner')
    @include('partial.banner')
@endsection

@section('content')

<main>
    <section class="">
        <div class="container">
            <!-- row -->
            <div class="row align-items-center mb-6 mt-3">
                <div class="col-lg-10 col-10">
                    <!-- heading -->
                    <h3 class="align-items-center d-flex mb-0 h4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-star text-primary">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        <span class="ms-3">NOS PARCELLES VEDETTES</span>
                    </h3>
                </div>
            </div>
            <!-- slider -->
            <div class="product-slider-second" id="slider-second">
                <!-- item -->
                @foreach($article as $value)
                    <div class="item product_data">
                        <!-- item -->
                        <div class="card card-product mb-lg-4" style="height: 450px">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- img -->
                                    <a href="#!"><img src="{{ $value->image ? asset('assets/uploads/articles_images/'.$value->image) : asset('assets/uploads/articles_images/defaut.jpg') }}"
                                                    alt="Image" class="mb-2 img-fluid" style="height: 250px;"/></a>
                                </div>
                                <!-- title -->
                                <div class="">
                                    <h4 style="text-align: center;">{{ $value->name }} </h4>
                                    <p> Superficie: {{ $value->area }} m² <br> Site: {{ $value->site->name }}</p>
                                </div>

                                <!-- price -->
                                <input type="hidden" value="{{ $value->id }}" class="prod_id">
                                <input type="hidden" value="1" class="qty-input">

                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span style="color: green;">{{ $value->promo_price }} FCFA</span>
                                        <br>
                                        <span style="color : red; text-decoration:line-through">{{ $value->normal_price}} FCFA</span><br>

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
            </div>
        </div>
    </section>

    <!-- section pour afficher les articles -->
    <section class="mb-lg-4 my-2">
        <div class="container">
            <div class="row align-items-center mb-6">
                <div class="col-lg-10 col-9">
                    <div class="d-xl-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <div class="mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-bag text-primary">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h3 class="mb-0">PARCELLES EN VENTE</h3>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($articlee as $value)
                    <div class="col-md-3 mb-4">
                        <!-- Product card -->
                        <div class="card card-product " style="height: 450px">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <a href="#!"><img src="{{ $value->image ? asset('assets/uploads/articles_images/'.$value->image) : asset('assets/uploads/articles_images/defaut.jpg') }}"
                                                    alt="Product Image" class="mb-3 img-fluid" style="height: 250px"/></a>
                                </div>
                                <h4 class="text-center">{{ $value->name }} </h4>
                                <p> Superficie: {{ $value->area }} m² <br> Site: {{ $value->site->name }}</p>
                                 {{--  <span style="font-size: 15px; color:rgb(0, 0, 0)">Site de {{ $value->site->name  ?? "non" }}</span>  --}}

                                <!-- price -->
                                <input type="hidden" value="{{ $value->id }}" class="prod_id">
                                <input type="hidden" value="1" class="qty-input">
                                {{-- <input type="hidden" value="{{ $value->prixVenteArticle }}" class="prix"> --}}
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span style="color: green;">{{ $value->promo_price }} FCFA</span>
                                        <br>
                                        <span style="color : red; text-decoration:line-through">{{ $value ->normal_price}} FCFA</span><br>
                                    </div>
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
                    {{--  <div class="col-md-3">
                        <a href="{{ route('getSol') }}" class="btn text-center my-3 px-6 mx-5 text-light" style="background-color:green">Voir plus</a>
                    </div>  --}}


            </div>

        </div>
        <div class=" d-flex justify-content-center">
            <a href="{{ route('getSol') }}" class="btn text-center my-3 px-6 text-light" style="background-color: green;">Voir plus</a>
        </div>
    </section>
    <section style="color: #000; background-color: #FFFFFF;">
        <div class="container py-2">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="fw-bold mb-4">Témoignages</h3>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Quelques témoignages de nos clients
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">

                            <div class="d-flex justify-content-center mb-4">
                                <img src="{{ asset('assets/uploads/articles_image/avatar-1.webp') }}"
                                     class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Eric </h5>
                            <!--<h6 class="font-weight-bold my-3">Founder at ET Company</h6>-->
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                </li>
                            </ul>

                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i> Franchement, je suis très satisfait. En quelques jours seulement, j'ai pu trouver une parcelle parfaite pour ma famille. Merci pour votre réactivité et votre professionnalisme !
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">

                            <div class="d-flex justify-content-center mb-4">
                                <img src="{{ asset('assets/uploads/articles_image/avatar-4.webp') }}"
                                     class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Gaston</h5>
                            <!--<h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>-->
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i> Je ne savais pas que ce serait aussi simple ! J'ai réservé ma parcelle en ligne et tout s'est déroulé sans stress. Je recommande à 100%.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">

                            <div class="d-flex justify-content-center mb-4">
                                <img src="{{ asset('assets/uploads/articles_image/avatar-3.webp') }}"
                                     class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Esther</h5>
                            <!--<h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>-->
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="far fa-star fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i> Grâce à cette plateforme, j'ai enfin pu investir dans une parcelle à un prix très compétitif. Merci pour vos conseils et votre transparence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
