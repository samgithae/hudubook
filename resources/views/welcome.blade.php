<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Soko alerts </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">


</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #0d3625">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Soko Alerts</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        @if (Route::has('login'))
                            <div class="top-right links">
                                @if (Auth::check())

                                    <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                                @else
                                    <div class="row pull-right">
                                    <ul class="nav navbar-nav ">
                                    <li  ><a href="{{ url('/login') }}">Login</a></li>
                                    <li  > <a href="{{ url('/register') }}">Register</a></li>
                                    </ul>
                                    </div>

                                @endif
                            </div>
                        @endif


                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="{{URL::asset('/img/1.jpg')}}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Get live updates of prices</h1>
                    <p><a class="btn btn-lg btn-primary" href="{{ url('/register') }}" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="{{URL::asset('/img/2.jpg')}}" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Covering all markets in Kenya.</h1>
                    <p><a class="btn btn-lg btn-primary" href="{{ url('/login') }}" role="button">Login</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="{{URL::asset('/img/3.jpg')}}" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Buy or Sell with the best price</h1>
                    <p><a class="btn btn-lg btn-primary" href="{{ url('/login') }}" role="button">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->



    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Real time updates <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">The prices are updated as thy change</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="{{URL::asset('/img/2.jpg')}}" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Eat fresh, <span class="text-muted"> Stay Healthy</span></h2>
            <p class="lead">Farm products give you essecial vitamins and minerals to give a healthy lifestyle</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="{{URL::asset('/img/4.jpg')}}" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Get the best price <span class="text-muted">Saves your money</span></h2>
            <p class="lead">We give you information of different prices of the same product all over the country. </p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="{{URL::asset('/img/5.jpg')}}" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{'js/jquery.min.js'}}"></script>
<script>window.jQuery || document.write('<script src="{{'js/vendor/jquery.min.js'}}"><\/script>')</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
