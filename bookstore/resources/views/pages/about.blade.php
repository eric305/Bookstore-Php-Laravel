@extends('layouts/app')

@section('title') About @endsection

@section('content')


<p style="padding:10px"></p>
<center><h2><b>About Us</b></h2></center>
    &nbsp
<div>
    <p><center>Bard's Big Bad Bookstore is a company started by a group of bright-minded individuals back in 2014 with the goal of making
    textbooks and recreational reading materials easily accessible for anyone in the world. CJ Environmental, Inc. is one of North America’s largest precious-metal recycling corporations.
    Selected as a prestigious member of the INC 500, the company handles so much volume they are able to offer their customers unbeatable returns on all their precious metal electronic and computer scrap.

    CJ Environmental, Inc. has a long history and reputation for excellence in the precious metal community.
    Catering to both the public and private sector since the early seventies, the company prides itself on being honest, professional and reliable.
    CJ Environmental has offices all across the US, which allows them to maintain a broad network of customers throughout the entire country.
    They service Fortune 500 Companies, Small Businesses and the General Public. They have the capacity to handle any job no matter where or what size.
    &nbsp
</center></p>
</div>
&nbsp
<section class="our-awards">
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
        <span><img class="img-fluid" src="{{asset('img/design.png')}}"></span>
        <h3>Junior Design Award 2016</h3>
        <p>The Junior Design Awards #JDA16 was a unique opportunity for our team to win a luxury award that is - and will continue to be -
            the most esteemed accolade in the online design award arena, recognised by brands, clients and consumers alike.
            Winners were handpicked by the Junior editorial team and a host of highly-respected judges.</p>
        </div>
        <div class="col-lg-4">
        <span><img class="img-fluid" src="{{asset('img/investor.png')}}"></span>
        <h3>Investors in People Award 2016</h3>
        <p>Since 1991 Investors in People has set the standard for better people management. Our internationally recognised accreditation is held by 14,000 organisations across the world.
            The Standard defines what it takes to lead, support and manage people well for sustainable results.</p>
        </div>
        <div class="col-lg-4">
        <span><img class="img-fluid" src="{{asset('img/best2016.png')}}"></span>
        <h3>The Best of 2016</h3>
        <p>This prestigious award was handed to us in 2016 by the The Best of Online handling comittee, and it is one of our greatest accolades.
        This award encompasses our vision for our site as a whole - being a product of superb design and functionality. We're truly thankful for this award,
        and hope to use as an ignition to pursue our future goals.</p>
        </div>
    </div>
    </div>
</section>

<center><h2>Come Visit Us!</h2></center>
<div>
<p><center>Bard's Big Bad Bookstore company headquarters is located in the heart of Miami, nestled in the beautiful bustling campus of
    Florida International University - Modesto Maidique Campus.
    &nbsp
    </center></p>
</div>


<center><script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD8QUL2vJQZhUf2TT_BzoxsxuRIqEZfMjM'></script>
    <div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    </div> <a href='https://add-map.org/'>adding google maps to a website</a>
    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=72fb12f2baca0a477d57153c1d8cad8b5631deaa'></script><script type='text/javascript'>function init_map()
    {var myOptions = {zoom:12,center:new google.maps.LatLng(25.7580337,-80.37517589999999),mapTypeId: google.maps.MapTypeId.ROADMAP};
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(25.7580337,-80.37517589999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Company Headquarters </strong><br>11200 SW 8th St<br>33199 Miami<br>'});
    google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</center>

<div>
    <p style="padding:25px"></p>
</div>

@endsection