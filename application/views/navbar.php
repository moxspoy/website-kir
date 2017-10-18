    <!--Navbar-->
    <nav class="navbar fixed-top scrolling-navbar navbar-toggleable-md navbar-dark bg-primary">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img class="img-responsive" style="max-width: 40%; height: 40%" src="<?php echo base_url('assets/img/tempatqu.png')?>">
            </a>
           
            <div class="collapse navbar-collapse mox-nav" id="navbarNav1" style="height: 50px">
                <ul class="nav navbar-nav navbar-left">
                    <li class="nav-item active" style="margin: auto 15px">
                        <a href="<?php echo base_url() ?>" class="nav-link"><i class='fa fa-home' aria-hidden='true'></i><span class="sr-only"></span></a>
                    </li>
                    <?php
                        if(isset($_SESSION['username']) && $_SESSION['username'] != "admin"){
                            $id = $_SESSION['id'];
                            echo    "<li class='nav-item' style='margin: auto 15px'>
                                       <a class='nav-link' href='".base_url("profile")."'><i class='fa fa-user' aria-hidden='true' style='margin-right: 8px'></i>Profil<span class=sr-only></span></a>
                                    </li>
                                    <li class='nav-item' style='margin: auto 15px'>
                                       <a class='nav-link' href='".base_url("home/daftarIklan/").$id."'><i class='fa fa-reorder' aria-hidden='true' style='margin-right: 8px'></i>Daftar Iklan<span class=sr-only></span></a>
                                    </li>
                                    ";
                        } else if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
                            echo "<li class='nav-item' style='margin: auto 15px'>
                                       <a class='nav-link' href='".base_url("kritik/daftar_kritik")."'><i class='fa fa-minus-square' aria-hidden='true' style='margin-right: 8px'></i>Lihat Kritik<span class=sr-only></span></a>
                                    </li>";
                        }
                      ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION['username'])){
                            echo    "<li class='nav-item' style='margin: auto 15px'>
                                        <a href='".base_url("home/Logout")."' class='nav-link'>
                                        <button type='button' class='btn btn-danger btn-rounded waves-effect waves-light'>
                                        <i class='fa fa-logout' aria-hidden='true' style='margin-right: 8px'></i>Keluar
                                        </button>
                                        <span class=sr-only></span></a> 
                                     </li>";
                        }else{
                            echo "<li class='nav-item' style='position:absolute;right:0' >
                                  <a class=nav-link data-toggle=modal data-target=#loginregister>
                                    <!-- Accent-colored raised button with ripple -->
                                    <button type='button' class='btn btn-danger btn-rounded waves-effect waves-light'>
                                      Login/Register
                                    </button>
                                    <span class=sr-only></span></a>
                                  </li>";        
                        }
                      ?>
                </ul>
            </div>
        </div>
    </nav>
