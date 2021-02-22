<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.min.css">

    <title>Commic</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper teal">
            <a href="#" class="brand-logo">Comics Aleatorios Masivian -- Julian Polo</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 center">
                <div class="row" style="margin-top: 3%;">
                    <a id="back-commic" class="waves-light btn">
                        <i class="material-icons">arrow_back</i>
                    </a>
                    <a id="random-commic" class="waves-light btn">
                        Commic Aleatorio
                    </a>
                    <a id="next-commic" class="waves-light btn">
                        <i class="material-icons">arrow_forward</i>
                    </a>
                </div>
                
                <div id="preloader-primary" class="row" style="margin-top: 3%;">
                    <div class="preloader-wrapper big active">
                        <div class="spinner-layer spinner-blue-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="commic" class="hide">
                    <div class="row">
                        <div>
                            <h4 id="title-img-primary"></h4>
                        </div>
                        <div id="star">
                            <a class="btn-floating star-rating center" data-star="0">
                                <i class="material-icons center">star_border</i>
                            </a>
                            <a class="btn-floating star-rating center" data-star="1">
                                <i class="material-icons center">star_border</i>
                            </a>
                            <a class="btn-floating star-rating center" data-star="2">
                                <i class="material-icons center">star_border</i>
                            </a>
                            <a class="btn-floating star-rating center" data-star="3">
                                <i class="material-icons center">star_border</i>
                            </a>
                            <a class="btn-floating star-rating center" data-star="4">
                                <i class="material-icons center">star_border</i>
                            </a>
                            <a class="btn-floating star-rating center" data-star="5">
                                <i class="material-icons center">star_border</i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">                        
                            <img id="img-primary" class="responsive-img" src=""/>
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </div>

    <script src="./js/materialize.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/index.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>