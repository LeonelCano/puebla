@extends('template.main')

@section('title', 'Atractivos')

@section('content')
        <div class="page" id="top">
            <section class="page-section pb-0" id="portfolio1">
                <div class="relative">

                    <div class="font-alt section-title" align="center">
                        {!! Form::open(['route' => 'atractivos', 'method' => 'GET', 'class' => 'navbar-from pull-right']) !!}
                        <div class="input-group">  
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar atractivo...', 'aria-describedby' => 'search']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <br>
                    <br>
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        ATRACTIVOS DE PUEBLA
                    </h2>
                
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        
                        @foreach ($atractivos as $atractivo)
                        <li class="work-item">
                            <a href="{{ route('atractivo', $atractivo->id) }}" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/atractivos/{{ $atractivo->ruta }}" alt="{{ $atractivo->nombre }}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{ $atractivo->nombre }}</h3>
                                    <div class="work-descr">
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
                        {{ $atractivos->render() }}
                    </ul>
                </div>  
            </div>

        </div>
        