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

</head>

<body>

    <?php
    include "nav.php";
    ?>
    <style>
        .abo {
            background-image: linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.8)), url(image/product/coconut.jpg);
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
    <div class="section">
        <div class="abo"></div>
    </div>



    <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Products</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row justify-content-center">
            <?php
            include "config.php";
            $sel = "SELECT * FROM `pro` ";
            $q = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($q)) {


            ?>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top    p-3 shadow-lg rounded " style="height: 400px;">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/product/<?php echo $row['image'] ?>"
                                height="250px" width="100%" style="object-fit:cover" alt="<?php echo $row['name'] ?>">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger text-capitalize"><?php echo $row['name'] ?></div>
                        <a href="" class="btn btn-dark w-100 mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                        now</a>
                    </div>
                   
                </div>
            <?php } ?>

        </div>
        
    </div>  


    <?php
    include "footer.php";
    ?>