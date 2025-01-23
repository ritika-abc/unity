<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Unitywave Exim LLP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Unitywave Exim Llp" name="keywords">
    <meta content="Unitywave Exim Llp" name="description">

    <!-- Favicon -->
    <!-- <link href="image/logo/logo.png" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <STYle>
        .single-fruits-choose {
            display: flex;
            gap: 5px;
        }
    </STYle>
</head>

<body>

    <?php
    include "nav.php";
    ?>
    <style>
        .abo {
            background-image: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(image/banner/about.jpg);
            background-size: cover;
            /* background-attachment: fixed; */
            height: 400px;
            width: 100%;
        }

        @media screen and (max-width:576px) {
            .fff {
                width: 100%;
            }
        }
    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url(image/banner/contact.jpg);background-size:cover;background-position:center">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Contact Us</a></li>

                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Get in Touch with Unitywave Exim LLP</h1>
                <p class="mb-5">At Unitywave Exim LLP, we value open communication and are always here to assist you with any inquiries or support you may need. Whether you're looking to place an order, have questions about our products, or would like to discuss a potential partnership, our team is ready to help.</p>
            </div>
             
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control email" id="mail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control phone" id="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control message" placeholder="Leave a message here" id="message"
                                        style="height: 130px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" onclick="contact()">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1781732.1265103316!2d74.71976907728653!3d29.28392714617266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390db00b8670400b%3A0x732eaab4aaa6c143!2sHaryana!5e0!3m2!1sen!2sin!4v1736936182146!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php
    include "footer.php";
    ?>