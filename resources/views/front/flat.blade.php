@include('front.include.header')


<div class="container">
    <!--Breadcrumb start here-->
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Properties</a></li>
    </ul>
    <!--Breadcrumb end here-->
    <div class="row">
        <div class="col-sm-3">
            <!--Advanced search starts here-->
            <form method="get" name="advance_search" action="#">
                <div class="list-group listing appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <h3>Advanced Search</h3>
                    <input type="text" class="form-control" required="" placeholder="Property Type" name="property">
                    <input type="text" class="form-control" required="" placeholder="Locations" name="location">
                    <input type="text" class="form-control" required="" placeholder="City" name="city">
                    <input type="text" class="form-control" required="" placeholder="Status" name="status">
                    <input type="text" class="form-control" required="" placeholder="Min Price" name="minprice">
                    <input type="text" class="form-control" required="" placeholder="Max Price" name="maxprice">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search</button>
                </div>
            </form>
            <!--Advanced search end here-->
            <!--featured products starts here-->
            <div class="col-sm-12 featured_main">
                <h3 class="appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300"">Featured Properties</h3>
                <div class="product-layout">
                    <div class="product-thumb featured_inner appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                        <div class="image">
                            <a href="#"><img class="img-responsive" height="80" width="80" title="home1" alt="home1" src="{{asset('front/images/pic-1.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h4><a href="#">Vila Flat</a></h4>
                            <p>5 Room</p>
                            <p class="price">$ 220,000</p>
                        </div>
                    </div>
                    <div class="product-thumb featured_inner appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                        <div class="image">
                            <a href="#"><img class="img-responsive" height="80" width="80" title="home1" alt="home1" src="{{asset('front/images/pic-2.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h4><a href="#">Vila Flat</a></h4>
                            <p>5 Room</p>
                            <p class="price">$ 220,000</p>
                        </div>
                    </div>
                    <div class="product-thumb featured_inner appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                        <div class="image">
                            <a href="#"><img class="img-responsive" height="80" width="80" title="home1" alt="home1" src="{{asset('front/images/pic-3.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h4><a href="#">Vila Flat</a></h4>
                            <p>5 Room</p>
                            <p class="price">$ 220,000</p>
                        </div>
                    </div>
                    <div class="product-thumb featured_inner appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                        <div class="image">
                            <a href="#"><img class="img-responsive" height="80" width="80" title="home1" alt="home1" src="{{asset('front/images/pic-4.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h4><a href="#">Vila Flat</a></h4>
                            <p>5 Room</p>
                            <p class="price">$ 220,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- featured products end here -->
        </div>
        <!-- #content start here -->
        <div id="content" class="col-sm-9">
            <div class="cate_heading col-sm-12">
                <div class="col-md-4 cate_heading_inner appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <h2>Flats</h2>
                </div>
                <div class="col-md-8 cate_inner text-right appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300"
                <label for="input-limit" class="control-label">Show:</label>
                <select class="form-control" id="input-limit">
                    <option selected="selected" value="">15</option>
                    <option value="">25</option>
                    <option value="">50</option>
                    <option value="">75</option>
                    <option value="">100</option>
                </select>
                <label for="input-sort" class="control-label">Sort By:</label>
                <select onchange="location = this.value;" class="form-control" id="input-sort">
                    <option selected="selected" value="">Default</option>
                    <option value="">Name (A - Z)</option>
                    <option value="">Name (Z - A)</option>
                    <option value="">Price (Low &gt; High)</option>
                    <option value="">Price (High &gt; Low)</option>
                    <option value="">Rating (Highest)</option>
                    <option value="">Rating (Lowest)</option>
                    <option value="">Model (A - Z)</option>
                    <option value="">Model (Z - A)</option>
                </select>
            </div>
        </div>
        <div class="row">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
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
            </div>					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
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
        </div>
    </div>
    <!-- #content end here -->
</div>



@include('front.include.footer')