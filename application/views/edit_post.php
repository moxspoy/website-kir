

<div style="height: 80px">
</div>
    <div class="container" style="margin-top: 80px">
     <?php 
       foreach ($editPost as $row){

            echo "<form class='form-horizontal' role='form' enctype='multipart/form-data' action='".site_url("home/saveEdit/").$row->id."' method='post'>
            <h1>Edit Post Anda</h1>
            <hr>
            <div class='row'>
              <div class='col-md-3'>
                <div class='text-center'>";

                if($row->foto != ""){
                    echo "<img src='".$row->foto."' class='avatar img-circle' alt='avatar' style='max-width:180px;max-height:240px'>";
                }else{
                    echo "<img src='//placehold.it/100' class='avatar img-circle' alt='avatar'>";
                }
                  
               echo "<h6 style='margin-top:5px'>Upload foto...</h6>
                  <input type='file' name='dokumen' id='dokumen'>
                </div>
              </div>
              
              <div class='col-md-9 personal-info'>
                <div class='alert alert-info alert-dismissable'>
                  <a class='panel-close close' data-dismiss='alert'>×</a> 
                  
                </div>
                <h3>Informasi Kiriman Anda</h3>

                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Judul:</label>
                        <div class='col-lg-8'>
                          <input class'form-control' type='text' name='namabrg' value='".$row->namabrg."'>
                        </div>
                      </div>

                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Lokasi:</label>
                        <div class='col-lg-8'>
                          <input class'form-control' type='text' name='lokasi' value='".$row->lokasi."'>
                        </div>
                      </div>
                      
                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Deskripsi:</label>
                        <div class='col-lg-8'>
                          <input class='form-control' type='text' name='deskripsi' value='".$row->deskripsi."'>
                        </div>
                      </div>
                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Harga:</label>
                        <div class='col-lg-8'>
                          <input class='form-control' type='number' name='harga' value='".$row->harga."'>
                        </div>
                      </div>
                    
                    <div class='text-center mt-1-half' >
                        <button class='btn btn-info mb-2' name='save' value='save'>Save<i class='fa fa-check-square-o ml-1'></i></button>
                    </div>
                </div>
                </form>";
                }

            ?>
            
          </div>
      </div>
    </div>
    <hr>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/tether.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/mdb.min.js')?>"></script>

</body>
</html> 