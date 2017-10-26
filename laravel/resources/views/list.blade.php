<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="js/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://nvp.bikerent.nyc/styles.css">
    <title>Square 60 - New York</title>
</head>
<style>
    #map-canvas{
        max-width: 100%;
        max-height: 100%;
    }
    @media (max-width:720px){

        #listing-search-result{
            font-size: 4vw;
            text-align: center;
        }
    }
    #listing-ads{

    }
    .main-color{
        margin-bottom: 0px!important;
    }
    .title.is-5{
        font-size: 1.50rem;
    }
    ul #topline > i {

    }
    .main-color{
        color:#205aa2;
    }
    #calculate-mortage{
        color:#6b6b6b;
        font-size:0.9rem;
    }
    #filters{
        background: #f9f9f9;
        font-size: 14px;
        padding: 10px 0 10px 0;
        border-bottom: 1px solid #dedede;
    }
    #listing-ad-ul-type{
        list-style:none;max-width:70%;
    }
    #filters a{
        color:#312e2e!important}

    .navar-menu{
        font-size: 17px;
    }
    #map-icon-listing{
        font-size:0.9rem
    }
    #top-search{
        margin-top: 40px
    }
    .content ul{

        margin-left: 0px;
    }

</style>



<header>


    <nav class="navbar is-info is-bold ">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Hypo_Real_Estate-Logo.svg/2000px-Hypo_Real_Estate-Logo.svg.png" alt="LOGO" width="112" height="28">
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" class="white">
        <i class="fa fa-lg fa-facebook"></i>
      </span>
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" class="white">
        <i class="fa fa-lg fa-twitter"></i>
      </span>
                </a>

                <div class="navbar-burger burger" data-target="navMenuTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navMenuTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-link  is-active" href="/documentation/overview/start/">
                        Buy
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link " href="#">
                            Sell
                        </a>

                    </div>

                    <a class="navbar-item " href="#">
                        <span></span>
                        Mortage
                    </a>

                    <a class="navbar-item " href="#">
                        <span></span>
                        Find agents
                    </a>

                </div>

                <div class="navbar-end">

                    <a class="navbar-item is-hidden-desktop-only" href="https://instagram.com" target="_blank">
        <span class="icon" class="white">
          <i class="fa fa-lg fa-instagram"></i>
        </span>
                    </a>
                    <a class="navbar-item is-hidden-desktop-only" href="https://twitter" target="_blank">
        <span class="icon" class="white">
          <i class="fa fa-lg fa-twitter"></i>
        </span>
                    </a>
                    <a class="navbar-item is-hidden-desktop-only" href="https://facebook.com" target="_blank">
        <span class="icon" class="white">
          <i class="fa fa-lg fa-facebook"></i>
        </span>
                    </a>
                    <a class="navbar-item modal-button" data-target="#modal" >
                        Sign in / Sign up</a>
                    <div id="modal" class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <div class="box">
                                <article class="media">
                                    <div class="media-left">
                                        <figure class="image is-64x64">
                                            <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <div class="content">
                                            <p>
                                                <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                                <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                            </p>
                                        </div>
                                        <nav class="level">
                                            <div class="level-left">
                                                <a class="level-item">
                                                    <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                                </a>
                                                <a class="level-item">
                                                    <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                                </a>
                                                <a class="level-item">
                                                    <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>

                </div>

                <a class="white" href="https://github.com/jgthms/bulma/archive/0.5.3.zip">

                </a>
            </div>
        </div>
        </div>
        </div>
        </div>
    </nav>
</header>
<body>
<section id="filters">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <ul class="level is-mobile" id="topline">
                    <li><a href="#" class="" id="print-topline">  <span class="icon">
    <i class="fa fa-print"></i>
    </span><span>Print</span></a></li>
                    <li><a href="#" class="" id="email-topline"><span class="icon">
    <i class="fa fa-envelope-o"></i>
    </span>
                            <span>Email</span></a></li>
                    <li><a href="#" class="" id="search-toline"><span class="icon">
    <i class="fa fa-folder-open-o"></i>
    </span> <span>Save seach</span></a></li>
                    <li><a href="#" class="" id="advance-topline"><span class="icon">
    <i class="fa fa-sort-amount-asc"></i>
    </span><span>Advance Search</span></a></li>
                    <li><a href="#" class="" id="sortby-topline"><span class="icon">
    <i class="fa fa-sort"></i>
    </span><span>Sort by</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="top-search">
    <div class="container">

        <div class="columns">
            <div class="column is-8">

                <div class="content">

                    <h3 class="title is-4" id="listing-search-result">Search Result: 357 apartments by owner</h3>
                </div>

                @foreach ($listings as $listing)
                    <div class="box">
                        <div class="columns">
                            <div class="column is-5">
                                <img src="https://photos.zillowstatic.com/p_h/ISqd35dopprchq0000000000.jpg" alt="">
                            </div>
                            <div class="column">
                                <div class="level">


                                    <h4 class="title is-5 main-color">{{$listing->address}}</h4>
                                    <a href="#" class="button is-info is-outlined" id="search-toline"><span class="icon">
          <i class="fa fa-folder-open-o"></i>
        </span> <span class="">Save seach</span></a>
                                </div>
                                <div class="content">
                                    <p class="">
                                        <span id="price-toline" class="title is-5">${{$listing->price}}</span>
                                        <a href="#" class=""  id="calculate-mortage"><span class="icon">
      </span> <i class="fa fa-calculator"></i> <span>Calculate mortage </span>

                                        </a>
                                        <a href="#" class=" is-info is-outlined" id="location-toline"><span class="icon">
<i class="fa fa-map-marker"></i>
</span> <span id="map-icon-listing">Show on map</span></a>
                                    </p>
                                    <p id="listing-ads" class="">
                                    <ul class="level is-mobile" id="listing-ad-ul-type">
                                        <li id="listing-ad-bed">{{$listing->bedrooms_number}} beds</li>
                                        <li id="listing-ad-bath">{{$listing->bathrooms_number}} baths</li>
                                        <li id="listing-ad-ft">1,571 ft²</li>
                                    </ul>
                                    </p>
                                    <div class="listing-ad-type">
                                        <span id="listing-ad-co-op">{{$listing->type}} in Stuyvesant Heights</span>
                                    </div>
                                    <div class="listing-ad-open-house">
                                        <span>Open House: 7:30 am 8/29</span>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="column">

                <div class="is-hidden-mobile">


                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12091.737630778287!2d-74.0033873!3d40.7414688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcc1b5ab35bd75df0!2sGoogle!5e0!3m2!1sen!2sus!4v1508993809434" width="25%" height="50%" style="position:fixed;margin:5%;border:0" id="map-canvas" frameborder="0"></iframe>
                </div>


            </div>
        </div>
    </div>

</section>
</html>
