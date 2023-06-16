<?php 
include "config.php"; 
include "header.php"; 
session_start(); 
if (isset($_POST['sebab'])) {
$t2 = $_POST['tarikh1']; 
$t1 = $_POST['tarikh2']; 
$hari = $_POST['hari']; 
$seb = $_POST['sebab']; 

    $sql = "INSERT INTO mc (tarikh1, tarikh2, hari, sebab) 
VALUES ('$tarikh1','$tarikh2', '$hari','$seb')"; 
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil) {
        echo "<script>alert('MAKLUMAT DITERIMA');
        window.location='table_g.php'</script>"; 
        }else{
        echo "<script>alert(''MAKLUMAT TIDAK DITERIMA!'); 
        window.location='mc.php'</script>";
        }
    // if (mysqli_num_rows($hasil)) { 
    //mulakan sesi login dengan id guru yang login 
    // $_SESSION['sebab'] = $sebab; 
    //bawakan ke dashboard pelajar 
    // header("Location: mc.php"); 
    // }else{ 
    // //paparkan mesej jika gagal login 
    // echo "<script>alert('Maklumat Diterima');
    // window.location='table.php'</script>";
    // }
}
    ?>

<html>

<head>

    <h2>MC Cuti Kecemasan Pensyarah</h2>
    <style>
        body {
            background-image: linear-gradient(lightblue, floralwhite);
        }
    </style>
</head>

<body>
    <fieldset>
        <center>
            <form method="POST">
                <p>Surat MC</p>
                <label>Tarikh Cuti</label><br>
                <label>Dari</label>
                <input type="date" id="tarikh2" name="tarikh2"><br><br>
                <label>Sehingga</label>
                <input type="date" id="tarikh2" name="tarikh2"><br><br>
                <label>Berapa hari?</label><br>
                <select name="hari" id="hari" required>
                    <option value="">--Pilih--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select><br><br>
                <label>Sebab?</label><br>
                <textarea placeholder="kerana ...." name="sebab" id="sebab" cols="50" rows="7"></textarea><br><br>

                <input type="submit" value="Submit">

            </form>
            <form action="table_g.php"><button type="submit">Back</button><br><br>
        </center>
    </fieldset>
</body>

</html>