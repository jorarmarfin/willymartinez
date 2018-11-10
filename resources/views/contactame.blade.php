@extends('themes.base.index')
@section('content')
<div class="section dark " style="padding-top:90px; padding-bottom:40px; background-image:url(images/home_book_bio_contact_header.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover; -webkit-background-size:cover">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <h2 class="title">CONTACT</h2>
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" style="margin: 0 auto 50px;" />
            </div>
            <!-- One full width row-->
            <div class="column one column_column">
                <div class="column_attr align_center">
                    <p class="hrmargin_b_30 big">
                        BLACK AND WHITE
                        <br> Level 13, 2 Elizabeth St,
                        <br> Melbourne, Victoria 3000
                        <br> Australia
                    </p>
                    <p class="hrmargin_b_7">
                        <i class="icon-phone"></i><a href="tel:+61(0)791803458">+61 (0) 7 9180 3458</a>
                    </p>
                    <p style="margin-bottom: 80px;">
                        <i class="icon-mail"></i><a href="mailto:noreply@envato.com">noreply@envato.com</a>
                    </p>
                    <h3>My profiles</h3>
                    <p style="font-size: 30px; line-height: 30px;">
                        <a href="#"><i class="icon-facebook-circled"></i></a><a href="#"><i class="icon-twitter-circled"></i></a><a href="#"><i class="icon-pinterest-circled"></i></a><a href="#"><i class="icon-linkedin-circled"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section sections_style_2">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_column">
                <div class="column_attr "></div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr align_center">
                    <h2>SEND A MESSAGE</h2>
                    <p>
                        Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus.
                    </p>
                </div>
            </div>
            <!-- Page devider -->
            <!-- One full width row-->
            <div class="column one column_divider">
                <hr class="no_line" />
            </div>
            <!-- One Fourth (1/4) Column -->
            <div class="column one-fourth column_column">
                <div class="column_attr "></div>
            </div>
            <!-- One Second (1/2) Column -->
            <div class="column one-second column_column">
                <div class="column_attr ">

                    <div id="contactWrapper">
                        <form id="contactform">
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                            </div>
                            <div class="column one">
                                <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                            </div>
                            <div class="column one">
                                <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                            </div>
                            <div class="column one" style="text-align: center;">
                                <input type="button" value="Send Message" id="submit" onClick="return check_values();">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection