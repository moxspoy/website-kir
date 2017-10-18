
    <!-- Start your project here--
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

                                    <div class="text-center form-sm mt-2">
                                        <button class="btn btn-info" name="button" type="submit" value="register">Sign up <i class="fa fa-sign-in ml-1"></i></button>
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
        <!-- IKLAN -->
        <div class="mdl-grid">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-cell">
                <a href="http://www.wingscorp.com">
                    <img style="width: 50%;height:50%; margin-left: 26%; margin-bottom: 30px" src='<?php echo base_url('assets/img/citra.jpg')?>' >
                </a>
            </div>
            <div class="mdl-layout-spacer"></div>
        </div>
        
        
        <!-- IKLAN -->
        <!--Search-->
        <form action="<?php echo site_url("home/search") ?>" method="get">
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="form-group" style="width: 50%; margin: 0 auto">
                        <i class="fa fa-bars prefix"></i>
                        <label for="sel1">Pilih Kategori:</label>
                        <select class="form-control" id="kategori" name="kategori">
                                <option value="">Pilih Kategori</option>
                                <option value="1">Aula</option>
                                <option value="2">Lapangan</option>
                                <option value="3">Ruang rapat</option>
                                <option>Lain Lain</option>
                        </select>
                    </div>
                </div>
                <div class="col col-md-4">
                    <input type="search" class="form-control" name="search" placeholder="Search for..." style="padding-top: 20px; margin: 0 auto">
                </div>
                <div class="col col-md-4">
                    <div class="form-group" style="width: 100%; margin: 20px auto auto auto; " style="padding-top: 20px">
                        <button class="btn btn-primary type="submit" >Go!</button>
                    </div>
                </div>
                
            </div>
            
            
        </form>
              
         <!--Action-->
        <?php

            if(isset($_SESSION['username'])){
                echo "<center><a href=controller/post class='btn btn-yellow' data-toggle=modal data-target=#modalpost style='margin-top:50px;margin-bottom:50px;left:0'><i class='fa fa-upload left'></i>Post Tempat</a></center>  ";              
            }else{
                echo "<br><br><br><br>";
            }

             if(!isset($_SESSION['username'])){
                echo "<p class='card-text' style='margin-left:10px'><font style='color:red'><i>Anda harus login, agar dapat melihat kontak pemilik tempat</i></font></p>";
            }
        ?>

        <!--Modal: Post form-->
        <div class="modal fade" id="modalpost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Header--><center>
                    <div class="modal-header light-blue darken-3 white-text">   
                        <h4 class="title"><i class="fa fa-upload"></i> Post Tempat</h4>
                    </div>
                </center>
                    <!--Body-->
                    <form action="<?php echo site_url("home/post") ?>" method="post"  enctype="multipart/form-data">
                        <div class="modal-body mb-0">
                            <div class="form-group">
                                <i class="fa fa-bars prefix"></i>
                                <label for="sel1">Kategori:</label>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="1">Aula</option>
                                    <option value="2">Lapangan</option>
                                    <option value="3">Ruang rapat</option>
                                    <option value="4">Lain Lain</option>
                                </select>
                            </div>
                
                            <div class="md-form form-sm">
                                <i class="fa fa-pencil-square-o prefix"></i>
                                <input type="text" id="namabarang" name="namabarang" class="form-control">
                                <label for="namabarang">Nama Tempat</label>
                            </div>


                            <div class="md-form form-sm">
                                <i class="fa fa-location-arrow prefix"></i>
                                <input type="text" id="lokasi" name="lokasi" class="form-control">
                                <label for="lokasi">Lokasi</label>
                            </div>

                            <!-- <div class="md-form form-sm">
                                <i class="fa fa-calendar prefix"></i>
                                <input type="text" id="waktu" name="waktu" class="form-control">
                                <label for="waktu">Waktu Buka</label>
                            </div> -->
                    
                            <div class="md-form form-sm">
                                <i class="fa fa-pencil prefix"></i>
                                <textarea type="text" id="deskripsi" name="deskripsi" class="md-textarea mb-0"></textarea>
                                <label for="form8">Deskripsi</label>
                            </div>
                            <div class="md-form form-sm">
                                <i class="fa fa-money prefix"></i>
                                <textarea type="text" id="harga" name="harga" class="md-textarea mb-0"></textarea>
                                <label for="form8">Harga</label>
                            </div>

                            
                            <i class="fa fa-camera prefix"></i>
                            <strong>Pilih foto:</strong> 
                            <input type="file" name="dokumen" id="dokumen">
                            
                            <div class="text-center mt-1-half" style="float: right;">
                                <button class="btn btn-info mb-2" name="post" value="post">Post<i class="fa fa-send ml-1"></i></button>
                            </div>

                        </div>
                    </form>
                </div>
                <!--/.Content-->
            </div>
        </div>

        <!--Post Card-->
        <!-- Show just premium post with slider -->
        
		<div class="container" style="margin-bottom: 30px">
        <?php
            if($post_id % 3 == 1 || $post_id == 1){
                echo "<div class='card'>"; 
            }

			foreach ($detailpost as $row){
                $id_post = $row->id;
                if($row->status == 2){
					echo   "<a href='".site_url("home/detail_content/$row->id")."'>
                                        <div class='blog-thumnail'>
                                            <img class='img-fluid' style='max-height:100%;max-width:100%;size:cover/center' src='".$row->foto."' alt='Card image cap'>
                                        </div>
                                        <div class='blog-content'>
                                            <h4 class='card-title' style='margin-left:10px;margin-top:5px'>".$row->namabrg."</h4>
                                            <p class='card-text' style='margin-left:10px'>".$row->deskripsi."</p>
                                            <p class='card-text' style='margin-left:10px'>Lokasi: ".$row->lokasi."</p>
                                            <p class='card-text' style='margin-left:10px'>Harga per jam: ".$row->harga."</p>
                                        </div> </a>";
                                        
                                        
                                        if($row->type == 1){
                                            echo "<a href=''><span class='blog-date' style='margin-top:40px;'>Premium</span></a>";
                                        }
                                        
                                        if(isset($_SESSION['username']) && $row->status == 2){
                                            echo "<button data-toggle=modal data-target=#chat class='btn btn-primary'><i class='fa fa-phone' aria-hidden='true'></i></button>";
                                        }

                                        if(isset($_SESSION['id']) && $row->pengepost == $_SESSION['id'] && $row->status == 2){
                                            echo "<button data-toggle=modal href='javascript:void(0);' onclick='getId(".$row->id.");' data-target=#makePostPremiumModal class='btn btn-primary'><i class='fa fa-star' aria-hidden='true'></i></button>
                                                <a href='http://localhost/tempat/home/editIklan/".$id_post."'' ><button  class='btn btn-danger' style='width:99%; padding-right:20px'><i class='fa fa-edit' aria-hidden='true'></i>EDIT</button></a>";
                                            //echo anchor('Home/konfirmasi/'.$row->id,'<button class="btn btn-primary">Konfirmasi</button>');
                                        }
                                        if(isset($_SESSION['username']) && $row->status == 2 && $row->pengepost != $_SESSION['id']){
                                            echo "<button data-toggle=modal href='javascript:void(0);' onclick='getId(".$row->id.");' data-target=#reportModal class='btn btn-danger'><i class='fa fa-warning' aria-hidden='true'></i></button>";
                                        }


                                        $post_id++;
								
                    }
                            
			}

			if($post_id % 3 == 1 || $post_id == 1){
					echo "</div>";
			}
        ?>
		</div>
    </div>

         <!-- Konfrimasi Central Modal Medium Warning -->
    <div class="modal fade" id="makePostPremiumModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Konfirmasi</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <h1>Kiriman anda akan menjadi premium dalam beberapa saat!</h1>
                        <p>Hai ! Silahkan transfer uang Rp 20.000 ke rekening kami <br>
                            1. Bank BNI dengan nomor rekening <strong>04008 70912</strong> a.n M Nurilman Baehaqi <br>
                            Setelah itu, kirim bukti transaksimu ke nomor 085920039600 (Whatsapp) dengan menyertakan kode unik kiriman anda<br>
                            yaitu <strong>TQ-00
                                <?php echo $id_post; ?>
                            </strong></p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" id="btnKonfirm" onclick="setIsPremiumRequestedToOne()" class="btn btn-primary-modal">Konfirmasi<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- konfirmasi Central Modal Medium Warning-->

    <!-- Konfrimasi Central Modal Medium Warning -->
    <div class="modal fade" id="konfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Konfirmasi</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Dengan mengklik konfirmasi, maka anda setuju bahwa kiriman ini dianggap melanggar beberapa aturan, termasuk: Pornografi, Melanggar SARA, bullying, harrashment, dan spam.</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" id="btnKonfirm" onclick="konfirmasi()" class="btn btn-primary-modal">Konfirmasi<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- konfirmasi Central Modal Medium Warning-->

     <!-- Report Central Modal Medium Warning -->
    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Report</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Dengan mengklik report maka bla bla bla</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" onclick="report()" class="btn btn-warning">Report<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- report Central Modal Medium Warning-->

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
    </script>        

    