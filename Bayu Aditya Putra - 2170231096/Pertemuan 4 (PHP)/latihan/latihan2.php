<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>

    <body style="background-color: #EFF5F5;">
        <?php
        //Penulisan array dapat dibuat seperti berikut
        $nama[] = "Bayu";
        $nama[] = "Aditya";
        $nama[] = "Putra";
        echo $nama[1].$nama[2].$nama[0];
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>