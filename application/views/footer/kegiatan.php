<!--Modal: Login / Register Form-->
    <div class="modal fade" id="loginregister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-2 light-blue" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#loginpanel" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#registerpanel" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="loginpanel" role="tabpanel">

                            <!--Body-->
                            <form method="post" action="<?php echo site_url("home/login") ?>">
                                <div class="modal-body mb-1">
                                    <div class="md-form form-sm">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="username" name="username" class="form-control">
                                        <label for="username">Username</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="password" name="password" class="form-control">
                                        <label for="pass">Password</label>
                                    </div>
                                    <div id="RecaptchaField1"></div>
                                    <div class="text-center mt-2">
                                        <button class="btn btn-info" name="submit" type="submit" value="login">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                    </div>
                                </div>
                                
                            </form>
                          
                            <!--Footer-->
                            <div class="modal-footer display-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
                            </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="registerpanel" role="tabpanel">


                            <!--Body-->
                            <form method="post" action="<?php echo site_url("home/register") ?>">
                                <div class="modal-body">
                                     <div class="md-form form-sm">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="username" name="username" class="form-control">
                                        <label for="username">Username</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email">Email</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="password" name="password" class="form-control">
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="nama" name="nama" class="form-control">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-building prefix"></i>
                                        <input type="text" id="alamat" name="alamat" class="form-control">
                                        <label for="alamat">Alamat Lengkap</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-phone prefix"></i>
                                        <input type="text" id="telp" name="telp" class="form-control">
                                        <label for="telp">No Handphone</label>
                                    </div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6Lf9hjQUAAAAAHUctTh1AAIo3P_gVEbuxb4p041u"></div> -->
                                    <div class="text-center form-sm mt-2">
                                        <div id="RecaptchaField2"></div></div> <span><button class="btn btn-info" name="button" type="submit" value="register">Sign up <i class="fa fa-sign-in ml-1"></i></button> </span>
                                    </div>

                                </div>
                            </form>
                            
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a href="#loginpanel" class="blue-text">Log In</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
<!--/Modal: Login / Register Form-->

<!-- Main Container -->
<div class="container">
<!--Section: Features v.4-->
<section class="section feature-box">

    <!--Section heading-->
    <h1 class="section-heading pt-4">Kegiatan Kami</h1>
    <!--Section description-->
    <p class="section-description lead grey-text">Menjadi bagian dari solusi untuk masyarakat Indonesia merupakan sebuah kebanggaan bagi kami. Untuk itu kami senantiasa mengadakan kegiatan positif dan konstruktif</p>

    <!--Grid row-->
    <div class="row features-small">

        <!--Grid column-->
        <div class="col-md-4">

            <!--Grid row-->
            <div class="row mb-2">
                <div class="col-2">
                    <i class="fa fa-flag-checkered indigo-text"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Internasional</h5>
                    <p class="grey-text">Bekerja sama dengan Non-Government Organization memfasilitasi para pengungsi dengan pengumpulan dana dari negara-negara mitra. Pengungsi seperti Rohingya, Kongo, Suriah, dan lain-lain</p>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row mb-2">
                <div class="col-2">
                    <i class="fa fa-flask blue-text"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Pendidikan</h5>
                    <p class="grey-text">Kami percaya bahwa pendidikan merupakan modal yang paling utama dalam memajukan Indonesia. Kami mengadakan bootcamp programmer, student internship, dan seminar Teknologi Informasi di beberapa kampus. </p>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row mb-2">
                <div class="col-2">
                    <i class="fa fa-glass cyan-text"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Kompetisi</h5>
                    <p class="grey-text">Setiap tahun kami mengadakan Innovation Cup yang berfungsi sebagai wadah pencarian individu yang berpotensi untuk menjadi inovator muda Indonesia</p>
                </div>
            </div>
            <!--Grid row-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-2 center-on-small-only flex-center">
            <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-portfolio1.png" alt="" class="z-depth-0">
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4">

            <!--Grid row-->
            <div class="row mb-2">
                <div class="col-2">
                    <i class="fa fa-heart deep-purple-text"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Internal</h5>
                    <p class="grey-text">Setiap triwulan, kami mnengadakan family gathering bersama seluruh tim tempatqu.com. Kami percaya bahwa keharmonisan adalah kunci dalam bekerja</p>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row mb-2">
                <div class="col-2">
                    <i class="fa fa-flash purple-text"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Validasi Pasar</h5>
                    <p class="grey-text">Mengetahui kebutuhan masyarakat dalam penyediaan tempat merupakan hal yang sangat penting dan fundamental. Setiap bulan, kami mengadakan penelitian langsung kepada masyarakat.</p>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row mb-2">
                <div class="col-2">
                    <i class="fa fa-magic pink-text"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Progresif</h5>
                    <p class="grey-text">Kegiatan-kegiatan lain terus kami galakkan agar tempatqu.com bisa melekat di hati masyarakat Indonesia sebagai sebuah solusi penyediaan tempat-tempat.</p>
                </div>
            </div>
            <!--Grid row-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--/Section: Features v.4-->
</div>
            <!-- Buat Captcha -->
<script type="text/javascript">
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

</script>  