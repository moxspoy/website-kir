
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
                            <a class="nav-link active" data-toggle="tab" href="#loginpanel" role="tab"><i class="fa fa-user mr-1"></i> Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#registerpanel" role="tab"><i class="fa fa-user-plus mr-1"></i> Mendaftar</a>
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

    <!--Main Container-->
    <div class="container" style="margin-top: 100px;">
        <!-- Card deck -->
        <div class="card-deck">

          <!-- Card -->
          <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/201705_Scientist_bench_F.svg/2000px-201705_Scientist_bench_F.svg.png" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Cari Fasilitator</h4>
              <!--Text-->
              <p class="card-text">Lihat Fasilitator Yang Tersedia</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="<?php echo base_url('home/explore') ?>"><button type="button" class="btn btn-primary btn-md">Pilih</button></a>

            </div>

          </div>
          <!-- Card -->

          <!-- Card -->
          <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top cover" src="https://travelfree.in/wp-content/uploads/2017/12/TravelFree.in_Terms_Conditions_gcafa4.png" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Modul KIR</h4>
              <!--Text-->
              <p class="card-text">Download modul KIR</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="<?php echo base_url('assets/modul.pdf') ?>" download><button type="button" class="btn btn-primary btn-md">Pilih</button></a>

            </div>

          </div>
          <!-- Card -->

          <!-- Card -->
          <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top cover" src="https://mbtskoudsalg.com/images/download-image-png-format-3.png" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Unduh Proposal</h4>
              <!--Text-->
              <p class="card-text">Unduh proposal yang dibuat oleh Divisi Perencanaan dan Pengembangan Edukasi Keilmiahan (P2EK)</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="<?php echo base_url('assets/proposal.pdf') ?>" download><button type="button" class="btn btn-primary btn-md">Pilih</button></a>

            </div>

          </div>
          <!-- Card -->

        </div>
        <!-- Card deck -->
        
    </div>

    <script type="text/javascript">
        var url="<?php echo base_url();?>";
      
        function konfirmasi(){
            window.location.href = url+"Home/konfirmasi/"+localStorage.getItem('post_id');
        }

        function report(){
            window.location.href = url+"Home/report/"+localStorage.getItem('post_id');
        }

        function getId(id){
           localStorage.setItem('post_id',id);
        }

        function setIsPremiumRequestedToOne() {
            window.location.href = url+"Home/setIsPremiumRequestedToOne/"+localStorage.getItem('post_id');
        }

        
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

		<?php
			if(isset($_SESSION['success_order'])) {
				?>
				window.alert("Anda sukses memesan fasilitator. Kami akan menghubungi anda melalui SMS atau Telepon maksimal 3 hari setelah pemesanan");

		<?php
			session_destroy();
			}
		?>

    </script>                                                     
                                                                                               

    
    

