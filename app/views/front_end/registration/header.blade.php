<!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('home') }}">Job<span>Microblog</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    @include('front_end.menu')
                </div>
            </div>
        </div>
    </header>
    <!--header end-->
