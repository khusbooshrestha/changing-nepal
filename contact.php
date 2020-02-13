<?php include 'header.php' ?>
<section class="inner-banner" style="background-image: url(images/bg2.jpg);">
    <div class="container">
        <div class="banner-bread">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
                <h1>
                    Contact us
                </h1>
            </nav>
        </div>
    </div>
</section>


<section class="contact-section padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="head-box">
                    <span>Contact Us</span>
                    <h2>Lets get  <strong>in touch</strong></h2>
                    <p class="about-content-header">We'd like to hear from you</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="message-form">
                    <form action="/action_page.php">
                        <input type="text" id="fname" name="firstname" placeholder="Your name" style="width: 100%;">
                        <input type="text" id="email" name="E-mail" placeholder="Your E-mail"  style="width: 100%;">
                        <input type="text" id="phone" name="Phone" placeholder="Phone"  style="width: 100%;">
                        <input type="text" id="address" name="Address" placeholder="Address"  style="width: 100%;">
                        <textarea id="subject" name="subject" placeholder="Your Message" style="height:120px; width:100%;"></textarea>
                        <input type="submit" value="Send Message">
                    </form>     
                </div>  
            </div>
            <div class="col-lg-6 col-md-12 col-sm-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-information">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-details">
                                    <strong> ADDRESS</strong>
                                    <p>Balkot, Kaushaltar, Kathmandu</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon ss">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info-details">
                                    <strong> PHONE</strong>
                                    <p>9851131427 / 9840196002</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-details">
                                    <strong> EMAIL</strong>
                                    <p>sales@changingnepal.com.np</p>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20547.756750904966!2d85.3626706062104!3d27.666706112524803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1960827b95af%3A0xf6c4acf00ba108ce!2sChanging%20Nepal!5e0!3m2!1sen!2snp!4v1581184288091!5m2!1sen!2snp" width="545" height="234" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>  
            </div>
        </div>
    </section>


    <?php include 'footer.php' ?>