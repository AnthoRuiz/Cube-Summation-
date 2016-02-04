<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>

    Cube Summation</title>
    

    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body class="bg-5">
<div id="wrap">
    <div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav nav-justified">
                    <li class="active" ><a href="{{route('index')}}">Inicio</a></li>
                    <li><a href="{{route('teclado')}}">Teclado</a></li>
                    <li><a href="{{route('archivo')}}">Carga por Archivo</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--/.navbar -->

    <div class="row" id="contact">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel panel-body">
                    <div class="row form-group">
                        <h2>Cube Summation.</h2>
                        <h3>Ver el Enunciado <a href="#">aquí</a></h3>

                    </div>
                    
                </div>
            </div><!--/panel-->
        </div>
    </div> <!--/row-->
</div>  <!--/wrap-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXY8XRHYmozJ5qcK_OZxuT1YmRPdJgnFk&callback=initMap">
</script>
</body>
</html>