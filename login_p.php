<?php  
include "config.php"; 
include "header.php"; 
session_start(); 
if (isset($_POST['ndp'])) {
    $ndp = $_POST['ndp']; 
    // $sql = "SELECT * FROM daftar WHERE ndp='$ndp"; 
    $sql = "INSERT INTO loginpelajar (ndp) VALUES ('$ndp')"; 
    $hasil = mysqli_query($samb, $sql); 
    if (mysqli_num_rows($hasil)==0) { 
    $_SESSION['ndp'] = $ndp; 

if ($hasil) {
    echo "<script>alert('LOGIN BERJAYA');
    window.location='table_p.php'</script>"; 
    }else{
    echo "<script>alert('LOGIN GAGAL!'); 
    window.location='login_p.php'</script>";
    }}}
    ?>

<html>

<head>
    <center>
        <h2>LOGIN PELAJAR</h2>
    </center>
    <style>
        body {
            /* background-color: pink; */
            background-image: linear-gradient(lightblue, floralwhite);
        }
    </style>
</head>

<body>
    <fieldset>

        <legend>Login Pelajar</legend>
        <center>
            <form method="POST">
                <legend></legend>
                <label>Nombor NDP Pelajar</label><br><br>
                <input type="text" name="ndp" placeholder="23221084" maxlength='8' size="15" onkeypress='return event.charCode >= 48 && event.charCode 
  <= 57' required autofocus><br><br>
                <input type="submit" value="Login"><br>
                <br>Jika belum mendaftar, <a href="daftar_p.php">Daftar disini</a>
            </form>
            <form action="index.php"><button type="submit">Home</button><br><br </center> </fieldset>  
</body> 
</html>