<header>
    <div class="header-top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-7 col-sm-7">
                    <div class="header-top-left">
                        <ul>
                            <li class="d-none d-xl-flex"><i class="flaticon-location"></i>Quebec-Montreal</li>
                            <li class="d-none d-lg-flex"><i class="flaticon-email"></i> contact@afrikascribe.com</li>
                            <li><i class="flaticon-clock"></i> Heure d'ouverture: 8h30 - 18h30</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 col-sm-5">
                    <div class="header-top-right">
                        <ul>
                            <li class="header-user-info">
                                <i class="flaticon-businessman"></i>
                               @if (!Auth::check())
                               <a href="{{ url('verification') }}">Login / Register</a>                                   
                               @endif
                            </li>
                            <li class="header-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div id="header-top-fixed"></div>
    <div id="sticky-header" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="/"><img src="{{ url('asset/img/icons/grand_logo.jpg') }}" alt=""></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="{{ request()->is('notre-equipe') || request()->is('nos-partenaires')?'active':'' }} menu-item-has-children"><a href="{{ url('qui-sommes-nous') }}">A propos ?</a>
                                        <ul class="sub-menu">
                                            <li class="{{ request()->is('notre-equipe')?'active':'' }}"><a href="{{ url('notre-equipe') }}">Notre Equipe</a></li>
                                            {{-- <li><a href="#">Devenir Correcteur</a></li> --}}
                                            <li class="{{ request()->is('nos-partenaires')?'active':'' }}"><a href="{{ url('nos-partenaires') }}">Nos Partenaires</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('relecture-correction')|| request()->is('traduction-professionnelle')|| request()->is('comment-ca-marche')|| request()->is('tarifs') || request()->is('services-additionnels')?'active':'' }}
                                    menu-item-has-children"><a href="#">Nos Services</a>
                                        <ul class="sub-menu">                                              
                                            <li class="{{ request()->is('relecture-correction')?'active':'' }}"><a href="{{ url('relecture-correction') }}">Relectures et Corrections</a></li>
                                            <li class="{{ request()->is('traduction-professionnelle')?'active':'' }}" ><a href="{{ url('traduction-professionnelle') }}">Traduction et Certification</a></li>
                                            <li class="{{ request()->is('comment-ca-marche')?'active':'' }}" ><a href="{{ url('comment-ca-marche') }}">Questions Fréquentes</a></li>
                                            <li class="{{ request()->is('tarifs')?'active':'' }}" ><a href="{{ url('tarifs') }}"> Combien sa coûte?</a></li>
                                            <li class="{{ request()->is('services-additionnels')?'active':'' }}" ><a href="{{ url('services-additionnels') }}">Services Additionnels</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('document-en-francais') || request()->is('document-en-anglais')?'active':'' }} menu-item-has-children"><a href="#">Documents</a>
                                        <ul class="sub-menu">
                                            <li class="{{ request()->is('document-en-francais')?'active':'' }}" ><a href="{{ url('document-en-francais') }}">Document en Français</a></li>
                                            <li class="{{ request()->is('document-en-anglais')?'active':'' }}" ><a href="{{ url('document-en-anglais') }}">Document en Anglais</a></li>
                                          
                                        </ul>
                                    </li>
                                    {{-- <li class="menu-item-has-children"><a href="blog.html">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Our News</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="{{ request()->is('nous-contacter')?'active':'' }}"><a href="{{ url('nous-contacter') }}">Nous contacter</a></li>
                                </ul>
                            </div>
                            
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    {{-- <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-cart"></i><span>0</span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset('asset/img/products/cart_p01.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Gigabyte Dual Band Wi-Fi Router</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset('asset/img/products/cart_p02.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Netfix Dual Whole TV Box System</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="#">Shopping Cart</a>
                                                    <a class="black-color" href="#">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="header-btn" ><a style="height: 2px; width: 100%;" href="{{ url('relecture-correction') }}" class="btn transparent-btn">Passer une commande</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo"><a href="index.html"><img src="{{ asset('asset/img/logo/logo.png')}}" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>