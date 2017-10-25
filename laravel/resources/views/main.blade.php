<!doctype html>
<html lang="{{ app()->getLocale() }}">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
<link rel="stylesheet" href="https://nvp.bikerent.nyc/styles.css">
<title>Square 60 - New York</title>
</head>


<body>
<section id="main_search">
    <div class="container">
        <div id="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/HypoRealEstate-Group-Logo.svg" alt="" width="500px">
        </div>
        <div class="tabs is-toggle is-centered n">
            <ul>
                <li class="nem">
                    <a class="nem2">
                        Rental
                    </a>
                </li>
                <li class="nem">
                    <a class="nem2">
                        Sell
                    </a>
                </li>
                <li class="nem">
                    <a class="nem2">
                        Commercial
                    </a>
                </li>
        </div>
        </ul>
    </div>

    <div class="columns is-mobile">
        <div class="box col_details column is-10 is-offset-1">

            <div class="control cities has-text-centered">
                <label class="radio">
                    <input type="radio" name="foobar" value="manhattan" checked>
                    Manhattan
                </label>
                <label class="radio">
                    <input type="radio" name="foobar" value="brooklyn">
                    Brooklyn
                </label>
                <label class="radio">
                    <input type="radio" name="foobar" value="queens">
                    Queens
                </label>
                <label class="radio">
                    <input type="radio" name="foobar" value="bronx">
                    Bronx
                </label>
                <label class="radio">
                    <input type="radio" name="foobar" value="staten">
                    Staten Island
                </label>
            </div>

            <div class="columns is-gapless">
                <div class="column margin_col col_bor_1 ">
                    <div class="content">
                        <h4 class="title is-5 ">SELECT LOCATION</h4></div>
                    <div class="columns">
                        <div class="column">
                            <label class="checkbox" for=""><input type="checkbox" >West Chelsea</label>
                            <label class="checkbox" for=""><input type="checkbox" >Inwood</label>
                            <label class="checkbox" for=""><input type="checkbox" >Tribeca</label>
                            <label class="checkbox" for=""><input type="checkbox" >Hudson Heights</label>
                            <label class="checkbox" for=""><input type="checkbox" >Greenwich Village</label>
                        </div>
                        <div class="column">
                            <label class="checkbox" for=""><input type="checkbox" >Fort George</label>
                            <label class="checkbox" for=""><input type="checkbox">Midtown</label>
                            <label class="checkbox" for=""><input type="checkbox">Washington Heights</label>
                            <label class="checkbox" for=""><input type="checkbox" >Flatiron</label>
                        </div>
                    </div>
                </div>
                <div class="column margin_col ">
                    <div class="content">
                        <h4 class="title is-5 ">TYPE</h4></div>
                    <div class="columns is-gapless">
                        <div class="column">
                            <label for=""><input type="checkbox" name="" id="">Condo</label><br />
                            <label for=""><input type="checkbox" name="" id="">Co-Op</label>
                        </div>
                        <div class="column">
                            <label for=""><input type="checkbox" name="" id="">Town house</label><br />
                            <label for=""><input type="checkbox" name="" id="">Multi family</label>
                        </div>
                    </div>

                    <div class="fields content">

                        <label class="label">Bed: </label>

                        <div class="select">
                            <select name="" id="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select></div>
                        <label for="">to</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select></div>

                    </div>
                    <div class="fields content">

                        <label class="label">Bath: </label>
                        <div class="select">
                            <select name="" id="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select></div>
                        <label for="">to</label>
                        <div class="select">
                            <select name="" id="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select></div>
                    </div>
                    <div class="fields content">
                        <label class="label" for="">Price:</label>

                        <input placeholder="min" type="text" class="select is-primary">
                        <label>to</label>
                        <input placeholder="max" type="text" class="select is-primary">

                    </div>

                    <div class="level">
                        <div class="level-left">
                            <button class="button" id="search_main">More Filters</button>
                        </div>
                        <div class="level-item has-text-centered ">
                            <button class="button is-info" id="search_main">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="grid" class="margin_col">
    <div class="column is-7 is-offset-3 text-c">
        <h2 class="title is-3">FEATURES</h2>
        <div class="columns is-gapless">
            <div class="column">
                <img src="https://photos.zillowstatic.com/p_h/ISe877d46n9obb0000000000.jpg" alt="">
                <img src="https://photos.zillowstatic.com/p_h/IS2fg5fre25wgq0000000000.jpg" alt="">     </div>
            <div class="column">
                <img src="https://photos.zillowstatic.com/p_h/ISqd35dopprchq0000000000.jpg" alt="">
                <img src="https://photos.zillowstatic.com/p_h/IS6m05zq4gyfvq0000000000.jpg" alt="">

            </div>
        </div>
    </div>
    </div>
</section>
</body>
<footer class="footer">
    <div class="container">
        <div class="columns is-mobile">
            <div class="column">
          <span class="footer-tag">
    Real Estate
  </span>
                <ul class="footer-menu">
                    <li class=""><a href="" class="footer-link">Browse all homes</a></li>
                    <li class=""><a href="" class="footer-link">Albuquerque real estate</a></li>
                    <li class=""><a href="" class="footer-link">Rental Buildings</a></li>
                    <li class=""><a href="" class="footer-link">Atlanta apartments for rent</a></li>
                </ul>
            </div>
            <div class="column">
          <span class="footer-tag">
        Rentals
      </span>
                <ul class="footer-menu">
                    <li class=""><a href="">Browse all homes</a></li>
                    <li class=""><a href="">Albuquerque real estate</a></li>
                    <li class=""><a href="">Rental Buildings</a></li>
                    <li class=""><a href="">Atlanta apartments for rent</a></li>
                </ul>
            </div>
            <div class="column">
          <span class="footer-tag">
        Mortage Rates
      </span>
                <ul class="footer-menu">
                    <li class=""><a href="">Browse all homes</a></li>
                    <li class=""><a href="">Albuquerque real estate</a></li>
                    <li class=""><a href="">Rental Buildings</a></li>
                    <li class=""><a href="">Atlanta apartments for rent</a></li>
                </ul>
            </div>
            <div class="column">
          <span class="footer-tag">
        Browse Homes
      </span>
                <ul class="footer-menu">
                    <li class=""><a href="">Browse all homes</a></li>
                    <li class=""><a href="">Albuquerque real estate</a></li>
                    <li class=""><a href="">Rental Buildings</a></li>
                    <li class=""><a href="">Atlanta apartments for rent</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>
<footer>

    <section class="hero is-dark sub-footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>RealEstate</strong> All copyright reserved <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                    <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
                </p>

            </div>
        </div>
    </section>
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script>
        $('.col_details').hide();
        $('.tabs a').on('click',function () {
            $('.col_details').show('slow');

        });


    </script>
</footer>

</html>
