
    <!-- Start your project here--
    <!--Modal: Login / Register Form-->


    

    <!--Main Container-->
    <div class="container" style="margin-top: 100px;">

        <h1>DAFTAR LIVE MENTORING</h1>
        <br/>
        <br/>
        <hr>
        <div class="row">
            <div class='col'>
        <?php foreach ($mentoring as $row) {
            if($row->num_rows()==0) {
                echo "<center><h1>Tidak ada mentoring yang sedang berlangsung</h1></center>";
            }
            echo " <div class='card '> <table id='example' class='table table-striped table-bordered table-responsive' cellspacing='0' width='100%''>
                <thead>
                    <tr>
                        <th>Id mentoring</th>
                        <th>Mentor</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>".$row->id."</td>
                        <td>".$row->nama."</td>
                        <td>".$row->jadwal."</td>
                        <td>".$row->tempat."</td>
                    </tr>
                </tbody>
            </table> </div>";
            
        } 
        
        ?>
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

    