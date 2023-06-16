<?php 
include "config.php";  
include "header.php"; 
if (isset($_POST['ndp'])) {

$ndp = $_POST['ndp']; 
$nam = $_POST['nama']; 
$jan = $_POST['jantina']; 

$sql = "INSERT INTO daftarguru (ndp, nama, jantina) 
VALUES ('$ndp','$nam', '$jan')"; 

$hasil = mysqli_query($samb, $sql); 

if ($hasil) {
echo "<script>alert('PENDAFTARAN AHLI BERJAYA');
window.location='login_g.php'</script>"; 
}else{
echo "<script>alert('PENDAFTARAN AHLI GAGAL!'); 
window.location='daftar_g.php'</script>";
}
}
?>

<html>
<fieldset>
    <legend>
        <h2>PENDAFTARAN PENSYARAH</h2>
    </legend>

    <head>
        <style>
            body {
                background-image: linear-gradient(lightblue, floralwhite);
            }
        </style>
    </head>

    <body>

        <form method="POST">
            <label>Nombor NDP</label><br>
            <input type="text" name="ndp" placeholder="23221084" maxlength='8' size="15" onkeypress='return event.charCode >= 48 && event.charCode 
<= 57' required autofocus><br><br>
            <label>Nama Anda</label><br>
            <input type="text" name="nama" id="nama" placeholder="Nama anda" size="50" required><br><br>
            <label>Jantina</label><br>
            <select name="jantina" id="jantina" required>
                <option value="">--Pilih--</option>
                <option value="Lelaki">Lelaki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br><br>

            <button type="submit">Daftar</button>
            <button type="reset">Reset</button><br><br>
            *Pilihan hanya dibenarkan sekali sahaja.
        </form>
        <form action="index.php"> <button type="submit">Home</button><br><br>
</fieldset>
</body>

</html>