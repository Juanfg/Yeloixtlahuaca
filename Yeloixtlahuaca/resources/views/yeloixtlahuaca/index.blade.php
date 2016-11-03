@extends('layouts.header')

@section('img')
<!-- Begin text carousel intro section -->
<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url({{Storage::url($img)}});">
</section>
<!-- End text carousel intro section -->

@endsection

@section('about')
<!-- Begin about section -->
<!-- Begin page header-->
<section id="about-section" class="page bg-style1">
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>Acerca de</h2>
                <div class="devider"></div>
                <p class="subtitle">Nuestra Organización</p>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <!-- Begin rotate box-1 -->
    <div class="rotate-box-1-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                        <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                        <div class="rotate-box-info">
                            <h4>¿Quiénes somos?</h4>
                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                        <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                        <div class="rotate-box-info">
                            <h4>¿Qué hacemos?</h4>
                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                        <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                        <div class="rotate-box-info">
                            <h4>¿Por qué lo hacemos?</h4>
                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                        <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                        <div class="rotate-box-info">
                            <h4>¿Desde cuando?</h4>
                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                        </div>
                    </a>
                </div>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    <!-- End rotate box-1 -->

    <div class="extra-space-l"></div>

</section>
@endsection
<!-- End about section -->

@section('mvo')
<!-- Begin Services -->
<section id="mission-section" class="page text-center">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Misión, Visión y Objetivo</h2>
                <div class="devider"></div>
                <!--<p class="subtitle">what we really know how</p>-->
            </div>
        </div>
    </div>
    <!-- End page header-->

    <!-- Begin roatet box-2 -->
    <div class="rotate-box-2-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-8">
                    <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                        <span class="rotate-box-icon"><i class="fa fa-file"></i></span>
                        <div class="rotate-box-info">
                            <h4>Misión</h4>
                            <p>Propiciar un ambiente de seguridad para las familias afiliadas al Centro de Asitencia Yeloixtlahuaca A.C. que favorezca la creación de alternativas de desarrollo.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-8">
                    <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                        <span class="rotate-box-icon"><i class="fa fa-eye"></i></span>
                        <div class="rotate-box-info">
                            <h4>Visión</h4>
                            <p>Ser una Organización líder, que favorezca la inclusión social de las familias afiliadas.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-8">
                    <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                        <span class="rotate-box-icon"><i class="fa fa-circle-o"></i></span>
                        <div class="rotate-box-info">
                            <h4>Objetivo</h4>
                            <p>Disminuir los riesgos asociados a la migración, violencia y desconocimiento del derecho a la salud en las familias afiliadas de San Pedro Yeloixtlahuaca y San Felipe Otlaltepec, Puebla.</p>
                        </div>
                    </a>
                </div>

            </div> <!-- /.row -->
        </div> <!-- /.container -->                   
    </div>
    <!-- End rotate-box-2 -->
</section>
<!-- End Services --> 
@endsection

@section('other')
<!-- Begin Portfolio -->
<section id="portfolio-section" class="page bg-style1">
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="portfolio">
             Begin page header
             <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2>Nuestro Trabajo</h2>
                        <div class="devider"></div>
                        <p class="subtitle">Resultados</p>
                    </div>
                </div>
            </div>
            <!--End page header-->
            <div class="portfoloi_content_area" >
                <div class="portfolio_menu" id="filters">
                    <ul>
                        <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">all</a></li>
                        <li><a href="#porfolio_menu" data-filter=".websites">Salud</a></li>
                        <li><a href="#porfolio_menu" data-filter=".webDesign" >Educación</a></li>
                        <li><a href="#porfolio_menu" data-filter=".appsDevelopment">Protección</a></li>
                        <li><a href="#porfolio_menu" data-filter=".GraphicDesign">Medio Ambiente</a></li>
                        <li><a href="#porfolio_menu" data-filter=".responsive">Relación Padrino</a></li>
                    </ul>
                </div>
                <div class="portfolio_content">
                    <div class="row"  id="portfolio">
                        <div class="col-xs-12 col-sm-4 appsDevelopment">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p1.jpg" alt="title"/>
                                <div>
                                    <a href="#">Skull Awesome</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 GraphicDesign">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p2.jpg" alt="title"/>
                                <div>
                                    <a href="#">Photo Frame</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 responsive">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p3.jpg" alt="title"/>
                                <div>
                                    <a href="#">Hand Shots</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 webDesign websites">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p4.jpg" alt="title"/>
                                <div>
                                    <a href="#">Night Abstract</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 appsDevelopment websites">
                            <div class="portfolio_single_content">
                                <img src="img//portfolio/p5.jpg" alt="title"/>
                                <div>
                                    <a href="#">Joy of Independence</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 GraphicDesign">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p6.jpg" alt="title"/>
                                <div>
                                    <a href="#">Night Crawlers</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 responsive">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p7.jpg" alt="title"/>
                                <div>
                                    <a href="#">Last Motel</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 GraphicDesign">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p8.jpg" alt="title"/>
                                <div>
                                    <a href="#">Dirk Road</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 websites">
                            <div class="portfolio_single_content">
                                <img src="img/portfolio/p9.jpg" alt="title"/>
                                <div>
                                    <a href="#">Old is Gold</a>
                                    <span>Subtitle</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</section>
<!-- End portfolio -->

<!-- Begin team-->
<section id="team-section" class="page">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Our Team</h2>
                <div class="devider"></div>
                <p class="subtitle">Meat our experts</p>
            </div>
        </div>
    </div>
    <!-- End page header-->
    <div class="container">
        <div class="row">
            <div class="team-items">
                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="img/team/1.jpg" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-male"></i>
                                        <p>John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="img/team/1.jpg" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-female"></i>
                                        <p>Jane Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="img/team/1.jpg" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-male"></i>
                                        <p>John Doe</p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="img/team/1.jpg" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-male"></i>
                                        <p>John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="img/team/1.jpg" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-male"></i>
                                        <p>John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="img/team/1.jpg" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-male"></i>
                                        <p>John Doe</p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="img/team/1.jpg" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-female"></i>
                                        <p>Jane Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>  
        </div>
    </div>

</section>
<!-- End team-->




<!-- Begin partners -->
<section id="partners-section">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Our Partners</h2>
                <div class="devider"></div>
                <p class="subtitle">Those who trust us</p>
            </div>
        </div>
    </div>
    <!-- End page header-->
    <div class="container">
        <div id="owl-partners" class="owl-carousel">
            <img src="img/partners/1.png" alt="img">
            <img src="img/partners/2.png" alt="img">
            <img src="img/partners/3.png" alt="img">
            <img src="img/partners/4.png" alt="img">
            <img src="img/partners/5.png" alt="img">
            <img src="img/partners/6.png" alt="img">
            <img src="img/partners/7.png" alt="img">
        </div>
    </div>
</section>
<!-- End partners -->




<!-- Begin prices section -->
<section id="prices-section" class="page">

    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Prices</h2>
                <div class="devider"></div>
                <p class="subtitle">That how much</p>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <div class="extra-space-l"></div>

    <!-- Begin prices -->
    <div class="prices">
     <div class="container">
      <div class="row">

       <div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.3s">
        <div class="panel panel-default">
         <div class="panel-heading text-center">
          <i class="fa fa-plug fa-2x"></i>
          <h3>Basic</h3>
      </div>
      <div class="panel-body text-center">
          <p class="lead"><strong>$49</strong></p>
      </div>
      <ul class="list-group text-center">
          <li class="list-group-item">Personal Use</li>
          <li class="list-group-item">3 projects</li>
          <li class="list-group-item">1 GB Disk</li>
          <li class="list-group-item">Custom Domain</li>
          <li class="list-group-item">24/7 Support</li>
      </ul>
      <div class="panel-footer text-center">
          <a class="btn btn-default" href="#">Order Now!</a>
      </div>
  </div>										
</div>

<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.5s">
    <div class="panel panel-default">
     <div class="panel-heading text-center">
      <i class="fa fa-cog fa-2x"></i>
      <h3>Advanced</h3>
  </div>
  <div class="panel-body text-center">
      <p class="lead"><strong>$99</strong></p>
  </div>
  <ul class="list-group text-center">
      <li class="list-group-item">Personal Use</li>
      <li class="list-group-item">5 projects</li>
      <li class="list-group-item">5 GB Disk</li>
      <li class="list-group-item">Custom Domain</li>
      <li class="list-group-item">24/7 Support</li>
  </ul>
  <div class="panel-footer text-center">
      <a class="btn btn-default" href="#">Order Now!</a>
  </div>
</div>										
</div>

<div class="price-box col-sm-6 price-box-featured col-md-3 wow flipInY" data-wow-delay="0.7s">
    <div class="panel panel-default">
     <div class="panel-heading text-center">
      <i class="fa fa-star fa-2x"></i>
      <h3>Professional</h3>
  </div>
  <div class="panel-body text-center">
      <p class="lead"><strong>$149</strong></p>
  </div>
  <ul class="list-group text-center">
      <li class="list-group-item">Personal Use</li>
      <li class="list-group-item">20 Projects</li>
      <li class="list-group-item">20 GB Disk</li>
      <li class="list-group-item">Custom Domain</li>
      <li class="list-group-item">24/7 Support</li>
  </ul>
  <div class="panel-footer text-center">
      <a class="btn btn-default" href="#">Order Now!</a>
  </div>
  <div class="price-box-ribbon"><strong>Popular</strong></div>
</div>										
</div>

<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.9s">
    <div class="panel panel-default">
     <div class="panel-heading text-center">
      <i class="fa fa-plus fa-2x"></i>
      <h3>Ultimate</h3>
  </div>
  <div class="panel-body text-center">
      <p class="lead"><strong>$199</strong></p>
  </div>
  <ul class="list-group text-center">
      <li class="list-group-item">Multi Use</li>
      <li class="list-group-item">Unlimited Projects</li>
      <li class="list-group-item">99 GB Disk</li>
      <li class="list-group-item">Custom Domain</li>
      <li class="list-group-item">24/7 Support</li>
  </ul>
  <div class="panel-footer text-center">
      <a class="btn btn-default" href="#">Order Now!</a>
  </div>
</div>										
</div>

</div> <!-- /.row -->
</div> <!-- /.container -->
</div>
<!-- End prices -->
<div class="extra-space-l"></div>
</section>
<!-- End prices section -->




<!-- Begin social section -->
<section id="social-section">

 <!-- Begin page header-->
 <div class="page-header-wrapper">
    <div class="container">
        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
            <h2>Unete a nosotros</h2>
            <div class="devider"></div>
            <p class="subtitle">Siguenos en nuestras redes sociales</p>
        </div>
    </div>
</div>
<!-- End page header-->

<div class="container">
 <ul class="social-list">
  <li> <a href="https://www.facebook.com/CAY0546" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
  <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>
  <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon"><i class="fa fa-google-plus"></i></span></a></li>                  
</ul>
</div>

</section>
<!-- End social section -->

<!-- Begin contact section -->
<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
    <div class="cover"></div>

    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Contactanos</h2>
                <div class="devider"></div>
                <p class="subtitle">Como contactarnos</p>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <div class="contact wow bounceInRight" data-wow-delay="0.4s">
        <div class="container">
         <div class="row">

            <div class="col-sm-6">
                <div class="contact-info">
                    <h4>Visitanos</h4>
                    <ul class="contact-address">
                       <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Calle Cuauhtemoc S/N Secc. 1a. ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; San Pedro Yeloixtlahuaca Puebla.<br><!--<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New York, USA, 33148</li>-->
                       <li><i class="fa fa-phone"></i>&nbsp; 01-275-43-8-41-32</li>
                   </ul>
               </div>
           </div>

           <div class="col-sm-6">
            <div class="contact-form">
             <h4>Escribenos</h4>
             <form role="form">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Tu Nombre" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Asunto" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control input-lg" rows="5" placeholder="Mensaje" required></textarea>
                </div>
                <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Enviar</button>
            </form>
        </div>	
    </div>

</div> <!-- /.row -->
</div> <!-- /.container -->
</div>
</section>
<!-- End contact section -->

<!-- Begin footer -->
<footer class="text-off-white">

    <div class="footer-top">
     <div class="container">
         <div class="row wow bounceInLeft" data-wow-delay="0.4s">

            <div class="col-sm-6 col-md-4">
             <h4>Useful Links</h4>
             <ul class="imp-links">
                 <li><a href="">About</a></li>
                 <li><a href="">Services</a></li>
                 <li><a href="">Press</a></li>
                 <li><a href="">Copyright</a></li>
                 <li><a href="">Advertise</a></li>
                 <li><a href="">Legal</a></li>
             </ul>
         </div>

         <div class="col-sm-6 col-md-4">
            <h4>Subscribe</h4>
            <div id="footer_signup">
                <div id="email">
                    <form id="subscribe" method="POST">
                        <input type="text" placeholder="Enter email address" name="email" id="address" data-validate="validate(required, email)"/>
                        <button type="submit">Submit</button>
                        <span id="result" class="section-description"></span>
                    </form> 
                </div>
            </div> 
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
        </div>

        <div class="col-sm-12 col-md-4">
            <h4>Recent Tweets</h4>
            <div class="single-tweet">
                <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident</div>
                <div class="tweet-date">1 Hour ago</div>
            </div>
            <div class="single-tweet">
                <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident uku shumaru</div>
                <div class="tweet-date">1 Hour ago</div>
            </div>
        </div>

    </div> <!-- /.row -->
</div> <!-- /.container -->
</div>

<div class="footer">
    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
        <p class="copyright">Copyright &copy; 2015 - Designed By <a href="https://www.behance.net/poljakova" class="theme-author">Veronika Poljakova</a> &amp; Developed by <a href="http://www.imransdesign.com/" class="theme-author">Imransdesign</a></p>
    </div>
</div>

</footer>
<!-- End footer -->

<a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->

</div><!-- body ends -->

@endsection