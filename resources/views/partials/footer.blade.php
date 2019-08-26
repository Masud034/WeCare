<footer class="pt-4" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                <div class="footer-logo text-center">
                    <a href="{{ url('/') }}"><img src="img/logo.png" alt="logo"></a>
                    <h3><a href="{{ url('/') }}">Wecare</a></h3>
                    <div class="copyright">
                        &copy; <span id="year"></span> WeCare. All Rights Reserved.
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                <h5 class="mb-4 font-weight-bold">MENU</h5>
                <ul class="menu-list">
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="#contact">Contacts</a></li>
                    <li><a href="{{ url('/terms') }}">Terms & Condition</a></li>
                    <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mt-2" class="address">
                <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                <ul class="f-address">
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fas fa-map-marker"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">Address:</h6>
                                <p>United City, Madani Avenue,  Badda, Dhaka 1212, Bangladesh.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="far fa-envelope"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                                <p><a href="#">support@wecare.com</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">Phone:</h6>
                                <p><a href="#">+88 09604-848-848</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
                <div class="input-group ig">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
                </div>
                <ul class="social-pet mt-4">
                    <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </footer>
