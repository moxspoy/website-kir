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
	<div style="margin-top:  100px">
	</div>
	<!--Section heading-->
    <center>
    <h1 class="section-heading pt-4"><bold>Syarat dan Ketentuan<bold></h1>
    	<div class="view hm-zoom">
		    <img src="https://image.freepik.com/free-vector/urban-landscape-in-flat-design_23-2147506625.jpg" class="img-fluid " alt="zoom" style="max-width: 300px; max-height: 300px">
		    <div class="mask flex-center waves-effect waves-light">
		        <!-- <p class="white-text">Pusat Bantuan</p> -->
		    </div>
		</div>
    </center>
    <br>
    <br>
    <hr>
    <!--Section description-->
    <p class="section-description lead grey-text">Berikut syarat dan ketentuan yang berlaku di tempatqu.com</p>
    <hr>


<ul class="nav md-pills nav-justified pills-secondary">
    <li class="nav-item active">
        <a class="nav-link active" data-toggle="tab" href="#panel10" role="tab">Informasi Umum</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel11" role="tab">Pengguna</a>
    </li>
    <li class="nav-item" >
        <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">Sewa Tempat</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel13" role="tab">Sanksi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel14" role="tab">Kebijakan Privasi</a>
    </li>
</ul>

<!-- Tab panels -->
<div class="tab-content">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel10" role="tabpanel">
        <br>

       <ul>
       	<li>Tempatqu sebagai sarana penunjang bisnis berusaha menyediakan fitur dan layanan untuk menjamin kenyamanan para penggunanya.</li>
       	<li>Tempatqu tidak berperan sebagai Penyewa Tempat, melainkan sebagai perantara antara Penyewa dan Pembeli. Segala transaksi yang terjadi antara Penyewa dan Pembeli berada di luar kewenangan tempatqu sebagai perantara, dan akan diurus oleh pihak-pihak yang bersangkutan (baik Penyewa atau pun Pembeli) sesuai ketentuan yang berlaku di Indonesia.</li>
       	<li>Tempatqu tidak bertanggung jawab atas kualitas tempat/properti, rusaknya reputasi pihak lain, dan/atau segala bentuk perselisihan yang dapat terjadi antar Pengguna.</li>
       	<li>Tempatqu memiliki kewenangan untuk mengambil tindakan yang dianggap perlu terhadap akun yang diduga dan/atau terindikasi melakukan penyalahgunaan, memanipulasi, dan/atau melanggar Syarat dan Ketentuan di tempatqu.</li>
       	<li>Tempatqu berhak meminta data-data pribadi Pengguna jika diperlukan.</li>
       	<li>Syarat dan Ketentuan tempatqu dapat berubah sewaktu-waktu dan/atau diperbaharui dari waktu ke waktu tanpa pemberitahuan terlebih dahulu. Dengan mengakses tempatqu, Pengguna dianggap menyetujui perubahan-perubahan dalam Syarat dan Ketentuan tempatqu.</li>
       </ul>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel11" role="tabpanel">
        <br>

        <p class="text-justify">Pengguna wajib mengisi data pribadi secara lengkap dan jujur di halaman akun (profil).
		Pengguna bertanggung jawab atas keamanan dari akun termasuk penggunaan e-mail dan password.
		Penggunaan fasilitas apapun yang disediakan oleh tempatqu mengindikasikan bahwa Pengguna telah memahami dan menyetujui segala aturan yang diberlakukan oleh Tempatqu.
		Selama berada dalam platform tempatqu, Pengguna dilarang keras menyampaikan setiap jenis konten apapun yang menyesatkan, memfitnah, atau mencemarkan nama baik, mengandung atau bersinggungan dengan unsur SARA, diskriminasi, dan/atau menyudutkan pihak lain.
		Pengguna tidak diperbolehkan menggunakan tempatqu untuk melanggar peraturan yang ditetapkan oleh hukum di Indonesia maupun di negara lainnya.
		Pengguna bertanggung jawab atas segala risiko yang timbul di kemudian hari atas informasi yang diberikannya ke dalam tempatqu, termasuk namun tidak terbatas pada hal-hal yang berkaitan dengan hak cipta, merek, desain industri, desain tata letak industri dan hak paten atas suatu produk.
		</p>

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel12" role="tabpanel">
        <br>

        <p class="text-justify">Penyewa bertanggung jawab secara penuh atas segala risiko yang timbul di kemudian hari terkait dengan informasi yang dibuatnya, termasuk, namun tidak terbatas pada hal-hal yang berkaitan dengan hak cipta, merek, desain industri, desain tata letak sirkuit, hak paten dan/atau izin lain yang telah ditetapkan atas suatu produk menurut hukum yang berlaku di Indonesia.
		Penyewa wajib menempatkan tempat/properti sesuai dengan kategorinya.
		Penyewa wajib mengisi nama atau judul barang dengan jelas, singkat dan padat.
		Penyewa wajib menampilkan gambar tempat/properti yang sesuai dengan deskripsi tempat/properti yang disewa dan tidak mencantumkan logo ataupun alamat situs jual-beli lain pada gambar. Dianjurkan foto atau gambar memperlihatkan 3 bagian (depan, samping dan belakang).
		Penyewa wajib mengisi harga yang sesuai dengan harga sebenarnya.
		Penyewa tidak diperkenankan mencantumkan alamat, nomor kontak, alamat e-mail, situs, forum, username media sosial selain pada kolom yang disediakan.
		Penyewa dilarang membuat iklan tempat/properti yang identik sama (multiple posting).
		Penyewa dilarang melakukan duplikasi iklan dengan menyalin atau menggunakan gambar dari iklan user lain.
		</p>

    </div>
    <!--/.Panel 3-->

    <!--Panel 4-->
    <div class="tab-pane fade" id="panel13" role="tabpanel">
        <br>

        <p class="text-justify">Segala tindakan yang melanggar peraturan di tempatqu akan dikenakan sanksi berupa termasuk namun tidak terbatas pada: <br>
		•	Iklan akan dihapus apabila mendapatkan lebih dari 5 (lima) kali report. <br>
		•	Akun dibekukan dan atau dinonaktifkan apabila terbukti melanggar norma dan peraturan yang telah ditentukan.
		</p>

    </div>
    <!--/.Panel 4-->
    <!--Panel 5-->
    <div class="tab-pane fade" id="panel14" role="tabpanel">
        <br>

        <p class="text-justify">Tempatqu tidak bertanggung jawab atas segala risiko dan kerugian yang timbul dari dan dalam kaitannya dengan informasi yang dituliskan oleh Pengguna tempatqu.
		Tempatqu tidak bertanggung jawab atas segala pelanggaran hak cipta, merek, desain industri, desain tata letak sirkuit, hak paten atau hak-hak pribadi lain yang melekat atas suatu barang, berkenaan dengan segala informasi yang dibuat oleh Penyewa.
		Tempatqu tidak bertanggung jawab atas segala risiko dan kerugian yang timbul berkenaan dengan diaksesnya akun Pengguna oleh pihak lain.
		Tempatqu tidak bertanggung jawab atas segala risiko dan kerugian yang timbul akibat transaksi antara Penyewa dan Pembeli.
		Tempatqu tidak bertanggung jawab atas segala risiko dan kerugian yang timbul akibat kesalahan atau perbedaan nominal harga pada deskripsi iklan
		Tempatqu tidak bertanggung jawab atas segala risiko dan kerugian yang timbul akibat penyalahgunaan nomor kontak dan/atau alamat e-mail milik Pengguna maupun pihak lainnya.
		</p>

    </div>
    <!--/.Panel 5-->

</div>        
</div>
<!-- Buat Captcha -->
<script type="text/javascript">
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

</script>  