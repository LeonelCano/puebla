@extends('template.main')

@foreach ($recintos as $recinto)

@section('title', 'Recinto | '.$recinto->nombre)

@section('content')
			<!-- Head Section -->
			
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    <div class="row">
                        <div class="col-md-8">
                        	<br>
                        	<br>
                        	<br>
                            <h1 class="hs-line-11 no-transp font-serif mb-20 mb-xs-0"><b>{{ $recinto->nombre }}</b></h1>
                            
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- End Head Section -->
                        
            <!-- Section -->
            <section>
                <div class="container relative">
                    <br>

                    <div class="work-full-media mb-80 mb-xs-40">
                            <div align="center">
                                <img src="images/recintos/{{ $recinto->ruta }}" alt="" />
                            </div>
                    </div>

                    <div class="section-text mb-60 mb-sm-40">
                        <div class="row">
                        	<div class="col-md-4 mb-sm-50 mb-xs-30">
                                <div class="text-justify">
                                    Sin importar el tamaño, los recintos para eventos en la Ciudad de Puebla, son espacios maravillosos que garantizan el éxito de cada uno de ellos. ¿Dónde lo quieres en un hotel o en algo aún más grande? En Puebla hay para todos los gustos.
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            	<div class="work-detail">
                                    <h5 class="font-alt mt-4 mb-20"><b>UBICACIÓN</b></h5>
                                    <div class="work-full-detail">
                                        <p>
                                            {{ $recinto->calle }} {{ $recinto->numero }}, {{ $recinto->colonia }}, {{ $recinto->cp }}, {{ $recinto->municipio }}, {{ $recinto->estado }}                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div align="center" id="mapa">
                            	<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            		<iframe src="{{ $recinto->mapa }}" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            	</div>
                        	</div>
                        </div>
                    </div>
            @endforeach
                    <div class="container">
                    	<div class="fh5co-tab-content tab-content">
                        	<div class="col-md-10 col-md-offset-1">
                            	<h3>Comentarios</h3>
                            	<div class="feed">
                                	@foreach ($comentarios as $comentario)
                                	<div>
                                	<blockquote>
                                  		<p>{{ $comentario->descripcion }}</p>
                                	</blockquote>
                                	<h3>&mdash; {{ $comentario->nombre }}</h3>
                                	</div>
                                	@endforeach

                                	<div class="container">
                                		<div class="inner-nav2" align="center">
                                			<ul class="clearlist">
                                				{{ $comentarios->render() }}
                                			</ul>
                                		</div>  
                                	</div>

                            	</div>
                        	</div>
                    	</div>

                    </div>

                    

                    <br>
                    <div class="fh5co-tab-content tab-content">
                    	<div class="container">
                    		<h3>Escribe tu comentario</h3>
                    		@foreach ($recintos as $recinto)
                    		{!! Form::open(['route' => 'comentar', 'method' => 'POST']) !!}
                    		@csrf
                    		<div class="row form-group">
                    			<div class="col-md-3">
                    				{!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre']) !!}
                    			</div>
                    		</div>
                    		<div class="row form-group">
                    			<div class="col-md-4">
                    				{!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Correo Electrónico']) !!}
                    			</div>
                    		</div>
                    		<div class="row form-group">
                    			<div class="col-md-8">
                    				{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Tu comentario']) !!}
                    			</div>
                    		</div>
                    		<div class="form-group">
                    			{!! Form::submit('Comentar', ['class' => 'btn btn-primary']) !!}
                    		</div>
                    		{!! Form::text('recinto_id', $recinto->id, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre', 'style' => 'visibility:hidden']) !!}
                    		{!! Form::close() !!}
                    		@endforeach
                    	</div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <br>
            <br>
            <br>
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->

@endsection