<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GetLocations!</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>

    <div class="content">
    <div class="container mb-5">
      
    <h2><b>CARI LOKASI!</b></h2>
	<hr>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label><b>Provinsi</b></label>
				<select class="form-control" name="provinsi" id="provinsi">
					<option value="">Pilih Provinsi</option>
				</select>
			</div>
			
			<div class="form-group">
				<label><b>Kabupaten</b></label>
				<select class="form-control" name="kabupaten" id="kabupaten">
					<option value="">Pilih Kabupaten</option>
				</select>
			</div>
 
			<div class="form-group">
				<label><b>Kecamatan</b></label>
				<select class="form-control" name="kecamatan" id="kecamatan">
					<option value="">Pilih Kecamatan</option>
				</select>
			</div>
 
			<div class="form-group">
				<label><b>Kelurahan</b></label>
				<select class="form-control" name="kelurahan" id="kelurahan">
					<option value="">Pilih Kelurahan</option>
				</select>
			</div>
	</div>
  
      
  <button class="btn btn-warning" onclick="alert('Submission Accepted');">Pindai</button>
  </hr>
</div>
    <script>
$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "provinsi_db.php",
          	cache: false, 
          	success: function(msg){
              $("#provinsi").html(msg);
            }
        });
 
      	$("#provinsi").change(function(){
      	var provinsi = $("#provinsi").val();
          	$.ajax({
          		type: 'POST',
              	url: "kabupaten_db.php",
              	data: {provinsi: provinsi},
              	cache: false,
              	success: function(msg){
                  $("#kabupaten").html(msg);
                }
            });
        });
 
        $("#kabupaten").change(function(){
      	var kabupaten = $("#kabupaten").val();
          	$.ajax({
          		type: 'POST',
              	url: "kecamatan_db.php",
              	data: {kabupaten: kabupaten},
              	cache: false,
              	success: function(msg){
                  $("#kecamatan").html(msg);
                }
            });
        });
 
        $("#kecamatan").change(function(){
      	var kecamatan = $("#kecamatan").val();
          	$.ajax({
          		type: 'POST',
              	url: "kelurahan_db.php",
              	data: {kecamatan: kecamatan},
              	cache: false,
              	success: function(msg){
                  $("#kelurahan").html(msg);
                }
            });
        });

        $("#kelurahan").change(function(){
      	var kelurahan = $("#kelurahan").val();
          	$.ajax({
          		type: 'POST',
              	url: "kodepos_db.php",
              	data: {kelurahan: kelurahan},
              	cache: false,
              	success: function(data){
                  $("#label").remove();
                  $("#kelurahan").html(msg);
                }
            });
        });
     });
    </script>
    </div>
  </body>
</html>
