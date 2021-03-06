@extends('layouts.app')

@section('content')
    <header class="jumbotron text-center">
        <div class="container">
            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1><font face="Century Gothic" size="25"><center><b>Welcome to Your One Stop Shop for All Things Literature</b></center></font></h1>
                    <p style="padding:20px;"></p>
                    <p><font face="Century Gothic" size="4"><center>The best book store in your city, selling the best in Tech and Sci Fi books with
                    amazing prices</center></font></p>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <img class="img-fluid" src="{{ asset('img/stackbook.png')}}">
                </div>
            </div>
        </div>
    </header>
    &nbsp;
    <center><h3><font face="Century Gothic" size="7">Why You Should Buy With Bard</font></h3></center>
    &nbsp;
    <section class="reasons-why">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="glyphicon glyphicon-book glyphicon-large" aria-hidden="true"></span>
                    <h3>Tons of Books!</h3>
                    <p>Bard's Big Bad Bookstore hosts one of the largest collections of books in the world.
                    All at your fingertips.</p>
                </div>
                <div class="col-md-4">
                    <span class="glyphicon glyphicon-flash glyphicon-large" aria-hidden="true"></span>
                    <h3>Speedy Service!</h3>
                    <p>All of our orders are delivered quickly and safely, because customer satisfaction is always our number one priority.</p>
                </div>
                <div class="col-md-4">
                    <span class="glyphicon glyphicon-heart-empty glyphicon-large" aria-hidden="true"></span>
                    <h3>Passion for Literature!</h3>
                    <p>Everyone behind Bard's Big Bad Bookstore is a nut for books! We want to share with the world what we love the most, and won't
                    stop until literature is accessible to all!</p>
                </div>
            </div>
        </div>
     </section>
    <hr width="1500">

    &nbsp;
    <h2><font face="Century Gothic" size="6"><center>Take a look at some of our shop's accolades!</center></font></h2>
    &nbsp;


    <div class="container">
        <div class="carousel slide" data-ride="carousel" id="bookSlides" style="width: 600px; margin: auto">
            <ol class="carousel-indicators">
                <li data-target="#bookSlides" data-slide-to="0" class="active"></li>
                <li data-target="#bookSlides" data-slide-to="1"></li>
                <li data-target="#bookSlides" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="item active pic carousel-item">
                    <img class="img-fluid" src="{{asset('img/design.png')}}" alt="image" style="width:auto; height:500px;">
                    <div class="carousel-caption">
                        <h2>Junior Design Award 2016</h2>
                    </div>
                </div>

                <div class="item pic carousel-item">
                    <img class="img-fluid" src="{{asset('img/best2016.png')}}" alt="image" style="width:auto; height:500px;">

                    <div class="carousel-caption">
                        <h2>The Best of 2016 Award</h2>
                    </div>
                </div>

                <div class="item pic carousel-item">
                    <img class="img-fluid" src="{{asset('img/investor.png')}}" alt="image" style="width:auto; height:500px;">

                    <div class="carousel-caption">
                        <h2>The Investors in People Award 2016</h2>
                    </div>
                </div>
            </div>

            <a href="#bookSlides" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#bookSlides" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    
    <div>
        <p style="padding:25px"></p>
    </div>
    

@endsection