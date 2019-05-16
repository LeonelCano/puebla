@extends('template.main')

@section('title', 'Eventos')

@section('content')
        <div class="page" id="top">
            <section class="page-section pb-0" id="portfolio1">
                <div class="relative">

                    <div class="font-alt section-title" align="center">
                        {!! Form::open(['route' => 'eventos', 'method' => 'GET', 'class' => 'navbar-from pull-right']) !!}
                        <div class="input-group">  
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar evento...', 'aria-describedby' => 'search']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <br>
                    <br>
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        EVENTOS DE PUEBLA
                    </h2>
                
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        
                        @foreach ($eventos as $evento)
                        <li class="work-item">
                            <a href="{{ route('evento', $evento->id) }}" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/eventos/{{ $evento->ruta }}" alt="{{ $evento->nombre }}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{ $evento->nombre }}</h3>
                                    <div class="work-descr">
                                        {{ date('d-m-Y', strtotime($evento->fechaInicio)) }}
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>  

                </div>
            </section>
            
            <div class="container">
                <div class="inner-nav2" align="center">
                    <ul class="clearlist">
                        {{ $eventos->render() }}
                    </ul>
                </div>  
            </div>

        </div>    
@endsection