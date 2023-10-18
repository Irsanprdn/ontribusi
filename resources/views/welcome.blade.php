<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Ontribusi</title>
    <link href="{{ asset('assets') }}/img/Logo-Ontribusi.png" rel="icon">
    <link href="{{ asset('assets') }}/img/Logo-Ontribusi.png" rel="apple-touch-icon">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />

    <!-- Slick -->
    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/slick-theme.css" /> -->

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">

    <!-- Swiper -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        @include('layout.navbar-menu')
        <!-- /TOP HEADER -->
        @include('layout.navbar-search')
        <!-- MAIN HEADER -->

        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <!-- IKLAN -->
            </div>
            <div class="col-md-8">
                <!-- CONTENT -->
                <div class="main-carousel">
                    @include('layout.carousel')
                </div>
                <!-- MAIN CONTENT -->
                <div class="main-content">


                    <div class="row">
                        <div class="col-md-3 my-3">
                            <button class="w-webkit-fill-available btn btn-danger btn-lg" onclick="filterTab(this)" href="#tab1">Telah Hilang</button>
                        </div>
                        <div class="col-md-3 my-3">
                            <button class="w-webkit-fill-available btn btn-success btn-lg" onclick="filterTab(this)" href="#tab2">Telah Ditemukan</button>
                        </div>
                        <div class="col-md-3 my-3">
                            <button class="w-webkit-fill-available btn btn-warning btn-lg" onclick="filterTab(this)" href="#tab3">Prioritas</button>
                        </div>
                        <div class="col-md-3 my-3">
                            <button class="w-webkit-fill-available btn btn-primary btn-lg" onclick="filterTab(this)" href="#tab4">Mitra Resmi</button>
                        </div>
                    </div>

                    <div class="swiper product-swiper tab-pane active" id="tab1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-danger">Telah Hilang</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product01.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-danger">Telah Hilang</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product01.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-danger">Telah Hilang</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product01.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-danger">Telah Hilang</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product01.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-danger">Telah Hilang</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product01.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev" id="btn-prev-swiper"></div>
                        <div class="swiper-button-next" id="btn-next-swiper"></div>
                    </div>

                    <div class="swiper product-swiper tab-pane" id="tab2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-success">Telah Ditemukan</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-success">Telah Ditemukan</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-success">Telah Ditemukan</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-success">Telah Ditemukan</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-address">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <p class="product-category btn-success">Telah Ditemukan</p>
                                    <div class="product-img">
                                        <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                        <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <p class="product-desc">Penjelasan dari produk tersebut</p>
                                        <p class="product-address">Tangerang,Banten</p>
                                        <p class="product-date">18 Oktober 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev" id="btn-prev-swiper"></div>
                        <div class="swiper-button-next" id="btn-next-swiper"></div>
                    </div>


                    <div class="rekomendasi">
                        <div class="d-flex mt-5">
                            <h1 class="mr-4">Rekomendasi</h1>
                            <a href="#" class="cursor-pointer mt-3 text-primary font-size-15 font-weight-700">Lihat Semua</a>
                        </div>

                        <div class="swiper product-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-date">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev" id="btn-prev-swiper"></div>
                            <div class="swiper-button-next" id="btn-next-swiper"></div>
                        </div>
                    </div>


                    <div class="kategori-campuran">
                        <div class="d-flex mt-5">
                            <h1 class="mr-4">Kategori Campuran</h1>
                            <a href="#" class="cursor-pointer mt-3 text-primary font-size-15 font-weight-700">Lihat Semua</a>
                        </div>

                        <div class="swiper product-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-address">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product">
                                        <p class="product-category btn-success">Telah Ditemukan</p>
                                        <div class="product-img">
                                            <img src="{{asset('assets')}}/img/product02.png" alt="" width="50">
                                            <!-- <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div> -->
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <p class="product-desc">Penjelasan dari produk tersebut</p>
                                            <p class="product-address">Tangerang,Banten</p>
                                            <p class="product-date">18 Oktober 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev" id="btn-prev-swiper"></div>
                            <div class="swiper-button-next" id="btn-next-swiper"></div>
                        </div>
                    </div>
                </div>

                <!-- END MAIN CONTENT -->
            </div>
            <div class="col-md-2">
                <!-- IKLAN -->
            </div>
        </div>
    </div>

    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <!-- <script src="{{ asset('assets') }}/js/slick.min.js"></script> -->
    <script src="{{ asset('assets') }}/js/nouislider.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.zoom.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script>
        function filterTab(e) {
            $('.tab-pane').removeClass('active')
            var id = $(e).attr('href')
            $(id).addClass('active')
        }
    </script>
</body>

</html>