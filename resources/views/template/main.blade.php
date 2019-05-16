<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Discovery Puebla')</title>
        <meta name="description" content="Página oficial desarrollada por Leonel Cano Dorantes">
        <meta name="keywords" content="Proyecto SoftMakers">
        <meta charset="utf-8">
        <meta name="author" content="Leonel Cano Dorantes">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon-puebla.png">

        <!-- CSS -->
        @include('template.partials.css')       
        <!-- End CSS -->

    </head>

    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Visita Puebla, es hermoso</div>
        </div>
        <!-- End Page Loader -->

        <!-- Navigation panel -->
        @include('template.partials.nav')
        <!-- End Navigation panel -->
        
        <!-- Page Wrap -->
        
            
            <!-- Contnt -->
            @yield('content')
            <!-- End Content -->
            
        <!-- End Page Wrap -->

        <!-- Foter -->
        @include('template.partials.footer')
        <!-- End Foter -->
        
        <!-- JS -->
        @include('template.partials.scripts')
        <!-- End JS -->
        
    </body>
</html>
