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
	<div class="container">
<!--Section: Features v.4-->
<section class="section feature-box">

    <!--Section heading-->
    <center>
    <h1 class="section-heading pt-4"><bold>Pusat Bantuan<bold></h1>
    	<div class="view hm-zoom">
		    <img src="https://workcoup.com/wp-content/uploads/2016/03/friendship-concept_23-2147505506.jpg" class="img-fluid " alt="zoom" style="max-width: 300px; max-height: 300px">
		    <div class="mask flex-center waves-effect waves-light">
		        <!-- <p class="white-text">Pusat Bantuan</p> -->
		    </div>
		</div>
    </center>
    <br>
    <br>
    <hr>
    <!--Section description-->
    <p class="section-description lead grey-text">Kami merangkum beberapa pertanyaan yang dapat membantu pengguna menjelajahi website kami</p>
    <hr>

    <section>
        <h4>Bagaimana cara membuat iklan di Tempatqu?</h1>
        <p>Untuk membuat iklan, Pengguna harus memiliki akun pada situs Tempatqu.com dengan cara memilih pilihan “Registrasi” pada kanan atas situs Tempatqu.com. Setelah itu klik “Buat Post” yang terdapat pada Home (Beranda) dan isikan data sesuai dengan tempat/properti yang diiklankan.</p> <hr/>

        <h4>Bagaimana cara mencari tempat/properti di Tempatqu?</h1>
        <p>Untuk mencari tempat/properti yang diinginkan, dapat menggunakan kolom pencarian dengan menuliskan kata kunci atau memilih kategori berdasarkan jenis tempat/properti yang diinginkan.</p> <hr/>

        <h4>Bagaimana cara menyewa tempat/properti di Tempatqu?</h1> <p> Saat melihat iklan tempat/properti yang sesuai, klik “Kontak” pada iklan tersebut. Anda dapat langsung menghubungi Penyewa pada kontak yang telah ditampilkan. </p> <hr/>

        <h4>Jadi proses pembayaran tidak dilakukan dalam situs Tempatqu?</h1>
        <p>Ya. Segala proses transaksi (negosiasi dan pembayaran) dilakukan diluar situs Tempatqu.com. Tempatqu bertugas untuk memasarkan iklan dan sebatas berperan sebagai perantara Penyewa Properti dan Pengguna.</p> <hr/>

        <h4>Bagaimana cara membuat post menjadi premium di Tempatqu?</h1>
        <p>Klik “Make It Premium” pada iklan yang telah Anda buat. Anda akan diberikan nominal harga yang harus dibayarkan, nomor rekening administrator Tempatqu, nomor WhatsApp administrator Tempatqu, serta kode unik. Setelah pembayaran selesai dilakukan, silahkan konfirmasi struk pembayaran melalui nomor WhatsApp yang diberikan dengan disertakan kode unik. Post Anda akan menjadi premium dalam waktu selambat-lambatnya 24 jam setelah konfirmasi pembayaran dilakukan.</p> <hr/>

    </section>

</section>
<!--/Section: Features v.4-->
</div>
</div>
<!-- Buat Captcha -->
<script type="text/javascript">
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

</script>    