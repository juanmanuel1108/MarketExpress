<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>MarketExpress</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="../../public/Img/icono.png" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <link rel="stylesheet" href="../../css/fonts.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/stylee.css" type="text/css" media="screen">
  <script src="{{asset('Js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('Js/jquery-3.3.1.slim.min.js')}}"></script>
  <script src="{{asset('Js/jquery.validate.js')}}"></script>
  <script src="{{asset('Js/notify.js')}}"></script>
  <script src="{{asset('Js/aplication.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>

<body>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container"><span></span><span></span><span></span><span></span>
      </div>
    </div>
  </div>
  <div class="page"><a class="section section-banner d-none d-xl-block"
      {{--href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x )"><img src="../images/banner/foreground-04-1600x60.png" srcset="../images/banner/foreground-04-1600x60.png 1x, images/banner/foreground-04-3200x120.png 2x" alt="" width="1600" height="310"--}}></a>
    <!-- Page Header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap rd-navbar-modern-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="http://localhost:8888/Parte/public/"><img
                      src="../../public/Img/logo.png" alt="" width="3000" height="1000" /></a></div>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Basket-->
                  <div class="rd-navbar-basket-wrap">
                    <button class="rd-navbar-basket fl-bigmug-line-shopping198"
                      data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
                    <div class="cart-inline">
                      <div class="cart-inline-header">
                        <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                        <h6 class="cart-inline-title">Total price:<span> $800</span></h6>
                      </div>
                      <div class="cart-inline-body">
                        <div class="cart-inline-item">
                          <div class="unit align-items-center">
                            <div class="unit-left"><a class="cart-inline-figure" href="#"><img
                                  src="../images/product-mini-1-108x100.png" alt="" width="108" height="100" /></a>
                            </div>
                            <div class="unit-body">
                              <h6 class="cart-inline-name"><a href="#">Blueberries</a></h6>
                              <div>
                                <div class="group-xs group-inline-middle">
                                  <div class="table-cart-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1"
                                      max="1000">
                                  </div>
                                  <h6 class="cart-inline-title">$550</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cart-inline-item">
                          <div class="unit align-items-center">
                            <div class="unit-left"><a class="cart-inline-figure" href="#"><img
                                  src="../images/product-mini-2-108x100.png" alt="" width="108" height="100" /></a>
                            </div>
                            <div class="unit-body">
                              <h6 class="cart-inline-name"><a href="#">Avocados</a></h6>
                              <div>
                                <div class="group-xs group-inline-middle">
                                  <div class="table-cart-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1"
                                      max="1000">
                                  </div>
                                  <h6 class="cart-inline-title">$250</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="cart-inline-footer">
                        <div class="group-sm"><a class="button button-md button-default-outline-2 button-wapasha"
                            href="#">Go to cart</a><a class="button button-md button-primary button-pipaluk"
                            href="#">Checkout</a></div>
                      </div>
                    </div>
                  </div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198"
                    href="#"><span>2</span></a>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle"
                      data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="#">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input"
                          type="text" name="search">
                        <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                      </div>
                    </form>
                  </div>

                  <!-- RD Navbar Nav-->
                  <ul class="nav">
                    <li>
                      <a class="btn dropdown-toggle rd-nav-link" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Proveedor
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <a class="dropdown-item" href="{{route('insertarproveed')}}">Registrar Proveedor</a><br>
                        <a class="dropdown-item" href="{{route('viewproved')}}">Listado de Proveedores</a>
                      </div>
                    </li>

                    <li>
                      <a class="btn dropdown-toggle rd-nav-link" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categoria
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <a class="dropdown-item" href="{{route('insertarcatego')}}">Registrar Categoria</a><br>
                        <a class="dropdown-item" href="{{route('viewcatego')}}">Listado de Categorias</a>
                      </div>
                    </li>

                    <li>
                      <a class="btn dropdown-toggle rd-nav-link" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Producto
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <a class="dropdown-item" href="{{route('ViewInsertProducto')}}">Registrar Producto</a><br>
                        <a class="dropdown-item" href="{{route('viewproduc')}}">Listado de Productos</a>
                      </div>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Factura</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Cliente</a>
                    </li>
                  </ul>
                </div>
                <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main"
                  data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                  <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span
                      class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span>
                  </div>
                  <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span
                      class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                  </div>
                  <div class="project-close"><span></span><span></span></div>
                </div>
              </div>
              <div class="rd-navbar-project rd-navbar-modern-project">
                <div class="rd-navbar-project-modern-header">
                  <h4 class="rd-navbar-project-modern-title">Get in Touch</h4>
                  <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main"
                    data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                  <div>
                    <p>We are always ready to provide you with fresh organic products for your home or office. Contact
                      us to find out how we can help you.</p>
                    <div class="heading-6 subtitle">Our Contacts</div>
                    <div class="row row-10 gutters-10">
                      <div class="col-12"><img src="../images/home-sidebar-394x255.jpg" alt="" width="394"
                          height="255" />
                      </div>
                    </div>
                    <ul class="rd-navbar-modern-contacts">
                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles,
                              CA 90027</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-email" href="mailto:#">mail@demolink.org</a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-inline rd-navbar-modern-list-social">
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                      <li><a class="icon fa fa-pinterest" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    @yield('plantilla')

  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="../../js/core.min.js"></script>
  <script src="../../js/script.js"></script>
  <!-- coded by Ragnar-->
</body>

</html>