


    <div class="container" style="margin-top: 80px">
     <?php 
       foreach ($profile as $row){
            echo "<form class='form-horizontal' enctype='multipart/form-data' action='".site_url("Profile/save")."' method='post'>
            <h1>Edit Profile</h1>
            <hr>
            <div class='row'>
              <div class='col-md-3'>
                <div class='text-center'>";

                if($row->foto != ""){
                    echo "<img src='".$row->foto."' class='avatar img-circle' alt='avatar' style='max-width:180px;max-height:240px'>";
                }else{
                    echo "<img src='//placehold.it/100' class='avatar img-circle' alt='avatar'>";
                }
                  
               echo "<h6 style='margin-top:5px'>Upload avatar photo...</h6>
                  <input type='file' name='dokumen' id='dokumen'>
                </div>
              </div>
              
              <div class='col-md-9 personal-info'>
                <div class='alert alert-info alert-dismissable'>
                  <a class='panel-close close' data-dismiss='alert'>×</a> 
                  <i class='fa fa-coffee'></i>
                  Harap masukkan data yang <strong>valid</strong>. Demi kelancaran dan kemudahan user lainnya.
                </div>
                <h3>Personal info</h3>

                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Nama Lengkap:</label>
                        <div class='col-lg-8'>
                          <input class'form-control' type='text' name='nama' value='".$row->nama."'>
                        </div>
                      </div>

                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Email:</label>
                        <div class='col-lg-8'>
                          <input class'form-control' type='text' name='email' value='".$row->email."'>
                        </div>
                      </div>
                      
                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Nomer Handphone:</label>
                        <div class='col-lg-8'>
                          <input class='form-control' type='text' name='telp' value='".$row->telp."'>
                        </div>
                      </div>
                      <div class='form-group'>
                        <label class='col-lg-3 control-label'>Alamat:</label>
                        <div class='col-lg-8'>
                          <input class='form-control' type='text' name='alamat' value='".$row->alamat."'>
                        </div>
                      </div>
                    
                      <div class='form-group'>
                        <label class='col-md-3 control-label'>Masukkan password anda:</label>
                        <div class='col-md-8'>
                          <input class='form-control' type='password' name='pass'>
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