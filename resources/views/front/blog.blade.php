@include('front.include.header')

<div class="container">
    <!--Breadcrumb start here-->
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Blog</a></li>
    </ul>
    <!--Breadcrumb end here-->
    <div class="row">
        <div class="col-sm-3 blog-left appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
            <!--Advanced search starts here-->
            <div class="list-group listing">
                <div class="form-group">
                    <input type="search" class="form-control" name="search" placeholder="Search..." />
                </div>
            </div>
            <!--Advanced search end here-->
            <!--category starts here-->
            <div class="blog-cate">
                <h2>Categories</h2>
                <select class="form-control" id="input-cate">
                    <option selected="selected" value="">Select Category</option>
                    <option>Sale</option>
                    <option>Rent</option>
                </select>
            </div>
            <!--category end here-->
        </div>
        <!-- #content start here -->
        <div id="content" class="col-sm-9 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog_view">
                        <span>view</span>
                        <button type="button" id="list-view" class="btn blog-btn" data-toggle="tooltip" title="List"><i class="fa fa-list-ul" aria-hidden="true"></i> List</button>
                        <button type="button" id="grid-view" class="btn blog-btn" data-toggle="tooltip" title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i> Grid</button>
                    </div>
                </div>
            </div>
            <!-- row start here -->
            <div class="row">
                <!-- blog_product start here -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html">
                                <img class="img-responsive" alt="home8" src="{{asset('front/images/pic-1.png')}}">
                            </a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-2.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-3.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-4.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-5.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-6.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-7.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-8.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-grid blog_product appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="blog-detail.html"><img class="img-responsive" alt="home8" src="{{asset('front/images/pic-9.png')}}"></a>
                        </div>
                        <div class="caption">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p class="desc">consectetur adipiscing elit. Morbi auctor mollis sem, sed suscipit dui facilisis a. Aliquam vestibulum velit odio, non pretium magna sollicitudin et. </p>
                            <a href="blog-detail.html" class="btn pro-btn">Continue</a>
                        </div>
                    </div>
                </div>
                <!-- blog_product end here -->
            </div>
            <!-- row end here -->

            <!-- row start here -->
            <div class="row appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                <div class="col-sm-12 text-left">
                    <ul class="pagination">
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&gt;</a></li>
                        <li><a href="#">&gt;|</a></li>
                    </ul>
                </div>
            </div>
            <!-- row end here -->

        </div>
        <!-- #content end here -->
    </div>
</div>





@include('front.include.footer')