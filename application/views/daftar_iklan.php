

    <!-- Start your project here--
    <!--Modal: Login / Register Form-->
    <div style="height: 60px">
    </div>
    <center>
    <h1 style="margin-top: 15px; margin-bottom: 15px">DAFTAR IKLAN ANDA</h1>
    </center>
        <!--Post Card-->
        <!-- Show just premium post with slider -->
		<div class="container" style="margin-bottom: 30px">
        <?php
            //if($post_id % 3 == 1 || $post_id == 1){
                echo "<div class='row'>"; 
            //}

			foreach ($daftarIklan as $row){
                $id_post = $row->id;
                //$id = $row->$id;
                if($row->status == 2){
					echo   "<div class='col-md-4'> 
							   <div class='single-blog-item'>
                                        <a href='".site_url("home/detail_content/$row->id")."'>
										<div class='blog-thumnail'>
											<img class='img-fluid' style='max-height:200px;size:cover/center' src='".$row->foto."' alt='Card image cap'>
										</div>
										<div class='blog-content'>
											<h4 class='card-title' style='margin-left:10px;margin-top:5px'>".$row->namabrg."</h4>
											<p class='card-text' style='margin-left:10px'>Lokasi: ".$row->lokasi."</p>
                                            <p class='card-text' style='margin-left:10px'>Harga per jam: ".$row->harga."</p>
										</div> </a>";
                                        
										
										if($row->type == 1){
											echo "<a href=''><span class='blog-date' style='margin-top:40px;'>Premium</span></a>";
										}
										
										if(isset($_SESSION['username']) && $row->status == 2){
											echo "<button data-toggle=modal data-target=#chat class='btn btn-primary'><i class='fa fa-phone' aria-hidden='true'></i></button>";
										}

                                        if(isset($_SESSION['id']) && $row->pengepost == $_SESSION['id'] && $row->status == 2 && $row->isPremiumRequest==0 && $row->type==2){
                                            echo "<button data-toggle=modal href='javascript:void(0);' onclick='getId(".$row->id.");' data-target=#makePostPremiumModal class='btn btn-primary'><i class='fa fa-star' aria-hidden='true'></i></button>";
                                            //echo anchor('Home/konfirmasi/'.$row->id,'<button class="btn btn-primary">Konfirmasi</button>');
                                        }
										if(isset($_SESSION['username']) && $row->status == 2){
											echo "<a href='http://localhost/tempat/home/editIklan/".$id_post."'' ><button  class='btn btn-danger'><i class='fa fa-edit' aria-hidden='true'></i>
                                            </button></a>";
                                            
										}


                                        $post_id++;
								echo"</div>
							</div>";
                    }
                            
			}

			//if($post_id % 3 == 1 || $post_id == 1){
					echo "</div>";
			//}
        ?>
		</div>

        <hr style="color: #ffff00" />
        <!--Post Card-->
        
  

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
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

    </script>                                                     
   
    
    

    