    <!--Navbar-->
    <nav class="navbar fixed-top scrolling-navbar navbar-toggleable-md navbar-light green">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>" style="color:#ffffff">
                <b>KIR</b>
            </a>
           
            <div class="collapse navbar-collapse mox-nav" id="navbarNav1" style="height: 50px">
                <ul class="nav navbar-nav navbar-left">
                    <li class="nav-item active" style="margin: auto 15px">
                        <a href="
                        <?php if (isset($_SESSION['username'])) {
                            echo base_url('home/jadwal');
                        } else {
                            echo base_url();
                        }
                        ?>
                        " class="nav-link"><i class='fa fa-home' aria-hidden='true' style='color:#ffffff'></i><span class="sr-only"></span></a>
                    </li>
                    <?php
                        if(isset($_SESSION['username'])){
                            $id = $_SESSION['id'];
                            echo    "
                                    <li class='nav-item' style='margin: auto 10px'>
                                       <a class='nav-link' href='".base_url("home/live_mentoring")."' style='color:#ffffff'><i class='fa fa-reorder' aria-hidden='true' style='margin-right: 8px; color:#ffffff'></i>Live Mentoring<span class=sr-only></span></a>
                                    </li>
                                    <li class='nav-item' style='margin: auto 10px'>
                                       <a class='nav-link' href='".base_url("home/mutabaah")."' style='color:#ffffff'><i class='fa fa-minus-square' aria-hidden='true' style='margin-right: 8px; color:#ffffff'></i>Lembar Mutabaah<span class=sr-only></span></a>
                                    </li>
                                    <li class='nav-item' style='margin: auto 10px'>
                                       <a class='nav-link' href='".base_url("home/materi/")."' style='color:#ffffff'><i class='fa fa-reorder' aria-hidden='true' style='margin-right: 8px;color:#ffffff'></i>Materi<span class=sr-only></span></a>
                                    </li>
                                    ";
                        } else if(isset($_SESSION['username'])) {
                            echo "<li class='nav-item' style='margin: auto 10px'>
                                       <a class='nav-link' href='".base_url("home/mutabaah")."'><i class='fa fa-minus-square' aria-hidden='true' style='margin-right: 8px; color:#ffffff'></i>Lembar Mutabaah<span class=sr-only></span></a>
                                    </li>";
                        } else if (isset($_SESSION['nrm'])) {
                            echo "<li class='nav-item' style='margin: auto 10px'>
                                       <a class='nav-link' href='".base_url("mentor")."' style='color:#ffffff'><i class='fa fa-book' aria-hidden='true' style='margin-right: 8px; color:#ffffff'></i>Dashboard<span class=sr-only></span></a>
                                    </li>";
                        }
                      ?>
                         <li class="nav-item" style="margin: auto 15px; color:#ffffff">
                        <a href="<?php echo base_url('footer/tentang') ?>" class="nav-link" style="color:#ffffff"><i class='fa fa-child' aria-hidden='true' ></i><span class="sr-only"></span>Tentang</a>
                        </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($_SESSION['username']) || isset($_SESSION['nrm'])){
                            echo    "<li class='nav-item' style='margin: auto 15px'>
                                        <a href='".base_url("home/Logout")."' class='nav-link'>
                                        <button type='button' class='btn btn-danger btn-rounded waves-effect waves-light'>
                                        <i class='fa fa-logout' aria-hidden='true' style='margin-right: 8px'></i>Keluar
                                        </button>
                                        <span class=sr-only></span></a> 
                                     </li>";
                        }else{
                            echo "<li class='nav-item' style='position:absolute;right:0' >
                                  <a href='".base_url("admin")."'>
                                    <!-- Accent-colored raised button with ripple -->
                                    <button type='button' class='btn btn-danger btn-rounded waves-effect waves-light'>
                                      Login Admin
                                    </button>
                                    <span class=sr-only></span></a>
                                  </li>";        
                        }
                      ?>
                </ul>
            </div>
        </div>
    </nav>
