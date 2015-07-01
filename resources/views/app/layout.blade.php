@extends('app.empty')

@section('page')
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="../" class="navbar-brand">Deployer</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Dashboard</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Projects <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="themes">
                            <li><a href="/projects/1">Deployer</a></li>
                            <li><a href="/projects/2">Tasks</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Renato Dehnhardt <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="themes">
                            <li><a href="../default/">Account</a></li>
                            <li><a href="../cerulean/">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="banner" class="page-header">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <h2 class="title">@yield('header-title')</h2>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 text-right">
                    @yield('header-actions')
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
@stop