<?php
include "config.php";
include "header.php";
// session_start();
// if (isset($_POST['idguru'])){
//     $user = $_POST['idguru'];
//     $pass = $_POST['katalaluan'];
//     $query = mysqli_query($amb,"SELECT * FROM penasihat WHERE idguru='$user' AND 
//     katalaluan='$pass'");
// }
?>

<html>
<head>
<style>
table, tr, td, th {
  border: 1px solid grey;
}

table {
  width: 100%;
  border-collapse: collapse;
} 

body{
    background-image: linear-gradient(lightblue,floralwhite);
}

h5{
  text-align: center;
}

h4 {
      text-align: right;
}

.cg{
    color: green;
}

.tarikh {
    text-align: center;
}

.note{
    border: 1px solid black;
    float: right;
    padding: 10px;
    margin-bottom: 10px;
}

.tarikh1{
    margin-left: 400px;
}
</style>
</head>
<body>
    <br>

<h2>JADUAL KELAS TPP</h2>

<div class="note">
  <h4>NOTE:</h4>
  <h4 class="cg"> 
    PHP - Pn Rosnidaini Binti Shudin <br>
    JAVA - Pn Tg Muzlina Hanim Binti Tg Semara <br>
    MA - Pn Nor Dahiyah Binti Ghazali <br>
  </h4>
</div>
<br><br><br>

<div class="table1">
 <table > 

 <h5 class="tarikh1">21 November - 25 November</h5>
  <tr>
    <th>WAKTU</th>
    <th>8.00-9.30</th>
    <th>10.00-11.30</th>
    <th>11.30-1.00</th>
    <th>2.00-3.30</th>
    <th>3.30-5.00</th>
    
  </tr>
  <tr>
    <th>HARI</th>
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>ISNIN</th>
    <td>PHP</td>
    <td>PHP</td>
    <td>PHP</td>
    <td>PHP</td>
    <td>PHP</td>
  </tr>
  <tr>
    <th>SELASA</th>
    <td>PHP</td>
    <td>ES</td>
    <td>PI/M</td>
    <td>MT</td>
    <td>PHP</td>
  </tr>
  <tr>
    <th>RABU</th>
    <td>PHP</td>
    <td>PHP</td>
    <td>PHP</td>
    <td>PHP</td>
    <td>PHP</td>
  </tr>
  <tr>
    <th>KHAMIS</th>
    <td>PHP</td>
    <td>PHP</td>
    <td>PHP</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
  <tr>
    <th>JUMAAT</th>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
</table> 
</div>

<div class="table2">
 <table > 

 <h5 class="tarikh">28 November - 9 December</h5>
  <tr>
    <th></th>
    <th>8.00-9.30</th>
    <th>10.00-11.30</th>
    <th>11.30-1.00</th>
    <th>2.00-3.30</th>
    <th>3.30-5.00</th>
    <th>5.00-6.30</th>
    
  </tr>
  <tr>
    <th></th>
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>ISNIN</th>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
  <tr>
    <th>SELASA</th>
    <td>JAVA</td>
    <td>ES</td>
    <td>PI/M</td>
    <td>MT</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
  <tr>
    <th>RABU</th>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
  <tr>
    <th>KHAMIS</th>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
  <tr>
    <th>JUMAAT</th>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
</table> 
</div>

<div class="table3">
 <table > 

 <h5 class="tarikh">12 December - 16 December</h5>
  <tr>
    <th></th>
    <th>8.00-9.30</th>
    <!-- <th>8.00-9.30</th> -->
    <th>10.00-11.30</th>
    <th>11.30-1.00</th>
    <!-- <th>8.00-9.30</th> -->
    <th>2.00-3.30</th>
    <th>3.30-5.00</th>
    
  </tr>
  <tr>
    <th></th>
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>ISNIN</th>
    <td>CUTI</td>
    <td>HARI</td>
    <td>KEPUTERAAN </td>
    <td>SULTAN </td>
    <td>SELANGOR</td>
    
  </tr>
  <tr>
    <th>SELASA</th>
    <td>JAVA</td>
    <td>ES</td>
    <td>PI/M</td>
    <td>MT</td>
    <td>JAVA</td>
  </tr>
  <tr>
    <th>RABU</th>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
  </tr>
  <tr>
    <th>KHAMIS</th>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>JAVA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>JUMAAT</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
</table> 
</div>

<div class="table4">
 <table > 

 <h5 class="tarikh">19 December - 23 December</h5>
  <tr>
    <th></th>
    <th>8.00-9.30</th>
    <!-- <th>8.00-9.30</th> -->
    <th>10.00-11.30</th>
    <th>11.30-1.00</th>
    <!-- <th>8.00-9.30</th> -->
    <th>2.00-3.30</th>
    <th>3.30-5.00</th>
    <th>5.00-6.30</th>
    
  </tr>
  <tr>
    <th></th>
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>ISNIN</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    
  </tr>
  <tr>
    <th>SELASA</th>
    <td>MA</td>
    <td>ES</td>
    <td>PI/M</td>
    <td>MT</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>RABU</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>KHAMIS</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>JUMAAT</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
</table> 
</div>

<div class="table5">
 <table > 

 <h5 class="tarikh">26 December - 30 December</h5>
  <tr>
    <th></th>
    <th>8.00-9.30</th>
    <!-- <th>8.00-9.30</th> -->
    <th>10.00-11.30</th>
    <th>11.30-1.00</th>
    <!-- <th>8.00-9.30</th> -->
    <th>2.00-3.30</th>
    <th>3.30-5.00</th>
    
  </tr>
  <tr>
    <th></th>
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>ISNIN</th>
    <td>CUTI</td>
    <td>HARI</td>
    <td>KRISMAS</td>
    <td>HUHU </td>
    <td>HAHA</td>
    
  </tr>
  <tr>
    <th>SELASA</th>
    <td>MA</td>
    <td>ES</td>
    <td>PI/M</td>
    <td>MT</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>RABU</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>KHAMIS</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>JUMAAT</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
</table> 
</div>

<div class="table6">
 <table > 

 <h5 class="tarikh">2 Jan - 6 Jan</h5>
  <tr>
    <th></th>
    <th>8.00-9.30</th>
    <!-- <th>8.00-9.30</th> -->
    <th>10.00-11.30</th>
    <th>11.30-1.00</th>
    <!-- <th>8.00-9.30</th> -->
    <th>2.00-3.30</th>
    <th>3.30-5.00</th>
    
  </tr>
  <tr>
    <th></th>
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>ISNIN</th>
    <td>CUTI</td>
    <td>HARI</td>
    <td>TAHUN</td>
    <td>BARU</td>
    <td>2023</td>
    
  </tr>
  <tr>
    <th>SELASA</th>
    <td>MA</td>
    <td>ES</td>
    <td>PI/M</td>
    <td>MT</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>RABU</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>KHAMIS</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
  <tr>
    <th>JUMAAT</th>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
    <td>MA</td>
  </tr>
</table> 
</div>

</body>
</html>