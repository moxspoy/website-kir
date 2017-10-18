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
	<!--Section heading-->
    <center>
    <h1 class="section-heading pt-4"><bold>Panduan Pengguna<bold></h1>
    	<div class="view hm-zoom">
		    <img src="http://www.buildingbetterpractice.com/wp-content/uploads/2017/04/team-culture.jpg" class="img-fluid " alt="zoom" style="max-width: 300px; max-height: 300px">
		    <div class="mask flex-center waves-effect waves-light">
		        <!-- <p class="white-text">Pusat Bantuan</p> -->
		    </div>
		</div>
    </center>
    <br>
    <br>
    <hr>
    <!--Section description-->
    <p class="section-description lead grey-text">Kami memiliki beberapa panduan untuk pengguna</p>
    <hr>
    <section style="margin: 0 auto 10% auto;border-style: solid; border-width: 1px; border-color: #68C3A3 ">
    	<h4 class="narrow text-justify" style="padding: 5%">
    		<strong>Penyewa</strong>
    		<ol>
    			<li>Login pada akun tempatqu, jika belum mempunyai akun tempatqu, klik ‘Registrasi’ untuk menjadi user tempatqu.</li>
    			<li>Setelah berhasil login, klik ‘Buat Post’ dan isikan dengan lengkap informasi iklan.</li>
    		</ol>
    		<br><hr>
    		<strong>HARAP DIPERHATIKAN!</strong>
    		<strong>Judul yang Menarik Dan Sesuai</strong>
    		<ol>
    			<li>Berikan judul selengkap mungkin dan menggambarkan dengan jelas tempat/properti yang disewakan</li>
    			<li>Hindari mencantumkan harga, nomor telepon/HP, pin bb, nama situs/domain, tanda baca atau fancy karakter di judul</li>
    		</ol>
    		<hr>
    		<strong>Pilih Kategori</strong>
    		<BR>
    		Pilih kategori yang tepat sesuai dengan tempat/properti yang Anda sewakan
    		<br>
    		<strong>Berikan Deskripsi</strong>
    		<ol>
    			<li>Berikan deskripsi tempat/properti secara jelas</li>
    			<li>Hindari penggunaan link/hyperlink/html atau sejenisnya yang mengarah ke website lain</li>
    			<li>Berikan deskripsi hanya untuk menjelaskan satu jenis tempat/properti saja</li>
    		</ol>
    		<hr>
    		<strong>Upload Foto</strong>
    		<ol>
    			<li>Upload gambar/foto yang sesuai dengan tempat/properti  yang disewakan dengan kualitas foto bagus, fokus dan tidak miring/terbalik</li>
    			<li>Dilarang menggunakan gambar yang mengandung unsur pornografi. </li>
    			<li>Dilarang melakukan penyalahgunaan Merk Terdaftar, menggunakan watermark, atau nama situs/URL atau hyperlink website milik pihak ketiga</li>
    			<li>Gunakan foto asli yang diambil langsung dari kamera (tanpa di edit)</li>
    		</ol>
    		<hr>
    		<strong>Cantumkan Harga</strong><BR>
    		Cantumkan harga yang sebenarnya, hindari mengisi angka-angka aneh seperti 0, 1, 12345, 3333 (atau sejenisnya)
    		<hr>
    		<strong>Membuat Premium Post</strong>
    		Salah satu fitur atau layanan yang ditawarkan oleh Tempatqu adalah Premium Post. Iklan yang didaftarkan sebagai Premium Post akan berada pada halaman utama Tempatqu.<br>
    		Untuk mendaftarkan iklan sebagai Premium Post, Anda dapat memilih “Make It Premium” pada iklan yang telah dibuat. Anda akan mendapatkan petunjuk nominal harga yang harus dibayar, nomor rekening administrator Tempatqu, nomor WhatsApp administrator Tempatqu, serta kode unik. Setelah pembayaran dilakukan, harap konfirmasi bukti transfer melalui nomor WhatsApp yang telah diberikan.
    		<hr>
    		<strong>Ketentuan Lainnya</strong>
    		<ol>
    			<li>Untuk menemukan tempat/properti yang dicari, ada 2 cara yang bisa dilakukan, yaitu:
    				<ul>
    					<li>Ketik nama produk di kolom pencarian.</li>
    					<li>Klik kategori-kategori yang ada di halaman tempatqu.com</li>
    				</ul>
    			<li>Klik kontak pada deskripsi tempat/properti untuk mendapatkan kontak penyewa.</li>
    			<li>Apabila menemukan iklan dengan isi diluar konten dan atau mengandung unsur SARA atau pornografi, Pengguna dapat melakukan report pada iklan tersebut. Tempatqu berhak untuk menghapus iklan dengan lebih dari 5 (lima) report.</li>
    		</ol>
		</h4>
    </section>
</div>
<!-- Buat Captcha -->
<script type="text/javascript">
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

</script>  