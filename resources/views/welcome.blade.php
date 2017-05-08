<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Vilkam</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="/css/skdslider.css" rel="stylesheet">
        <link href="/css/thumbnail-slider.css" rel="stylesheet" />
        <link href="/js/loading-bar.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body ng-app="sistema_administrativo_vilkam">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="mask">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand visible-lg hidden-md hidden-sm hidden-xs" href="#!/home"><h1>Vilkam</h1></a>
                            <a class="navbar-brand hidden-lg visible-md hidden-sm hidden-xs" href="#!/home"><h2>Vilkam</h2></a>
                            <a class="navbar-brand hidden-lg hidden-md visible-sm visible-xs" href="#!/home">Vilkam</a>
                        </div>
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown hidden-lg hidden-md visible-sm visible-xs">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#!/us#mission">Misi&oacute;n</a></li>
                                        <li><a href="#!/us#vision">Visi&oacute;n</a></li>
                                        <li><a href="#!/us#values">Valores</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown hidden-lg hidden-md visible-sm visible-xs">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($categories as $key => $value)
                                        <li><a href="#!/products/{{$value->category_alias}}">{{$value->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!--<li class="hidden-lg hidden-md visible-sm visible-xs"><a href="#!/products">Productos</a></li>-->
                                <li class="hidden-lg hidden-md visible-sm visible-xs"><a href="#!/contact-us">Cont&aacute;ctanos</a></li>
                                <li class="visible-lg visible-md hidden-sm hidden-xs">
                                    <a href="#" class="vertical-text-center pull-right">
                                        <span class="glyphicon glyphicon-earphone"></span> 01 55 2454 9990&nbsp;&nbsp;&nbsp;       
                                    </a>
                                </li>
                                <li>
                                    <form class="form-inline" style="margin-top: 10px;">
                                        <div class="input-group pull-right">
                                            <input type="text" class="form-control" placeholder="Buscar" aria-describedby="sizing-addon2">
                                            <span class="input-group-addon" id="sizing-addon2">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </span>
                                        </div>
                                    </form>
                                </li>
                            <ul>
                        </div>
                        <div class="navbar-footer">
                            <ul class="nav navbar-nav navbar-right visible-lg visible-md hidden-sm hidden-xs">
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#!/us#mission">Misi&oacute;n</a></li>
                                        <li><a href="#!/us#vision">Visi&oacute;n</a></li>
                                        <li><a href="#!/us#values">Valores</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($categories as $key => $value)
                                        <li><a href="#!/products/{{str_replace(' ', '-', mb_strtolower(strtr($value->name, Config::get('app.unwanted_array'))))}}">{{$value->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!--<li><a href="#!/products">Productos</a></li>-->
                                <li><a href="#!/contact-us">Cont&aacute;ctanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid content" >
            <div class="clear-menu"></div>
            <div class="content" id="content" ng-view>
                <!-- //START CONTENT -->
                <!-- END CONTENT// -->
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center margin-bottom-20">
                    <ul class="list-inline">
                        <li>
                            <a class="navbar-brand" href=""><h3>Vilkam</h3></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-4 col-xs-12">
                    <ul class="list-unstyled">
                        <li><a href="#/nosotros"><strong>Nosotros</a></strong></li>
                        <li><a href="#/nosotros">Misión y Visión</a></li>
                        <li><a href="#">Historia</a></li>
                        <li><a href="#">Objetivos</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul class="list-unstyled">
                        <li><a href="#"><strong>Contáctanos</a></strong></li>
                        <li>
                            <a href="#">Vilkam <br>
                                E-mail: ventas@distribuidoresvilkam.com.mx <br>
                                Teléfono: 01 55 2454 9990<br>
                                Trabajadoras Sociales No. 69, Col. El Sifón, C.P. 09800, 
                                Iztapalapa, CDMX<br>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <ul class="list-unstyled">
                        <li><a href="#"><strong>Productos y serviciosss</strong></a></li>
                        @foreach($categories as $key => $value)
                        <li><a href="#!/products/{{$value->category_alias}}">{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 text-center fz-12">
                    <hr>
                    <br>
                    <!--<a href="#" class="navbar-brand">Vilkam</a>-->
                    <ul class="list-inline">
                        <li><a href="#">Productos y servicios</a></li>
                        @foreach($categories as $key => $value)
                        <li>|</li>
                        <li><a href="#!/products/{{$value->category_alias}}">{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                    <br>
                    <a href=""><strong>Developed by MJ Systems</strong></a>
                    <br>&nbsp;
                </div>
            </div>
        </footer>
    </body>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/angular-route.min.js"></script>
    <script src="/js/angular-animate.min.js"></script>
    <script src="/js/jcs-auto-validate.min.js"></script>
    <script src="/angular/app.js"></script>
    <script src="/angular/route.config.js"></script>
    <script src="/angular/controllers/HomeController.js"></script>
    <script src="/angular/controllers/ProductsController.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/loading-bar.js"></script>
</html>
