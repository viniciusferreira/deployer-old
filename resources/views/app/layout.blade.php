@extends('app.empty')

@section('page')
    <div class="contain-to-grid sticky">
        <div class="section-nav">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name"><h1><a href="#">Deployer</a></h1></li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <ul class="right">
                        <li class="active"><a href="#"></a></li>
                        <li class="has-dropdown">
                            <a href="#">Renato Dehnhardt</a>
                            <ul class="dropdown">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="left">
                        <li><a href="#">Dashboard</a></li>
                        <li class="has-dropdown">
                            <a href="#">Projects</a>
                            <ul class="dropdown">
                                <li><a href="#">WebStage</a></li>
                                <li><a href="#">MAQDEN</a></li>
                                <li><a href="#">Classificars</a></li>
                                <li><a href="#">FullSystem</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </nav>
        </div>

        <div class="section-header">
            <div class="row">
                <div class="small-6 large-6 columns">
                    <h2 class="subheader">Homologa</h2>
                </div>
                <div class="small-6 large-6 columns text-right">
                    <a href="#" class="button small"><i class="fa fa-cog"></i> Settings</a>
                </div>
            </div>
        </div>
    </div>
@stop