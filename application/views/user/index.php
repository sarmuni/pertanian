<div class="wrapper homepage">
    <!-- header -->
    <div class="header">
        <div class="row no-gutters">
            <div class="col-auto">
                <button class="btn  btn-link text-dark menu-btn"><i class="material-icons">menu</i><span class="new-notification"></span></button>
            </div>
            <div class="col text-center"><img src="<?= base_url(); ?>assets/img/logo-header.png" alt="" class="header-logo"></div>
            <div class="col-auto">
                <a href="notification.html" class="btn  btn-link text-dark position-relative"><i class="material-icons">notifications_none</i><span class="counts">9+</span></a>
            </div>
        </div>
    </div>
    <!-- header ends -->

    <div class="container">
        <div class="card bg-template shadow mt-4 h-190">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <figure class="avatar avatar-60"><img src="<?= base_url('assets/img/') . $user['image']; ?>" alt="<?= $user['fullname']; ?>"></figure>
                    </div>
                    <div class="col pl-0 align-self-center">
                        <h5 class="mb-1"><?= $user['fullname']; ?></h5>
                        <p class="text-mute small"><?= $user['email']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container top-100">
        <div class="card mb-4 shadow">
            <div class="card-body border-bottom">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-0 font-weight-normal">$ 1548.00</h3>
                        <p class="text-mute">My Balance</p>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-default btn-rounded-54 shadow" data-toggle="modal" data-target="#addmoney"><i class="material-icons">add</i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-none">
                <div class="row">
                    <div class="col">
                        <p>71.00 <i class="material-icons text-danger vm small">arrow_downward</i><br><small class="text-mute">INR</small></p>
                    </div>
                    <div class="col text-center">
                        <p>1.00 <i class="material-icons text-success vm small">arrow_upward</i><br><small class="text-mute">USD</small></p>
                    </div>
                    <div class="col text-right">
                        <p><i class="material-icons text-success vm small mr-1">arrow_upward</i>0.78<br><small class="text-mute">GBP</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="swiper-container icon-slide mb-4">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide text-center" data-toggle="modal" data-target="#paymodal">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">local_atm</i>
                        </div>
                        <p class="small mt-2">Pay</p>
                    </a>
                    <a href="#" class="swiper-slide text-center" data-toggle="modal" data-target="#sendmoney">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">send</i>
                        </div>
                        <p class="small mt-2">Send</p>
                    </a>
                    <a href="#" class="swiper-slide text-center" data-toggle="modal" data-target="#bookmodal">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">directions_railway</i>
                        </div>
                        <p class="small mt-2">Book</p>
                    </a>
                    <a href="#" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">assignment</i>
                        </div>
                        <p class="small mt-2">Bills</p>
                    </a>
                    <a href="#" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">camera</i>
                        </div>
                        <p class="small mt-2">Scan</p>
                    </a>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- <div class="row mb-2">
            <div class="container px-0">
                # Swiper
                <div class="swiper-container two-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>$ 1548.00<br><small class="text-secondary">Home Loan EMI</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>$ 1548.00<br><small class="text-secondary">Cash Loan EMI</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>$ 1548.00<br><small class="text-secondary">Car Loan EMI</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>$ 1548.00<br><small class="text-secondary">Business Loan EMI</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>$ 1548.00<br><small class="text-secondary">Edu Loan EMI</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>$ 1548.00<br><small class="text-secondary">Home Loan EMI</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div> -->

        <!-- <div class="row">
            <div class="container px-0">
                #Swiper
                <div class="swiper-container offer-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                        </div>
                                        <div class="col align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                            <p class="text-mute">Get all money at market rate of gold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col pr-0 align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                            <p class="text-mute">Get all money at market rate of gold</p>
                                        </div>
                                        <div class="col-auto">
                                            <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <!-- <div class="container">
        <h6 class="subtitle">Upcoming Payments <a href="allpayment.html" class="float-right small">View All</a></h6>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="font-weight-normal mb-1">$ 1548.00 </h5>
                        <p class="text-mute small text-secondary mb-2">20d to pay electricity bill</p>
                        <div class="progress h-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto pl-0">
                        <button class="avatar avatar-50 no-shadow border-0 bg-template">
                            <i class="material-icons">local_atm</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="font-weight-normal mb-1">$ 106.00 <span class="badge badge-danger small vm text-white">Prior</span></h5>
                        <p class="text-mute small text-secondary mb-2">33 days to pay gas bill</p>
                        <div class="progress h-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto pl-0">
                        <button class="avatar avatar-50 no-shadow border-0 bg-template">
                            <i class="material-icons">local_atm</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="container">
        <h6 class="subtitle">Recent Messages</h6>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <img src="img/user1.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-normal mb-1">Mrs. Magon Johnson </h6>
                        <p class="text-mute small text-secondary">"Thank you for your purchase with our shop and making online payment."</p>
                    </div>
                </div>
            </div>
            <div class="card-footer border-top bg-none">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Quick reply" aria-describedby="button-addon4">
                    <div class="input-group-append">
                        <button class="btn btn-default btn-rounded-36 shadow-sm" type="button" id="button-addon4"><i class="material-icons md-18">send</i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <img src="img/user2.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-normal mb-1">Ms. Shivani Dilux</h6>
                        <p class="text-mute small text-secondary">"Thank you for your purchase with our shop and making online payment."</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="container">
        <h6 class="subtitle">Loan Status </h6>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm text-template">local_atm</i>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <h6 class="font-weight-normal mb-1">EMI</h6>
                        <p class="text-mute small text-secondary">Home Loan</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="font-weight-normal mb-1">$ 1548.00</h6>
                        <p class="text-mute small text-secondary">Due: 15-12-2019</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm text-template">local_atm</i>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <h6 class="font-weight-normal mb-1">EMI</h6>
                        <p class="text-mute small text-secondary">Car Loan</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="font-weight-normal mb-1">$ 658.00</h6>
                        <p class="text-mute small text-secondary">Due: 18-12-2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <h6 class="subtitle">News Updates</h6>
        <div class="row">
            <!-- Swiper -->
            <div class="swiper-container news-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/product2.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/product3.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/product2.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/product3.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/product2.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="img/product3.jpg" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="small">Multipurpose Juice allows you to grow faster</h5>
                                <p class="text-mute small">By Anand Mangal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col text-center">
                <h5 class="subtitle mb-1">Most Exciting Feature</h5>
                <p class="text-secondary">Take a look at our services</p>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">card_giftcard</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">2546</h3>
                        <p class="text-secondary text-mute small">Gift it out</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">subscriptions</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">635</h3>
                        <p class="text-secondary text-mute small">Monthly Billed</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">local_florist</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">1542</h3>
                        <p class="text-secondary text-mute small">Eco environment</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">location_city</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">154</h3>
                        <p class="text-secondary text-mute small">Four Offices</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->