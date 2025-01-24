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

<section class="home_banner_area " >

                <div class="overlay"></div>
                <div class="col-lg-12 col-md-12 col-12 hero-content text-center mt-2">
                    <p class="sub text-uppercase">Contactez-nous.</p>
                    <h4>Contactez-nous pour vos divers besoins.</h4>
                    <div class="d-flex justify-content-center flex-wrap">
                        <a class="main_btn" href="/accueil">Retour à l'accueil</a>
                        <a class="main_btn" href="https://wa.me/message/UXEX2B6YYAUFK1">Discuter d'un produit</a>
                    </div>
                </div>


</section>
<!--================ End Home Banner Area =================-->

{{--  @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
   </div>
@endif  --}}

@endsection


@section('content')
 <!-- ================ contact section start ================= -->

 <section class="section_gap my-5">
    <div class="container">
        @if(session('success'))
            {{--  <div class="alert alert-success">{{ session('success') }}</div>  --}}
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="contact-title">Entrez en contact avec nous</h2>
            </div>

            <div class="col-lg-8 mb-4">
                <form class="form-contact contact_form" action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Nom complet*</label>
                        <input class="form-control mb-3" name="name" id="name" type="text" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <label>Email*</label>
                        <input class="form-control mb-3" name="email" id="email" type="email" placeholder="">
                    </div>
                        <div class="col-12">
                            <label>Message*</label>
                            <textarea class="form-control w-100 mb-3" name="message" id="message" rows="5" placeholder=""></textarea>
                        </div>
                       
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="main_btn">Envoyer un message</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="media contact-info mb-3">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        Lieu:
                        <h5><a href="#">Bénin, Cotonou, Carrefour Agontikon</a></h5>
                      
                    </div>
                </div>
                <div class="media contact-info mb-3">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        Téléphone
                        <h3><a href="tel:+2290197825820">+229 01 96 62 40 68</a></h3>
                        <p>Lun - Ven : 09h à 18h</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        Email:
                        <h3><a href="mailto:contact01.digitalis@gmail.com">contact@sevenservicesplus.com</a></h3>
                        <p>Envoyez-nous votre demande à tout moment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 {{--  <section class="section_gap my-12">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Entrer en contact avec nous</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="{{ route('contact.send') }}" method="post" id="contactForm">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Entrer un message"></textarea>
                </div>
              </div>
              <div class="col-sm-6 my-3">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Entrer votre nom">
                </div>
              </div>
              <div class="col-sm-6 my-3">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Entrer votre adresse email">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn">Envoyer un message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Bénin, ATLANTIQUE.</h3>
              <p>Calavi, ITTA</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">+229 01 97 82 58 20</a></h3>
              <p>Lun au Ven 09h à 18h</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">contact01.digitalis@gmail.com</a></h3>
              <p>Envoyez-nous votre demande à tout moment..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  --}}
	<!-- ================ contact section end ================= -->

@endsection
