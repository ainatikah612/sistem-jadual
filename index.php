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
        input{
            width: 200px;
            text-align: center;
            margin-bottom: 40px; 
            margin-top: 180px;
            border-radius: 5px;
            border: 2px solid gray;
            height: 40px;
            transition-duration: 0.3s;
            background-color: rgba(0, 0, 0, 0.0);
        }

        input:hover {
            background-color: lightblue;
        }

        body {
            background-image: linear-gradient(lightblue, floralwhite);
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
                    <input onclick="location.href='login_g.php'" type="submit" value="PENSYARAH">
                </td>
            </tr>
            </form>
        </table>
    </center>
</body>

</html>