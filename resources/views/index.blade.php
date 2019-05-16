@extends('template.main')

@section('title', 'Puebla')

@section('transparent', 'transparent')
      
@section('content')
        <div class="page" id="top">
            <!-- Fullwidth Slider -->
            <div class="bg-dark relative">
                <div class="fullwidth-gallery">
                   
                    <!-- Slide Item -->
                    <section class="home-section bg-scroll bg-dark-alfa-30" data-background="images/full-width-images/f-1.jpg">
                        <div class="js-height-full">
                        </div>
                    </section>
                    <!-- End Slide Item -->
                    
                    <!-- Slide Item -->
                    <section class="home-section bg-scroll bg-dark-alfa-50" data-background="images/full-width-images/f-2.jpg">
                        <div class="js-height-full">
                        </div>
                    </section>
                    <!-- End Slide Item -->
                    
                    <!-- Slide Item -->
                    <section class="home-section bg-scroll bg-dark-alfa-50" data-background="images/full-width-images/f-3.jpg">
                        <div class="js-height-full">
                        </div>
                    </section>

                    <!-- Slide Item -->
                    <section class="home-section bg-scroll bg-dark-alfa-50" data-background="images/full-width-images/f-4.jpg">
                        <div class="js-height-full">
                        </div>
                    </section>
                    <!-- End Slide Item -->
                    
                </div>
                <!-- End Fullwidth Slider -->
                
                <!-- Header Content -->
                <div class="js-height-full fullwidth-galley-content">
                    <!-- Hero Content -->
                    <div class="home-content container">
                        <div class="home-text">
                          
                            <div class="hs-line-6 no-transp font-alt mb-40 mb-xs-20">
                                
                            </div>
                            
                            <div class="logo">
                            <img src="images/LP-Puebla.png" alt="Discovery Puebla" />
                            </div>

                            <div class="hs-line-7 mb-50 mb-xs-30">
                                
                            </div>
                            
                            <div class="local-scroll">
                                <a href="#portfolio1" class="btn btn-mod btn-border-w btn-medium btn-round mb-xxs-10">MARAVILLAS DE PUEBLA</a>
                                <span class="hidden-xs">&nbsp;</span>
                                <a href="videos/puebla2.mp4" class="btn btn-mod btn-border-w btn-medium btn-round lightbox mfp-iframe hidden-xs">PUEBLA INCOMPARABLE</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                    
                    <!-- Scroll Down -->
                    <div class="local-scroll">
                        <a href="#portfolio1" class="scroll-down"><i class="fa fa-angle-double-down scroll-down-icon"></i></a>
                    </div>
                    <!-- End Scroll Down -->
                    
                </div>
            </div>
            <!-- End Fullwidth Slider -->

            <!-- Portfolio Section -->
            <section class="page-section pb-0" id="portfolio1">
                <div class="relative">

                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        CONTANDO HISTORIAS, CREANDO EMOCIONES...
                    </h2>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">                                                          
                            </div>
                        </div>
                    </div>
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        
                        <!-- Work Item (External Page) -->
                        @foreach ($atractivos as $atractivo)
                        <li class="work-item">
                            <a href="{{ route('atractivo', $atractivo->id) }}" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/atractivos/{{ $atractivo->ruta }}" alt="Teleférico" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{ $atractivo->nombre }}</h3>
                                    <div class="work-descr">
                                        {{ $atractivo->nombreZona }}
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                        <!-- End Work Item -->

                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->

            <!-- Divider -->
            <br>
            <br>
            <br>
            <br>
            <!-- End Divider -->

            <!-- Call Action Section -->
            <section class="page-section pt-0 pb-0 banner-section bg-dark" data-background="images/full-width-images/Banner_eventos.jpg">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-sm-6">
                            
                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <h3 class="banner-heading font-alt"></h3>
                                    <div class="banner-decription">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>

                                        
                                    </div>
                                    <div class="local-scroll">
                                        <a href="{{ route('eventos') }}" class="btn btn-mod btn-w btn-medium btn-round">Ver Eventos</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-6 banner-image wow fadeInUp">
                            <!--<img src="images/promo-1.png" alt="" />-->
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->

            <!-- Divider -->
            <br>
            <br>
            <br>
            <!-- End Divider -->
             
             <!-- Call Action Section -->
            <section class="page-section pt-0 pb-0 banner-section bg-dark" data-background="images/full-width-images/Banner_atractivos.jpg">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-sm-6">
                            
                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <h3 class="banner-heading font-alt"></h3>
                                    <div class="banner-decription">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        
                                    </div>
                                    <div class="local-scroll">
                                        <a href="{{ route('atractivos') }}" class="btn btn-mod btn-w btn-medium btn-round">Descubre más</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-6 banner-image wow fadeInUp">
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            
            <!-- Divider -->
            <br>
            <br>
            <br>
            <br>
            <!-- End Divider -->


            <!-- Counters -->
            <div class="count-wrapper">
                <div class="row"> 
                    <!-- Counter Item -->
                    <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                            {{ $zonaCount }}
                        </div>
                        <div class="count-descr font-alt">
                            <span class="count-title">Zonas</span>
                        </div>
                    </div>
                    <!-- End Counter Item -->

                    <!-- Counter Item -->
                    <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                            {{ $atractivoCount }}
                        </div>
                        <div class="count-descr font-alt">
                            <span class="count-title">Atractivos</span>
                        </div>
                    </div>
                    <!-- End Counter Item -->

                    <!-- Counter Item -->
                    <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                            {{ $recintoCount }}
                        </div>
                        <div class="count-descr font-alt">
                            <span class="count-title">Recintos</span>
                        </div>
                    </div>
                    <!-- End Counter Item -->

                    <!-- Counter Item -->
                    <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                            {{ $eventoCount }}
                        </div>
                        <div class="count-descr font-alt">
                            <span class="count-title">Eventos</span>
                        </div>
                    </div>
                    <!-- End Counter Item -->
                </div>
            </div>
            <!-- End Counters -->
 

            
            <!-- Contact Section -->
            <section class="page-section" id="contact">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Contáctanos
                    </h2>
                    
                    <div class="row">
                        
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                
                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Equipo de Desarrollo SoftMakers
                                        </div>
                                        <div class="ci-text">
                                            <a href="tel://9934450296">993-445-02-96</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Phone -->
                                
                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Ubicación
                                        </div>
                                        <div class="ci-text">
                                            Boulevard Audi Sur, Cd. Modelo, San José Chiapa, Puebla, Mexico
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address -->
                                
                                <!-- Email -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            E-mail
                                        </div>
                                        <div class="ci-text">
                                            <a href="mailto:istii.2017.buap@gmail.com">istii.2017.buap@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Email -->
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Contact Section -->
        </div>
@endsection