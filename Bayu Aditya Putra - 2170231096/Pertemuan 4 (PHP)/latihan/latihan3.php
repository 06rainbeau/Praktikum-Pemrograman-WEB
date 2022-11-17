<html>
    <head>
        <title>Konversi Tipe</title>
    </head>
    
    <body style="background-color: #EFF5F5;">
        <?php
        $a = 300.4;
        echo $a;
        echo "<br>";
        echo "tipe Double : ", doubleval($a), "<br>";
        echo "tipe Integer : ", intval($a), "<br>";
        echo "tipe String : ", strval($a);
        ?>
    </body>
</html>