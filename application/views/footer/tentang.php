

<!-- Main Container -->
<div class="container">
<section class="section pb-5">

    <!--Section heading-->
    <center>
    <h2 class="section-heading h1 pt-4 title">TENTANG SKBM</h2>
    </center>
    <!--Section description-->
    <p class="section-description pb-4">SKBM adalah sekolah KIR Binan KPM UNJ. Kelompok ilmiah remaja (disingkat KIR) adalah kelompok remaja yang melakukan serangkaian kegiatan yang menghasilkan karya ilmiah. KIR merupakan kegiatan ekstrakurikuler di SMP, SMA, SMK, Madrasah Tsanawiyah, Madrasah Aliyah, maupun pondok pesantren. Ekstrakurikuler ini merupakan organisasi yang sifatnya terbuka bagi para remaja yang ingin mengembangkan kreativitas, 
    ilmu pengetahuan, dan teknologi pada masa kini maupun masa yang akan datang<br> Penanggung Jawab SKBM : Yuhanna (085752028986)</p>
    

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card">

                <div class="card-body" style="margin-left: 20px">
                    <!--Header-->
                    <div class="form-header blue accent-1">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                    </div>

                    <p>Kritik anda adalah kemajuan kami.</p>
                    <br>

                    <form method="post" action="<?php echo site_url('kritik/kirim_kritik')?>">
                    	<!--Body-->
	                    <div class="md-form">
	                        <i class="fa fa-user prefix grey-text"></i>
	                        <input type="text" id="form-name" class="form-control" name="nama">
	                        <label for="form-name">Nama</label>
	                    </div>

	                    <div class="md-form">
	                        <i class="fa fa-envelope prefix grey-text"></i>
	                        <input type="text" id="form-email" class="form-control" name="email">
	                        <label for="form-email">Email</label>
	                    </div>

	                    <div class="md-form">
	                        <i class="fa fa-tag prefix grey-text"></i>
	                        <input type="text" id="form-Subject" class="form-control" name="judul">
	                        <label for="form-Subject">Judul Kritik</label>
	                    </div>

	                    <div class="md-form">
	                        <i class="fa fa-pencil prefix grey-text"></i>
	                        <textarea type="text" id="form-text" class="md-textarea" name="isi"></textarea>
	                        <label for="form-text">Kritik Anda</label>
	                    </div>

	                    <div class="text-center">
	                        <button class="btn btn-pink">Submit</button>
	                    </div>
                    </form>

                </div>

            </div>
            <!--Form with header-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7">

            <!--Google map-->
            <div id="map" class="z-depth-1-half map-container" style="height: 400px"></div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="btn-floating"><i class="fa fa-map-marker"></i></a>
                    <p>Sekretariat KPM UNJ. Gedung G 106 UNJ Rawamangun, Jakarta</p>
                    <p>Indonesia</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating "><i class="fa fa-phone"></i></a>
                    <p>+ 62 859 2003 9600</p>
                    <p>Senin - Jumat, 8:00-22:00 WIB</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating "><i class="fa fa-envelope"></i></a>
                    <p>admin@kpmunj.org</p>
                    <p>penelitimudaunj@gmail.com</p>
                </div>
            </div>

        </div>
       <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.1-->
</div>
<script type="text/javascript">
	
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.194934, lng: 106.884058},
          zoom: 15
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBugy3-Oigx17YzfthVMJwyLRGVPbKF5g&callback=initMap"
    async defer></script>
    <!-- Buat Captcha -->
<script type="text/javascript">
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

</script>  
