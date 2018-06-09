@include('front.include.header')

<div id="menu-wrap">
    <!-- menu container start here -->
    <div class="container">
        <nav class="navbar hidden-xs" id="menu">
            <div class="navbar-header"><span class="visible-xs category">Menu</span>
                <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Home<span class="caret"></span></a>
                        <div class="dropdown-menu" >
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index2.html">Home Page 2</a></li>
                                    <li><a href="index3.html">Home Page 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Elements<span class="caret"></span></a>
                        <div class="dropdown-menu" >
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="faq.html">Tabs & Accordions</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="contact.html">Form</a></li>
                                    <li><a href="list-page.html">Grid</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Features<span class="caret"></span></a>
                        <div class="dropdown-menu" >
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="header-2.html">Header Right</a></li>
                                    <li><a href="header-3.html">Header Center</a></li>
                                    <li><a href="full_width.html">Full Width</a></li>
                                    <li><a href="right.html">Sidebar Right</a></li>
                                    <li><a href="left.html">Sidebar Left</a></li>
                                    <li><a href="footerwigit.html">Footer Light</a></li>
                                    <li><a href="index.html">Footer Widgit</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Extra<span class="caret"></span></a>
                        <div class="dropdown-menu" >
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="result-not-found.html">404</a></li>
                                    <li><a href="full_width.html">Testimonial</a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Property<span class="caret"></span></a>
                        <div class="dropdown-menu" >
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li><a href="list-page.html">Property Listing</a></li>
                                    <li><a href="list-column.html">Listing 3 column  </a></li>
                                    <li><a href="list-detail.html">Listing detail </a></li>
                                    <li><a href="list-detail1.html">Listing detail 2 </a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a id="dLabel" data-toggle="dropdown" class="dropdown-toggle" href="#">Pages<span class="caret"></span></a>
                        <div class="dropdown-menu" >
                            <div class="dropdown-inner">
                                <ul class="dropdown-menu list-unstyled">
                                    <li class="dropdown-submenu">
                                        <a id="menu_1" data-toggle="dropdown" class="dropdown-toggle" href="#">Listing Layout</a>
                                        <div class="dropdown-menu" >
                                            <div class="dropdown-inner">
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li><a href="hotel.html">Hotels</a></li>
                                                    <li><a href="flat.html">Flats</a></li>
                                                    <li><a href="list-page.html">Property catalog grid</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="menu_2" data-toggle="dropdown" class="dropdown-toggle" href="#">Header Layout</a>
                                        <div class="dropdown-menu" >
                                            <div class="dropdown-inner">
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li><a href="header-2.html">Header Right</a></li>
                                                    <li><a href="index.html">Header left</a></li>
                                                    <li><a href="header-3.html">Header Center</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="menu_3" data-toggle="dropdown" class="dropdown-toggle" href="#">Sidebar Layout</a>
                                        <div class="dropdown-menu" >
                                            <div class="dropdown-inner">
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li><a href="right.html">Sidebar Right</a></li>
                                                    <li><a href="left.html">Sidebar Left</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="menu_4" data-toggle="dropdown" class="dropdown-toggle" href="#">Footer Layout</a>
                                        <div class="dropdown-menu" >
                                            <div class="dropdown-inner">
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li><a href="footerwigit.html">Footer Light</a></li>
                                                    <li><a href="index.html">Footer Widgit</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="menu_5" data-toggle="dropdown" class="dropdown-toggle" href="#">Search Layout</a>
                                        <div class="dropdown-menu" >
                                            <div class="dropdown-inner">
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li><a href="search_result.html">Search</a></li>
                                                    <li><a href="result-not-found.html">Search not found</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="menu_6" data-toggle="dropdown" class="dropdown-toggle" href="#">Blog Layout</a>
                                        <div class="dropdown-menu" >
                                            <div class="dropdown-inner">
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-detail.html">Blog Single</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="full_width.html">Full Width</a></li>
                                    <li><a href="about_us.html">About us</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </div>
        </nav>
        <!-- mobile menu starts -->
        <nav class="navbar visible-xs" id="menu_mobile">
            <div class="navbar-header"><span class="visible-xs category">Menu</span>
                <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a data-toggle="collapse" data-target="#home" class="collapse">Home<span class="caret"></span></a>
                        <div id="home" class="collapse">
                            <ul class="list-unstyled">
                                <li><a href="index.html">Home Page 1</a></li>
                                <li><a href="index2.html">Home Page 2</a></li>
                                <li><a href="index3.html">Home Page 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="collapse" data-target="#element" class="collapse">Elements<span class="caret"></span></a>
                        <div id="element" class="collapse">
                            <ul class="list-unstyled">
                                <li><a href="faq.html">Tabs & Accordions</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="contact.html">Form</a></li>
                                <li><a href="list-page.html">Grid</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="collapse" data-target="#features" class="collapse">Features<span class="caret"></span></a>
                        <div id="features" class="collapse">
                            <ul class="list-unstyled">
                                <li><a href="header-2.html">Header Right</a></li>
                                <li><a href="header-3.html">Header Center</a></li>
                                <li><a href="full_width.html">Full Width</a></li>
                                <li><a href="right.html">Sidebar Right</a></li>
                                <li><a href="left.html">Sidebar Left</a></li>
                                <li><a href="footerwigit.html">Footer Light</a></li>
                                <li><a href="index.html">Footer Widgit</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="collapse" data-target="#extra" class="collapse">Extra<span class="caret"></span></a>
                        <div id="extra" class="collapse">
                            <ul class="list-unstyled">
                                <li><a href="result-not-found.html">404</a></li>
                                <li><a href="full_width.html">Testimonial</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="collapse" data-target="#property" class="collapse">Property<span class="caret"></span></a>
                        <div id="property" class="collapse">
                            <ul class="list-unstyled">
                                <li><a href="list-page.html">Property Listing</a></li>
                                <li><a href="list-column.html">Listing 3 column  </a></li>
                                <li><a href="list-detail.html">Listing detail </a></li>
                                <li><a href="list-detail1.html">Listing detail 2 </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="collapse" data-target="#demo" class="collapse">Pages<span class="caret"></span></a>
                        <div id="demo" class="collapse">
                            <ul class="list-unstyled">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" >Listing Layout</a>
                                    <ul class="dropdown-menu list-unstyled">
                                        <li><a href="hotel.html">Hotels</a></li>
                                        <li><a href="flat.html">Flats</a></li>
                                        <li><a href="list-page.html">Property catalog grid</a></li>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" >Header Layout</a>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li><a href="header-2.html">Header Right</a></li>
                                                <li><a href="index.html">Header left</a></li>
                                                <li><a href="header-3.html">Header Center</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" >Sidebar Layout</a>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li><a href="right.html">Sidebar Right</a></li>
                                                <li><a href="left.html">Sidebar Left</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" >Footer Layout</a>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li><a href="footerwigit.html">Footer Light</a></li>
                                                <li><a href="index.html">Footer Widgit</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" >Search Layout</a>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li><a href="search_result.html">Search</a></li>
                                                <li><a href="result-not-found.html">Search not found</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" >Blog Layout</a>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-detail.html">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="full_width.html">Full Width</a></li>
                                        <li><a href="about_us.html">About us</a></li>
                                    </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- mobile menu ends -->
    </div>
    <!-- menu container end here -->
</div>
<!-- menu end here -->

<div class="bread appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
    <div class="container">
        <!--Breadcrumb start here-->
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Properties</a></li>
        </ul>
        <h2 class="main-heading">listing detail</h2>
        <!--Breadcrumb end here-->
    </div>
</div>

<div class="listing-map appear" data-ride="animated" data-animation="fadeInRight" data-delay="300" style=" pointer-events: none;">
    <!--Map iframe starts here-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.1220098930553!2d75.8778043146153!3d30.911213584060857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a83a410b99833%3A0xbe41bee863220706!2sThe+Multimedia+Designer!5e0!3m2!1sen!2sin!4v1469273918692" allowfullscreen></iframe>
</div>
<!--Map iframe end here-->

<!-- main container start here -->
<div class="container">

    <div class="row">
        <!-- #content start here -->
        <div id="content" class="col-sm-12 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
            <div class="thumb">
                <img src="images/big-image1.png" alt="image big" title="image big" class="img-responsive"/>

                <div id="additional1" class="owl-carousel">
                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv1.png" />
                    </div>

                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv2.png" />
                    </div>

                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv3.png" />
                    </div>

                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv4.png" />
                    </div>

                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv5.png" />
                    </div>

                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv6.png" />
                    </div>

                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv7.png" />
                    </div>
                    <div class="item">
                        <img class="img-responsive" alt="additional images" src="images/thumbv8.png" />
                    </div>
                </div>
            </div>
            <div class="listing-caption appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                <h4><a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a></h4>
                <div class="price">
                    <span class="text">Price:</span>
                    $25,00,000
                </div>
                <div class="sqft">
                    <span class="text">Sq Ft: <span class="sqno">1560</span> </span>
                    <ul class="list-inline">
                        <li><span class="bedrooms"></span> 5</li>
                        <li><span class="bathrooms"></span> 2</li>
                    </ul>
                </div>
            </div>
            <div class="listing-caption appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                <h3>Features</h3>
                <ul class="list-inline feat">
                    <li><img src="images/icons-grey/pool.png" alt="pool" title="pool" class="img-responsive"/> Outdoor Pool</li>
                    <li><img src="images/icons-grey/internet.png" alt="internet" title="internet" class="img-responsive"/> Internet</li>
                    <li><img src="images/icons-grey/playg.png" alt="playground" title="playground" class="img-responsive"/> Playground</li>
                    <li><img src="images/icons-grey/garage.png" alt="Garage" title="Garage" class="img-responsive"/> Garage</li>
                    <li><img src="images/icons-grey/air.png" alt="air" title="air" class="img-responsive"/> Air conditioning</li>
                    <li><img src="images/icons-grey/balcony.png" alt="balcony" title="balcony" class="img-responsive"/> Balcony</li>
                    <li><img src="images/icons-grey/Gym.html" alt="gym" title="gym" class="img-responsive"/> Gym</li>
                </ul>
            </div>
            <div class="listing-caption">
                <h3>details</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla usus legentis in iis qui facit eorum claritatem.</p>
            </div>

            <div class="listing-caption appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                <h3>Tags</h3>
                <ul class="list-inline tags">
                    <li><a href="#">Real estate</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Selling</a></li>
                    <li><a href="#">home</a></li>
                </ul>
            </div>
        </div>
        <!-- #content end here -->
    </div>
</div>


@include('front.include.footer')