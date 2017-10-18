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
    <h1 class="section-heading pt-4"><bold>Kebijakan Privasi<bold></h1>
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
    <p class="section-description lead grey-text">Kami memiliki beberapa kebijakan menyangkut privasi</p>
    <hr>
    <section style="margin: 0 auto 10% auto;border-style: solid; border-width: 1px; border-color: #68C3A3 ">
    	<h4 class="narrow text-justify" style="padding: 5%">
    		Kami bertekad untuk melindungi dan menghargai hak pribadi pengguna kami. Kenyamanan dan rasa aman Anda sebagai pengguna dalam menggunakan situs www.tempatqu.com sangatlah penting bagi kami.<br>
    		Dengan menggunakan layanan dimana Kebijakan Privasi ini muncul, Anda dianggap telah membaca, mengerti dan memberikan persetujuan kepada penggunaan data pribadi Anda oleh kami sesuai dengan Kebijakan Privasi ini.<br>
			Kami dapat mengubah Kebijakan Privasi ini dari waktu ke waktu dengan melakukan pengurangan ataupun penambahan ketentuan pada halaman ini. Perubahan terhadap kebijakan ini akan kami umumkan melalui www.tempatqu.com atau melalui media lainnya. Anda diharapkan untuk memeriksa halaman ini secara berkala agar Anda mengetahui perubahan-perubahan tersebut.<br><hr>
			<strong>Informasi yang Kami Minta di Website</strong><br>
			Untuk mendaftar pada situs www.tempatqu.com, Anda harus memberikan berbagai informasi yang kami perlukan sebagaimana tercantum di bawah ini:
			<ol>
				<li>Nama lengkap</li>
				<li>Alamat surat elektronik (email)</li>
				<li>Nomor telepon selular (handphone)/telepon</li>
				<li>Alamat lengkap</li>	
			</ol>
			<br><hr>
			Kami mengasumsikan bahwa semua informasi dan perubahan-perubahan yang Anda berikan di atas sekarang, atau di masa yang akan datang adalah akurat dan benar. Apabila informasi dan perubahan-perubahan yang Anda berikan tersebut ternyata terbukti tidak benar, maka dengan ini Kami menyatakan tidak bertanggung jawab atas segala akibat yang dapat terjadi sehubungan dengan pemberian informasi dan perubahan-perubahan yang tidak benar tersebut.<br><hr>
			<string>Apa yang kami lakukan dengan informasi yang dikumpulkan</string>
			<ol>
				<li>Kepentingan komunikasi antar pengguna</li>
				<li>Kepentingan riset pasar</li>
				<li>Kepentingan pengembangan situs www.tempatqu.com</li>
				<li>Catatan internal/administrasi kami.</li>	
			</ol><hr>
			<strong>Keamanan</strong> <br>
			Kami berkomitmen untuk memastikan bahwa informasi yang Anda berikan kepada Kami dalam keadaan aman. Untuk mencegah akses tidak sah, Kami melakukan tindakan pengamanan fisik, elektronik, dan prosedur manajerial yang diperlukan untuk melindungi informasi Anda yang Kami kumpulkan secara online.<br><hr>
			<strong> Koneksi Ke Website Lain</strong> <br>
			Untuk keperluan referensi dan kenyamanan Anda, Website Kami mungkin menyediakan link ke situs-situs lain. Namun, ketika Anda menggunakan link-link ini, Kami tidak bertanggung jawab untuk melindungi privasi dan informasi apapun yang Anda berikan ketika mengunjungi situs-situs tersebut karena Kami tidak mengetahui kebijakan penanganan informasi pribadi di situs-situs sebagaimana dimaksud dan tidak bertanggung jawab atas konten mereka. Anda harus berhati-hati, mempelajari dan melihat pernyataan privasi yang berlaku di situs tersebut.<br>
			Entitas apapun yang Anda pilih sebagai kontak atau berinteraksi baik yang terdaftar dalam direktori ataupun di tempat lain selain dari Situs www.tempatqu.com, adalah sepenuhnya tanggung jawab layanan tersebut pada Anda, dan Anda setuju bahwa Situs www.tempatqu.com tidak dapat dikenakan tindakan apapun untuk kerusakan atau biaya yang keluar atas interaksi yang terjadi antara Anda dengan layanan yang bersangkutan.<br>
			<strong>Pendistribusian Informasi Pribadi Anda</strong><hr><br>
			Kami tidak akan menjual, mendistribusikan atau menyewakan informasi pribadi Anda kepada pihak ketiga, kecuali terbatas untuk hal-hal sebagai berikut:<br>
			<ol>
				<li>Apabila diharuskan oleh hukum dan peraturan perundang-undangan yang berlaku di Republik Indonesia.</li>
				<li>Apabila terjadi pengalihan unit aset atau kepemilikan usaha kepada pihak lain.</li>
			</ol>
			<br>
			Selain untuk kepentingan-kepentingan sebagaimana disebutkan di atas, Anda akan menerima pemberitahuan apabila akan terjadi pendistribusian informasi pribadi Anda kepada pihak lain, dan Anda berhak untuk meminta agar informasi pribadi Anda tidak diikutsertakan.<br><hr>
			<strong>Hukum Yang Berlaku</strong>
			<br>
			Syarat-syarat dan ketentuan dalam Kebijakan Privasi ini tunduk kepada hukum di wilayah Negara Kesatuan Republik Indonesia.
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