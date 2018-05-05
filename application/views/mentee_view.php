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
        <div class="row">
            <div class="col">
                <h1> JADWAL MENTORING ANDA</h1>
                <h4> Sabtu,  30 November 2017</h4>
                <h4>13.00-16.00 WIB</h4>
                <a href="<?php echo site_url("home/detail_mentoring") ?>"><button class="btn btn-primary"><i class="fa fa-chain"></i>Lihat Detail Mentoring</button></a>
                <a href="<?php echo site_url("home/materi") ?>"><button class="btn btn-primary"><i class="fa fa-download"></i>Download Materi</button></a>
                <a href='<?php $id = $_SESSION['id']; echo site_url("home/tambah_jadwal/$id"); ?>'><button class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Jadwal</button></a>
            </div>
            <div class="col">
                <!--Card Regular-->
                    <div class="card card-cascade" style='max-height: 400px'>
                        <h1>MENTOR ANDA</h1>

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://www.radarkotanews.com/wp-content/uploads/2016/08/Bagus-Tito-Wibisono-BEM.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong>Bagus Tito Wibisono</strong></h4>
                            <h5>Ketua BEM SI 2016</h5>
                            <a href="<?php echo site_url("home/mentor") ?>"><button class="btn btn-primary">Lihat Profil Mentor</button></a> <span>
                            <a href="<?php echo site_url("kritik") ?>"><button class="btn btn-primary">Kritik/Saran</button></a></span>
                            <br>                          

                            <!--Facebook-->
                            <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card Regular-->
            </div>
        </div>
        
        <div style="margin: 0 auto">
            <!--Search-->
            <form action="<?php echo site_url("home/search") ?>" method="get" style="margin: 0 auto">
                <div class="row">
                    <div class="col col-md-4">
                        <input type="search" class="form-control" name="search" placeholder="Cari murabbi" style="padding-top: 20px; margin: 0 auto" >
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group" style="width: 100%; margin: 20px auto auto auto; " style="padding-top: 20px">
                            <button class="btn btn-primary type="submit" ><i class='fa fa-search'></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
         <!--Action-->
        </div>

        <!--Post Card-->
        <hr>
        

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
                                                                                               

    
    

    