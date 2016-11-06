<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}

    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/jquery.steps.css')!!}
    {!! Html::script('https://code.jquery.com/jquery-3.1.0.min.js') !!}
    {!! Html::script('http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js') !!}



</head>

<body id="app">

<div id="wrapper">


    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Dojo MasterShotokan</a>
        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-film fa-fw"></i> Atletas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!!URL::to('/atleta/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('/atleta')!!}"><i class='fa fa-list-ol fa-fw'></i> Atletas</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-child fa-fw"></i> Genero<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!!URL::to('/pdf/invoice')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('/pdf')!!}"><i class='fa fa-list-ol fa-fw'></i> Generos</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <div id="page-wrapper" style="min-height: 1 000px;">
        @yield('content')
    </div>

</div>



{!!Html::script('js/script.js')!!}
{!!Html::script('js/script2.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/metisMenu.min.js')!!}
{!!Html::script('js/sb-admin-2.js')!!}
{!!Html::script('css/modernizr-2.6.2.min.js')!!}
{!!Html::script('css/jquery.cookie-1.3.1.js')!!}
{!!Html::script('css/jquery.steps.js')!!}


</body>

</html>