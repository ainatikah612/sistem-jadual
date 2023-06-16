<?php include "config.php";
include "header.php";

session_start();

if (isset($_POST['ndp'])) {
    $ndp=$_POST['ndp'];
    $sql="INSERT INTO loginguru (ndp) VALUES ('$ndp')";
    $hasil=mysqli_query($samb, $sql);

    if (mysqli_num_rows($hasil)==0) {
        $_SESSION['ndp']=$ndp;

        if ($hasil) {
            echo "<script>alert('LOGIN BERJAYA');
window.location='table_g.php'</script>"; 

        }

        else {
            echo "<script>alert('LOGIN GAGAL!'); 
window.location='login_g.php'</script>";

        }
    }
}

?>
<html>

<head>
    <center>
        <h2>LOGIN PENSYARAH</h2>
    </center>
    <style>
        body {
            background-image: linear-gradient(lightblue, floralwhite);
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Login Pensyarah</legend>
        <center>
            <form method="POST">
                <legend></legend><label>Nombor NDP Pensyarah</label><br><br><input type="text" name="ndp"
                    placeholder="23221084" maxlength='8' size="15" onkeypress='return event.charCode >= 48 && event.charCode 
<=57' required autofocus><br><br>
                <input type="submit" value="Login"><br><br>Jika belum mendaftar,
                <a href="daftar_g.php">Daftar disini</a>
            </form>
            <form action="index.php"><button type="submit">Home</button><br><br 
        </center> 
        </fieldset> 
    </body> 
</html>