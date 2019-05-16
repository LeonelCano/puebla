            <nav class="main-nav dark @yield('transparent') stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="{{ route('inicio') }}" class="logo">
                            <img src="images/LS-Puebla.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="{{ route('inicio') }}">INICIO</a>
                               </li> 
                             
                            <li>
                                <a href="{{ route('zonas') }}">ZONAS</a>
                            </li>

                            <li>
                                <a href="{{ route('atractivos') }}">ATRACTIVOS</a>
                            </li>

                            <li>
                                <a href="{{ route('recintos') }}">RECINTOS</a>
                            </li>
                                {{--
                                <!-- Sub Multilevel -->
                                <ul class="mn-sub mn-has-multi">
                                    
                                    <!-- Sub Column -->
                                      <li class="mn-sub-multi">
<!--                                       <a class="mn-group-title">Multi Page</a>-->
                                        
                                        <ul>
                                            <li>
                                                <a href="teleferico.html">Teleférico</a>
                                            </li>
                                            <li>
                                                <a href="poliforum.html">Políforum</a>
                                            </li>
                                            <li>
                                                <a href="teatro-llave.html">Teatro llave</a>
                                            </li>
                                            <li>
                                                <a href="palacio-de-orizaba.html">Palacio de Orizaba</a>
                                            </li>
                                            <li>
                                                <a href="palacio-de-hierro.html">Palacio de Hierro</a>
                                            </li>
                                            <li>
                                                <a href="mueso-de-arte.html">Museo de Arte</a>
                                            </li>
                                            <li>
                                                <a href="exconvento-san-jose.html">Exconvento San José</a>
                                            </li>
                                            <li>
                                                <a href="casa-de-las-leyendas.html">Casa de las Leyendas</a>
                                            </li>
                                            <li>
                                                <a href="alameda.html">Alameda</a>
                                            </li>
                                            <li>
                                                <a href="500-escalones.html">500 Escalones</a>
                                            </li>
                                            <li>
                                                <a href="paseo-del-rio.html">Paseo del Río</a>
                                            </li>
                                             <li>
                                                <a href="ojo-de-agua.html">Ojo de Agua</a>
                                            </li>
                                            
                                            
                                        </ul>
                                        
                                    </li>
                                    <!-- End Sub Column -->
                                    
                                     
                                </ul>
                             --}}
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="{{ route('eventos') }}">PRÓXIMOS EVENTOS</a>
                            </li>
                                
                            <!-- Divider -->
                            <li><a>&nbsp;</a></li>
                            <!-- End Divider -->
                            
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>