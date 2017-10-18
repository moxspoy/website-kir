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

<!--Section: Team v.1-->
<section class="section team-section pb-5">

    <!--Section heading-->
    <h2 class="section-heading h1 pt-4">Siapkah Menjadi Bagian Dari Tim Kami?</h2>
    <!--Section description-->
    <p class="section-description">Bersama membangun tempatqu.com sebagai sebuah solusi untuk masyarakat Indonesia.</p>

    <!--Grid row-->
    <div class="row text-center">

       
            <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <div class="avatar">
                <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/15128923_118788158605402_8808658227614838497_o.jpg?oh=683d33f41f2a427d4e42044943c6c453&oe=5A7F41F9" class="rounded-circle z-depth-1" alt="Fourth sample avatar image">
            </div>
            <h4>Aan Yusufianto</h4>
            <h6 class="font-bold blue-text">Chief Executive Officer</h6>
            <p>"Bersyukur dan ikhlas, menjunjung tinggi syiar Islam."</p>

            <!--Google +-->
            <a class="icons-sm gplus-ic" href="https://www.facebook.com/aan.yusufianto"><i class="fa fa-google-plus"> </i></a>
            <!--Facebook-->
            <a class="icons-sm fb-ic" href="https://www.facebook.com/aan.yusufianto"><i class="fa fa-facebook"> </i></a>
            <!--GitHub-->
            <a class="icons-sm git-ic" href="GitHub.com/moxspoy"><i class="fa fa-github"> </i></a>

        </div>
        <!--Grid column-->
         <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <div class="avatar">
                <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/15940652_812661258872550_2198177620413483839_n.jpg?oh=0fdf25a2ed1f9265afaf6b84f33df570&oe=5A6F9175" class="rounded-circle z-depth-1" alt="First sample avatar image">
            </div>
            <h4>M Nurilman Baehaqi</h4>
            <h6 class="font-bold blue-text">Chief Technical Officer</h6>
            <p>"Kesalahan adalah guru terbaik"</p>

            <!--Facebook-->
            <a class="icons-sm fb-ic" href="http://facebook.com/mnurilman.baihaki"><i class="fa fa-facebook"> </i></a>
            <!--Twitter-->
            <a class="icons-sm tw-ic" href="http://twitter.com/moxspoy"><i class="fa fa-twitter"> </i></a>
            <!--Instagram-->
            <a class="icons-sm ins-ic" href="http://Instagram.com/moxspoy"><i class="fa fa-instagram"> </i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <div class="avatar">
                <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/14199292_10207072002492277_8262641347401918525_n.jpg?oh=18f89057adb0692b3d93f2e4b79071c4&oe=5A666192" class="rounded-circle z-depth-1" alt="Second sample avatar image">
            </div>
            <h4>Chyntia Adinda Puri</h4>
            <h6 class="font-bold blue-text">Web Developer</h6>
            <p>"Hidup adalah perjuangan dan pembelajaran".</p>

            <!--Linkedin-->
            <a class="icons-sm li-ic" href="http://linkedin.com/moxspoy"><i class="fa fa-linkedin"> </i></a>
            <!--Facebook-->
            <a class="icons-sm fb-ic" href="https://www.facebook.com/chintya.puri"><i class="fa fa-facebook"> </i></a>
            <!--Instagram-->
             <a class="icons-sm ins-ic" href="https://www.instagram.com/chintyayayaa/"><i class="fa fa-instagram"> </i></a>
            
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-r">

            <div class="avatar">
                <img src="https://scontent-ort2-1.cdninstagram.com/t51.2885-19/s150x150/19955195_151290782110438_9088863041352630272_a.jpg" class="rounded-circle z-depth-1" alt="Third sample avatar image">
            </div>
            <h4>Mesita Widya Cahyaning</h4>
            <h6 class="font-bold blue-text">System Analyst</h6>
            <p>"Bekerja ikhlas, berkarya untuk negara"</p>

            <!--Facebook-->
            <a class="icons-sm fb-ic" href="https://www.facebook.com/mesitawidia"><i class="fa fa-facebook"> </i></a>
            <!--Pinterest-->
            <a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a>
            <!--Instagram-->
             <a class="icons-sm ins-ic" href="https://twitter.com/mesitawd"><i class="fa fa-instagram"> </i></a>

        </div>
        <!--Grid column-->

        

    </div>
    <!--Grid row-->

</section>
<!--Section: Team v.1-->
            
    
</div>
<hr>
<div class="container">

<!--Section: Features v.2-->
<section class="section feature-box">

    <!--Section heading-->
    <h1 class="section-heading pt-4">Karir Tersedia sampai <?php echo date("l jS \of F Y h:i:s A") ?></h1>
    <!--Section description-->
    <p class="section-description lead grey-text">Kami membutuhkan insan kreatif, solutif, mandiri, cerdas, dan professional</p>

    <!--Grid row-->
    <div class="row features-small">

        <!--Grid column-->
        <div class="col-md-4 mb-r">
            <div class="col-1 col-md-2 float-left">
                <i class="fa fa-bullhorn blue-text"></i>
            </div>
            <div class="col-10 col-md-9 col-lg-10 float-right">
                <h4 class="feature-title">Marketing dan Komunikasi Strategis</h4>
                <p class="grey-text">Bertanggungjawab dalam upaya memasarkan produk di masyarakat. Menjaga nama baik melalui pengelolaan media sosial. Aktif berkomunikasi dan dapat memenuhi target yang sudah di tentukan.</p>
                <a class="btn btn-primary btn-sm ml-0">APPLY</a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-r">
            <div class="col-1 col-md-2 float-left">
                <i class="fa fa-cogs pink-text"></i>
            </div>
            <div class="col-10 col-md-9 col-lg-10 float-right">
                <h4 class="feature-title">Web Programmer</h4>
                <p class="grey-text">Mengembangkan aplikasi marketplace dengan pemprograman berbasiskan Objek (OOP).
                    Membuat service untuk aplikasi mobile. Menguasai Framework CodeIgniter / Yii / Laravel / Zend.
                    Memiliki kemampuan programming bahasa pemprograman HTML, PHP dan Javascript.
                    Memiliki kemampuan pemprograman database MySQL.
                    Memiliki dasar pemprograman PHP berbasis Objek (OOP).
                    Menguasai API Programming.
                    Terbiasa dengan Cpanel.
                    Memiliki pengalaman menjadi Web Programmer/Developer minimal 1 tahun.
                    Pernah mengerjakan project.
                    Siap bekerja dalam team, berani menerima tantangan dan belajar hal baru dengan cepat.
                    Usia maksimal 28tahun.</p>
                <a class="btn btn-pink btn-sm ml-0">APPLY</a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-r">
            <div class="col-1 col-md-2 float-left">
                <i class="fa fa-dashboard purple-text"></i>
            </div>
            <div class="col-10 col-md-9 col-lg-10 float-right">
                <h4 class="feature-title">IT Support</h4>
                <p class="grey-text">Tanggung Jawab:
                    Mengawasi kinerja sistem komputer sehari-hari. Menjawab pertanyaan pengguna mengenai perangkat lunak komputer atau operasi perangkat keras untuk menyelesaikan masalah.Masukkan perintah dan amati fungsi sistem untuk memverifikasi operasi yang benar dan mendeteksi kesalahan. Mengatur peralatan untuk penggunaan karyawan, melakukan atau memastikan pemasangan kabel, sistem operasi, atau perangkat lunak yang sesuai.Memasang dan melakukan perbaikan kecil pada perangkat keras, perangkat lunak, atau peralatan periferal, mengikuti spesifikasi disain atau pemasangan. Persyaratan: Gelar Bachelor di bidang Ilmu Komputer atau departemen terkait.Memiliki pengalaman minimal 1 tahun. Familiar dengan perangkat keras PC, printer, pemindai, peralatan periferal, perangkat mobile (iOS, Android). Pahami konektivitas client pc - ethernet, TCP / IP, switch, router, dll. Pengetahuan tentang Linux dibutuhkan. Bagus dalam ketrampilan mendengar, mengerti persis apa yang dibutuhkan pelanggan. Ramah, komunikatif, bertanggung jawab, proaktif, ramah, dan memiliki cara yang baik.
                    </p>
                <a class="btn btn-secondary btn-sm ml-0">APPLY</a>
            </div>
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Features v.2-->

            
    
</div>
<!-- Buat Captcha -->
<script type="text/javascript">
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

</script>  