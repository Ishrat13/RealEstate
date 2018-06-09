@include('front.include.header')
<!-- header end here -->

<!-- menu start here -->

<!-- menu end here -->

<!-- form-set start here -->
<div class="form-set">
    <!-- slider starts here -->
    <div id="slideshow" class="owl-carousel">
        <div class="item">
            <img class="img-responsive" alt="banner" src="{{asset('front/images/slider_banner.png')}}" />
        </div>
        <div class="item">
            <img class="img-responsive" alt="banner" src="{{asset('front/images/slider_banner.png')}}" />
        </div>
    </div>
    <!-- slider end here -->
    <!-- slider_search start here -->
    <div class="container">
        <div class="row main-form1">
            <div class="col-md-4 col-sm-12 slider_search1  appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                <h4>FIND PROPERTY</h4>
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="#">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select class="form-control"><option>Property Type</option>
                                <option>Rent</option>
                                <option>Sale</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="location" placeholder="Loaction" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 width95">
                        <div class="form-group">
                            <input type="text" class="form-control" name="min-price" placeholder="Min-price" required="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 width95">
                        <div class="form-group">
                            <input type="text" class="form-control pull-right" name="max-price" placeholder="Max-price" required="">
                        </div>
                    </div>
                    <button  class="btn button_search1" type="submit"><i class="fa fa-search"></i> SEARCH</button>
                </form>
            </div>
        </div>
    </div>
    <!-- slider_search end here -->
</div>
<!-- form-set end here -->

<!-- main container start here -->
<div class="container">
    <div class="row">
        <!-- #content start here -->
        <div id="content" class="col-sm-12  appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
            <!-- property_search start here -->
            <div class="property_search clearfix">
                <div class="col-sm-4 text-center rotate_button appear" data-ride="animated" data-animation="fadeIn" data-delay="300">
                    <div class="rotate">
                        <i class="fa fa-search"></i>
                    </div>
                    <h3>Smart Property Search</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur diping elit. Curabitur non gravida nisi. Nam vel magna
                    </p>
                    <a href="about_us.html" class="btn btn-gery">Read More</a>
                </div>
                <div class="col-sm-4 text-center rotate_button appear" data-ride="animated" data-animation="fadeIn" data-delay="300">
                    <div class="rotate">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3>15 000+ Satisfied Users</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur diping elit. Curabitur non gravida nisi. Nam vel magna
                    </p>
                    <a href="about_us.html" class="btn btn-gery">Read More</a>
                </div>
                <div class="col-sm-4 text-center rotate_button appear" data-ride="animated" data-animation="fadeIn" data-delay="300">
                    <div class="rotate">
                        <i class="fa fa-thumbs-o-up"></i>
                    </div>
                    <h3>We Are Happy To Help You </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur diping elit. Curabitur non gravida nisi. Nam vel magna
                    </p>
                    <a href="about_us.html" class="btn btn-gery">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- property_search end here -->

<!--latest product code start here-->
<div class="latest_product">
    <div class="container">
        <div class="latest_product_heading">
            <h3>Properties</h3><span class="triangle"></span><span class="single"></span>
        </div>
        <!-- row start here -->
        <div class="row appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
            <!-- latest_main start here -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                <div class="product-thumb transition">
                    <div class="image">
                        <div class="sale">
                            <span>Rent</span>
                        </div>
                        <a href="list-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/p1.png')}}"></a>
                    </div>
                    <div class="caption">
                        <div class="featured_product ">
                            <h4><a href="#">Ondimentum maluada velit beum</a></h4>
                            <p class="price"><span class="text">Price:</span>$25,00,000</p>
                            <div class="sqft">
                                <span class="text">Sq Ft: 1560 </span>
                                <ul class="list-inline">
                                    <li><span class="bedrooms"></span> 5</li>
                                    <li><span class="bathrooms"></span> 2</li>
                                </ul>
                            </div>
                            <div class="amenities">
                                <span class="text">Amenities :</span>
                                <ul class="list-inline">
                                    <li><span class="pool"></span></li>
                                    <li><span class="internet"></span></li>
                                    <li><span class="gym"></span></li>
                                </ul>
                            </div>
                            <div class="nearest">
                                <span class="text">Nearest Place :</span>
                                <ul class="list-inline">
                                    <li><span class="airport"></span> </li>
                                    <li><span class="hospital"></span> </li>
                                    <li><span class="bus-stand"></span> </li>
                                    <li><span class="temple"></span> </li>
                                </ul>
                            </div>
                        </div>
                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                        <a href="list-detail.html" class="product_button"><i class="fa fa-file-text"></i> Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeIn" data-delay="300">
                <div class="product-thumb transition">
                    <div class="image">
                        <div class="sale">
                            <span>Rent</span>
                        </div>
                        <a href="list-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/p2.png')}}"></a>
                    </div>
                    <div class="caption">
                        <div class="featured_product ">
                            <h4><a href="#">Ondimentum maluada velit beum</a></h4>
                            <p class="price"><span class="text">Price:</span>$25,00,000</p>
                            <div class="sqft">
                                <span class="text">Sq Ft: 1560 </span>
                                <ul class="list-inline">
                                    <li><span class="bedrooms"></span> 5</li>
                                    <li><span class="bathrooms"></span> 2</li>
                                </ul>
                            </div>
                            <div class="amenities">
                                <span class="text">Amenities :</span>
                                <ul class="list-inline">
                                    <li><span class="pool"></span></li>
                                    <li><span class="internet"></span></li>
                                    <li><span class="gym"></span></li>
                                </ul>
                            </div>
                            <div class="nearest">
                                <span class="text">Nearest Place :</span>
                                <ul class="list-inline">
                                    <li><span class="airport"></span> </li>
                                    <li><span class="hospital"></span> </li>
                                    <li><span class="bus-stand"></span> </li>
                                    <li><span class="temple"></span> </li>
                                </ul>
                            </div>
                        </div>
                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                        <a href="list-detail.html" class="product_button"><i class="fa fa-file-text"></i> Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                <div class="product-thumb transition">
                    <div class="image">
                        <div class="sale">
                            <span>Rent</span>
                        </div>
                        <a href="list-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/p3.png')}}"></a>
                    </div>
                    <div class="caption">
                        <div class="featured_product ">
                            <h4><a href="#">Ondimentum maluada velit beum</a></h4>
                            <p class="price"><span class="text">Price:</span>$25,00,000</p>
                            <div class="sqft">
                                <span class="text">Sq Ft: 1560 </span>
                                <ul class="list-inline">
                                    <li><span class="bedrooms"></span> 5</li>
                                    <li><span class="bathrooms"></span> 2</li>
                                </ul>
                            </div>
                            <div class="amenities">
                                <span class="text">Amenities :</span>
                                <ul class="list-inline">
                                    <li><span class="pool"></span></li>
                                    <li><span class="internet"></span></li>
                                    <li><span class="gym"></span></li>
                                </ul>
                            </div>
                            <div class="nearest">
                                <span class="text">Nearest Place :</span>
                                <ul class="list-inline">
                                    <li><span class="airport"></span> </li>
                                    <li><span class="hospital"></span> </li>
                                    <li><span class="bus-stand"></span> </li>
                                    <li><span class="temple"></span> </li>
                                </ul>
                            </div>
                        </div>
                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                        <a href="list-detail.html" class="product_button"><i class="fa fa-file-text"></i> Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                <div class="product-thumb transition">
                    <div class="image">
                        <div class="sale">
                            <span>Rent</span>
                        </div>
                        <a href="list-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/p4.png')}}"></a>
                    </div>
                    <div class="caption">
                        <div class="featured_product ">
                            <h4><a href="#">Ondimentum maluada velit beum</a></h4>
                            <p class="price"><span class="text">Price:</span>$25,00,000</p>
                            <div class="sqft">
                                <span class="text">Sq Ft: 1560 </span>
                                <ul class="list-inline">
                                    <li><span class="bedrooms"></span> 5</li>
                                    <li><span class="bathrooms"></span> 2</li>
                                </ul>
                            </div>
                            <div class="amenities">
                                <span class="text">Amenities :</span>
                                <ul class="list-inline">
                                    <li><span class="pool"></span></li>
                                    <li><span class="internet"></span></li>
                                    <li><span class="gym"></span></li>
                                </ul>
                            </div>
                            <div class="nearest">
                                <span class="text">Nearest Place :</span>
                                <ul class="list-inline">
                                    <li><span class="airport"></span> </li>
                                    <li><span class="hospital"></span> </li>
                                    <li><span class="bus-stand"></span> </li>
                                    <li><span class="temple"></span> </li>
                                </ul>
                            </div>
                        </div>
                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                        <a href="list-detail.html" class="product_button"><i class="fa fa-file-text"></i> Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeUp" data-delay="300">
                <div class="product-thumb transition">
                    <div class="image">
                        <div class="sale">
                            <span>Rent</span>
                        </div>
                        <a href="list-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/p5.png')}}"></a>
                    </div>
                    <div class="caption">
                        <div class="featured_product ">
                            <h4><a href="#">Ondimentum maluada velit beum</a></h4>
                            <p class="price"><span class="text">Price:</span>$25,00,000</p>
                            <div class="sqft">
                                <span class="text">Sq Ft: 1560 </span>
                                <ul class="list-inline">
                                    <li><span class="bedrooms"></span> 5</li>
                                    <li><span class="bathrooms"></span> 2</li>
                                </ul>
                            </div>
                            <div class="amenities">
                                <span class="text">Amenities :</span>
                                <ul class="list-inline">
                                    <li><span class="pool"></span></li>
                                    <li><span class="internet"></span></li>
                                    <li><span class="gym"></span></li>
                                </ul>
                            </div>
                            <div class="nearest">
                                <span class="text">Nearest Place :</span>
                                <ul class="list-inline">
                                    <li><span class="airport"></span> </li>
                                    <li><span class="hospital"></span> </li>
                                    <li><span class="bus-stand"></span> </li>
                                    <li><span class="temple"></span> </li>
                                </ul>
                            </div>
                        </div>
                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                        <a href="list-detail.html" class="product_button"><i class="fa fa-file-text"></i> Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                <div class="product-thumb transition">
                    <div class="image">
                        <div class="sale">
                            <span>Rent</span>
                        </div>
                        <a href="list-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/p1.png')}}"></a>
                    </div>
                    <div class="caption">
                        <div class="featured_product ">
                            <h4><a href="#">Ondimentum maluada velit beum</a></h4>
                            <p class="price"><span class="text">Price:</span>$25,00,000</p>
                            <div class="sqft">
                                <span class="text">Sq Ft: 1560 </span>
                                <ul class="list-inline">
                                    <li><span class="bedrooms"></span> 5</li>
                                    <li><span class="bathrooms"></span> 2</li>
                                </ul>
                            </div>
                            <div class="amenities">
                                <span class="text">Amenities :</span>
                                <ul class="list-inline">
                                    <li><span class="pool"></span></li>
                                    <li><span class="internet"></span></li>
                                    <li><span class="gym"></span></li>
                                </ul>
                            </div>
                            <div class="nearest">
                                <span class="text">Nearest Place :</span>
                                <ul class="list-inline">
                                    <li><span class="airport"></span> </li>
                                    <li><span class="hospital"></span> </li>
                                    <li><span class="bus-stand"></span> </li>
                                    <li><span class="temple"></span> </li>
                                </ul>
                            </div>
                        </div>
                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                        <a href="list-detail.html" class="product_button"><i class="fa fa-file-text"></i> Details</a>
                    </div>
                </div>
            </div>
            <!-- latest_main end here -->
        </div>
        <!-- row end here -->
        <!-- #content end here -->
    </div>
</div>
<!--latest product code end here-->

<!--our agents-->
<div class="container">
    <div class="row appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
        <div class="agent">
            <h3><span>Our Agents</span></h3><hr>
            <div id="agents" class="owl-carousel">
                <div class="col-sm-12 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="item">
                        <img class="img-responsive" alt="banner" src="{{asset('front/images/testi-3.png')}}" />
                        <div class="name">John doe</div>
                        <div class="desg">sr. manager</div>
                        <div class="comment">Lorem ipsum dolor sit ametcon se ctetur diping elit. Curabitur non gravida nisi. Nam vel magna</div>
                        <a href="#">View Profile</a>
                    </div>
                </div>
                <div class="col-sm-12 appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <div class="item">
                        <img class="img-responsive" alt="banner" src="{{asset('front/images/testi-4.png')}}" />
                        <div class="name">John doe</div>
                        <div class="desg">sr. manager</div>
                        <div class="comment">Lorem ipsum dolor sit ametcon se ctetur diping elit. Curabitur non gravida nisi. Nam vel magna</div>
                        <a href="#">View Profile</a>
                    </div>
                </div>
                <div class="col-sm-12 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="item">
                        <img class="img-responsive" alt="banner" src="{{asset('front/images/testi-1.png')}}" />
                        <div class="name">John doe</div>
                        <div class="desg">sr. manager</div>
                        <div class="comment">Lorem ipsum dolor sit ametcon se ctetur diping elit. Curabitur non gravida nisi. Nam vel magna</div>
                        <a href="#">View Profile</a>
                    </div>
                </div>
                <div class="col-sm-12 appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <div class="item">
                        <img class="img-responsive" alt="banner" src="{{asset('front/images/testi-2.png')}}" />
                        <div class="name">John doe</div>
                        <div class="desg">sr. manager</div>
                        <div class="comment">Lorem ipsum dolor sit ametcon se ctetur diping elit. Curabitur non gravida nisi. Nam vel magna</div>
                        <a href="#">View Profile</a>
                    </div>
                </div>
                <div class="col-sm-12 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="item">
                        <img class="img-responsive" alt="banner" src="{{asset('front/images/testi-3.png')}}" />
                        <div class="name">John doe</div>
                        <div class="desg">sr. manager</div>
                        <div class="comment">Lorem ipsum dolor sit ametcon se ctetur diping elit. Curabitur non gravida nisi. Nam vel magna</div>
                        <a href="#">View Profile</a>
                    </div>
                </div>
                <div class="col-sm-12 appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <div class="item">
                        <img class="img-responsive" alt="banner" src="{{asset('front/images/testi-4.png')}}" />
                        <div class="name">John doe</div>
                        <div class="desg">sr. manager</div>
                        <div class="comment">Lorem ipsum dolor sit ametcon se ctetur diping elit. Curabitur non gravida nisi. Nam vel magna</div>
                        <a href="#">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--our agents code end-->

<!--our latest blog code start-->
<div class="latestblog">
    <div class="container appear" data-ride="animated" data-animation="fadeInRight" data-delay="300"">

    <h3><span>Our Latest Blog</span></h3><hr>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300"">
        <div class="product-thumb">
            <a href="#"><img class="img-responsive" alt="banner" src="{{asset('front/images/blog1.png')}}" /></a>
            <div class="blog-caption">
                <h4><a href="#">Ronsectetur adipiscing elit. Vivamus
                        id interdum nibh, eu</a></h4>
                <p>Vestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet, id laoreet quam ultrices. Vivamus volutpat odio id </p>
                <div class="readmore">
                    <a href="#">Read More >></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300"">
    <div class="product-thumb">
        <a href="#"><img class="img-responsive" alt="banner" src="{{asset('front/images/blog2.png')}}" /></a>
        <div class="blog-caption">
            <h4><a href="#">Honsectetur adipiscing elit. Vivamus
                    id interdum nibh, eu</a></h4>
            <p>Vestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet, id laoreet quam ultrices. Vivamus volutpat odio id </p>
            <div class="readmore">
                <a href="#">Read More >></a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300"">
<div class="product-thumb">
    <a href="#"><img class="img-responsive" alt="banner" src="{{asset('front/images/blog3.png')}}" /></a>
    <div class="blog-caption">
        <h4><a href="#">Wonsectetur adipiscing elit. Vivamus
                id interdum nibh, eu</a></h4>
        <p>Vestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet, id laoreet quam ultrices. Vivamus volutpat odio id </p>
        <div class="readmore">
            <a href="#">Read More >></a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--our latest blog code end-->

<!--our gallery code start-->
<div class="container">
    <div class="row">
        <div class="ourgallery appear" data-ride="animated" data-animation="fadeInRight" data-delay="300"">
        <h3><span>Our Gallery</span></h3><hr>
        <div id="gallery" class="col-sm-12 owl-carousel">
            <div class="item">
                <img class="img-responsive" alt="banner" src="{{asset('front/images/image1.png')}}" />
            </div>
            <div class="item">
                <img class="img-responsive" alt="banner" src="{{asset('front/images/image2.png')}}" />
            </div>
            <div class="item">
                <img class="img-responsive" alt="banner" src="{{asset('front/images/image3.png')}}" />
            </div>
            <div class="item">
                <img class="img-responsive" alt="banner" src="{{asset('front/images/image4.png')}}" />
            </div>
            <div class="item">
                <img class="img-responsive" alt="banner" src="{{asset('front/images/image5.png')}}" />
            </div>
            <div class="item">
                <img class="img-responsive" alt="banner" src="{{asset('front/images/image1.png')}}" />
            </div>
        </div>
    </div>
</div>
</div>
<!--our gallery code end-->

<div class="container">
    <div class="row appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
        <!-- newsletter start here -->
        <div class="col-sm-12" id="frm_subscribe">
            <form id="subscribe" name="subscribe" class="form-inline">
                <div class="newsbox form-group">
                    <div class="input-group">
                        <label class="input-group-addon news-label"><i class="fa fa-envelope"></i><span class="hidden-xs">Newsletter</span><span class="triangle-img"></span></label>
                        <input type="text" placeholder="Enter Your Email" id="subscribe_email1" name="subscribe_email" value="" class="form-control" required="">
                        <div class="input-group-addon btn-gery">
                            <button class="btn-news" type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
                <br>
                <span id="subscribe_result"></span>
            </form>
        </div>
        <!-- newsletter end here -->
    </div>
</div>
<!-- main container end here -->
<!-- footer start here -->
@include('front.include.footer')
<!-- jquery --><script src="{{asset('front/js/jquery_003.js')}}" type="text/javascript"></script><script src="{{asset('front/js/jquery_002.js')}}" type="text/javascript"></script><script src="{{asset('front/js/slideshow.js')}}" type="text/javascript"></script><script src="{{asset('front/bootstrap/jquery.2.1.1.min.js')}}" type="text/javascript"></script><!-- bootstrap js --><script src="{{asset('front/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script><!-- app_002 js --><script src="{{asset('front/js/app_002.js')}}" type="text/javascript"></script><script src="{{asset('front/js/jquery.js')}}" type="text/javascript"></script><!-- app js --><script src="{{asset('front/js/app.js')}}" type="text/javascript"></script>
<!-- crousel js --><script src="{{asset('front/js/switcher.js')}}" type="text/javascript"></script><script src="{{asset('front/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script><!-- landing js --><script src="{{asset('front/js/landing.js')}}" type="text/javascript"></script>
</body>

<!-- Mirrored from wptheme.co.in/realestate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 05:48:12 GMT -->
</html>
