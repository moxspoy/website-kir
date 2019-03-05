
    <!--Footer-->
    <div>
        <footer class="page-footer green center-on-small-only" >

            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">

                   <!--First column-->
                <div class="col-md-2">
                </div>
                <!--/.First column-->
                <!--First column-->
                <div class="col-md-2">
                    
                </div>
                <!--/.First column-->
                <!--First column-->
                <div class="col-md-2">
                    <h5 class="title">Aplikasi KIR KPM UNJ</h5>
                    <ul>
                        <li><a href="<?php  echo site_url('footer/tentang') ?>"><i class="fa fa-child" style="margin-right: 8px"></i>Tentang Kami</a></li>
                        <li><a href="<?php  echo site_url('footer/karir') ?>"><i class="fa fa-external-link-square" style="margin-right: 8px"></i>Karir</a></li>
                        <li><a href="<?php  echo site_url('footer/kegiatan') ?>"><i class="fa fa-gamepad" style="margin-right: 8px"></i>Kegiatan Kami</a></li>
                        <li><a href="<?php  echo site_url('footer/bantuan') ?>"><i class="fa fa-question-circle" style="margin-right: 8px"></i>Pusat Bantuan</a></li>
                    </ul>
                </div>
                <!--/.First column-->

                <!-- Second column -->
                <div class="col-md-2">
                    <h5 class="title">Bantuan</h5>
                    <ul>
                        <li><a href="<?php  echo site_url('footer/syarat') ?>"><i class="fa fa-bell" style="margin-right: 8px"></i>Syarat dan Ketentuan</a></li>
                        <li><a href="<?php  echo site_url('footer/kebijakan') ?>"><i class="fa fa-fire" style="margin-right: 8px"></i>Kebijakan Privasi</a></li>
                        <li><a href="<?php  echo site_url('footer/keamanan') ?>"><i class="fa fa-shield" style="margin-right: 8px"></i>Panduan Keamanan</a></li>
                        <li><a href="<?php  echo site_url('footer/pengguna') ?>"><i class="fa fa-users" style="margin-right: 8px"></i>Panduan pengguna</a></li>
                    </ul>
                </div>   
                <!--/.Second column-->
                <!--  column -->
                <div class="col-md-2">
                    
                </div>   
                <!--/.Second column-->
                <!-- Second column -->
                <div class="col-md-2">
                    
                </div>   
                <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid" style="margin-top: 10px ; margin-bottom: 10px">
               <p style="font-size: 15px">Copyrights KPM UNJ 2018. All Right Reserved<p>
                <p id="demo"></p>
            </div>
        </div>
        <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

    </div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/tether.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/mdb.min.js')?>"></script>
    <script type="text/javascript">
        $('#demo').pagination({
                        dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 40],
                        pageSize: 5,
                        showGoInput: true,
                        showGoButton: true,
                        callback: function(data, pagination) {
                            // template method of yourself
                            var html = template(data);
                            dataContainer.html(html);
                        }
                    })
    </script>

</body>
</html> 