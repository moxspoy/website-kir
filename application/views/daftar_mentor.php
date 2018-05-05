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
    <div class="container" style="margin-bottom: 60px; margin-top: 60px; margin-top:30px">
        <h1><strong>LOGIN</strong></h1>
        <div class="panel green" style="align: center">
            <main class="freeBird">
                <div class="container" >
                    <div class="row" style="align: center">
                        <div class="col-md-7 m-x-auto pull-xs-none">
                            <div class="jumbotron">
                                <h2 class="h2-responsive"><strong>Daftar Sebagai Mentor</strong></h2>
                                <p>Pastikan anda sudah memiliki syarat-syarat menjadi mentor. Anda akan diberikan email khusus dari
                                    Lembaga Dakwah Kampus jika semua anda dinyatakan layak sebagai mentor. Mengenai persyaratan bisa dilihat <a href="http://www.salimunj.com">disini</a></p>
                                <!-- <hr class="m-y-2"> -->

                                <!--Naked Form-->
                                <div class="card-block">

                                    <!--Body-->
                                    <form action="<?php echo site_url("home/post") ?>" method="post" enctype="multipart/form-data">

                                        <h5 class="h5-responsive">Nama</h5>
                                        <!-- Basic textbox -->
                                        <div class="md-form">
                                            <i class="fa fa-user prefix"></i>
                                            <input type="text" name="nama" class="form-control">
                                            <label for="form1" >Nama anda</label>
                                        </div>
                                        <!-- /.Basic textbox -->

                                        <h5 class="h5-responsive">NRM</h5>
                                        <!-- Basic textbox -->
                                        <div class="md-form">
                                            <i class="fa fa-list prefix"></i>
                                            <input type="text" name="nrm"  class="form-control">
                                            <label for="form1" class="">NRM anda</label>
                                        </div>
                                        <!-- /.Basic textbox -->

                                        <h5 class="h5-responsive">Program Studi</h5>
                                        <!-- Basic textbox -->
                                        <div class="md-form">
                                            <i class="fa fa-tree prefix"></i>
                                            <input type="text" name="prodi"  class="form-control">
                                            <label for="form1" class="">Prodi</label>
                                        </div>

                                        <h5 class="h5-responsive">Fakultas</h5>
                                        <!-- Basic textbox -->
                                        <div class="md-form">
                                            <i class="fa fa-tint prefix"></i>
                                            <input type="text" name="fakultas" class="form-control">
                                            <label for="form1" class="">Fakultas</label>
                                        </div>
                                        <!-- /.Basic textbox -->

                                        <!-- /.Basic textbox -->
                                        <h5 class="h5-responsive">Jenis Kelamin</h5>
                                        <!-- Basic textbox -->
                                        <div class="md-form">
                                            <!-- <i class="fa fa-venus prefix"></i> -->
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                    <option value="">Saya...</option>
                                                    <option value="1">Laki-Laki</option>
                                                    <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                        <!-- /.Basic textbox -->

                                        <h5 class="h5-responsive">Kota Asal</h5>
                                        <div class="md-form">
                                            <i class="fa fa-map prefix"></i>
                                            <input type="text" name="kota_asal" id="form2" class="form-control">
                                            <label for="form2">Kota Lahir</label>
                                        </div>

                                        <h5 class="h5-responsive">Password</h5>
                                        <div class="md-form">
                                            <i class="fa fa-key prefix"></i>
                                            <input type="password" name="password" id="form2" class="form-control">
                                            <label for="form2"></label>
                                        </div>

                                        <!--Email validation-->
                                        <h5 class="h5-responsive">E-mail</h5>
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="email" id="form9" name="email" class="form-control validate">
                                            <label for="form9" data-error="wrong" data-success="right">Email</label>
                                        </div>

                                        <h5 class="h5-responsive">Nomor HP</h5>
                                        <div class="md-form">
                                            <i class="fa fa-phone prefix"></i>
                                            <input type="text" id="form9" name="no_hp" class="form-control validate">
                                            <label for="form9" data-error="wrong" data-success="right">No HP/Whatsapp</label>
                                        </div>

                                        <h5 class="h5-responsive">Foto</h5>
                                        <div class="md-form">
                                             <i class="fa fa-camera prefix"></i>
                                        <strong>Pilih foto:</strong> 
                                        <input type="file" name="dokumen" id="dokumen">
                                        </div>
                                       
                                        

                                        <div class="text-xs-left">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>

                                </div>
                                <!--Naked Form-->

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

         <!--Action-->

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

    </script>                                                     
                                                                                               

    
    

    