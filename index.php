<?php
include "config.php";
include "header.php";
session_start();
if (isset($_POST['idguru'])){
    // $user = $_POST['idguru'];
    // $pass = $_POST['katalaluan'];
    // //arahan sql akan dilaksanakan
    // $query = mysqli_query($amb,"SELECT * FROM jadual WHERE ndp='$ndp' AND katalaluan='$pass'");
}
?>

<html>

<head>
    <style>
        body {
            background-image: linear-gradient(lightblue, floralwhite);
        }

        input {
            margin-top: 200px;
        }
    </style>
</head>

<body>
    <center>
        <table width='80%'>
            <tr>
                <td>
                    <input onclick="location.href='login_p.php'" type="submit" value="PELAJAR">
                </td>
                <td>
                    <input onclick="location.href='login_g.php'" type="submit" value="GURU">
                </td>
            </tr>
            </form>
        </table>
    </center>
</body>

</html>