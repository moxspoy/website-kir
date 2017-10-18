
    <!-- Start your project here--
    <!--Modal: Login / Register Form-->


    

    <!--Main Container-->
    <div class="container" style="margin-top: 100px;">

        <!-- Brand Tempatqu -->
        <div class="text-center">
            <img class="img-responsive" style="max-width: 50%; height: 50%" src="<?php echo base_url('assets/img/tempatqu.png')?>">
            <h1>ADMIN PAGE</h1>
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
            <h3>Premium Post Request</h3>
        </div>
         

        <!--Post Card-->
		<div class="container">
        <?php
            //if($post_id % 3 == 1 || $post_id == 1){
                echo "<div class='row'>"; 
            //}
			foreach ($premiumRequestPost as $row){
                if($row->status == 2){
					echo   "<div class='col-md-4'>
							   <div class='single-blog-item'>
										<div class='blog-thumnail'>
											<img class='img-fluid' style='max-height:200px;size:cover/center' src='".$row->foto."' alt='Card image cap'>
										</div>
										<div class='blog-content'>
											<h4 class='card-title' style='margin-left:10px;margin-top:5px'>".$row->namabrg."</h4>
											<p class='card-text' style='margin-left:10px'>".$row->deskripsi."</p>
											<p class='card-text' style='margin-left:10px'>Lokasi: ".$row->lokasi."</p>
                                            <p class='card-text' style='margin-left:10px'>Harga per jam: ".$row->harga."</p>
										</div>";
										
										if(isset($_SESSION['username']) && $row->status == 2){
                                            echo "<button data-toggle=modal onclick='getId(".$row->id.");' data-target=#makeItPremiumModal class='btn btn-primary'>Konfirmasi</button>";
											echo "<button data-toggle=modal onclick='getId(".$row->id.");' data-target=#ignorePremiumModal class='btn btn-danger'>Delete</button>";
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
        <!-- Premium  Post Request-->
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <!-- Reported Post -->
        <div class="text-center" style="background-color: #000000; color: #ffffff">
            <h3>Reported Post</h3>
        </div>
         

        <!--Post Card-->
        <div class="container">
        <?php
            //if($post_id % 3 == 1 || $post_id == 1){
                echo "<div class='row'>"; 
            //}


            foreach ($reportedPost as $row){
                if($row->status == 2){
                    echo   "<div class='col-md-4'>
                               <div class='single-blog-item'>
                                        <div class='blog-thumnail'>
                                            <img class='img-fluid' style='max-height:200px;size:cover/center' src='".$row->foto."' alt='Card image cap'>
                                        </div>
                                        <div class='blog-content'>
                                            <h4 class='card-title' style='margin-left:10px;margin-top:5px'>".$row->namabrg."</h4>
                                            <p class='card-text' style='margin-left:10px'>Number of Reported: ".$row->counter."</p>
                                            <p class='card-text' style='margin-left:10px'>Alasan</p>
                                        </div>";
                                        
                                        if(isset($_SESSION['username']) && $row->status == 2){
                                            echo "<button data-toggle=modal data-target=#deleteReportModal onclick='getId(".$row->id.");' class='btn btn-primary'>Delete</button>";
                                        }
                                        if(isset($_SESSION['username']) && $row->status == 2){
                                            echo "<button data-toggle=modal href='javascript:void(0);' onclick='getId(".$row->id.");' data-target=#reportModal class='btn btn-danger'>X</button>";
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
        <!-- Reported Post -->
    </div>

    <!-- Report Central Modal Medium Warning -->
    <div class="modal fade" id="makeItPremiumModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Konfirmasi </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Anda yakin akan menjadikan item ini menjadi premium? Pastikan sudah membayar biaya premium post</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" onclick="makeItPremium()" class="btn btn-warning">Ok<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- report Central Modal Medium Warning-->

    <!-- Report Central Modal Medium Warning -->
    <div class="modal fade" id="ignorePremiumModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Konfirmasi </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Anda yakin akan mengabaikan permintaan ini dan menghapus item ini dari premium post request?</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" onclick="deleteFromRequestedPremiumItem()" class="btn btn-warning">Ok<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- report Central Modal Medium Warning-->

    <!-- Report Central Modal Medium Warning -->
    <div class="modal fade" id="deleteFromRequestPremiumModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <p>Anda yakin akan menghapus item ini dari datar request premium post?</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" onclick="konfirmasi()" class="btn btn-warning">Ok<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- report Central Modal Medium Warning-->
    <!-- Report Central Modal Medium Warning -->
    <div class="modal fade" id="deleteReportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <p>Anda yakin akan menghapus item ini?</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" onclick="deleteReportedItem()" class="btn btn-warning">Ok<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- report Central Modal Medium Warning-->

     <!-- Report Modal Medium Warning -->
    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Batal</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Anda yakin akan menghiraukan item yang dilaporkan</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" onclick="updateReportedItem()" class="btn btn-warning">Ok<i class="fa fa-check ml-1"></i></a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Back</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- report Central Modal Medium Warning-->

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

    