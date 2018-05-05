
    <!-- Start your project here--
    <!--Modal: Login / Register Form-->


    

    <!--Main Container-->
    <div class="container" style="margin-top: 100px;">

        <!-- Brand Tempatqu -->
        <div class="text-center">
            <!-- <img class="img-responsive" style="max-width: 50%; height: 50%" src="<?php echo base_url('assets/img/tempatqu.png')?>"> -->
            <h1>HALAMAN MENTOR</h1>
        </div>
        <!-- End of Brand -->


        <!-- Premium Post Request -->
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="text-center" style="background-color: #000000; color: #ffffff">
            <h3>DASHBOARD</h3>

        </div>
        <hr>
        <div class="row">
            <div class="col">
                
                <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://www.shareicon.net/download/2016/10/18/845487_book_512x512.png" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body text-center" style="margin-top: 30px">
                            <!--Title-->
                            <h4 class="card-title">Upload Materi</h4>
                            <!--Text-->
                            <p class="card-text">Materi diupload untuk memudahkan manajemen materi</p>
                            <center><a href=controller/post class='btn btn-yellow' data-toggle=modal data-target=#upload_materi ><i class='fa fa-upload fa-4x left'></i>UPLOAD MATERI</a></center>
                        </div>

                    </div>
                <!--/.Card-->

            </div>
            <div class="col">
                
                <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://cdn2.iconfinder.com/data/icons/flat-jewels-icon-set/512/0009_Calendar.png" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body text-center" style="margin-top: 30px">
                            <!--Title-->
                            <h4 class="card-title">Lihat Jadwal</h4>
                            <!--Text-->
                            <p class="card-text">Lihat dan kelola jadwal mentoring</p>
                            <center><a href="<?php echo site_url('mentor/jadwal') ?>" class='btn btn-yellow'><i class='fa fa-calendar fa-4x left'></i>LIHAT JADWAL</a></center>
                        </div>

                    </div>
                <!--/.Card-->
            </div>
            <div class="col">
                
                <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://cdn2.iconfinder.com/data/icons/strategy-management/512/graphs-512.png" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body text-center" style="margin-top: 30px">
                            <!--Title-->
                            <h4 class="card-title">Laporan</h4>
                            <!--Text-->
                            <p class="card-text">Lihat dan cetak laporan</p>
                            <center><a href="<?php echo site_url('mentor/cetak_laporan') ?>" class='btn btn-yellow'><i class='fa fa-chart fa-4x left'></i>Laporan</a></center>
                        </div>

                    </div>
                <!--/.Card-->
            </div>
        </div>
    </div>

    <!--Modal: Post form-->
        <div class="modal fade" id="upload_materi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <center>
                        <div class="modal-header light-blue darken-3 white-text">   
                            <h4 class="title"><i class="fa fa-upload"></i> Upload Materi</h4>
                        </div>
                    </center>
                    <!--Body-->
                    <form action="<?php echo site_url("home/upload_materi") ?>" method="post"  enctype="multipart/form-data">
                        <div class="modal-body mb-0">                
                            <div class="md-form form-sm">
                                <i class="fa fa-pencil-square-o prefix"></i>
                                <input type="text" id="judul" name="judul" class="form-control">
                                <label for="judul">Judul Materi</label>
                            </div>
                            
                            <i class="fa fa-camera prefix"></i>
                            <strong>Pilih Dokumen:</strong> 
                            <input type="file" name="materi" id="materi">
                            
                            <div class="text-center mt-1-half" style="float: right;">
                                <button class="btn btn-info mb-2" name="post" value="post">Upload<i class="fa fa-send ml-1"></i></button>
                            </div>

                        </div>
                    </form>
                </div>
                <!--/.Content-->
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
        function updateReportedItem(){
            window.location.href = url+"Home/updateReportedItem/"+localStorage.getItem('post_id');
        }
        function deleteReportedItem(){
            window.location.href = url+"Home/deleteReportedItem/"+localStorage.getItem('post_id');
        }
        function getId(id){
           localStorage.setItem('post_id',id);
        }
        function deleteFromRequestedPremiumItem(){
            window.location.href = url+"Home/deleteFromRequestedPremiumItem/"+localStorage.getItem('post_id');
        }
        function makeItPremium() {
            window.location.href = url+"Home/makeItPremium/"+localStorage.getItem('post_id');
        }
    </script>                                                     

    