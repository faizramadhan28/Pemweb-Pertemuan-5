<form id="form_mahasiswa">
	<label for="prodi">
		Prodi
	</label>
		<select name="prodi" id="prodi">
		<option value=""> Pilih program studi </option>
		<option value="IF"> Teknik Informatika </option>
		<option value="EL"> Teknik Elektro </option>
		<option value="ME"> Teknik Mesin </option>
		<option value="TG"> Teknik Geofisika </option>
		<option value="GL"> Teknik Geologi </option>
	</select>
</form>
<br>
<div id="tampil_data"></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
	integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
	crossorigin = "anonymous">
</script>
<script>
	$(document).ready(function () {
		$("#tampil_data").load("tampilKosong.php");
		$("#prodi").change(function(){
			var prodi = $(this).val();
			$("#tampil_data").load("tampil.php",{prodi: prodi});
			// $.ajax({
	  //           type: 'POST',
	  //           url: "tampil.php",
	  //           data: {prodi: prodi},
	  //           success: function(response) {
	  //               $("#tampil_data").load("tampil.php");
	  //           }
	  //       });
		});
	});
</script>