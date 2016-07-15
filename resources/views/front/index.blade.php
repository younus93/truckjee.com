@extends('front.template')

@section('main')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.css">
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                 <div class="row">
                    <style>
                        .younus{
                            color:black;
                            text-align: justify;
                        }
                        .younus .row {
                            padding-bottom : 10px;
                        }
                    </style>
                    <div class="col-md-6">
                        <div class="panel tab younus">
                            <div class="panel-body">
                                <div style="text-align:center">
                                    <h4>
                                    <i class="fa fa-truck"></i>
                                    Post your truck requirement</h4>
                                    <hr>
                                </div>
                                <form action="/post-website-load" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="source">Source</label>
                                                <input required type="text" class="form-control" name="source" id="source" autocomplete="off">
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="source">Destination</label>
                                                <input required type="text" class="form-control" name="destination" id="destination" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="source">Cargo Capacity</label>
                                                <select required class="form-control" name="cargo_capacity" id="cargo_capacity">
                                                    <option value="3.5mt">3.5 MT</option>
                                                    <option value="4mt">4 MT</option>
                                                    <option value="6mt">6 MT</option>
                                                    <option value="7mt">7 MT</option>
                                                    <option value="8mt">8 MT</option>
                                                    <option value="9mt">9 MT</option>
                                                    <option value="12mt">12 MT</option>
                                                    <option value="14mt">14 MT</option>
                                                    <option value="15mt">15 MT</option>
                                                    <option value="20mt">20 MT</option>
                                                    <option value="22mt">22 MT</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="source">Date</label>
                                                <div class="input-group">
                                                    <input required type="text" class="form-control" name="date_required" id="date_required">
                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="source">Your name</label>
                                                <input required type="text" class="form-control" name="name" id="contact_name">
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="source">Phone</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">+91</div>
                                                    <input required type="number" class="form-control" name="phone" id="contact_phone">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <ul class="list-inline">
                                            @if(session('website-load'))
                                                <li class="alert-success">
                                                    {{ session('website-load') }}
                                                </li>
                                            @endif
                                            <li style="float:right"><button id="submit" class="btn btn-info">Submit</button></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        
                            
                        </div>
                    </div>
                    <div class="col-md-6" style="max-height:400px; text-align:right">
                        <h3 class="intro-lead-in">Lets make transportation simple</h3>
                        <p>TruckJee is an online platform allowing organizations to hire trucks online!</p>
                        <p>Call us @ 9375551122 to get started</p>
                    </div> 
                </div>
            </div>
        </div>
    </header>

    <!-- about Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ready to hire trucks?</h2>
                    <h3 class="section-subheading text-muted">We make truck hiring as simple as booking a movie ticket online!</h3>
                </div>
            </div>
            <div class="row text-center" style="max-height:500px">
                <div class="col-md-4 col-xs-12">
                    <h4 class="service-heading">Online Market</h4>
                    <p class="text-muted">We are an online truck market facilitating turck hiring through our portal which has created the infrastructure to identify, track and access trucks online.</p>
                    <hr>
                    <h4 class="service-heading">Verified Truck Base</h4>
                    <p class="text-muted">TruckJee has taken great efforts to ensure that every truck hired through the platform meets the basic road transportation fitness criteria.</p>
                    <hr>
                    <h4 class="service-heading">Tracking &amp; Rating</h4>
                    <p class="text-muted">Our intelligent platform allows hirers to track their trucks in transit and rates the trucks based on their performance.
                    </p>
                </div>
                <div class="col-md-4 col-xs-12 hideme" style="opacity: 0;">
                    <img src="img/mobile.png" alt="" style="max-height:500px">
                </div>
                <div class="col-md-4 col-xs-12">
                    <h4 class="service-heading">Accessibility</h4>
                    <p class="text-muted">Our dashboard helps you to carry out business transactions at your leisure. We have crafted a system which eases your truck hiring experience.</p>
                    <hr>
                    <h4 class="service-heading">Business Confidentiality</h4>
                    <p class="text-muted">Every transaction happening on the portal is confined between the two participating parties. Transactions are only visible to you, unless you decide to share it.</p>
                    <hr>
                    <h4 class="service-heading">Nationwide Availability</h4>
                    <p class="text-muted">
                        From Jammu to kanyakumari, We offer fast, reliable and accurate nationwide truck connectivity directly to your doors, factory and warehouses.
                    </p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- About Section -->
    <section id="services" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How does it work?</h2>
                    <h3 class="section-subheading text-muted">Truck hiring made simple</h3>

                </div>
            </div>
            <div class="row" style="text-align:center">
                <div class="col-xs-12 col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-edit fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="subheading">Require</h4>
                    <p>
                        After filling out our basic requirement form online through your dashboard, eligable truck vendors are automatically notified about your indent and would respond with their quotes for your requirement.    
                    </p>

                </div>
                <div class="col-xs-12 col-md-4">
                    <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-info"></i>
                            <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="subheading">Match</h4>
                    <p>
                        From your list of quotes, select any vendor based on their quoted rate or their performance. TruckJee will confirm with these vendors and generate a transaction. 
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="subheading">Transact</h4>
                    <p>
                        TruckJee will ensure that the truck you selected reaches your loading point at the date of your requirement. You can also track this truck after vendor confirmation till transaction completion.
                    </p>
                </div>
            </div>
            <h3 class="section-subheading"></h3>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <iframe class="col-md-12" height="450px" src="https://www.youtube.com/embed/5NvlrOgraqo" frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3 class="subheading text-center" style="margin-top:0px">Benefits</h3>
                    <p>
                        TruckJee facilitates online truck hiring. TruckJee does not take part in any of your transactions. The business decisions are at the comfort of the participating parties. and TruckJees aims to create a transparent platform for communication and business generation between the parties. 
                    </p>
                    <ul class="fa-ul">
                        <li><i class="fa fa-li fa-long-arrow-right"></i>
                            <p>Higher quality service by optimizing transport routes, means of transportation and reducing costs.</p>
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <p>Access to a large pool of verified trucks across the country waiting for business.</p>
                        </li>
                        <li><i class="fa fa-li fa-long-arrow-right"></i>
                            <p>Trucks hired through TruckJee have GPS Tracker installed which allows you to track your cargo online.</p>
                        </li>
                        <li><i class="fa fa-li fa-long-arrow-right"></i>
                            <p>Strong optimized auction system that will make a competitive advantage to your business.</p>
                        </li>
                        <li><i class="fa fa-li fa-long-arrow-right"></i>
                            <p>Synchronized bidding process which ensures best rates from multiple business owners.</p>
                        </li>
                        <li><i class="fa fa-li fa-long-arrow-right"></i>
                            <p>Hassles of collecting and distributing balance payments are reduced and are systematically processed.</p>
                        </li>
                        <li><i class="fa fa-li fa-long-arrow-right"></i>
                            <p>Reduce the amount of stress and phone calls by shifting to our online transportation ERP which is a one stop for all your transportation needs.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="section-subheading"></h3>
        </div>
    </section>
    <section id="contact1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our presence</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <b>Chennai - Head Office</b>
                    <address>
                        AH-16, Shanthi Colony, <br/>
                        Anna Nagar, <br/>
                        Chennai - 600040.
                    </address>
                    <p><i class="fa fa-phone"></i> 044 42127143</p>
                    <p><i class="fa fa-envelope"></i> info@truckjee.com</p>
                    <br/>
                    <b>Namakkal</b>
                    <address>
                        Sri Durga Tower,<br>
                        No : 187, First Floor, <br>
                        Salem Road, <br>
                        Namakkal - 637001.
                    </address>
                    <p><i class="fa fa-envelope"></i> namakkal@truckjee.com</p>

                    <b>Sankari</b>
                    <address>
                        18D6 - AF4,<br>
                        Settia Gounder Complex,<br>
                        Bhavani Main Road,<br>
                        Sankagiri T.K,<br>
                        Salem - 637301.<br>
                    </address>
                    <p><i class="fa fa-envelope"></i> sankakiri@truckjee.com</p>

                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="section-subheading">
                        <h3>TruckJee headquarters</h3>
                    </div><!-- .custom-heading end -->

                    <div class="google-maps">
                        <div class="overlay" onClick="style.pointerEvents='none'" style="background:transparent;
                               position:relative;
                               width:640px;
                               height:450px; /* your iframe height */
                               top:450px;  /* your iframe height */
                               margin-top:-485px;  /* your iframe height */"></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1374.0021967394014!2d80.2135734726199!3d13.082379192272743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526420db2ff731%3A0xe7bf9c5b119a47ab!2sTruckJee!5e0!3m2!1sen!2sin!4v1451375635230" width="600" height="450" frameborder="0" style="border:0;"  allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Drop us a message</h2>
                    <h3 class="section-subheading text-muted">We promise to get back to you at the earliest!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text"  class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="contact_button" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop

@section('scripts')
    <script src="http://maps.googleapis.com/maps/api/js?&amp;key=AIzaSyD0QSm_gWjwbiW5NF6ScuQBUDfJHld-qc8&amp;libraries=places"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/jquery.geocomplete.js"></script>
    <script src="/js/contact_me.js"></script>
    <script>
        $(document).ready(function() {

            /* Every time the window is scrolled ... */
            $(window).scroll( function(){

                /* Check the location of each desired element */
                $('.hideme').each( function(i){

                    var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();

                    /* If the object is completely visible in the window, fade it it */
                    if( bottom_of_window > bottom_of_object ){

                        $(this).animate({'opacity':'1'},500);

                    }

                });

            });

        });
        $('#source , #destination').geocomplete({
            country : "IN",
            types : ["geocode" ]
        });
        $('#date_required').datepicker({
            format : 'dd/mm/yyyy',
            autoclose : true,
            startDate : new Date(),
            todayHighlight : true
        });

    </script>
@stop

