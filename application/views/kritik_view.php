
    <!-- Start your project here--
    <!--Modal: Login / Register Form-->


    

    <!--Main Container-->
    <div class="container" style="margin-top: 100px;">

        <!-- Brand Tempatqu -->
        <div class="text-center">
            <img class="img-responsive" style="max-width: 50%; height: 50%" src="<?php echo base_url('assets/img/tempatqu.png')?>">
            <h1>DAFTAR KRITIK</h1>
        </div>
        <!-- End of Brand -->


        <!-- Premium Post Request -->
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
         
            <!--Table-->
            <div class="table-wrapper-2">
            <table class="table table-responsive">

                <!--Table head-->
                <thead class="mdb-color darken-3">
                    <tr class="text-white">
                            <!-- <th>Id</th> -->
                            <th>Nama</th>
                            <th>Waktu</th>
                            <th>Email</th>
                            <th>Judul Kritik</th>
                            <th>Isi Kritik</th>
                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                    
                        <?php
                        foreach ($daftar_kritik as $row){
                echo "<tr>
                            <td>".$row->nama."</td>
                            <td>".$row->tanggal."</td>
                            <td>".$row->email."</td>
                            <td>".$row->judul."</td>
                            <td>".$row->isi."</td></tr>" ;
                        }
                            ?>  
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>                
    </div>
