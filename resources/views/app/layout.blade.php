@extends('app.empty')

@section('page')
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon"><span></span></a>
                </section>

                <section class="middle tab-bar-section">
                    <h1 class="title">Deployer</h1>
                </section>

                <section class="right-small">
                    <a class="right-off-canvas-toggle menu-icon"><span></span></a>
                </section>
            </nav>

            <aside class="left-off-canvas-menu">

            </aside>

            <aside class="right-off-canvas-menu">
                DIREITA
            </aside>

            <section class="main-section">
                @yield('content')
            </section>

            <a class="exit-off-canvas"></a>
        </div>
    </div>
@stop