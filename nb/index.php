<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reservasi Lapangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script type='text/javascript' src='https://cdn.firebase.com/v0/firebase.js'></script>
    <script src="js/jquery.validate.min.js"></script>
  </head>


  <!-- DROPDOWN SELECTOR DARI SQL -->
  <?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"tes");
$ambil=mysqli_query($conn,'SELECT lap_nama FROM lapangan ORDER BY lap_nama ASC;');
?>


<body>

    <div id="smd" class="container">

      	<h2 text-align="center" id="teks">- Reservasi Lapangan -</h2>
      <script>
          var d = new Date();
          var tanggal = d.getUTCDate();
          var bulan = d.getUTCMonth() + 1	;
      		var bulann = d.getUTCMonth() + 3 ;
          var tahun = d.getUTCFullYear();

          var smdWaktu = tanggal + "/" + bulan + "/" + tahun;
      		var smdWaktuu = tanggal + "/" + bulann + "/" + tahun;

      		document.write('<h2 id="jstext">' + smdWaktu + '   	 -    	' + smdWaktuu + '</h2>');
          </script>
      </div>

      <div class="selector" id="pemilihan" align="center">
        <select name="filter-jadwal" onchange="smdfunction();" id="dropdown">
      <option id="hiddenopt">-Pilih Tempat-</option>
        <?php if (mysqli_num_rows($ambil) > 0 ) {
      ?>
      <?php while ($row = mysqli_fetch_array($ambil)) { ?>

      <option><?php echo $row['lap_nama'] ?> </option>
      <?php } ?>
      <?php } ?>
      </select>
      <br><br>

    </div>

      <script>
      function smdfunction() {
        var x = document.getElementById("dropdown").value;
      	  document.getElementById("teks").innerHTML =x;
      }
      </script>
  </div>
  </div>


<div class="container">


<?php
$conn = mysqli_connect("localhost","root","","tes") or die (mysqli_error());
$query = mysqli_query($conn, "SELECT id_booking, id_date, id_start, id_end FROM booking");

  $colors = ['green', 'yellow'];
  while ($result = mysqli_fetch_array($query)) {
      echo "<tr style='background-color: ".$colors[$result['id_booking']].";'>
          <td>".$result['id_booking']."</td>
          <td>".$result['date']."</td>
          <td>".$result['start']."</td>
          <td>".$result['end']."</td>
      </tr>";
  }
?>

</div>

    <div id="schedule-table" class="table-responsive container">
     <table align="center" class="table table-bordered">
        <thead>
          <tr>
            <th><div class="">Waktu</div></th>
            <th class="day-column-name">SENIN</th>
            <th class="day-column-name">SELASA</th>
            <th class="day-column-name">RABU</th>
            <th class="day-column-name">KAMIS</th>
            <th class="day-column-name">JUM'AT</th>
            <th class="day-column-name">SABTU</th>
          </tr>
        </thead>

        <tbody>
          <tr> <!-- 7am -->
            <td rowspan="2" class="hour">07:00</td>
            <td class="half-hour" id="senin/0700"></td>
            <td class="half-hour" id="selasa/0700"></td>
            <td class="half-hour" id="rabu/0700"></td>
            <td class="half-hour" id="kamis/0700"></td>
            <td class="half-hour" id="jumat/0700"></td>
            <td class="half-hour" id="sabtu/0700"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/0730"></td>
            <td class="half-hour" id="selasa/0730"></td>
            <td class="half-hour" id="rabu/0730"></td>
            <td class="half-hour" id="kamis/0730"></td>
            <td class="half-hour" id="jumat/0730"></td>
            <td class="half-hour" id="sabtu/0730"></td>

          </tr>
          <tr> <!-- 8am -->
            <td rowspan="2" class="hour">08:00</td>
            <td class="half-hour" id="senin/0800"></td>
            <td class="half-hour" id="selasa/0800"></td>
            <td class="half-hour" id="rabu/0800"></td>
            <td class="half-hour" id="kamis/0800"></td>
            <td class="half-hour" id="jumat/0800"></td>
            <td class="half-hour" id="sabtu/0800"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/0830"></td>
            <td class="half-hour" id="selasa/0830"></td>
            <td class="half-hour" id="rabu/0830"></td>
            <td class="half-hour" id="kamis/0830"></td>
            <td class="half-hour" id="jumat/0830"></td>
            <td class="half-hour" id="sabtu/0830"></td>
          </tr>
          <tr> <!-- 9am -->
            <td rowspan="2" class="hour">09:00</td>
            <td class="half-hour" id="senin/0900"></td>
            <td class="half-hour" id="selasa/0900"></td>
            <td class="half-hour" id="rabu/0900"></td>
            <td class="half-hour" id="kamis/0900"></td>
            <td class="half-hour" id="jumat/0900"></td>
            <td class="half-hour" id="sabtu/0900"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/0930"></td>
            <td class="half-hour" id="selasa/0930"></td>
            <td class="half-hour" id="rabu/0930"></td>
            <td class="half-hour" id="kamis/0930"></td>
            <td class="half-hour" id="jumat/0930"></td>
            <td class="half-hour" id="sabtu/0930"></td>
          </tr>
          <tr> <!-- 10am -->
            <td rowspan="2" class="hour">10:00</td>
            <td class="half-hour" id="senin/1000"></td>
            <td class="half-hour" id="selasa/1000"></td>
            <td class="half-hour" id="rabu/1000"></td>
            <td class="half-hour" id="kamis/1000"></td>
            <td class="half-hour" id="jumat/1000"></td>
            <td class="half-hour" id="sabtu/1000"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1030"></td>
            <td class="half-hour" id="selasa/1030"></td>
            <td class="half-hour" id="rabu/1030"></td>
            <td class="half-hour" id="kamis/1030"></td>
            <td class="half-hour" id="jumat/1030"></td>
            <td class="half-hour" id="sabtu/1030"></td>
          </tr>
          <tr> <!-- 11am -->
            <td rowspan="2" class="hour">11:00</td>
            <td class="half-hour" id="senin/1100"></td>
            <td class="half-hour" id="selasa/1100"></td>
            <td class="half-hour" id="rabu/1100"></td>
            <td class="half-hour" id="kamis/1100"></td>
            <td class="half-hour" id="jumat/1100"></td>
            <td class="half-hour" id="sabtu/1100"></td>

          </tr>
          <tr>
            <td class="half-hour" id="senin/1130"></td>
            <td class="half-hour" id="selasa/1130"></td>
            <td class="half-hour" id="rabu/1130"></td>
            <td class="half-hour" id="kamis/1130"></td>
            <td class="half-hour" id="jumat/1130"></td>
            <td class="half-hour" id="sabtu/1130"></td>
          </tr>
          <tr> <!-- 12pm -->
            <td rowspan="2" class="hour">12:00</td>
            <td class="half-hour" id="senin/1200"></td>
            <td class="half-hour" id="selasa/1200"></td>
            <td class="half-hour" id="rabu/1200"></td>
            <td class="half-hour" id="kamis/1200"></td>
            <td class="half-hour" id="jumat/1200"></td>
            <td class="half-hour" id="sabtu/1200"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1230"></td>
            <td class="half-hour" id="selasa/1230"></td>
            <td class="half-hour" id="rabu/1230"></td>
            <td class="half-hour" id="kamis/1230"></td>
            <td class="half-hour" id="jumat/1230"></td>
            <td class="half-hour" id="sabtu/1230"></td>
          </tr>
          <tr> <!-- 1pm -->
            <td rowspan="2" class="hour">13:00</td>
            <td class="half-hour" id="senin/1300"></td>
            <td class="half-hour" id="selasa/1300"></td>
            <td class="half-hour" id="rabu/1300"></td>
            <td class="half-hour" id="kamis/1300"></td>
            <td class="half-hour" id="jumat/1300"></td>
            <td class="half-hour" id="sabtu/1300"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1330"></td>
            <td class="half-hour" id="selasa/1330"></td>
            <td class="half-hour" id="rabu/1330"></td>
            <td class="half-hour" id="kamis/1330"></td>
            <td class="half-hour" id="jumat/1330"></td>
            <td class="half-hour" id="sabtu/1330"></td>
          </tr>
          <tr> <!-- 2pm -->
            <td rowspan="2" class="hour">14:00</td>
            <td class="half-hour" id="senin/1400"></td>
            <td class="half-hour" id="selasa/1400"></td>
            <td class="half-hour" id="rabu/1400"></td>
            <td class="half-hour" id="kamis/1400"></td>
            <td class="half-hour" id="jumat/1400"></td>
            <td class="half-hour" id="sabtu/1400"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1430"></td>
            <td class="half-hour" id="selasa/1430"></td>
            <td class="half-hour" id="rabu/1430"></td>
            <td class="half-hour" id="kamis/1430"></td>
            <td class="half-hour" id="jumat/1430"></td>
            <td class="half-hour" id="sabtu/1430"></td>
          </tr>
          <tr> <!-- 3pm -->
            <td rowspan="2" class="hour">15:00</td>
            <td class="half-hour" id="senin/1500"></td>
            <td class="half-hour" id="selasa/1500"></td>
            <td class="half-hour" id="rabu/1500"></td>
            <td class="half-hour" id="kamis/1500"></td>
            <td class="half-hour" id="jumat/1500"></td>
            <td class="half-hour" id="sabtu/1500"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1530"></td>
            <td class="half-hour" id="selasa/1530"></td>
            <td class="half-hour" id="rabu/1530"></td>
            <td class="half-hour" id="kamis/1530"></td>
            <td class="half-hour" id="jumat/1530"></td>
            <td class="half-hour" id="sabtu/1530"></td>
          </tr>
          <tr> <!-- 4pm -->
            <td rowspan="2" class="hour">16:00</td>
            <td class="half-hour" id="senin/1600"></td>
            <td class="half-hour" id="selasa/1600"></td>
            <td class="half-hour" id="rabu/1600"></td>
            <td class="half-hour" id="kamis/1600"></td>
            <td class="half-hour" id="jumat/1600"></td>
            <td class="half-hour" id="sabtu/1600"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1630"></td>
            <td class="half-hour" id="selasa/1630"></td>
            <td class="half-hour" id="rabu/1630"></td>
            <td class="half-hour" id="kamis/1630"></td>
            <td class="half-hour" id="jumat/1630"></td>
            <td class="half-hour" id="sabtu/1630"></td>
          </tr>
          <tr> <!-- 5pm -->
            <td rowspan="2" class="hour">17:00</td>
            <td class="half-hour" id="senin/1700"></td>
            <td class="half-hour" id="selasa/1700"></td>
            <td class="half-hour" id="rabu/1700"></td>
            <td class="half-hour" id="kamis/1700"></td>
            <td class="half-hour" id="jumat/1700"></td>
            <td class="half-hour" id="sabtu/1700"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1730"></td>
            <td class="half-hour" id="selasa/1730"></td>
            <td class="half-hour" id="rabu/1730"></td>
            <td class="half-hour" id="kamis/1730"></td>
            <td class="half-hour" id="jumat/1730"></td>
            <td class="half-hour" id="sabtu/1730"></td>
          </tr>
          <tr> <!-- 5pm -->
            <td rowspan="2" class="hour">18:00</td>
            <td class="half-hour" id="senin/1800"></td>
            <td class="half-hour" id="selasa/1800"></td>
            <td class="half-hour" id="rabu/1800"></td>
            <td class="half-hour" id="kamis/1800"></td>
            <td class="half-hour" id="jumat/1800"></td>
            <td class="half-hour" id="sabtu/1800"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1830"></td>
            <td class="half-hour" id="selasa/1830"></td>
            <td class="half-hour" id="rabu/1830"></td>
            <td class="half-hour" id="kamis/1830"></td>
            <td class="half-hour" id="jumat/1830"></td>
            <td class="half-hour" id="sabtu/1830"></td>
          </tr>
          <tr> <!-- 5pm -->
            <td rowspan="2" class="hour">19:00</td>
            <td class="half-hour" id="senin/1900"></td>
            <td class="half-hour" id="selasa/1900"></td>
            <td class="half-hour" id="rabu/1900"></td>
            <td class="half-hour" id="kamis/1900"></td>
            <td class="half-hour" id="jumat/1900"></td>
            <td class="half-hour" id="sabtu/1900"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/1930"></td>
            <td class="half-hour" id="selasa/1930"></td>
            <td class="half-hour" id="rabu/1930"></td>
            <td class="half-hour" id="kamis/1930"></td>
            <td class="half-hour" id="jumat/1930"></td>
            <td class="half-hour" id="sabtu/1930"></td>
          </tr>
          <tr> <!-- 5pm -->
            <td rowspan="2" class="hour">20:00</td>
            <td class="half-hour" id="senin/2000"></td>
            <td class="half-hour" id="selasa/2000"></td>
            <td class="half-hour" id="rabu/2000"></td>
            <td class="half-hour" id="kamis/2000"></td>
            <td class="half-hour" id="jumat/2000"></td>
            <td class="half-hour" id="sabtu/2000"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/2030"></td>
            <td class="half-hour" id="selasa/2030"></td>
            <td class="half-hour" id="rabu/2030"></td>
            <td class="half-hour" id="kamis/2030"></td>
            <td class="half-hour" id="jumat/2030"></td>
            <td class="half-hour" id="sabtu/2030"></td>
          </tr>
          <tr> <!-- 5pm -->
            <td rowspan="2" class="hour">21:00</td>
            <td class="half-hour" id="senin/2100"></td>
            <td class="half-hour" id="selasa/2100"></td>
            <td class="half-hour" id="rabu/2100"></td>
            <td class="half-hour" id="kamis/2100"></td>
            <td class="half-hour" id="jumat/2100"></td>
            <td class="half-hour" id="sabtu/2100"></td>
          </tr>
          <tr>
            <td class="half-hour" id="senin/2130"></td>
            <td class="half-hour" id="selasa/2130"></td>
            <td class="half-hour" id="rabu/2130"></td>
            <td class="half-hour" id="kamis/2130"></td>
            <td class="half-hour" id="jumat/2130"></td>
            <td class="half-hour" id="sabtu/2130"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
