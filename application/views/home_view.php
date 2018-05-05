
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


        <!-- mdb carousel -->
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view hm-black-light">
                            <img class="d-block w-100" src="https://enterprisestudy.com/wp-content/uploads/2016/07/Mentoring.jpg" alt="First slide">
                            <div class="mask"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Bersahabat</h3>
                            <p>“Sampaikanlah dariku walaupun satu ayat.” [HR. Bukhari]</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view hm-black-strong">
                            <img class="d-block w-100" src="https://d1hl0z0ja1o93t.cloudfront.net/wp-content/uploads/2017/09/12131411/Mentor.jpg" alt="Second slide">
                            <div class="mask"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Lebih Dekat</h3>
                            <p>“Kamu adalah umat yang terbaik yang dilahirkan untuk manusia, menyuruh kepada yang ma’ruf, dan mencegah dari yang munkar, dan beriman kepada Allah. Sekiranya Ahli Kitab beriman, tentulah itu lebih baik bagi mereka, di antara mereka ada yang beriman, dan kebanyakan mereka adalah orang-orang yang fasik” (TQS. Al-Imran : 110)</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view hm-black-slight">
                            <img class="d-block w-100" src="https://assets.jurnalislam.com/2017/05/jurnalislam.com-20170501-211440-gjgh.jpg" alt="Third slide">
                            <div class="mask"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Dakwah</h3>
                            <p>“Dan hendaklah ada di antara kamu segolongan umat yang menyeru kepada kebajikan, menyuruh kepada yang ma’ruf dan mencegah dari yang munkar ; merekalah orang-orang yang beruntung” (TQS. Al-Imran : 104)</p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
                            
        <!-- //mdb carousel -->
        <?php 
            if(!isset($_SESSION['nrm'])) {
                echo "<div style='margin: 0 auto'>
            <!--Search-->
            <form action='".site_url("home/search")."?>' method='get' style='margin: 0 auto'>
                <div class='row'>
                    <div class='col col-md-4'>
                        <input type='search' class='form-control' name='search' placeholder='Cari murabbi' style='padding-top: 20px; margin: 0 auto' >
                    </div>
                    <div class='col col-md-4'>
                        <div class='form-group' style='width: 100%; margin: 20px auto auto auto; '' style='padding-top: 20px'>
                            <button class='btn btn-primary' type='submit' ><i class='fa fa-search'></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--Action-->

        <!--Post Card-->
        <hr>
        <div class='container' style='margin-bottom: 60px; margin-top: 60px; margin-top:30px'>
            <h1 class='text-center'>Tertarik menjadi mentor? segera <strong><a href='". site_url('daftar_mentor')."'> DAFTAR!</a></strong></h1>
            <h1 class='text-center'>Mentor sudah punya akun? Login <strong><a href='". site_url('mentor/login')."'> disini</a></strong></h1>
        </div>
        <hr>
        ";
            }
        ?>
        
        
         
        <!-- KATA MEREKA TENTANG MENTORING-->
		<div class="container" style="margin-bottom: 60px; margin-top: 60px; margin-top:30px">
            <div style="margin-bottom: 60px">
                <h2>Kata Mereka Tentang Mentoring</h2>
            </div>
            <div class="row">
                <div class="col">
                    <!--Card Regular-->
                    <div class="card card-cascade">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://hadimaulanayussuf.files.wordpress.com/2015/11/mujahid.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong>Mujahid Rabbani S</strong></h4>
                            <h5>Ketua Lembaga Dakwah Kampus UNJ 2017</h5>

                            <p class="card-text">Mentoring merupakan agenda menambah kebaikan. Disini tumbuh cinta. Cinta
                                kepada Allah. Cinta kepada sesama makhluk-Nya
                            </p>

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
                <div class="col">
                    <!--Card Regular-->
                    <div class="card card-cascade">

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

                            <p class="card-text">Mentoring merupakan agenda menambah kebaikan. Disini tumbuh cinta. Cinta
                                kepada Allah. Cinta kepada sesama makhluk-Nya
                            </p>

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
                <div class="col">
                    <!--Card Regular-->
                    <div class="card card-cascade">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="http://cdn.klimg.com/kapanlagi.com/p/ronny-600x600.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong>Ronny Setiawan</strong></h4>
                            <h5>Ketua BEM UNJ 2015</h5>

                            <p class="card-text">Mentoring merupakan agenda menambah kebaikan. Disini tumbuh cinta. Cinta
                                kepada Allah. Cinta kepada sesama makhluk-Nya
                            </p>

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
        </div>
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

    </script>                                                     
                                                                                               

    
    

    