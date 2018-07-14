<?php include "head.php"?>


<?php include "nav.php" ?>


    <section class="row contact_form_row">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 contact_form_area">
                    <h3 class="contact_section_title">get in touch</h3>
                    <div class="contactForm row m0">
                        <form action="contact_process.php" class="row contact_form" id="contactForm">
                            <div class="row m0">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="contact_fname">First Name</label>
                                        <input type="text" class="form-control" id="contact_fname" name="contact_fname">
                                    </div>
                                    <div class="input-group">
                                        <label for="contact_femail">E-mail Address</label>
                                        <input type="email" class="form-control" id="contact_femail" name="contact_femail">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="contact_lname">Last Name</label>
                                        <input type="text" class="form-control" id="contact_lname" name="contact_lname">
                                    </div>
                                    <div class="input-group">
                                        <label for="contact_fphone">Phone Number</label>
                                        <input type="tel" class="form-control" id="contact_fphone" name="contact_fphone">
                                    </div>
                                </div>
                            </div>
                            <div class="row m0">
                                <div class="col-sm-12">
                                    <label for="contact_fmsg">Details/Comments</label>
                                    <textarea name="contact_fmsg" id="contact_fmsg" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row m0 security_captcha">
                                <div class="col-sm-12">
                                    <div class="fleft security_label"><label for="contact_fsc">security captcha</label></div>
                                    <div class="fleft security_captcha_input"><input type="text" class="form-control" id="contact_fsc" name="contact_fsc"><input type="text" value="1v0h92" class="hidden" id="contact_fsc_hidden"></div>
                                    <div class="fleft security_img"><img src="images/captcha.png" alt=""></div>
                                </div>
                            </div>
                            <div class="row m0">
                                <div class="col-sm-12">
                                    <input type="submit" class="submit_btn" value="submit">
                                </div>
                            </div>
                        </form>
                        <div id="success">
                            <span class="green textcenter">
                                Your message was sent successfully! I will be in touch as soon as I can.
                            </span>
                        </div>
                        <div id="error">
                            <span>
                                Something went wrong, try refreshing and submitting the form again.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 contact_address">
                    <h3 class="contact_section_title">Address</h3>
                    <div class="row address m0">
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-map-marker"></i></div>
                            <div class="media-body address_text">
                                BLK Super Specialty Hospital, New Delhi</div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                            <div class="media-body address_text">E-mail: drssrivastava@rediffmail.com</div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-phone"></i></div>
                            <div class="media-body address_text">99102-13855</div>
                        </div>
                        <a href="#" class="view_all">get directions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row map_row">
        <div class="container">
            <h3 class="contact_section_title">Direction</h3>
            <div id="mapBox" class="row m0"></div>
        </div>
    </section>

    <section class="row book_banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <div class="row m0">
                        <h3 class="bannerTitle">ONLINE HASSLE FREE Appointment BOOKING</h3>
<!--                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, ipsum eu vulputate pulvinar,</h5>-->
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="row m0">
                        <a href="#appointment" class="view_all">book your appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include "footer.php"?>


<div class="modal fade" id="appointmefnt_form_pop" tabindex="-1" role="dialog" aria-labelledby="appointmefnt_form_pop">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form action="#" class="row m0 appointment_home_form2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times-circle-o"></i>
                </button>
                <h2 class="title">BOOK<br>NOW</h2>
                <div class="form_inputs row m0">
                    <div class="row m0 input_row">
                        <div class="col-sm-12 col-md-12 col-lg-6 p0">
                            <label for="app_fname">First Name</label>
                            <input type="text" class="form-control" id="app_fname" placeholder="Your First Name">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 p0">
                            <label for="app_lname">Last Name</label>
                            <input type="text" class="form-control" id="app_lname" placeholder="Your Last Name">
                        </div>
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_email">Email Address</label>
                        <input type="email" class="form-control" id="app_email" placeholder="Enter your Email Address">
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_phone">Phone Number</label>
                        <input type="tel" class="form-control" id="app_phone" placeholder="Enter your Phone Number">
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_date">Booking Date</label>
                        <div class="input-append date">
                            <input type="text" class="form-control" name="date" id="app_date" placeholder="Select the Appointment Date">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="row m0 input_row">
                        <label for="app_texts">Message</label>
                        <textarea  id="app_texts" class="form-control" placeholder="Write down the Message"></textarea>
                    </div>
                    <input type="submit" class="form-control" value="book your appointment now">
                </div>
                <div class="row m0 form_footer">
                    <a href="#"><img src="images/call-now3.png" alt="">123 7890 456</a>
                </div>
            </form>
        </div>
    </div>
</div>

