@include('front.include.header')

<div class="contact-map appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300" style=" pointer-events: none;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.1220098930553!2d75.8778043146153!3d30.911213584060857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a83a410b99833%3A0xbe41bee863220706!2sThe+Multimedia+Designer!5e0!3m2!1sen!2sin!4v1469273918692" allowfullscreen></iframe>
</div>
<!--Map iframe end here-->
<div class="container contactpage">
    <div class="row">
        <!-- #content start here -->
        <div id="content" class="col-sm-12 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
            <form class="form-horizontal" method="post" action="#">
                <fieldset>
                    <legend>Contact Us</legend>
                    <div class="form-group required">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="input-name" placeholder="Name" value="" name="name" required="">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="E-Mail" id="input-email" value="" name="email" required="">
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="input-website" placeholder="Website" value="" name="website" required="">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Telephone" id="input-telephone" value="" name="telephone" required="">
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <textarea class="form-control" id="input-enquiry" rows="10" name="enquiry" required=""></textarea>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="pull-right">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </fieldset>

            </form>
            <div class="row">
                <div class="mainbox">
                    <h1>Get in touch with us</h1>
                    <div class="col-sm-4 appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                        <div class="box1">
                            <div class="icons">
                                <i aria-hidden="true" class="fa fa-phone"></i>
                            </div><br/>
                            <h3>Phone No </h3>
                            <ul class="list-unstyled">
                                <li>+91 9356372998</li>
                                <li>+91 161-5012104</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 appear" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                        <div class="box1">
                            <div class="icons">
                                <i aria-hidden="true" class="fa fa-envelope-o"></i>
                            </div><br/>
                            <h3>Email </h3>
                            <ul class="list-unstyled">
                                <li>info@themultimediadesigner.com </li>
                                <li>info@realestate.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 appear" data-ride="animated" data-animation="fadeInRight" data-delay="300">
                        <div class="box1">
                            <div class="icons">
                                <i aria-hidden="true" class="fa fa-map-marker"></i>
                            </div><br/>
                            <h3>Address</h3>
                            <ul class="list-unstyled">
                                <li>shop No:120, MD complex, <br>Chandigrah Road, Near Samrala Chowk Ludhiana-141003 Punjab, INDIA	</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #content end here -->
    </div>
</div>