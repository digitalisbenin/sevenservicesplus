
<style>
    /* Overlay */
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 85%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }
  
    /* Hero Content */
    .hero-content {
      position: relative;
      z-index: 2;
      margin-top: 150px;
      margin-bottom: 300px;
      color: #ffffff;
    }
  
    .hero-content p {
      font-size: 22px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 15px;
      color: #25D366;
    }
  
    .hero-content h3 {
      font-size: 50px;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 20px;
      color: #ffffff;
    }
  
    .hero-content h4 {
      font-size: 20px;
      font-weight: 400;
      color: #d1d1d1;
      margin-bottom: 30px;
    }
  
    /* Buttons */
    .main_btn {
      padding: 15px 40px;
      background-color: #25D366;
      color: #fff;
      border-radius: 30px;
      font-weight: 500;
      font-size: 16px;
      text-transform: uppercase;
      border: none;
      transition: background-color 0.6s ease-in-out;
    }
  
    .main_btn:hover {
      background-color: transparent;
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
  
    /* Banner Background */
    .home_banner_area {
      position: relative;
      height: 500px;
      overflow: hidden;
      background: url('assets/images/banner/banner1.jpg') no-repeat;
      background-size: cover;
      background-position: center;
    }
  
    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      .hero-content {
        margin-top: 80px;
        margin-bottom: 50px;
      }
  
      .hero-content h3 {
        font-size: 28px;
      }
  
      .hero-content h4 {
        font-size: 16px;
        line-height: 1.5;
      }
  
      .main_btn {
        font-size: 14px;
        padding: 10px 25px;
      }
  
      .res {
        padding: 5px 15px;
        font-size: 12px;
      }
  
      .home_banner_area {
        height: 350px;
      }
    }
  
    @media screen and (max-width: 480px) {
      .hero-content h3 {
        font-size: 22px;
      }
  
      .hero-content h4 {
        font-size: 14px;
      }
  
      .main_btn {
        font-size: 12px;
        padding: 8px 20px;
      }
  
      .res {
        padding: 5px 10px;
        font-size: 10px;
      }
  
      .home_banner_area {
        height: 300px;
      }
    }
  </style>
  


  <!--================Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="overlay"></div>
          <div class="col-lg-8 col-md-10 col-12 hero-content text-center">
            <h3><span>Votre </span>Parcelle, Votre <span>Avenir</span></h3>
            <h4>
              Trouvez la parcelle idéale pour concrétiser vos projets immobiliers.
              <br> Offres exclusives et accompagnement personnalisé.
            </h4>
            <div class="d-flex justify-content-center flex-wrap">
              <a class="main_btn mt-40 res" href="/parcelle">Voir nos parcelles</a>
              <a href="https://wa.me/message/UXEX2B6YYAUFK1" class="main_btn mt-40 mx-3 res">Discuter d'un produit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->
  













{{--  <!--================Home Banner Area =================-->
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
      background: url('assets/images/banner/banner1.jpg') no-repeat;
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
                  <h3><span>Votre </span>Parcelle, Votre <span>Avenir</span></h3>
                  <h4>Trouvez la parcelle idéale pour concrétiser vos projets immobiliers.  <br> Offres exclusives et accompagnement personnalisé..</h4>
                  <a class="main_btn mt-40 res" href="/parcelle">Voir nos parcelles</a>
                  <a href="https://wa.me/message/UXEX2B6YYAUFK1" class="main_btn mt-40 mx-3 res">Discuter d'un produit</a>
              </div>
          </div>
      </div>
  </div>
</section>
<!--================ End Home Banner Area =================-->  --}}
