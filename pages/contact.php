<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/scss/build/main.css">
</head>
<body class="services-body">
    <div id="top-over"></div>

    <div class="burger-menu-container" id="burger">
        <div class="burger-menu"></div>
        <div class="burger-menu"></div>
        <div class="burger-menu"></div>
    </div>

    <div class="side-menu">
        <img src="../assets/img/close.svg" class="close-side" id="close-menu">
        <a href="../index.html"><div class="side-list-menu">HOME</div></a>
        <a href="about.html"><div class="side-list-menu">ABOUT US</div></a>
        <a href="service.html"><div class="side-list-menu">SERVICES</div></a>
        <a href="testimonial.html"><div class="side-list-menu">PAST TRANSACTIONS/ TESTIMONIALS</div></a>
        <a href="partners.html"><div class="side-list-menu">PARTNERS</div></a>
        <a href="consultan.html"><div class="side-list-menu">CONSULTANTS PANEL</div></a>
        <a href="#"><div class="side-list-menu active">CONTACT</div></a>
    </div>

    <div class="navigation-fixed" id="nav-fix">
        <div class="navigation">
            <div class="navigation-left">
                <a href="../index.html" class="navigation-items in-navs">
                    <img src="../assets/img/home_ico.png" alt="" class="home-ico">
                    <img src="../assets/img/home-ico-black.png" alt="" id="home-black" class="home-ico-black home-ico-hide">
                </a>
                <a href="about.html" class="navigation-items in-navs">ABOUT US</a>
                <a href="service.html" class="navigation-items in-navs">SERVICES</a>
                <a href="testimonial.html" class="navigation-items in-navs">PAST TRANSACTIONS/<br>TESTIMONIALS</a>
            </div>
            <div class="icon text-center">
                <img src="../assets/img/logo.jpg" alt="noicon" class="img-fluid nav-ico-img">
            </div>
            <div class="navigation-right">
                <a href="partners.html" class="navigation-items in-navs">PARTNERS</a>
                <a href="consultan.html" class="navigation-items in-navs">CONSULTANTS PANEL</a>
                <a href="#" class="navigation-items in-navs active-menu">CONTACT</a>
            </div>
        </div>
    </div>

    <div class="container-fluid contact-header-img">
        <div class="row header-title page-title contact-head-m">
            <div class="title">
                <h3>CONTACT US</h3>
            </div>
            <div class="col-12 text-center contact-mt">
                <iframe class="contact-widthmaps" id="gmap_canvas" src="https://maps.google.com/maps?q=10%20Marina%20Blvd%2C%20Tower%202%2C%20Level%2039%2C%20Singapore%20018983&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <div class="col-12 text-center contact-space contact-long-mt">
                <img src="../assets/img/send.svg" alt="plane" class="contact-ico">
                <h3>Contact Details</h3>
                <p>Email. info@square-associates.com <br>
                    Phone. +65 6222 3209  |  +65 6228 0106</p>
            </div>
            <div class="contact-liner"></div>
            <div class="col-12 text-center contact-space">
                <img src="../assets/img/placeholder.svg" alt="plane" class="contact-ico">
                <h3>Business Address</h3>
                <p>Marina Bay Financial Center Tower 2, <br>
                    Level 39,10 Marina Boulevard, Singapore 018983</p>
            </div>
            <div class="contact-liner"></div>
            <div class="col-12 text-center contact-space">
                <a href="https://www.linkedin.com/company/square-associates-pte-ltd-singapore/?viewAsMember=true" target="_blank"><img src="../assets/img/linkedin.svg" alt="plane" class="contact-ico"></a>
                <h3>Social Networks</h3>
                <p>LinkedIn Company Page</p>
            </div>
        </div>
    </div>

    <div class="container-fluid contact-form">
        <h3 class="text-center">Send us a message</h3>
        <div class="row">
            <div class="col-lg-6 form-items">
                <input type="text" class="form-control" placeholder="your name">
            </div>
            <div class="col-lg-6 form-items">
                <input type="text" class="form-control" placeholder="email address">
            </div>
            <div class="col-12 form-items">
                <input type="text" class="form-control" placeholder="subject">
            </div>
            <div class="col-12 form-items">
                <textarea cols="30" rows="10" class="form-control" placeholder="message"></textarea>
            </div>
            <input class="btn button-submit" type="submit" name="send" value="send message">
        </div>
    </div>

    <div class="footer text-center">
        <p><b>MATERIAL DISCLOSURES & DISCLAIMERS</b></p>
        <p>
            Square Associates Pte. Ltd. (SA) is a company incorporated in the Republic of Singapore with 
            Registration No: 201623718M. The information contained herein is for information only and is not 
            a recommendation or solicitation to buy or sell any security or other product or service, an 
            official confirmation of any transaction or an official statement of SA. Only introductions to 
            capital are made; no advice is given. Any unauthorized use, reproduction, or dissemination of 
            this document is prohibited. Neither SA nor any of its subsidiaries or affiliates shall assume 
            any legal liability or responsibility for any incorrect, misleading or altered information 
            contained herein. Nothing in this document is intended to constitute legal, tax, securities 
            or investment advice, or opinion regarding the appropriateness of any investment. 
            Counterparts are advised to seek independent professional advice so they are aware of 
            any and all risks.
        </p>
    </div>

    <div class="up-arrows">
        <a href="#top-over"><img src="../assets/img/up_arrow.png" alt="" class="img-fluid"></a>
    </div>

    <script src="../assets/plugins/jQuery/jQuery.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if (isset($_POST['send'])) {
    $to = "Info@square-Associates.com";
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $from = $_POST["email"];

    $txt = "From : ".$from."<br> Name : ".$name."<br> Content : ".$_POST["text"];
    $headers = "From: ".$from;

    mail($to,$subject,$txt,$headers);
  }
?>