<html lang="en">

<?php
error_reporting(false);
session_start();
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>

<body style="background-color: #EFF5F5;">
    <form method="post">
        Masukan Nama:<br>
        <input type="text" name="nama"><br>
        Masukan Alamat:<br>
        <input type="text" name="alamat"><br>
        Masukan Nomor Telepon:<br>
        <input type="tel" name="telp"><br>
        Masukan Email:<br>
        <input type="email" name="email"><br><br>
        <input type="submit" name="kirim" value="Kirim">
    </form>

<?php
if (isset($_SESSION['tabnama'])){
    $tabnama = $_SESSION['tabnama'];
}
if (isset($_SESSION['tabalamat'])){
    $tabalamat = $_SESSION['tabalamat'];
}
if (isset($_SESSION['tabtlpn'])){
    $tabtlpn = $_SESSION['tabtlpn'];
}
if (isset($_SESSION['tabemail'])){
    $tabemail = $_SESSION['tabemail'];
}

$tabnama[]=$_POST['nama'];
$tabalamat[]=$_POST['alamat'];
$tabtlpn[]=$_POST['telp'];
$tabemail[]=$_POST['email'];

$_SESSION['tabnama']=$tabnama;
$_SESSION['tabalamat']=$tabalamat;
$_SESSION['tabtlpn']=$tabtlpn;
$_SESSION['tabemail']=$tabemail;

?>

<br>
<table>
    <tr>
        <td>No.<td></td>
        <td>Nama<td></td>
        <td>Alamat<td></td>
        <td>No. Tlp<td></td>
        <td>Email<td></td>
    </tr>
    <?php
    if (isset($_SESSION['tabnama'])){
        $tabnama = $_SESSION['tabnama'];
    }
    if (isset($_SESSION['tabalamat'])){
        $tabalamat = $_SESSION['tabalamat'];
    }
    if (isset($_SESSION['tabtlpn'])){
        $tabtlpn = $_SESSION['tabtlpn'];
    }
    if (isset($_SESSION['tabemail'])){
        $tabemail = $_SESSION['tabemail'];
    }

    for ($i=0;$i<count($tabnama); $i++){
        echo "<tr><td>";
        echo 1.+$i."<td><td>".$tabnama[$i]."<td><td>".$tabalamat[$i]."<td><td>".$tabtlpn[$i]."<td><td>".$tabemail[$i]."<td><td>";
    }
    ?>
</table>
</body>
</html>