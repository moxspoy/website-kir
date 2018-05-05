
    <!-- Start your project here--
    <!--Modal: Login / Register Form-->


    

    <!--Main Container-->
    <div class="container" style="margin-top: 100px;">

        <!-- Brand Tempatqu -->
        <div class="text-center">
            <!-- <img class="img-responsive" style="max-width: 50%; height: 50%" src="<?php echo base_url('assets/img/tempatqu.png')?>"> -->
            <h1>JADWAL MENTOR</h1>
        </div>
        <!-- End of Brand -->
        <br/>
        <br/>
        <hr>
        <div class="row">
            <div class='col'>
        <?php foreach ($mentoring as $row) {
            echo " <div class='card '> <table id='example' class='table table-striped table-bordered table-responsive' cellspacing='0' width='100%''>
                <thead>
                    <tr>
                        <th>Id mentoring</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>".$row->id."</td>
                        <td>".$row->jadwal."</td>
                        <td>".$row->tempat."</td>
                        <td><a href='".base_url('mentor/delete/').$row->id."'><button class='btn btn-default'><i class='fa fa-times' ></i></button></a></td>
                    </tr>
                </tbody>
            </table> </div>";
        } ?>
        </div>
            <div class="col">
                <div class='card '>
                    <center>Pengajuan Jadwal Baru</center>

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

    