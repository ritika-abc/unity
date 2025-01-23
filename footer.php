<!-- Footer Start -->
<div class="container-fluid  text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"
    style="background-color: #000000;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> B14A04 THE ROSELLIA 2 SEC-95A,
                    GURUGRAM,
                    HARYANA,
                    India
                    122505
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7065033577 </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@unitywaveexim.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>

                <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Product Gallery</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-  rounded" src="image/product/1.jpg" style="object-fit: cover;"
                            height="50px" width="70px" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-  rounded" src="image/product/2.jpg" style="object-fit: cover;"
                            height="50px" width="70px" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-  rounded" src="image/product/3.jpg" style="object-fit: cover;"
                            height="50px" width="70px" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-  rounded" src="image/product/4.jpg" style="object-fit: cover;"
                            height="50px" width="70px" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-  rounded" src="image/product/5.jpg" alt="" style="object-fit: cover;"
                            height="50px" width="70px">
                    </div>
                    <div class="col-4">
                        <img class="img-  rounded" src="image/product/6.jpg" style="object-fit: cover;"
                            height="50px" width="70px" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">About Us</h5>
                <p>Unitywave Exim LLP is a dynamic and forward-thinking company founded in 2024, committed to
                    providing high-quality products across multiple industries. Based in India, we specialize in
                    delivering fresh, sustainable, and innovative solutions to a global market. </p>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Unitywave Exim LLP
                    </a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://web2export.com">web2export.com</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Unitywave Exim LLP
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6 my-2">
                        <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                    </div>
                    <div class="col-12  my-2">
                        <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="go()" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
        class="bi bi-arrow-up"></i></a>
<script>
    function contact() {
        var na = document.querySelector(".name").value;
        var em = document.querySelector(".email").value;
        var phone = document.querySelector(".phone").value;
        var mes = document.querySelector(".message").value;
        var url1 = "https://wa.me/917065033577?text=" +
            "Name: " +
            na + " " +
            "Email: " +
            em + " " +
            "Phone :" + phone +
            "Message :" + mes;
        window.open(url1, "_blank").focus();
    }
</script>
<script>
    function go() {
        var name = document.querySelector(".name").value;
        var email = document.querySelector(".email").value;
        var number = document.querySelector(".number").value;
        var url = "https://wa.me/917065033577?text=" +
            "Name: " +
            name + " " +
            "Number: " +
            number + " " +
            "Email :" + email;
        window.open(url, "_blank").focus();
    }
</script>
 
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>