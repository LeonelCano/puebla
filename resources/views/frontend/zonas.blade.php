@extends('template.main')

@section('title', 'Zonas')

@section('content')
        <div class="page" id="top">
            <section class="page-section pb-0" id="portfolio1">
                <div class="relative">

                    <div class="font-alt section-title" align="center">
                        {!! Form::open(['route' => 'zonas', 'method' => 'GET', 'class' => 'navbar-from pull-right']) !!}
                        <div class="input-group">  
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar zona...', 'aria-describedby' => 'search']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <br>
                    <br>
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        ZONAS DE PUEBLA
                    </h2>
                
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        
                        @foreach ($zonas as $zona)
                        <li class="work-item">
                            <a href="{{ route('zona', $zona->id) }}" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/zonas/{{ $zona->ruta }}" alt="{{ $zona->nombre }}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{ $zona->nombre }}</h3>
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
                        {{ $zonas->render() }}
                    </ul>
                </div>  
            </div>

        </div>
@endsection